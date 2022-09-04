<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PromjeniTemu extends Controller
{
    function direktno($id){
        if(!Auth::user() || Auth::user()->type==1)
            return view('homepage');
        else{
            DB::insert('insert into theme (active) values (?)', [$id]);
            return view('admin'); 
        }
    }
}