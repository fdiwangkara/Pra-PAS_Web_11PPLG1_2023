@extends('layouts.main')

@section('content')
    <h1 class="text-center">Formula one Best Cars</h1>
    <table class="table" style="margin-top: 10em;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Model</th>
                <th scope="col">Constructor</th>
                <th scope="col">Designer</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($car as $cars)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $cars->model }}</td>
                <td>{{ $cars->constructor }}</td>
                <td>{{ $cars->designer }}</td>
                <td>
                    <a href="/cars/detail/{{ $cars->id }}" type="button" class="btn btn-primary">Detail</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        
@endsection
