<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public static function categorylist()
    {
        return Category::where('parent_id','->',0)->with('children')->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Hotel::select('title','image','star')->get();
        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
            'page'=>'home'
        ];
        return view('home.index',$data);
    }

    public function login()
    {
        return view('admin.login');
    }
    public function signin()
    {
        return view('home.login');
    }
    public function sendmessage(Request $request)
    {
        $data = new Message();

        $data->name =  $request->input('name');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');

        $data->save();
        return redirect()->route('home_contact')->with('success','You have been send your message successfuly!');
    }
    public function aboutus()
    {
        $setting=Setting::first();
        return view('home.aboutus',['setting'=>$setting]);
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function faq()
    {
        return view('home.faq');
    }
    public function references()
    {
        $setting=Setting::first();
        return view('home.references',['setting'=>$setting]);
    }

    public function logincheck(Request $request)
    {

        echo "Login Check";
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',

            ]);
        }
        else
        {
            return view('admin.login');

        }

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }




}
