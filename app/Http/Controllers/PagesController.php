<?php

namespace App\Http\Controllers;

use App\Post;
use Mail;
use Session;

class PagesController extends Controller {

  public function getIndex(){
    $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
    return view('pages.welcome')->withPosts($posts);
  }

  public function getAbout(){
    $first = 'Maria';
    $last = 'Lobillo';
    $full = $first . ' ' . $last;
    $email = 'maria.lobillo.santos@gmail.com';
    $data = [];
    $data['email'] = $email;
    $data['fullname'] = $full;
    return view('pages.about')->withData($data);
  }

  public function getContact(){
    return view('pages.contact');
  }

  public function postContact(Request $request){
    $this->validate($request, ['email' =>
        'required|email',
        'subject' => 'min:10',
        'message' => 'min:3',
      ]);

    $data = array(
      'email' => $request->email,
      'subject' => $request->subject,
      'bodyMessage' => $request->message
    );

    Mail::send('emails.contact', $data, function($message) use ($data){
      $message->from($data['email']);
      $message->to('maria.lobillo.santos@gmail.com');
      $message->subject($data['subject']);
    });

    Session::flash('success', 'Your Email was Sent!');

    return redirect()->url('/');
  }



}
 ?>
