<?php
// Jevgeni Moskaljuk
// TA-21V

namespace App\Controllers;

use App\Exceptions\NotFoundException;
use App\Models\User;

class UsersController
{
    public function index()
    {
        $users = User::all();
        view('users/index', compact('users'));
    }
    public function create(){
        view('users/create');
    }
    public function store(){
        $user = new User();
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->save();
        header('Location: /admin/users');
    }
    public function show(){
        $user = User::find($_GET['id']);
        if($user){
            view('users/show', compact('user'));
        } else {
            throw new NotFoundException();
        }
    }
    public function edit(){
        $user = User::find($_GET['id']);
        if($user){
            view('users/edit', compact('user'));
        } else {
            throw new NotFoundException();
        }
    }
    public function update(){
        $user = User::find($_GET['id']);
        if($user){
            $user->email = $_POST['email'];
            $user->password = $_POST['password'];
            $user->save();
            header('Location: /admin/users');
        } else {
            throw new NotFoundException();
        }
    }
    public function destroy(){
        $user = User::find($_GET['id']);
        if($user){
            $user->delete();
            header('Location: /admin/users');
        } else {
            throw new NotFoundException();
        }
    }
}