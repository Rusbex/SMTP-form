<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function home ()
    {
        return view('index');
    }
}
