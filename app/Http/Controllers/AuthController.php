<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

/**
 * Class AuthController
 * @package App\Http\Controllers
 */
class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            echo ajax_response(
                'O e-mail informado não é válido'
            );
            exit(0);
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (!Auth::attempt($credentials)) {
            echo ajax_response(
                'Os dados informados não conferem'
            );
            exit(0);
        }

        echo ajax_redirect('admin.dashboard', true);
        exit(0);
    }

    public function register(Request $request)
    {
        if (empty($request->name) || empty($request->email) || empty($request->phone)
            || empty($request->password) || empty($request->password_conf)) {
            echo ajax_response(
                'Verifique se todos os campos estão devidamente preenchidos'
            );
            exit(0);
        }

        if (!filter_var(isnt_string($request->name))) {
            echo ajax_response(
                'Informe um nome válido'
            );
            exit(0);
        }

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            echo ajax_response(
                'O e-mail informado não é válido'
            );
            exit(0);
        }

        if (!filter_var($request->phone, FILTER_VALIDATE_INT)) {
            echo ajax_response(
                'O número de telefone informado não é válido'
            );
            exit(0);
        }

        if ($request->password != $request->password_conf) {
            echo ajax_response(
                'Você informou duas senhas diferentes'
            );
            exit(0);
        }

        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->usertype = $request->usertype;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        echo ajax_redirect('app.login', true);
        exit(0);
    }
}
