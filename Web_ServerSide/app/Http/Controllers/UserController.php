<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexUser(){
        return view('users.users_home');

    }

    public function dayOfWeek(){
        $hello = ' Finalmente entrando em codigo';

        //$dayOfWeek = ['Segunda', 'Terca' , 'Quarta' , 'Quinta' ,'Sexta' ];

        $dayOfWeek = $this->getWeekDays();
        //$info = $this->info();
        $arrayContacts = $this->getArrayContact();

        // dd($info);
        // var_dump("Test 1");

        return view('users.all_users', compact('hello', 'dayOfWeek', 'arrayContacts'));
    }

    private function getWeekDays(){
        $dayOfWeek = ['Segunda', 'Terca' , 'Quarta' , 'Quinta' ,'Sexta' ];
        return  $dayOfWeek;
    }

    // public function info(){
    //     $courseInfo = [
    //         'name' => 'Software Developer',
    //         'year' => 2024,
    //         'modules' => ['PHP', 'WebServices', 'Java', 'Angular'],
    //     ];
    //     return $courseInfo;
    // }

    protected function getArrayContact(){
        $arrayContacts = [
            ['id' => 1, 'name' => 'Natali', 'phone' => '985654455'],
            ['id' => 2, 'name' => 'Bruno', 'phone' => '985654485'],
            ['id' => 3, 'name' => 'Guilherme', 'phone' => '985654445'],
            ['id' => 4, 'name' => 'Vagner', 'phone' => '985654465']
        ];

        return $arrayContacts;
    }

}
