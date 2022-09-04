<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PromjeniOvlasti extends Controller
{
    function direktno($id){
        if(!Auth::user() || Auth::user()->type==1)
            return view('homepage');
        else{
            $user=DB::table('users')
            ->where('id',$id)
            ->first();
        if($user->type==1){
            DB::table('users')
            ->where('id', $id)
            ->update(['type'=>2]);
        }
        if($user->type==2){
            DB::table('users')
            ->where('id', $id)
            ->update(['type'=>1]);
        }
        return view('admin'); 
        }
    }
}