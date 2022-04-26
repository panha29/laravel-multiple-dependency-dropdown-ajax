<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{


    public function create()
    {
        // $regions = Region::all();
        // return view('places.add_region', compact('regions'));

        $data['region'] = DB::table('regions')->get();
        return view('places.add_region', $data);
    }

    // select region and show all countries of it

    public function getCountries($id)
    {


        // $rid = $request->post('rid');
        // $countries= DB::table('countries')->where('region_id', $rid)->get();
        // dd($countries);

        $countries= DB::table('countries')->where('region_id', $id)->get();
        // dd($countries);
        return response()->json($countries);



       // $html='<option value="">Select Country</option>';

        // foreach($countries as $country) {

        //     $html.='<option value="'.$country->id.'">'.$country->country_name.'</option>';
        // }

        // if($request->ajax()) {
        //     $region_id = $request->post('region_id');
        //     $countries = Country::where('region_id',$region_id)->get();
        //     return response()->json($countries);
        // }
        // $countries = Country::where('region_id',$region_id)->get();
        //     return response()->json($countries);


        // $output = '';
        // $rid = $request->post('rid');
        // $countries = Country::where('region_id', $rid)->latest()->get();


        //     foreach($countries as $country)
        //     {
        //         $output .= '<option value="'.$country->id.'">'.$country->country_name.'</option>';
        //     }

        //     return response()->json($countries);


    }

    // public function getCities()
    // {
    //     $cities = City::all();
    //     return response()->json($cities);
    // }


    // GET City

    public function getCities($id)
    {
        $cities = DB::table('cities')->where('country_id', $id)->get();
        return response()->json($cities);
    }
}
