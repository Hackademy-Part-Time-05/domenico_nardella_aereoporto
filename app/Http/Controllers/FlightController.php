<?php

namespace App\Http\Controllers;

use finfo;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public static $flights=[
      
   [
    'id' => 1,
    'destination' => 'Torino',
    'time' => [ 
       'departure' => '11:30',
       'arrival' => '15:00',
    ],
    'cover' => "https://picsum.photos/600/400"
  ],
  [
    'id' => 2,
    'destination' => 'Basilea', 
    'time' => [ 
       'departure' => '09:30',
       'arrival' => '11:00',
    ],
    'cover' => "https://picsum.photos/600/400"
  ],
  [
    'id' => 3,
    'destination' => 'Napoli',
    'time' => [ 
       'departure' => '17:30',
       'arrival' => '19:00',
    ],
    'cover' => "https://picsum.photos/600/400"
  ], 
  [
    'id' => 4,
    'destination' => 'Basilea',
    'time' => [ 
       'departure' => '19:30',
       'arrival' => '23:00',
    ],
    'cover' => "https://picsum.photos/600/400"
  ],  
];
public function index() {
    return view ('index', ['voli' => self::$flights]); 
}

public function show($id) {
    foreach(self::$flights as $flight) {
        if($flight['id'] == $id) {
            return view('show', ['volo' => $flight]);
        }
    }
    abort(404);
}
}

