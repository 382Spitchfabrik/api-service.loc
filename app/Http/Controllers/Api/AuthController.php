<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Регистрация пользователя
    public function register(Request $request){
       $role_user = Role::where('code','user')->first();

       $user = User::create([
           'surname' => $request,
           'name',
           'patronymic',
           'sex',
           'birthday',
           'email',
           'password',
           'api_token',
           'role_id',

       ]);

       $user->api_token = Hash::make($user->email);
    }


    // Аунтификация
    public function login(Request $request){
        return "Аунтификация";
    }
    // Выход
    public function logout(Request $request){
        return "Выход";
    }

}
