<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
   */
  public function rules(): array
  {
    return [
      'email' => 'required',
      'password' => 'required'
    ];
  }

  public function messages()
  {
    return [
      'email.required' => 'El campo correo electrónico es requerido.',
      'password.required' => 'El campo contraseña es requerido.',
    ];
  }

  public function getCredentials()
  {
    $email = $this->get('email');
    $password = $this->get('password');

    return $this->only('email', 'password');
  }
}