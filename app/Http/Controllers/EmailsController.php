<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingMail;
use App\Mail\Subscribed;
use App\Mail\ContactMail;

class EmailsController extends Controller
{
    public function bookingemail(Request $request) {
        // dd($request);
        $validator = Validator::make($request->all(),[
            'vehicle' => 'required',
            'number_of_vehicles' => 'required',
            'pick_up_location' => 'required',
            'drop_off_location' => 'required',
            'pick_up' => 'required',
            'drop_off' => 'required',
            'name' => 'required|min:2|max:25',
            'email' => 'required|email',
            'phone' => 'required|min:8|max:17'    
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()],401);
        } else {
            $data = array(
                'vehicle' => $request->vehicle,
                'number_of_vehicles' => $request->number_of_vehicles,
                'pick_up_location' => $request->pick_up_location,
                'drop_off_location' => $request->drop_off_location,
                'pick_up' => $request->pick_up,
                'drop_off' => $request->drop_off,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone 
            );
            try {
                Mail::to(env('MAIL_FROM_ADDRESS'))->send(new BookingMail($data));
            } catch(\Exception $e){

            }
            return response()->json(['success' => 'Mail sent successfully', 'details' => $data], 200);
        }
    } 
    public function newsletter(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email' 
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()],401);
        } else {
            try {
                Mail::to($request->email)->send(new Subscribed());
            } catch(\Exception $e){

            }
            return response()->json(['success' => 'Newsletter subscription successful'], 200);
        }
    }
    public function contact(Request $request) {
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:2|max:30',
            'email' => 'required|email', 
            'phone' => 'required|min:8|max:17',
            'subject' => 'required|min:2|max:50',
            'message' => 'required|max:255'
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()],401);
        } else {
            $data = array(
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message
            );
            try {
                Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($data));
            } catch(\Exception $e){

            }
            return response()->json(['success' => 'Mail sent successfully'], 200);
        }
    }
}
