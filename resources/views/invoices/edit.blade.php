@extends('layouts.app-master')

@section('content')
    <h1>Editar Factura</h1>
    <a href="{{ route('invoices.index') }}" class="btn btn-secondary"><i class='bx bx-arrow-back'></i> Regresar</a>

    <div class="mt-4">
        @include('layouts.partials.messages')
    </div>

    <form action="{{ route('invoices.update', $invoice) }}" class="row mt-3 mb-5 gy-3" method="POST">
        @csrf
        @method('PUT')

        {{-- -------------------------------------------  SECTION COMPROBANTE  ------------------------------------ --}}
        <h3 class="border-top pt-3">Comprobante</h3>
        {{-- Linea 1 --}}
        <div class="col-md-2">
            <label class="form-label text-capitalize">Version</label>
            <input name="version" type="text" class="form-control" value="{{ $invoice->version }}">
        </div>
        <div class="col-md-3">
            <label class="form-label text-capitalize">Folio</label>
            <input name="folio" type="text" class="form-control" value="{{ $invoice->folio }}">
        </div>
        <div class="col-md-3">
            <label class="form-label text-capitalize">Fecha</label>
            <input name="fecha" type="text" class="form-control" value="{{ $invoice->fecha }}">
        </div>
        <div class="col-md-2">
            <label class="form-label text-capitalize">Forma De Pago</label>
            <input name="forma_pago" type="text" class="form-control" value="{{ $invoice->forma_pago }}">
        </div>
        <div class="col-md-2">
            <label class="form-label text-capitalize">Metodo de pago</label>
            <input name="metodo_pago" type="text" class="form-control" value="{{ $invoice->metodo_pago }}">
        </div>

        {{-- Linea 2 --}}
        <div class="col-md-4">
            <label class="form-label text-capitalize">Numero de certificado</label>
            <input name="no_certificado" type="text" class="form-control" value="{{ $invoice->no_certificado }}">
        </div>
        <div class="col-md-3">
            <label class="form-label text-capitalize">Condiciones de pago</label>
            <input name="condiciones_pago" type="text" class="form-control" value="{{ $invoice->condiciones_pago }}">
        </div>
        <div class="col-md-2">
            <label class="form-label text-capitalize">Subtotal</label>
            <input name="subtotal" type="text" class="form-control" value="{{ $invoice->subtotal }}">
        </div>
        <div class="col-md-3">
            <label class="form-label text-capitalize">Total</label>
            <input name="total" type="text" class="form-control" value="{{ $invoice->total }}">
        </div>

        {{-- Linea 3 --}}
        <div class="col-md-3">
            <label class="form-label text-capitalize">Moneda</label>
            <input name="moneda" type="text" class="form-control" value="{{ $invoice->moneda }}">
        </div>
        <div class="col-md-2">
            <label class="form-label text-capitalize">Tipo de cambio</label>
            <input name="tipo_cambio" type="text" class="form-control" value="{{ $invoice->tipo_cambio }}">
        </div>
        <div class="col-md-2">
            <label class="form-label text-capitalize">Tipo de comprobante</label>
            <input name="tipo_comprobante" type="text" class="form-control" value="{{ $invoice->tipo_comprobante }}">
        </div>
        <div class="col-md-3">
            <label class="form-label text-capitalize">Lugar de expedicion</label>
            <input name="lugar_expedicion" type="text" class="form-control" value="{{ $invoice->lugar_expedicion }}">
        </div>
        <div class="col-md-2">
            <label class="form-label text-capitalize">Exportacion</label>
            <input name="exportacion" type="text" class="form-control" value="{{ $invoice->exportacion }}">
        </div>

        {{-- Linea 4 --}}
        <div class="col-md-6">
            <label class="form-label text-capitalize">Certificado</label>
            <textarea name="certificado" class="form-control" rows="5">{{ $invoice->certificado }}</textarea>
        </div>
        <div class="col-md-6">
            <label class="form-label text-capitalize">Sello</label>
            <textarea name="sello" class="form-control" rows="5">{{ $invoice->sello }}</textarea>
        </div>

        {{-- -------------------------------------------  SECTION EMISOR  ------------------------------------ --}}
        <h3 class="border-top pt-3 mt-5">Emisor</h3>
        <div class="col-md-3">
            <label class="form-label text-capitalize">RFC</label>
            <input name="rfc_emisor" type="text" class="form-control" value="{{ $invoice->rfc_emisor }}">
        </div>
        <div class="col-md-6">
            <label class="form-label text-capitalize">Nombre</label>
            <input name="nombre_emisor" type="text" class="form-control" value="{{ $invoice->nombre_emisor }}">
        </div>
        <div class="col-md-3">
            <label class="form-label text-capitalize">Regimen fiscal</label>
            <input name="reg_fisc_emisor" type="text" class="form-control" value="{{ $invoice->reg_fisc_emisor }}">
        </div>

        {{-- -------------------------------------------  SECTION RECEPTOR  ------------------------------------ --}}
        <h3 class="border-top pt-3 mt-5">Receptor</h3>
        <div class="col-md-4">
            <label class="form-label text-capitalize">RFC</label>
            <input name="rfc_receptor" type="text" class="form-control" value="{{ $invoice->rfc_receptor }}">
        </div>
        <div class="col-md-8">
            <label class="form-label text-capitalize">Nombre</label>
            <input name="nombre_receptor" type="text" class="form-control" value="{{ $invoice->nombre_receptor }}">
        </div>
        <div class="col-md-4">
            <label class="form-label text-capitalize">Domicilio fiscal receptor</label>
            <input name="dom_fisc_receptor" type="text" class="form-control"
                value="{{ $invoice->dom_fisc_receptor }}">
        </div>
        <div class="col-md-4">
            <label class="form-label text-capitalize">Regimen fiscal receptor</label>
            <input name="reg_fisc_receptor" type="text" class="form-control"
                value="{{ $invoice->reg_fisc_receptor }}">
        </div>
        <div class="col-md-4">
            <label class="form-label text-capitalize">Uso CFDI</label>
            <input name="uso_cfdi" type="text" class="form-control" value="{{ $invoice->uso_cfdi }}">
        </div>

        {{-- -------------------------------------------  SECTION CONCEPTO  ------------------------------------ --}}
        <h3 class="border-top pt-3 mt-5">Concepto</h3>
        <div class="col-md-3">
            <label class="form-label text-capitalize">Clave de producto / servicio</label>
            <input name="clave_prod_serv" type="text" class="form-control" value="{{ $invoice->clave_prod_serv }}">
        </div>
        <div class="col-md-3">
            <label class="form-label text-capitalize">Clave Unidad</label>
            <input name="clave_unidad" type="text" class="form-control" value="{{ $invoice->clave_unidad }}">
        </div>
        <div class="col-md-3">
            <label class="form-label text-capitalize">Cantidad</label>
            <input name="cantidad" type="text" class="form-control" value="{{ $invoice->cantidad }}">
        </div>
        <div class="col-md-3">
            <label class="form-label text-capitalize">Unidad</label>
            <input name="unidad" type="text" class="form-control" value="{{ $invoice->unidad }}">
        </div>
        <div class="col-md-4">
            <label class="form-label text-capitalize">No. Identificacion</label>
            <input name="no_identificacion" type="text" class="form-control"
                value="{{ $invoice->no_identificacion }}">
        </div>
        <div class="col-md-8">
            <label class="form-label text-capitalize">Descripcion</label>
            <input name="descripcion" type="text" class="form-control" value="{{ $invoice->descripcion }}">
        </div>
        <div class="col-md-4">
            <label class="form-label text-capitalize">Valor Unitario</label>
            <input name="valor_unitario" type="text" class="form-control" value="{{ $invoice->valor_unitario }}">
        </div>
        <div class="col-md-4">
            <label class="form-label text-capitalize">Importe</label>
            <input name="importe_concepto" type="text" class="form-control"
                value="{{ $invoice->importe_concepto }}">
        </div>
        <div class="col-md-4">
            <label class="form-label text-capitalize">Objeto Impuesto</label>
            <input name="objeto_imp" type="text" class="form-control" value="{{ $invoice->objeto_imp }}">
        </div>

        {{-- -------------------------------------------  SECTION TRASLADO  ------------------------------------ --}}
        <h3 class="border-top pt-3 mt-5">Traslado</h3>
        <div class="col-md-4">
            <label class="form-label text-capitalize">Base</label>
            <input name="base" type="text" class="form-control" value="{{ $invoice->base }}">
        </div>
        <div class="col-md-4">
            <label class="form-label text-capitalize">Impuesto</label>
            <input name="impuesto" type="text" class="form-control" value="{{ $invoice->impuesto }}">
        </div>
        <div class="col-md-4">
            <label class="form-label text-capitalize">Tipo de Factor</label>
            <input name="tipo_factor" type="text" class="form-control" value="{{ $invoice->tipo_factor }}">
        </div>
        <div class="col-md-4">
            <label class="form-label text-capitalize">Tasa O Cuota</label>
            <input name="tasa_o_cuota" type="text" class="form-control" value="{{ $invoice->tasa_o_cuota }}">
        </div>
        <div class="col-md-4">
            <label class="form-label text-capitalize">Importe</label>
            <input name="importe_traslado" type="text" class="form-control"
                value="{{ $invoice->importe_traslado }}">
        </div>

        {{-- -------------------------------------------  SECTION TIMBRE FISCAL  ------------------------------------ --}}
        <h3 class="border-top pt-3 mt-5">Timbre Fiscal Digital</h3>
        <div class="col-md-4">
            <label class="form-label text-capitalize">Version</label>
            <input name="version_tfd" type="text" class="form-control" value="{{ $invoice->version_tfd }}">
        </div>
        <div class="col-md-4">
            <label class="form-label text-capitalize">Fecha Timbrado</label>
            <input name="fecha_timbrado" type="text" class="form-control" value="{{ $invoice->fecha_timbrado }}">
        </div>
        <div class="col-md-4">
            <label class="form-label text-capitalize">RFC Proveedor Certificacion</label>
            <input name="rfc_prov_cert" type="text" class="form-control" value="{{ $invoice->rfc_prov_cert }}">
        </div>
        <div class="col-md-4">
            <label class="form-label text-capitalize">UUID</label>
            <input name="uuid" type="text" class="form-control" value="{{ $invoice->uuid }}">
        </div>
        <div class="col-md-4">
            <label class="form-label text-capitalize">No. Certificado SAT</label>
            <input name="no_cert_sat" type="text" class="form-control" value="{{ $invoice->no_cert_sat }}">
        </div>

        <div class="col-md-6">
            <label class="form-label text-capitalize">Sello CFD</label>
            <textarea name="sello_cfd" class="form-control" rows="5">{{ $invoice->sello_cfd }}</textarea>
        </div>
        <div class="col-md-6">
            <label class="form-label text-capitalize">Sello SAT</label>
            <textarea name="sello_sat" class="form-control" rows="5">{{ $invoice->sello_sat }}</textarea>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary"><i class='bx bx-sync'></i> Actualizar factura</button>
        </div>
    </form>
@endsection
