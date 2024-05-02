{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Home</a>
            <button type="button" class="navbar-toggler" data-bstoggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="" class="nav-link active">Employee
                            List</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a href="" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My
                    Profile</a>
            </div>
        </div>
    </nav> --}}

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('Inventorys.create') }}" class="btn btn-primary">Add New Item</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped
mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan Barang</th>
                        <th>Kode Satuan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $barang)
                        <tr>
                            <td>{{ $barang->kode_barang }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->harga_barang }}</td>
                            <td>{{ $barang->deskripsi_barang }}</td>
                            <td>{{ $barang->satuan->nama_satuan }}</td>
                            <td>{{ $barang->satuan->kode_satuan }}</td>

                            <td>
                                {{-- ACTIONS SECTION --}}
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <a href="{{ route('Inventorys.show', ['Inventory' => $barang->id]) }}"
                                            class="btn btn-outline-dark btn-sm me-2"><i
                                                class="bi bi-boxes"></i></a>
                                        <a href="{{ route('Inventorys.edit', ['Inventory' => $barang->id]) }}"
                                            class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                                        <div>
                                            <form action="{{ route('Inventorys.destroy', ['Inventory' => $barang->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outlinedark btn-sm me-2"><i
                                                        class="bi-trash"></i></button>
                                            </form>

                                        </div>
                                    </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
{{-- @vite('resources/js/app.js')
</body>

</html> --}}
