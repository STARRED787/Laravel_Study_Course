<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function saveData()
    {
        $saveData = [
            'name' => 'Test User 03',
            'email' => 'testuser03@gmail.com',
            'password' => '123456',
        ];

        $this->user->create($saveData);
    }
}
