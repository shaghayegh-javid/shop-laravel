<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class cartController extends Controller
{

     public function show($id){
        $user = DB::select('select * from users where id = ?',[$id]);
        $carts = DB::select('select * from shopping_cart where userID= ?', [$id]);
        $posts = DB::select('select * from posts');
         $category = DB::select('select * from category');
        return View('cart')->with('user', $user[0])
                                ->with('carts',$carts)
                                ->with('posts',$posts)
            ->with('category', $category);
    }

    public function add_to_cart(){
        $x=ucfirst(Auth()->user()->id);
        $artistID = $_POST['aID'];
        $postID = $_POST['pID'];
        DB::insert("INSERT INTO `shopping_cart` (`userID`,`postID`,`artistID`,`added`) VALUES (".$x.",".$postID.",".$artistID.",'1'); ");
    }
    public function delete_from_cart(){
        $artistID = $_POST['aID'];
        $postID = $_POST['pID'];
        DB::update('DELETE FROM shopping_cart WHERE artistID="'.$artistID.'" and postID="'.$postID.'";');

}
}
