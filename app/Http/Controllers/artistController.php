<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class artistController extends Controller
{

    public function showArtist($id){
        $artist = DB::select('select * from artists where id = ?', [$id]);
        $posts = DB::select('select * from posts where artistID = ?', [$id]);
        $myid =  ucfirst(Auth()->user()->id);
        $likes = DB::select('select * from likes where userID =?', [$myid] );
        $category = DB::select('select * from category');

        return View('myprofile')->with('artist', $artist[0])
                                 ->with('posts', $posts)
            ->with('likes', $likes)
            ->with('category', $category);
    }

}