@extends('layouts.main')

@section('content')
    <h1>Formula One Circuit</h1>
    <table class="table" style="margin-top: 10em;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Track</th>
                <th scope="col">Location</th>
                <th scope="col">Length (KM)</th>
                <th scope="col">Action</th>
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
                    <a href="/tracks/detail/{{ $track->id }}" type="button" class="btn btn-primary">Detail</a> 
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        
@endsection