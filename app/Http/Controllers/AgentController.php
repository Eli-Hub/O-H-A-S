<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AgentController extends Controller
{

    public function index(){

        return view('layouts.content.agent.index');
    }

    public function create(Request $request)
    {

        $v = Validator::make($request->all(), [
            'agent_name' => 'required|string|max:255',

        ]);
        if ($v->fails()) {
            return response()->json(['status' => 'fail', 'error' => $v->errors()]);
        }

        $agent = new Agent();
        $agent->id = $request->id;
        $agent->agent_name = $request->agent_name;
        $agent->phone = $request->phone;
        $agent->email = $request->email;
        $agent->gender = $request->gender;
        $agent->DOB = $request->DOB;
        $agent->hostel_id = $request->hostel_id;
        $agent->hostel_name = $request->hostel_name;

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('all/app-assets/images/uploads/agents/' . str_replace(' ', '_', strtolower($request->agent_name)) , $filename);
            $agent->picture = $filename;
        }

        if ($agent->save()) {
            return response()->json(['data' => $agent, 'message' => 'Agent records saved successfully.']);
        }
        return response()->json('failed');
    }



    public function update(Request $request, $id)
    {
        $v = Validator::make($request->all(), [
            'picture' => 'required|mimes:jpg,jpeg,svg,png,gif',

        ]);
        if ($v->fails()) {
            return response()->json(['status' => 'fail', 'error' => $v->errors()]);
        }

        $agent = Agent::find($id);
        $agent->id = $request->id;
        $agent->agent_name = $request->agent_name;
        $agent->phone = $request->phone;
        $agent->email = $request->email;
        $agent->gender = $request->gender;
        $agent->DOB = $request->DOB;
        $agent->hostel_id = $request->hostel_id;
        $agent->hostel_name = $request->hostel_name;


        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('all/app-assets/images/uploads/agents/' . str_replace(' ', '_', strtolower($request->agent_name)) , $filename);
            $agent->picture = $filename;
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


    public function agent(Request $request)
    {
        $agent = Agent::find($request->id);
        return response()->json($agent);
    }

}
