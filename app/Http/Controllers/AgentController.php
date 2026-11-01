<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Hostel;
use Illuminate\Support\Facades\Validator;
use App\Services\PrivateImageStorage;

use Illuminate\Http\Request;

class AgentController extends Controller
{

    public function index(){

        return view('layouts.content.agent.index');
    }

    public function create(Request $request, PrivateImageStorage $images)
    {

        $v = Validator::make($request->all(), [
            'agent_name' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:5120',
        ]);
        if ($v->fails()) {
            return response()->json(['status' => 'fail', 'error' => $v->errors()]);
        }

        $agent = new Agent();
        $agent->agent_name = $request->agent_name;
        $agent->phone = $request->phone;
        $agent->email = $request->email;
        $agent->gender = $request->gender;
        $agent->DOB = $request->DOB;
        $agent->hostel_name = $request->hostel_name;

        if ($request->hasFile('picture')) {
            $agent->picture = $images->store($request->file('picture'), 'agents');
        }

        if ($agent->save()) {
            return response()->json(['data' => $agent, 'message' => 'Agent records saved successfully.']);
        }
        return response()->json('failed');
    }



    public function update(Request $request, PrivateImageStorage $images)
    {
        $agent = Agent::find($request->id);
        $agent->agent_name = $request->agent_name;
        $agent->phone = $request->phone;
        $agent->email = $request->email;
        $agent->gender = $request->gender;
        $agent->DOB = $request->DOB;
        $agent->hostel_name = $request->hostel_name;


        if ($request->hasFile('picture')) {
            $v = Validator::make($request->all(), [
                'picture' => 'image|mimes:jpg,jpeg,png,gif,webp|max:5120',
            ]);
            if ($v->fails()) {
                return response()->json(['status' => 'fail', 'error' => $v->errors()]);
            }
            $agent->picture = $images->store($request->file('picture'), 'agents');

        }

        if ($agent->save()) {
            return response()->json(['data' => $agent, 'message' => 'Changes saved successfully.']);
        }
        return response()->json('failed');
    }


    public function destroy($id)
    {
        $agent = Agent::find($id);

        if ($agent->delete()) {
            return response()->json(['data' => $agent, 'message' => 'Agent Records deleted successfully.']);
        }
        return response()->json('failed');
    }





    public function agents()
    {
        $agent = Agent::orderBy('id', 'DESC')->get();
        return response()->json(['data' => $agent]);
    }

    public function all_agents()
    {
       return response()->json(Agent::orderBy('id', 'DESC')->get());
    }

    public function agent(Request $request)
    {
        $agent = Agent::find($request->id);
        return response()->json($agent);
    }

}
