<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index () {

        $contacts = $this->getContacts();


        return view('main.home', compact('contacts'));
    }

    protected function getContacts(){
        $contacts = [

            'name' => 'Natali',
            'adress' => 'Rua Ciriaco Cardoso 186, 4150-212, Porto',
            'email' => 'info@cesae.pt'
        ];

        return $contacts;
    }



}
