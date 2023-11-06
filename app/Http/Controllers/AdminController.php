<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   
    public function AdminHome(){
        $currentHour = date('G');
        $greeting = '';

        if ($currentHour >= 3 && $currentHour < 10) {
            $greeting = 'Selamat Pagi';
        } elseif ($currentHour >= 10 && $currentHour < 15) {
            $greeting = 'Selamat Siang';
        } elseif ($currentHour >= 15 && $currentHour < 18) {
            $greeting = 'Selamat Sore';
        } else {
            $greeting = 'Selamat Malam';
        }
        return view('index',['greeting'=>$greeting]);
    }
    // public function AdminDashboard(){
    //     return view('admin.admin_dashboard');
    // }
    public function CobaTable(){
        return view('admin.coba_table');
    }
}
