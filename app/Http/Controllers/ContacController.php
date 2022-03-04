<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;


class ContacController extends Controller
{
    public function index()
    {
       return view('email.FormContac');
    }
    public function store(Request $request)
    {
        $request->validate([
            'usercontac' => 'required',
            'emailcontac' => 'required|email',
            'descriptioncontac' => 'required',

        ]);
        $correo = new ContactMailable($request->all());
        Mail::to('jeffersonirigoyen@gmail.com')->send($correo);
        notify()->success('Registrado');
        return redirect()->back();
    }
}
