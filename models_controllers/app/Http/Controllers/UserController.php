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
            'name' => 'Test User 05',
            'email' => 'testuser05@gmail.com',
            'password' => '123456',
        ];

        $this->user->create($saveData);
    }

    public function showData()
    {
        $response['users'] = $this->user->all();
        return view('welcome')->with($response);
    }

    public function updateData()
    {
        $userId = 1;
        $saveData = [
            'name' => 'Test User 01 edited',
            'email' => 'testuser01edited@gmail.com',
            'password' => '123456',
        ];
        $userupadet = $this->user->find($userId);
        $userupadet->update(array_merge($userupadet->toArray(), $saveData));
    }

    public function deleteData()
    {
        $userId = 1;
        $userdelete = $this->user->find($userId);
        $userdelete->delete();
    }
}
