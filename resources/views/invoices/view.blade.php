@extends('layouts.app-master')

@section('content')
    <h1>Detalles de la factura: {{ $invoice->folio }}</h1>
    @include('layouts.partials.btn-back')

    <div class="row mt-4">
        <div class="col-md-6">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="fw-semibold">RFC emisor:</td>
                        <td>{{ $invoice->rfc_emisor }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Nombre emisor:</td>
                        <td>{{ $invoice->nombre_emisor }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Folio:</td>
                        <td>{{ $invoice->folio }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">RFC receptor:</td>
                        <td>{{ $invoice->rfc_receptor }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Nombre receptor:</td>
                        <td>{{ $invoice->nombre_receptor }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Uso CFDI:</td>
                        <td>{{ $invoice->uso_cfdi }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="fw-semibold">Fecha:</td>
                        <td>{{ $invoice->fecha }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">UUID:</td>
                        <td>{{ $invoice->uuid }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Lugar de expedicion:</td>
                        <td>{{ $invoice->lugar_expedicion }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Domicilio fiscal del receptor:</td>
                        <td>{{ $invoice->dom_fisc_receptor }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Tipo de factor:</td>
                        <td>{{ $invoice->tipo_factor }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <h3 class="my-4">Concepto</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="bg-dark-subtle">
                <tr>
                    <td class="fw-semibold">Clave del producto y/o servicio</td>
                    <td class="fw-semibold">No. Identificacion</td>
                    <td class="fw-semibold">Cantidad</td>
                    <td class="fw-semibold">Clave de unidad</td>
                    <td class="fw-semibold">Unidad</td>
                    <td class="fw-semibold">Valor unitario</td>
                    <td class="fw-semibold">Importe</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $invoice->clave_prod_serv }}</td>
                    <td>{{ $invoice->no_identificacion }}</td>
                    <td>{{ $invoice->cantidad }}</td>
                    <td>{{ $invoice->clave_unidad }}</td>
                    <td>{{ $invoice->unidad }}</td>
                    <td>{{ $invoice->valor_unitario }}</td>
                    <td>{{ $invoice->importe_concepto }}</td>
                </tr>
                <tr>
                    <td class="bg-dark-subtle fw-semibold">Descripcion</td>
                    <td colspan="6">{{ $invoice->descripcion }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="text-end fw-semibold">Subtotal</td>
                    <td>{{ $invoice->subtotal }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="text-end fw-semibold">Total</td>
                    <td>{{ $invoice->total }}</td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="row mt-5">
        <h3 class="my-4">Informacion del pago</h3>
        <div class="col-md-6">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="fw-semibold">Forma de pago:</td>
                        <td>{{ $invoice->forma_pago }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Condiciones de pago:</td>
                        <td>{{ $invoice->condiciones_pago }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="fw-semibold">Moneda:</td>
                        <td>{{ $invoice->moneda }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Metodo de pago:</td>
                        <td>{{ $invoice->metodo_pago }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h5>Sello digital del CFDI</h5>
            <p class="text-break" style="font-size: 0.8rem;">{{ $invoice->sello_cfd }}</p>
        </div>
        <div class="col-12">
            <h5>Sello digital del SAT</h5>
            <p class="text-break" style="font-size: 0.8rem;">{{ $invoice->sello_sat }}</p>
        </div>
        <div class="col-12">
            <h5>Certificado</h5>
            <p class="text-break" style="font-size: 0.8rem;">{{ $invoice->certificado }}</p>
        </div>
        <div class="col-12">
            <h5>Sello</h5>
            <p class="text-break" style="font-size: 0.8rem;">{{ $invoice->sello }}</p>
        </div>
    </div>

    <div class="row mt-4 mb-5">
        <div class="col-md-6">
            <table class="table table-borderless">
                <tr>
                    <td class="fw-semibold">RFC del proveedor de certificacion:</td>
                    <td> {{ $invoice->rfc_prov_cert }}</td>
                </tr>
                <tr>
                    <td class="fw-semibold">No. Certificado SAT:</td>
                    <td> {{ $invoice->no_cert_sat }}</td>
                </tr>
                <tr>
                    <td class="fw-semibold">Regimen fiscal del emisor:</td>
                    <td> {{ $invoice->reg_fisc_emisor }}</td>
                </tr>
                <tr>
                    <td class="fw-semibold">Impuesto:</td>
                    <td> {{ $invoice->impuesto }}</td>
                </tr>
                <tr>
                    <td class="fw-semibold">Tasa o cuota:</td>
                    <td> {{ $invoice->tasa_o_cuota }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-borderless">
                <tr>
                    <td class="fw-semibold">Fecha de timbrado:</td>
                    <td> {{ $invoice->fecha_timbrado }}</td>
                </tr>
                <tr>
                    <td class="fw-semibold">No. Certificado:</td>
                    <td> {{ $invoice->no_certificado }}</td>
                </tr>
                <tr>
                    <td class="fw-semibold">Regimen fiscal del receptor:</td>
                    <td> {{ $invoice->reg_fisc_receptor }}</td>
                </tr>
                <tr>
                    <td class="fw-semibold">Objeto impuesto:</td>
                    <td> {{ $invoice->objeto_imp }}</td>
                </tr>
                <tr>
                    <td class="fw-semibold">Importe traslado:</td>
                    <td> {{ $invoice->importe_traslado }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
