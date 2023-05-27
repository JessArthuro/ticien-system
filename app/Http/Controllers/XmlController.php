<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XmlController extends Controller
{
  public function loadXml(Request $request)
  {
    // dd($request->data_xml);
    // $filex = $_FILES['data_xml']['tmp_name'];
    $filex = $request->data_xml;
    $xml = simplexml_load_file($filex);
    $ns = $xml->getNamespaces(true);
    $xml->registerXPathNamespace('cfdi', $ns['cfdi']);
    $xml->registerXPathNamespace('t', $ns['tfd']);

    $comprobante = $xml->xpath('//cfdi:Comprobante');
    $emisor = $xml->xpath('//cfdi:Comprobante//cfdi:Emisor');
    $receptor = $xml->xpath('//cfdi:Comprobante//cfdi:Receptor');
    $concepto = $xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto');
    $traslado = $xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto//cfdi:Impuestos//cfdi:Traslados//cfdi:Traslado');
    $timbrefd = $xml->xpath('//cfdi:Comprobante//cfdi:Complemento//t:TimbreFiscalDigital');
    $readfile = true;

    return view('/invoices.create', ['comprobante' => $comprobante, 'emisor' => $emisor, 'receptor' => $receptor, 'concepto' => $concepto, 'traslado' => $traslado, 'timbrefd' => $timbrefd, 'readfile' => $readfile]);
  }
}