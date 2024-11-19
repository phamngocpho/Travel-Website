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
        
        // Kiểm tra nếu là AJAX request
        if (request()->ajax()) {
            // Trả về chỉ phần view content
            return view('admin.create', compact('locations'))->render();
        }
        
        // Nếu không phải AJAX, trả về view đầy đủ với layout
        return view('admin.create', compact('locations'));
    }
    public function userMNG(){
        if (request()->ajax()) {
            // Trả về chỉ phần view content
            return view('admin.userManagement', compact('locations'))->render();
        }
        // Nếu không phải AJAX, trả về view đầy đủ với layout
        return view('admin.create', compact('locations'));
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
            
            // Tạo price list
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
                    // Thêm URL để redirect sau khi tạo thành công
                    'redirect_url' => route('tours.create'),
                ]);
            }

            // Nếu không phải AJAX request
            return redirect()->route('tours.create')
                           ->with('success', value: 'Tour created successfully');

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

    // Thêm method để lấy partial view cho AJAX
    public function getPartialView($viewName, $data = [])
    {
        if (request()->ajax()) {
            return view("admin.partials.{$viewName}", $data)->render();
        }
        
        abort(404);
    }

    public function finalStore(Request $request)
    {
        DB::beginTransaction();
        try {
            // Lưu tour
            $tour = Tour::create($request->tour);
            
            // Lưu location
            $location = Location::create($request->location);
            $tour->location()->associate($location);
            $tour->save();
            
            // Lưu price list
            $priceList = PriceList::create([
                'tour_id' => $tour->tour_id,
                'price_list_name' => 'Default Price List',
                'is_default' => true
            ]);
            
            // Lưu price details
            foreach($request->prices as $price) {
                PriceDetail::create([
                    'price_list_id' => $priceList->price_list_id,
                    'customer_type' => $price['type'],
                    'price' => $price['amount']
                ]);
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
