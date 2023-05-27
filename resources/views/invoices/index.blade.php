@extends('layouts.app-master')

@section('content')
    <section class="mb-5">
        <h1>Listado de Facturas</h1>
        <a href="{{ route('invoices.create') }}" class="btn btn-primary mb-4"><i class='bx bx-plus-circle'></i> Crear
            Factura</a>

        <div class="my-4">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-hover table-bordered">
            <thead class="bg-dark-subtle">
                <tr>
                    <th scope="col">Folio</th>
                    <th scope="col">Emisor</th>
                    <th scope="col">Receptor</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @if (count($invoices) == 0)
                    <tr>
                        <td colspan="6" class="text-center">No existen registros.</td>
                    </tr>
                @else
                    @foreach ($invoices as $fact)
                        <tr>
                            <th class="fw-normal">{{ $fact->folio }}</th>
                            <td>{{ $fact->nombre_emisor }}</td>
                            <td>{{ $fact->nombre_receptor }}</td>
                            <td>{{ $fact->descripcion }}</td>
                            <td style="display:flex; gap:0.5rem;">
                                <a href="{{ route('invoices.show', $fact) }}" class="btn btn-info btn-sm"><i
                                        class='bx bx-show'></i></a>
                                <a href="{{ route('invoices.edit', $fact) }}" class="btn btn-warning btn-sm"><i
                                        class='bx bx-edit'></i></a>

                                <form action="{{ route('invoices.destroy', $fact) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class='bx bx-trash'></i></button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                @endif


            </tbody>
        </table>

        {{ $invoices->links() }}
    </section>
@endsection
