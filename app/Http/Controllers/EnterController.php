<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EnterRequest;

class EnterController extends Controller {
    public function submit(EnterRequest $req){
       /* $validation=$req->validate([
            'name'=> 'required|min:3|max:25',
            'email'=> 'required|min:3|max:25|email',
            'subject'=> 'required|min:3|max:25',
            'message'=> 'required|min:3'
        ]);*/
    }
}
