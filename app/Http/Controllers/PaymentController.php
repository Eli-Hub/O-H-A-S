<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\Payment;
use Carbon\Carbon;


class PaymentController extends Controller
{

    public function index(){
        return view('layouts.content.payment.index');
    }



    public function create(Request $request)
    {

        $v = Validator::make($request->all(), [
            'hostel_name' => 'required|string|max:255',
        ]);
        if ($v->fails()) {
            return response()->json(['status' => 'fail', 'error' => $v->errors()]);
        }

        $payment = new Payment();
        $payment->stud_id = $request->stud_id;
        $payment->hostel_name = $request->hostel_name;
        $payment->category = $request->category;
        $payment->duration = $request->duration;
        $payment->amount = $request->amount;
        $payment->pay_mode = $request->pay_mode;


        $payment->save();
        return redirect()->route('cpay');
    }




    public function update(Request $request, $id)
    {

        $v = Validator::make($request->all(), [
            'hostel_name' => 'required|string|max:255',
        ]);
        if ($v->fails()) {
            return response()->json(['status' => 'fail', 'error' => $v->errors()]);
        }

        $payment = Payment::find($id);
        $payment->stud_id = $request-> stud_id;
        $payment-> hostel_name = $request-> hostel_name;
        $payment-> category = $request-> category;
        $payment-> duration = $request-> duration;
        $payment-> amount = $request-> amount;
        $payment-> pay_mode = $request-> pay_mode;

        $payment->update();
        return redirect()->route('payments');
    }



    public function payment(Request $request)
    {
        $payment = Payment::find($request->id);
        return response()->json($payment);
    }

    public function payments()
    {
        $payments = Payment::orderBy('id', 'DESC')->get();
        return response()->json(['data' => $payments]);
    }




    public function destroy($id)
    {
        $payment = Payment::find($id);
        if ($payment->delete()) {
            return response()->json(['message' => 'Category records deleted successfully.']);
        }

        return response()->json('failed');
    }




    // public function delete(Request $request)
    // {
    //     $payment = Payment::find($request->delete_id);
    //     $payment->delete();
    //     return redirect()->back();
    // }
}
