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

            return response()->json([
                'success' => true,
                'message' => 'Tour created successfully',
                'data' => $tour
            ]);

        } catch (ValidationException $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
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
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
