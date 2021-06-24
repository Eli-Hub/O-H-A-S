<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PagesController extends Controller
{


    public function index()
    {
        return view('user.home');
    }

    public function about()
    {
        return view('user.about');
    }

    public function agentgrid()
    {
        return view('user.agentgrid');
    }

    public function agentsingle()
    {
        return view('user.agentsingle');
    }

    public function makepay()
    {
        return view('user.pay');
    }

    public function paymentinfo()
    {
        return view('user.payinfo');
    }


    public function contact()
    {
        return view('user.contact');
    }

    public function property()
    {
        return view('user.property');
    }

    public function singleproperty()
    {
        return view('user.singleproperty');
    }

    public function completepay()
    {
        return view('user.cpayment');
    }



    public function categories()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return response()->json($categories);
    }

    public function category(Request $request)
    {
        $categories = Category::find($request->id);
        return response()->json($categories);
    }



}
