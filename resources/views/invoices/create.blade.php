@extends('layouts.app-master')

@section('content')
    <h1>Nueva Factura</h1>

    <div class="row">
        <div class="col">
            <a href="{{ route('invoices.index') }}" class="btn btn-secondary"><i class='bx bx-arrow-back'></i> Regresar</a>
        </div>

        <div class="col-md-4">
            <form action="/load_xml" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="formFileSm" class="form-label">Sube tu archivo XML</label>
                <input class="form-control form-control-sm mb-3" id="formFileSm" type="file" name="data_xml"
                    onchange="verifyInput(this)" accept="text/xml">
                <button type="submit" class="btn btn-success" id="btn-upload" disabled><i class='bx bxs-file-export'></i>
                    Cargar archivo</button>
            </form>
        </div>
    </div>

    <form action="{{ route('invoices.store') }}" class="row my-5 gy-3" method="POST">
        @csrf
        @if (isset($readfile))
            <h3 class="border-top pt-3">Comprobante</h3>
            @foreach ($comprobante as $comp)
                {{-- Linea 1 --}}
                <div class="col-md-2">
                    <label class="form-label text-capitalize">Version</label>
                    <input name="version" type="text" class="form-control" value="{{ $comp['Version'] }}" readonly>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-capitalize">Folio</label>
                    <input name="folio" type="text" class="form-control" value="{{ $comp['Folio'] }}" readonly>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-capitalize">Fecha</label>
                    <input name="fecha" type="text" class="form-control" value="{{ $comp['Fecha'] }}" readonly>
                </div>
                <div class="col-md-2">
                    <label class="form-label text-capitalize">Forma De Pago</label>
                    <input name="forma_pago" type="text" class="form-control" value="{{ $comp['FormaPago'] }}" readonly>
                </div>
                <div class="col-md-2">
                    <label class="form-label text-capitalize">Metodo de pago</label>
                    <input name="metodo_pago" type="text" class="form-control" value="{{ $comp['MetodoPago'] }}"
                        readonly>
                </div>

                {{-- Linea 2 --}}
                <div class="col-md-4">
                    <label class="form-label text-capitalize">Numero de certificado</label>
                    <input name="no_certificado" type="text" class="form-control" value="{{ $comp['NoCertificado'] }}"
                        readonly>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-capitalize">Condiciones de pago</label>
                    <input name="condiciones_pago" type="text" class="form-control"
                        value="{{ $comp['CondicionesDePago'] }}" readonly>
                </div>
                <div class="col-md-2">
                    <label class="form-label text-capitalize">Subtotal</label>
                    <input name="subtotal" type="text" class="form-control" value="{{ $comp['SubTotal'] }}" readonly>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-capitalize">Total</label>
                    <input name="total" type="text" class="form-control" value="{{ $comp['Total'] }}" readonly>
                </div>

                {{-- Linea 3 --}}
                <div class="col-md-3">
                    <label class="form-label text-capitalize">Moneda</label>
                    <input name="moneda" type="text" class="form-control" value="{{ $comp['Moneda'] }}" readonly>
                </div>
                <div class="col-md-2">
                    <label class="form-label text-capitalize">Tipo de cambio</label>
                    <input name="tipo_cambio" type="text" class="form-control" value="{{ $comp['TipoCambio'] }}"
                        readonly>
                </div>
                <div class="col-md-2">
                    <label class="form-label text-capitalize">Tipo de comprobante</label>
                    <input name="tipo_comprobante" type="text" class="form-control"
                        value="{{ $comp['TipoDeComprobante'] }}" readonly>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-capitalize">Lugar de expedicion</label>
                    <input name="lugar_expedicion" type="text" class="form-control"
                        value="{{ $comp['LugarExpedicion'] }}" readonly>
                </div>
                <div class="col-md-2">
                    <label class="form-label text-capitalize">Exportacion</label>
                    <input name="exportacion" type="text" class="form-control" value="{{ $comp['Exportacion'] }}"
                        readonly>
                </div>

                {{-- Linea 4 --}}
                <div class="col-md-6">
                    <label class="form-label text-capitalize">Certificado</label>
                    <textarea name="certificado" class="form-control" readonly>{{ $comp['Certificado'] }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label text-capitalize">Sello</label>
                    <textarea name="sello" class="form-control" readonly>{{ $comp['Sello'] }}</textarea>
                </div>
            @endforeach

            <h3 class="border-top pt-3 mt-5">Emisor</h3>
            @foreach ($emisor as $em)
                <div class="col-md-3">
                    <label class="form-label text-capitalize">RFC</label>
                    <input name="rfc_emisor" type="text" class="form-control" value="{{ $em['Rfc'] }}" readonly>
                </div>
                <div class="col-md-6">
                    <label class="form-label text-capitalize">Nombre</label>
                    <input name="nombre_emisor" type="text" class="form-control" value="{{ $em['Nombre'] }}"
                        readonly>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-capitalize">Regimen fiscal</label>
                    <input name="reg_fisc_emisor" type="text" class="form-control"
                        value="{{ $em['RegimenFiscal'] }}" readonly>
                </div>
            @endforeach

            <h3 class="border-top pt-3 mt-5">Receptor</h3>
            @foreach ($receptor as $rec)
                <div class="col-md-4">
                    <label class="form-label text-capitalize">RFC</label>
                    <input name="rfc_receptor" type="text" class="form-control" value="{{ $rec['Rfc'] }}"
                        readonly>
                </div>
                <div class="col-md-8">
                    <label class="form-label text-capitalize">Nombre</label>
                    <input name="nombre_receptor" type="text" class="form-control" value="{{ $rec['Nombre'] }}"
                        readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-capitalize">Domicilio fiscal receptor</label>
                    <input name="dom_fisc_receptor" type="text" class="form-control"
                        value="{{ $rec['DomicilioFiscalReceptor'] }}" readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-capitalize">Regimen fiscal receptor</label>
                    <input name="reg_fisc_receptor" type="text" class="form-control"
                        value="{{ $rec['RegimenFiscalReceptor'] }}" readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-capitalize">Uso CFDI</label>
                    <input name="uso_cfdi" type="text" class="form-control" value="{{ $rec['UsoCFDI'] }}" readonly>
                </div>
            @endforeach

            <h3 class="border-top pt-3 mt-5">Concepto</h3>
            @foreach ($concepto as $cto)
                <div class="col-md-3">
                    <label class="form-label text-capitalize">Clave de producto / servicio</label>
                    <input name="clave_prod_serv" type="text" class="form-control"
                        value="{{ $cto['ClaveProdServ'] }}" readonly>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-capitalize">Clave Unidad</label>
                    <input name="clave_unidad" type="text" class="form-control" value="{{ $cto['ClaveUnidad'] }}"
                        readonly>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-capitalize">Cantidad</label>
                    <input name="cantidad" type="text" class="form-control" value="{{ $cto['Cantidad'] }}" readonly>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-capitalize">Unidad</label>
                    <input name="unidad" type="text" class="form-control" value="{{ $cto['Unidad'] }}" readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-capitalize">No. Identificacion</label>
                    <input name="no_identificacion" type="text" class="form-control"
                        value="{{ $cto['NoIdentificacion'] }}" readonly>
                </div>
                <div class="col-md-8">
                    <label class="form-label text-capitalize">Descripcion</label>
                    <input name="descripcion" type="text" class="form-control" value="{{ $cto['Descripcion'] }}"
                        readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-capitalize">Valor Unitario</label>
                    <input name="valor_unitario" type="text" class="form-control"
                        value="{{ $cto['ValorUnitario'] }}" readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-capitalize">Importe</label>
                    <input name="importe_concepto" type="text" class="form-control" value="{{ $cto['Importe'] }}"
                        readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-capitalize">Objeto Impuesto</label>
                    <input name="objeto_imp" type="text" class="form-control" value="{{ $cto['ObjetoImp'] }}"
                        readonly>
                </div>
            @endforeach

            <h3 class="border-top pt-3 mt-5">Traslado</h3>
            @foreach ($traslado as $tdo)
                <div class="col-md-4">
                    <label class="form-label text-capitalize">Base</label>
                    <input name="base" type="text" class="form-control" value="{{ $tdo['Base'] }}" readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-capitalize">Impuesto</label>
                    <input name="impuesto" type="text" class="form-control" value="{{ $tdo['Impuesto'] }}" readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-capitalize">Tipo de Factor</label>
                    <input name="tipo_factor" type="text" class="form-control" value="{{ $tdo['TipoFactor'] }}"
                        readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-capitalize">Tasa O Cuota</label>
                    <input name="tasa_o_cuota" type="text" class="form-control" value="{{ $tdo['TasaOCuota'] }}"
                        readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-capitalize">Importe</label>
                    <input name="importe_traslado" type="text" class="form-control" value="{{ $tdo['Importe'] }}"
                        readonly>
                </div>
            @endforeach

            <h3 class="border-top pt-3 mt-5">Timbre Fiscal Digital</h3>
            @foreach ($timbrefd as $tfd)
                <div class="col-md-4">
                    <label class="form-label text-capitalize">Version</label>
                    <input name="version_tfd" type="text" class="form-control" value="{{ $tfd['Version'] }}"
                        readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-capitalize">Fecha Timbrado</label>
                    <input name="fecha_timbrado" type="text" class="form-control"
                        value="{{ $tfd['FechaTimbrado'] }}" readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-capitalize">RFC Proveedor Certificacion</label>
                    <input name="rfc_prov_cert" type="text" class="form-control" value="{{ $tfd['RfcProvCertif'] }}"
                        readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-capitalize">UUID</label>
                    <input name="uuid" type="text" class="form-control" value="{{ $tfd['UUID'] }}" readonly>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-capitalize">No. Certificado SAT</label>
                    <input name="no_cert_sat" type="text" class="form-control"
                        value="{{ $tfd['NoCertificadoSAT'] }}" readonly>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-capitalize">Sello CFD</label>
                    <textarea name="sello_cfd" class="form-control" readonly>{{ $tfd['SelloCFD'] }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label text-capitalize">Sello SAT</label>
                    <textarea name="sello_sat" class="form-control" readonly>{{ $tfd['SelloSAT'] }}</textarea>
                </div>
            @endforeach

            <div class="col-12">
                <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i> Guardar factura</button>
            </div>
        @endif

    </form>

@endsection
