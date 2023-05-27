<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('version');
            $table->string('folio');
            $table->string('fecha');
            $table->string('forma_pago');
            $table->string('metodo_pago');
            $table->string('no_certificado');
            $table->string('condiciones_pago');
            $table->string('subtotal');
            $table->string('total');
            $table->string('moneda');
            $table->integer('tipo_cambio');
            $table->string('tipo_comprobante');
            $table->integer('lugar_expedicion');
            $table->string('exportacion');
            $table->text('certificado');
            $table->text('sello');
            $table->string('rfc_emisor');
            $table->string('nombre_emisor');
            $table->integer('reg_fisc_emisor');
            $table->string('rfc_receptor');
            $table->string('nombre_receptor');
            $table->integer('dom_fisc_receptor');
            $table->integer('reg_fisc_receptor');
            $table->string('uso_cfdi');
            $table->integer('clave_prod_serv');
            $table->string('clave_unidad');
            $table->integer('cantidad');
            $table->string('unidad');
            $table->integer('no_identificacion');
            $table->string('descripcion');
            $table->float('valor_unitario');
            $table->float('importe_concepto');
            $table->string('objeto_imp');
            $table->float('base');
            $table->string('impuesto');
            $table->string('tipo_factor');
            $table->string('tasa_o_cuota');
            $table->float('importe_traslado');
            $table->float('version_tfd');
            $table->string('fecha_timbrado');
            $table->string('rfc_prov_cert');
            $table->string('uuid');
            $table->string('no_cert_sat');
            $table->text('sello_cfd');
            $table->text('sello_sat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};