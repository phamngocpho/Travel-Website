<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Location;
use App\Models\PriceList;
use App\Models\PriceDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class TourController extends Controller
{
    public function create()
    {
        $locations = Location::all();
        
        if (request()->ajax()) {
            return view('admin.create', compact('locations'))->render();
        }
        
        return view('admin.create', compact('locations'));
    }

    public function getFormData()
    {
        try {
            $locations = Location::all();
            return response()->json([
                'success' => true,
                'formData' => [
                    'locations' => $locations,
                    // Thêm data khác nếu cần
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function tempStore(Request $request)
    {
        try {
            // Validate dữ liệu tạm thời
            $validated = $request->validate([
                'tour_name' => 'nullable|string',
                'duration' => 'nullable|integer',
                'price' => 'nullable|numeric',
                'group_size' => 'nullable|integer',
                'tour_type' => 'nullable|string',
                'difficulty' => 'nullable|string',
                'inclusions' => 'nullable|array',
                'start_location' => 'nullable|string',
                'destinations' => 'nullable|string',
            ]);

            // Lưu vào session
            session(['temp_tour_data' => $validated]);

            return response()->json([
                'success' => true,
                'message' => 'Data temporarily stored'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 422);
        }
    }

    public function validateStep(Request $request, $step)
    {
        try {
            $rules = $this->getValidationRules($step);
            $validated = $request->validate($rules);

            return response()->json([
                'success' => true,
                'message' => 'Step validation successful'
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
        }
    }

    private function getValidationRules($step)
    {
        switch ($step) {
            case 1:
                return [
                    'tour_name' => 'required|string',
                    'duration' => 'required|integer',
                    'price' => 'required|numeric',
                    'group_size' => 'required|integer',
                    'tour_type' => 'required|string',
                    'difficulty' => 'required|string',
                ];
            case 2:
                return [
                    'start_location' => 'required|string',
                    'destinations' => 'required|string',
                ];
            case 3:
                return [
                    'itinerary' => 'required|array',
                    'itinerary.*.title' => 'required|string',
                    'itinerary.*.activities' => 'required|string',
                ];
            default:
                return [];
        }
    }

    public function store(Request $request) 
    {
        try {
            $validated = $request->validate([
                'tour_name' => 'required|string',
                'duration_days' => 'required|integer',
                'max_participants' => 'required|integer',
                'category' => 'required|string',
                'include_hotel' => 'required|boolean',
                'include_meal' => 'required|boolean',
                'highlight_places' => 'required|string',
                'is_active' => 'required|boolean',
                'location_id' => 'required|exists:locations,location_id',
                'transportation' => 'nullable|string',
            ]);

            DB::beginTransaction();
            
            $tour = Tour::create($validated);
            
            $priceList = PriceList::create([
                'tour_id' => $tour->tour_id,
                'price_list_name' => 'Default Price List',
                'valid_from' => now(),
                'valid_to' => now()->addYear(),
                'is_default' => true
            ]);

            DB::commit();

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Tour created successfully',
                    'data' => $tour,
                    'redirect_url' => route('tours.create'),
                ]);
            }

            return redirect()->route('tours.create')
                           ->with('success', 'Tour created successfully');

        } catch (ValidationException $e) {
            DB::rollBack();
            
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $e->errors()
                ], 422);
            }
            
            return back()->withErrors($e->errors())
                        ->withInput();

        } catch (\Exception $e) {
            DB::rollBack();
            
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => $e->getMessage()
                ], 500);
            }
            
            return back()->with('error', $e->getMessage())
                        ->withInput();
        }
    }

    public function finalStore(Request $request)
    {
        DB::beginTransaction();
        try {
            // Lưu tour
            $tour = Tour::create($request->tour);
            
            // Lưu location nếu cần
            if ($request->has('location')) {
                $location = Location::create($request->location);
                $tour->location()->associate($location);
                $tour->save();
            }
            
            // Lưu price list
            $priceList = PriceList::create([
                'tour_id' => $tour->tour_id,
                'price_list_name' => 'Default Price List',
                'is_default' => true
            ]);
            
            // Lưu price details
            if ($request->has('prices')) {
                foreach($request->prices as $price) {
                    PriceDetail::create([
                        'price_list_id' => $priceList->price_list_id,
                        'customer_type' => $price['type'],
                        'price' => $price['amount']
                    ]);
                }
            }
            
            DB::commit();

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'redirect_url' => route('tours.create'),
                    'message' => 'Tour created successfully'
                ]);
            }

            return redirect()->route('tours.create')
                           ->with('success', 'Tour created successfully');

        } catch (\Exception $e) {
            DB::rollback();

            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => $e->getMessage()
                ], 500);
            }
            
            return back()->with('error', $e->getMessage())
                        ->withInput();
        }
    }
}
