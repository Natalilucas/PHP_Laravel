<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function viewUser($id){
        //dd($id);

        $myUser = DB::table('users')
        ->where('id', $id)
        ->first();

        return view('users.view', compact('myUser'));
    }

    public function allUsers(){
        $hello = 'Finalmente vamos para código';
        $helloAgain = 'cucu';

        $daysOfWeek = $this->getWeekDays();
        //$info = $this->info();

        $users = $this->getContact();
        return view('users.all_users', compact(
            'hello',
            'helloAgain',
            'daysOfWeek',
            //'info',
            'users'
        ));
    }

    public function addUser(){

        DB::table('users')
        ->updateOrInsert(
            [
                'email'=> 'Lais@gmail.com',
            ],
            [
                'name'=> 'Lais',
                'password'=> 'sarateste',
                'updated_at' => now(),
                'created_at' => now(),
        ]);


        $users = Db::table('users')
        ->get();

        $myUser = DB::table('users')
        ->where('password', '12345')
        ->first();

        dd($myUser);

       return view('users.add_user');
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

   private function getContact(){
        // $users = [
        //     ['id' => 1, 'name' => 'Natali', 'phone' => '985654455'],
        //     ['id' => 2, 'name' => 'Bruno', 'phone' => '985654485'],
        //     ['id' => 3, 'name' => 'Guilherme', 'phone' => '985654445'],
        //     ['id' => 4, 'name' => 'Vagner', 'phone' => '985654465']
        // ];

        $users = User::get();

        return $users;
    }
}
