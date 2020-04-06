<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function home()
    {
        date_default_timezone_set('Asia/Calcutta');
        $hour = date('G');
        return view('page.home',
        ['name' => 'Test laravel project',
        'disp'=>'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.',
        'hours'=>$hour
        ]);
    }
    public function abouts()
    {
        return view('page.abouts');
    }
    public function contact()
    {
        return view('page.contact');
    }
}
