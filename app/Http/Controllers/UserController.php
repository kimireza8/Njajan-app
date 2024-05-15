<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Events\UserCreated;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        // Membuat user baru
        $user = User::create([
            'user_name' => $request->input('user_name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role_id' => 2, // role_id 2 for seller
        ]);

        // Mendispatch event UserCreated untuk user yang baru dibuat
        event(new UserCreated($user));

        return response()->json(['message' => 'User created successfully']);
    }
}

