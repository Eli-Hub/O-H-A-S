<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use App\Models\Agent;
use App\Models\AgentMessage;
use App\Models\Hostel;
use Carbon\Carbon;

use App\Models\Payment;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('layouts.content.dashboard.index');
    }

    public function editagents()
    {
        return view('admin.editagents');
    }


    public function edithostels()
    {
        return view('admin.edithostels');
    }

    public function addhostel()
    {
        return view('admin.addhostel');
    }

    public function addagent()
    {
        return view('admin.addagents');
    }

    public function hostellist()
    {
        $lists = Hostel::all();
        return view('admin.hostellist', compact('lists'));
    }

    public function agentlist()
    {
        $agents = Agent::all();
        return view('admin.agentlist', compact('agents'));
    }


    public function adminprofile()
    {
        return view('admin.profile');
    }

    public function payments()
    {
        $payments = Payment::all();
        return view('admin.payments', compact('payments'));
    }

    public function moreinfo()
    {
        return view('admin.moreinfo');
    }

    public function occupants()
    {
        $occupants = Payment::all();
        return view('admin.occupants', compact('occupants'));
    }

    public function subscribe()
    {
        $subs = Contact::all();
        $messages = AgentMessage::all();
        return view('layouts.content.contact.index', compact('subs','messages'));

    }

    public function calender()
    {
        return view('layouts.content.calender.calender');
    }

    public function adminIndex()
    {
        $payments=Payment::all();
        return view('admin.index', compact('payments'));
    }



    public function agentIndex()
    {
        return view('admin.agent');
    }


    public function infoModal()
    {
        return view('admin.infoModal');
    }

    public function editModal()
    {
        return view('admin.editModal');
    }



}
