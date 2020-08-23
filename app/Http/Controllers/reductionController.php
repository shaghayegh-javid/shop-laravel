<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class reductionController extends Controller
{

    public function show()
    {

        return view('reduction');

    }

     public function showAll(Request $request)
    {

        $artist = DB::select('select * from artists');
        $posts = DB::select('select * from posts');
        $myid =  ucfirst(Auth()->user()->id);
        $likes = DB::select('select * from likes where userID =?', [$myid] );
        $category = DB::select('select * from category');

    $action = null;
    if ($request->has('action')) {
        $action = $request->input('action');
    }
    if ($action != null) {
       if($action=='all'){
          $posts = DB::table('posts')->paginate(9);
          return view('reduction')->with('artist', $artist[0])
                                 ->with('posts', $posts)
                                 ->with('likes', $likes)
           ->with('category', $category);
       } elseif($action=='discount') {
         $posts = DB::table('posts')->Select('*')->where('discount',1)->orderBy('discountPercent', 'DESC')->paginate(9);
          return view('reduction')->with('artist', $artist[0])
                                 ->with('posts', $posts)
                                 ->with('likes', $likes)
              ->with('category', $category);
       } elseif($action=='cheap') {
          $posts = DB::table('posts')->Select('*')->orderBy('price', 'ASC')->paginate(9);
          return view('reduction')->with('artist', $artist[0])
                                 ->with('posts', $posts)
                                 ->with('likes', $likes)
              ->with('category', $category);
       } elseif($action=='expensive') {
          $posts = DB::table('posts')->Select('*')->orderBy('price', 'DESC')->paginate(9);
          return view('reduction')->with('artist', $artist[0])
                                 ->with('posts', $posts)
                                 ->with('likes', $likes)
              ->with('category', $category);
       }
    } else {
       $posts = DB::table('posts')->paginate(9);
       return view('reduction')->with('artist', $artist[0])
                                 ->with('posts', $posts)
                                 ->with('likes', $likes)
           ->with('category', $category);
    }
    }

}
