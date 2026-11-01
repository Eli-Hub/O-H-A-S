<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hostel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Services\PrivateImageStorage;

class HostelController extends Controller
{


    public function index()
    {
        return view('layouts.content.hostel.index');
    }



    public function create(Request $request, PrivateImageStorage $images)
    {
        $v = Validator::make($request->all(), [
            'hostel_name' => 'required|string|max:255',
            'picture' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:5120',
        ]);
        if ($v->fails()) {
            return response()->json(['status' => 'fail', 'error' => $v->errors()]);
        }

        $hostel = new Hostel();
        $hostel->hostel_name = $request->hostel_name;
        $hostel->hostel_type = $request->hostel_type;
        $hostel->location = $request->location;
        $hostel->agent = $request->agent;
        $hostel->category_id = $request->category_id;
        $hostel->water = $request->water;
        $hostel->washroom = $request->washroom;
        $hostel->kitchen = $request->kitchen;
        $hostel->no_of_rooms = $request->no_of_rooms;
        $hostel->capacity = $request->capacity;
        $hostel->distance = $request->distance;
        $hostel->status = $request->status;


        if ($request->hasFile('picture')) {
            $hostel->picture = $images->store($request->file('picture'), 'hostels');
        }

        if ($hostel->save()) {
            return response()->json(['data' => $hostel, 'msgs' => 'Hostel records saved successfully.'], 201);
        }
        return response()->json('failed');
    }


    public function update(Request $request, PrivateImageStorage $images)
    {
        $v = Validator::make($request->all(), [
            'hostel_name' => 'required|string|max:255',
        ]);
        if ($v->fails()) {
            return response()->json(['status' => 'fail', 'error' => $v->errors()]);
        }

        $hostel = Hostel::find($request->id);
        $hostel->hostel_name = $request->hostel_name;
        $hostel->hostel_type = $request->hostel_type;
        $hostel->location = $request->location;
        $hostel->agent = $request->agent;
        $hostel->category_id = $request->category_id;
        $hostel->water = $request->water;
        $hostel->washroom = $request->washroom;
        $hostel->kitchen = $request->kitchen;
        $hostel->no_of_rooms = $request->no_of_rooms;
        $hostel->capacity = $request->capacity;
        $hostel->distance = $request->distance;
        $hostel->status = $request->status;


        if ($request->hasFile('picture')) {
            $v = Validator::make($request->all(), [
                'picture' => 'image|mimes:jpg,jpeg,png,gif,webp|max:5120',
            ]);
            if ($v->fails()) {
                return response()->json(['status' => 'fail', 'error' => $v->errors()]);
            }
            $hostel->picture = $images->store($request->file('picture'), 'hostels');
        }

        if ($hostel->save()) {
            return response()->json(['data' => $hostel, 'message' => 'Hostel records updated successfully.']);
        }
        return response()->json('failed');

    }


    public function delete($id)
    {
        $hostel = Hostel::find($id);
        $hostel->delete();
        return redirect()->back();
    }


    public function hostels()
    {
        $hostel = Hostel::orderBy('id', 'DESC')->get();
        return response()->json(['data' => $hostel]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function hostel(Request $request)
    {
        $hostel = Hostel::find($request->id);
        return response()->json($hostel);
    }

    public function categories()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return response()->json($categories);
    }

    public function destroy($id)
    {
        $category = Hostel::find($id);
        if ($category->delete()) {
            return response()->json(['message' => 'Hostel records deleted successfully.']);
        }

        return response()->json('failed');
    }




}
