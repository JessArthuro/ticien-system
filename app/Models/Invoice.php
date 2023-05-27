<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['version', 'folio', 'fecha', 'forma_pago', 'metodo_pago', 'no_certificado', 'condiciones_pago', 'subtotal', 'total', 'moneda', 'tipo_cambio', 'tipo_comprobante', 'lugar_expedicion', 'exportacion', 'certificado', 'sello', 'rfc_emisor', 'nombre_emisor', 'reg_fisc_emisor', 'rfc_receptor', 'nombre_receptor', 'dom_fisc_receptor', 'reg_fisc_receptor', 'uso_cfdi', 'clave_prod_serv', 'clave_unidad', 'cantidad', 'unidad', 'no_identificacion', 'descripcion', 'valor_unitario', 'importe_concepto', 'objeto_imp', 'base', 'impuesto', 'tipo_factor', 'tasa_o_cuota', 'importe_traslado', 'version_tfd', 'fecha_timbrado', 'rfc_prov_cert', 'uuid', 'no_cert_sat', 'sello_cfd', 'sello_sat'];
}