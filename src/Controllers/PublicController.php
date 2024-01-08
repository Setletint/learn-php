<?php
namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController {
    public function index(){
        $posts = Post::all();
        view('index', compact('posts'));
        //view('index', ['name'=>$name]);
    }

    public function about(){
        view('about');
    }

    public function form(){
        view('form');
    }

    public function answer(){
        var_dump($_GET);
        var_dump($_POST);
        //var_dump($_REQUEST); NOT USED!!!
    }
    public function getAnswer(){
        echo "get request";
    }
}