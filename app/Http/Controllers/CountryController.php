<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function __invoke(){
        $countries=Country::all();
        return ['countries'=>$countries->toArray(),];
    }
}
