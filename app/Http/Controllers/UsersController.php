<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    public function index () {

        $users =[
            'narciso lindao',
            'danilo fodao',
            'fica a opcao'
        ];
        return view ('users.index', [
        'users' => $users
        ]);
    }
}
