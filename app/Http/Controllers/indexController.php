<?php
/**
 * Created by PhpStorm.
 * User: shadi
 * Date: 2/12/2020
 * Time: 7:41 PM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;


class indexController extends Controller
{


    public function showAll()
    {
        $posts = DB::select('select * from posts');
        $category =DB::select('select * from category');
        return view('index')->with('posts', $posts)
            ->with('category', $category);
    }
    public function showCategory($id)
    {
        $x=ucfirst(Auth()->user()->id);
        $posts = DB::select('select * from posts where category_id = ?', [$id]);
        $category = DB::select('select * from category where id = ?', [$id]);
        $likes = DB::select('select * from likes where userID= ?', [$x]);
        return View('category')->with('posts', $posts)
            ->with('likes',$likes)
            ->with('category', $category);
    }


}
