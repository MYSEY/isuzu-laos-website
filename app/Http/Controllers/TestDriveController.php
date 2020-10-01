<?php

namespace App\Http\Controllers;

use App\Mail\TestDriveMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class TestDriveController extends Controller
{
    public function submitTestDriveEmail(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required',
            'tel'=> 'required',
            'email' => 'required|email',
            'dcheckbox1'=>'required',
            'dradio' => 'required'
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['surname'] = $request->surname;
        $data['tel'] = $request->tel;
        $data['email'] = $request->email;
        $data['dcheckbox1'] = $request->dcheckbox1;
        $data['dradio'] = $request->dradio;

        Mail::to(['dalangly@gmail.com', 'leaphea@oxygenkh.com'])->send(new TestDriveMail($data));

        Alert::success('Sent!', "We appreciate you contacting Isuzu Laos. One of our colleagues will get back in touch with you soon! Have a great day!");
        return back();
    }
}
