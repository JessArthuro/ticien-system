<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function show()
  {
    if (Auth::check()) {
      return redirect()->route('invoices.index');
    }

    return view('auth.login');
  }

  public function login(LoginRequest $request)
  {
    // dd($request->all());
    $credentials = $request->getCredentials();

    if (!Auth::validate($credentials)) {
      return redirect('/')->withErrors('El correo electrónico y/o contraseña son incorrectos.');
    }

    $user = Auth::getProvider()->retrieveByCredentials($credentials);

    Auth::login($user);
    return $this->authenticated($request, $user);
  }

  public function authenticated(Request $request, $user)
  {
    return redirect()->route('invoices.index');
  }
}