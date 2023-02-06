@extends('layouts.master')

@section('title', 'Umrah Indonesia')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <span class="breadcrumb-item active">User</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">User</span>
        </h2>
        <div class="row px-xl-5">
            <div class="col-lg-12 mb-5">
                <div class="bg-light p-30 mb-30">
                    <table id="table1" class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->id }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/vendor/datatable/datatables.min.css') }} ">
@endsection
@section('js')
    <script type="text/javascript" charset="utf8" src="{{ asset('shop/vendor/datatable/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#table1').DataTable();
        });
    </script>

@endsection
