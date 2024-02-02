<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $users=[
            [
                'name' => 'John',
                'age' => 20,
            ],
            [
                'name' => 'Jane',
                'age' => 22,
            ],
            [
                'name' => 'Jill',
                'age' => 17,
            ],
        ];


        return view(
            'dashboard', 
            [
                'users' => $users
            ]
        );
    }
}
