<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'body'=>'required',
        ]);
        $input['user_id'] = auth()->user()->id;
        Comment::create($input);
        return back();
    }

    public function delete($id){
        if(!Auth::user() || Auth::user()->type==1)
            return view('homepage');
        else{
            $comment=DB::table('comments')
                ->where('parent_id',$id)
                ->first();
            if($comment){
                $all=DB::table('comments')
                    ->where('parent_id',$id)
                    ->get();
                foreach($all as $one){
                    CommentController::delete($one->id);
                }
            }
            $comment=DB::table('comments')
            ->where('id',$id)
            ->delete();
            
            return back(); 
        }
    }
}
