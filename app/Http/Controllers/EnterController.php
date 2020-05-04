<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EnterRequest;
use App\Http\Requests\PatientRequest;
use App\Models\Enter;
use App\Models\Patient;

class EnterController extends Controller {
    public function submit(EnterRequest $req){
        $enter=new Enter();
        $enter->name=$req->input('name');
        $enter->email=$req->input('email');
        $enter->subject=$req->input('subject');
        $enter->message=$req->input('message');
        $enter->save();

        return redirect()->route('home')->with('success', 'Маълумотлар муваффаққиятли сақланди!');
    }
}

