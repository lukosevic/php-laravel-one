<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function profile(){
        $user = [
        'Lukas',
        'lukas2003ss@gmail.com',
        'Pienburnis'
        ];
        return view('profile',compact('user'));
    }
    public function index(){
        return view('welcome');
    }
}
