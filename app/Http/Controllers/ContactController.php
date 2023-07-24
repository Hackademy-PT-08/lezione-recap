<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\TravelMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contatti');
    }

    public function contactSubmit(Request $request){
        $title = $request->title;
        $director = $request->director;
        $plot = $request->plot;

        try{
            Mail::to('info@hack.it')->send(new ContactMail($title, $director, $plot));
        } catch(Exception $error){
            return redirect()->back()->with('errorMessage', 'Richiesta fallita. Riprova più tardi');
        }
        return redirect()->route('homepage')->with('successMessage', 'La tua richiesta è andata a buon fine. Un nostro curatore valuterà la tua richiesta.');
    }

    public function travel(){
        return view('lavora-con-noi');
    }

    public function travelSubmit(Request $request){
        $name = $request->name;
        $email = $request->email;

        Mail::to($email)->send(new TravelMail($name, $email));
        return redirect()->route('homepage')->with('successMessage', 'Richiesta avvenuta con successo.');
    }
}
