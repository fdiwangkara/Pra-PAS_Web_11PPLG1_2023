@extends('layouts.main')

@section('content')
    <h1 class="text-center">Formula One Circuit</h1>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>
        
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='/tracks/add/' class="btn btn-success">+ Add Data</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">Track</th>
                    <th class="col-md-4">Location</th>
                    <th class="col-md-2">Length</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($tracks as $track)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $track->track }}</td>
                    <td>{{ $track->location }}</td>
                    <td>{{ $track->length }}</td>
                    <td>
                        <a href='' class="btn btn-warning btn-sm">Edit</a>
                        <a href='' class="btn btn-danger btn-sm">Del</a>
                        <a href="/tracks/detail/{{ $track->id }}" class="btn btn-primary btn-sm">Detail</a> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>  
    </div>
    <!-- AKHIR DATA -->
        
@endsection

