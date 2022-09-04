<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Comment;
class CityController extends Controller
{
    public static function show($id)
    {
        $city = City::find($id);
        return view('city.show',compact('city'));
    }
}