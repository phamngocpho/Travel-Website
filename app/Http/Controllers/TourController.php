<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourImage;
use App\Models\TourSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class TourController extends Controller
{
    public function store(Request $request){

           
            try{
                $validated = $request->validate([
                    'tour_name' => 'required|max:200',
                    'category' => 'required',
                    'description' => 'nullable',
                    'duration_days' => 'required|integer|min:1',
                    'max_participants' => 'nullable|integer|min:1',
                    'transportation' => 'nullable|max:100',
                    'highlight_places' => 'nullable',
                    'include_hotel' => 'required|boolean',
                    'include_meal' => 'required|boolean',
                    'is_active' => 'required|boolean'
                ]);
                DB::beginTransaction();
                $tour = Tour::create([
                    'tour_name' => $request->tour_name,
                    'category' => $request->category,
                    'description' => $request->description,
                    'duration_days' => $request->duration_days,
                    'max_participants' => $request->max_participants,
                    'transportation' => $request->transportation,
                    'include_hotel' => $request->include_hotel,
                    'include_meal' => $request->include_meal,
                    'highlight_places' => $request->highlight_places,
                    'is_active' => $request->is_active
                ]);
                DB::commit();
    
                return redirect()->back()->with('success', 'Tour đã được tạo thành công!');
            } catch (\Exception $e) {
                DB::rollBack();
                return back()->with('error', 'Có lỗi xảy ra khi tạo tour: ' . $e->getMessage())->withInput();
            }
            
    }
    public function showAdmin(){
        return view('admin.addTour');
    }
    

}
