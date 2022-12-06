<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    public function __invoke($country_id){
        $states=State::where("country_id",$country_id);
        dd($states);
        if($states->count()){
            return ['states'=>$states->toArray(),];
        }else{
            return ['states'=>''];
        }
    }
}
