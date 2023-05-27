<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
      'name' => 'required',
      'email' => 'required|unique:users,email',
      'password' => 'required|min:8',
      'password_confirmation' => 'required|same:password'
    ];
  }

  public function messages()
  {
    return [
      'name.required' => 'El campo nombre completo es requerido.',
      'email.required' => 'El campo correo electrónico es requerido.',
      'email.unique' => 'El correo electrónico ya ha sido registrado.',
      'password.required' => 'El campo contraseña es requerido.',
      'password.min' => 'El campo contraseña debe tener al menos 8 caracteres.',
      'password_confirmation.required' => 'El campo confirmación de contraseña es requerido.',
      'password_confirmation.same' => 'El campo confirmación de contraseña debe coincidir con la primera contraseña.',
    ];
  }
}