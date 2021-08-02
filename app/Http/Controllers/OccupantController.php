<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Occupant;

class OccupantController extends Controller
{
     public function index(){
        return view('layouts.content.occupant.index');
    }

    public function create(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name_stud' => 'required|string|max:255',
        ]);
        if ($v->fails()) {
            return response()->json(['status' => 'fail', 'error' => $v->errors()]);
        }


        $occupant = new Occupant();
        $occupant->name_stud = $request->name_stud;
        $occupant->phone_stud = $request->phone_stud;
        $occupant->email_stud = $request->email_stud;
        $occupant->dob = $request->dob;
        $occupant->country = $request->country;
        $occupant->region = $request->region;
        $occupant->residence = $request->residence;
        $occupant->sch_name = $request->sch_name;
        $occupant->index = $request->index;
        $occupant->room_no = $request->room_no;
        $occupant->guardian = $request->guardian;
        $occupant->guard_phone = $request->guard_phone;

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('all/app-assets/images/uploads/occupants/' . str_replace(' ', '_', strtolower($request->name_stud)) , $filename);
            $occupant->picture = $filename;
        }
        $occupant->save();
        return redirect()->route('infopay');
    }


    public function update(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name_stud' => 'required|string|max:255',
        ]);
        if ($v->fails()) {
            return response()->json(['status' => 'fail', 'error' => $v->errors()]);
        }
        $occupant = Occupant::find($request->id);
        $occupant->name_stud = $request->name_stud;
        $occupant->phone_stud = $request->phone_stud;
        $occupant->email_stud = $request->email_stud;
        $occupant->dob = $request->dob;
        $occupant->country = $request->country;
        $occupant->region = $request->region;
        $occupant->residence = $request->residence;
        $occupant->sch_name = $request->sch_name;
        $occupant->index = $request->index;
        $occupant->room_no = $request->room_no;
        $occupant->guardian = $request->guardian;
        $occupant->guard_phone = $request->guard_phone;


        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('all/app-assets/images/uploads/occupants/' . str_replace(' ', '_', strtolower($request->name_stud)) , $filename);
            $occupant->picture = $filename;
        }

        $occupant->update();
        return redirect()->route('occupant');
    }




    public function occupant(Request $request)
    {
        $occupant = Occupant::find($request->id);
        return response()->json($occupant);
    }



    public function occupants()
    {
        $occupant = Occupant::orderBy('id', 'DESC')->with('hostel')->get();
        return response()->json(['data' => $occupant]);
    }




    public function destroy($id)
    {
        $occupant= Occupant::find($id);
        if ($occupant->delete()) {
            return response()->json(['message' => 'Occupant records deleted successfully.']);
        }

        return response()->json('failed');
    }


}
