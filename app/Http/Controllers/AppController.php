<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Category;
use App\Models\About;

class AppController extends Controller
{

    public function index($id){

        $app=Application::where('id',$id)->get();
        $about=About::find('1')->get();
        return view('details',['app' => $app,'about' => $about]);
    }
}
