@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('layouts.partials.page-title', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
        ])
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Data Guru</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalTambahGuru">
                                    + Tambah Guru
                                </button>
                            </div>
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="pt-0 card-body">
                        <div class="table-responsive">
                            <table class="table datatable" id="datatable_1">
                                <thead class="table-light">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Tanggal Dibuat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataGuru as $guru)
                                        <tr>
                                            <td>{{ $guru->name }}</td>
                                            <td>{{ $guru->email }}</td>
                                            <td>{{ $guru->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                <!-- Tombol Edit -->
                                                <button type="button" class="btn btn-sm btn-warning btn-edit"
                                                    data-id="{{ $guru->id }}" data-name="{{ $guru->name }}"
                                                    data-email="{{ $guru->email }}" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditGuru">
                                                    Edit
                                                </button>

                                                <!-- Tombol Delete -->
                                                <button type="button" class="btn btn-sm btn-danger btn-delete"
                                                    data-id="{{ $guru->id }}" data-name="{{ $guru->name }}">
                                                    Hapus
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->


    </div>
@endsection
