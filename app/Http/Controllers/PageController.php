<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return '2241720148 <br>Irshandy Aditya Wicaksana';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID '.$id;
    }
}
