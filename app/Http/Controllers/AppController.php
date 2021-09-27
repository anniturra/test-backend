<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Province;
use App\Models\Commune;
use App\Models\Street;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegion()
    {
        $region = Region::all();
        if(sizeof($region) <= 0){
            return response([], 404);
        }
        return response($region, 200);
    }

    public function getProvince($id){
        $province = Province::where('id_region', $id)->get();
        if(sizeof($province) <= 0){
            return response([], 404);
        }
        return response($province, 200);
    }

    public function getCommune($id)
    {
        $commune = Commune::where('id_province', $id)->get();
        if(sizeof($commune) <= 0){
            return response([], 404);
        }
        return response($commune, 200);
    }

    public function getStreet($id)
    {
        $street = Street::where('id_commune', $id)->get();
        if(sizeof($street) <= 0){
            return response([], 404);
        }
        return response($street, 200);
    }

}
