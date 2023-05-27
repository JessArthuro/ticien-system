<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\InvoiceRequest;

class InvoiceController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    if (!Auth::check()) {
      return redirect('/');
    }

    $invoices = Invoice::latest()->paginate(5);
    return view('invoices.index', ['invoices' => $invoices]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    if (!Auth::check()) {
      return redirect('/');
    }

    return view('invoices.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request): RedirectResponse
  {
    // dd($request->all());
    Invoice::create($request->all());
    return redirect()->route('invoices.index')->with('create', 'ok');
  }

  /**
   * Display the specified resource.
   */
  public function show(Invoice $invoice)
  {
    if (!Auth::check()) {
      return redirect('/');
    }

    return view('invoices.view', ['invoice' => $invoice]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Invoice $invoice)
  {
    if (!Auth::check()) {
      return redirect('/');
    }

    return view('invoices.edit', ['invoice' => $invoice]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(InvoiceRequest $request, Invoice $invoice): RedirectResponse
  {
    // dd($request->all());
    $invoice->update($request->validated());
    return redirect()->route('invoices.index')->with('update', 'ok');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Invoice $invoice): RedirectResponse
  {
    $invoice->delete();
    // return redirect()->route('invoices.index')->with('success', 'Factura eliminada exitosamente');
    return redirect()->route('invoices.index')->with('delete', 'ok');
  }
}