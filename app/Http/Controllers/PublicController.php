<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function servizi()
    {
        return view('servizi');
    }

    public function contattaci()
    {
        return view('contattaci');
    }

    public function thankyou()
    {
        return view('thankyou');
    }

    public function sendmail(Request $request)
    {

        $mail = $request->input('mail');
        $username = $request->input('username');
        $comment = $request->input('comment');

        Mail::to($mail)->send(new AdminMail($mail, $username, $comment));

        return redirect()->route('thankyou');
    }
}
