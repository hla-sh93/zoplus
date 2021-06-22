<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Category;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Support\Str;


class HomepageController extends Controller
{
    public function index(){

        $categories=Category::all();
        $apps=Application::all();
        $about=About::find('1')->get();
        return view('index',['categories'=>$categories, 'apps' => $apps,'about' => $about]);
    }


    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
            ]);

        $contact =new Contact;

        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->title=$request->subject;
        $contact->message=$request->message;

        $contact->save();
        return back()->with('success','تم ارسال الرسالة بنجاح .. شكراً لتواصلك معنا');
        

    }
}
