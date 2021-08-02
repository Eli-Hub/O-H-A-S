<?php

namespace App\Http\Controllers;

use App\Models\Occupant;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\Payment;
use Carbon\Carbon;
use Paystack;
use Illuminate\Support\Facades\Redirect;





class PaymentController extends Controller
{

    public function index(){
        return view('layouts.content.payment.index');
    }

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function create(Request $request)
    {
        $v = Validator::make($request->all(), [
            'hostel_id' => 'required|string|max:255',
        ]);
        if ($v->fails()) {
            return response()->json(['status' => 'fail', 'error' => $v->errors()]);
        }

        $payment = new Payment();
        $payment->hostel_name = $request->hostel_name;
        $payment->stud_name = $request->stud_name;
        $payment->category = $request->category;
        $payment->duration = $request->duration;
        $payment->amount = $request->amount;
        $payment->pay_mode = $request->pay_mode;

        $start_date = strtotime('+'.$request->duration.' years', strtotime(date('Y-m-d')));
        $due_date = date('Y-m-d', $start_date);

        $payment->due_date = $due_date;

        $payment->save();
        return redirect()->route('cpay');
    }




    public function update(Request $request, $id)
    {
        $v = Validator::make($request->all(), [
            'hostel_id' => 'required|string|max:255',
        ]);
        if ($v->fails()) {
            return response()->json(['status' => 'fail', 'error' => $v->errors()]);
        }

        $payment = Payment::find($id);
        $payment->hostel_name = $request->hostel_name;
        $payment->stud_name = $request->stud_name;
        $payment->category = $request->category;
        $payment->duration = $request->duration;
        $payment->amount = $request->amount;
        $payment->pay_mode = $request->pay_mode;


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
