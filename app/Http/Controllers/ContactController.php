<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function index()
  {
    return view('about');
  }

  public function store(Request $request)
  {
    $message = $request->validate([
      'name' => 'required',
      'email' => 'email|required',
      'subject' => 'required',
      'message' => 'required'
    ]);
    $mail = new ContactMail($message);
    Mail::to('support@redmex.tech')->send($mail);
    return back()->with(['status' => 'ok']);
  }
}
