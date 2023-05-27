<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
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
      'version' => 'required',
      'folio' => 'required',
      'fecha' => 'required',
      'forma_pago' => 'required',
      'metodo_pago' => 'required',
      'no_certificado' => 'required',
      'condiciones_pago' => 'required',
      'subtotal' => 'required',
      'total' => 'required',
      'moneda' => 'required',
      'tipo_cambio' => 'required',
      'tipo_comprobante' => 'required',
      'lugar_expedicion' => 'required',
      'exportacion' => 'required',
      'certificado' => 'required',
      'sello' => 'required',
      'rfc_emisor' => 'required',
      'nombre_emisor' => 'required',
      'reg_fisc_emisor' => 'required',
      'rfc_receptor' => 'required',
      'nombre_receptor' => 'required',
      'dom_fisc_receptor' => 'required',
      'reg_fisc_receptor' => 'required',
      'uso_cfdi' => 'required',
      'clave_prod_serv' => 'required',
      'clave_unidad' => 'required',
      'cantidad' => 'required',
      'unidad' => 'required',
      'no_identificacion' => 'required',
      'descripcion' => 'required',
      'valor_unitario' => 'required',
      'importe_concepto' => 'required',
      'objeto_imp' => 'required',
      'base' => 'required',
      'impuesto' => 'required',
      'tipo_factor' => 'required',
      'tasa_o_cuota' => 'required',
      'importe_traslado' => 'required',
      'version_tfd' => 'required',
      'fecha_timbrado' => 'required',
      'rfc_prov_cert' => 'required',
      'uuid' => 'required',
      'no_cert_sat' => 'required',
      'sello_cfd' => 'required',
      'sello_sat' => 'required'
    ];
  }

  public function messages()
  {
    return [
      'version.required' => 'El campo version es requerido.',
      'folio.required' => 'El campo folio es requerido.',
      'fecha.required' => 'El campo fecha es requerido.',
      'forma_pago.required' => 'El campo forma de pago es requerido.',
      'metodo_pago.required' => 'El campo metodo de pago es requerido.',
      'no_certificado.required' => 'El campo numero de certificado es requerido.',
      'condiciones_pago.required' => 'El campo condiciones de pago es requerido.',
      'subtotal.required' => 'El campo subtotal es requerido.',
      'total.required' => 'El campo total es requerido.',
      'moneda.required' => 'El campo moneda es requerido.',
      'tipo_cambio.required' => 'El campo tipo de cambio es requerido.',
      'tipo_comprobante.required' => 'El campo tipo de comprobante es requerido.',
      'lugar_expedicion.required' => 'El campo lugar de expedicion es requerido.',
      'exportacion.required' => 'El campo exportacion es requerido.',
      'certificado.required' => 'El campo certificado es requerido.',
      'sello.required' => 'El campo sello es requerido.',
      'rfc_emisor.required' => 'El campo rfc del emisor es requerido.',
      'nombre_emisor.required' => 'El campo nombre del emisor es requerido.',
      'reg_fisc_emisor.required' => 'El campo regimen fiscal del emisor es requerido.',
      'rfc_receptor.required' => 'El campo rfc del receptor es requerido.',
      'nombre_receptor.required' => 'El campo nombre del receptor es requerido.',
      'dom_fisc_receptor.required' => 'El campo domicilio fiscal del receptor es requerido.',
      'reg_fisc_receptor.required' => 'El campo regimen fiscal del receptor es requerido.',
      'uso_cfdi.required' => 'El campo uso cfdi es requerido.',
      'clave_prod_serv.required' => 'El campo clave de producto / servicio es requerido.',
      'clave_unidad.required' => 'El campo clave unidad es requerido.',
      'cantidad.required' => 'El campo cantidad es requerido.',
      'unidad.required' => 'El campo unidad es requerido.',
      'no_identificacion.required' => 'El campo no. identificacion es requerido.',
      'descripcion.required' => 'El campo descripcion es requerido.',
      'valor_unitario.required' => 'El campo valor unitario es requerido.',
      'importe_concepto.required' => 'El campo importe de concepto es requerido.',
      'objeto_imp.required' => 'El campo objeto impuesto es requerido.',
      'base.required' => 'El campo base es requerido.',
      'impuesto.required' => 'El campo impuesto es requerido.',
      'tipo_factor.required' => 'El campo tipo de factor es requerido.',
      'tasa_o_cuota.required' => 'El campo tasa o cuota es requerido.',
      'importe_traslado.required' => 'El campo importe de traslado es requerido.',
      'version_tfd.required' => 'El campo version de timbre fiscal es requerido.',
      'fecha_timbrado.required' => 'El campo fecha timbrado es requerido.',
      'rfc_prov_cert.required' => 'El campo rfc proveedor certificacion es requerido.',
      'uuid.required' => 'El campo uuid es requerido.',
      'no_cert_sat.required' => 'El campo no. certificado sat es requerido.',
      'sello_cfd.required' => 'El campo sello cfd es requerido.',
      'sello_sat.required' => 'El campo sello sat es requerido.'
    ];
  }
}