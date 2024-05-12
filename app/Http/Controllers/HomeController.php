<?php

namespace App\Http\Controllers;

use App\Charts\EmployeeChart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(EmployeeChart $chart){
        $pageTitle = 'Home';
        return view('home',['pageTitle' => $pageTitle, 'chart' => $chart->build()]);
    }
}
