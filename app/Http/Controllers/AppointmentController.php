<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function submitAppointmentForm(Request $request){
        // $validator = Validator::make(
        //     [
        //         'name' => $request->post('name'),
        //         'email' => $request->post('email'),
        //         'subject' => $request->post('subject'),
        //         'message' => $request->post('message'),
        //     ],
        //     [
        //         'name' => 'required|max:255',
        //         'email' => 'required|max:255|email',
        //         'subject' => 'required|max:255',
        //         'message' => 'max:500',
        //     ]
        // );

        // if ($validator->fails()) {
        //     return redirect('contact')->withErrors($validator)->withInput();
        // }
        // p('success form submit');

        $appointment = new Appointment();

        $appointment->name = $request->post('name');
        $appointment->phone = $request->post('phone');
        $appointment->email = $request->post('email');
        $appointment->subject = $request->post('subject');
        $appointment->date = $request->post('date');
        $appointment->time = $request->post('time');
        $appointment->message = $request->post('message');

        $appointment->save();
        return redirect()->back()->withSuccess("Submit Successfully");
    }
}
