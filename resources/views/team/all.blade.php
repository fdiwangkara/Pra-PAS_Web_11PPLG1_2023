@extends('layouts.main')

@section('content')
    <h1>Formula one Team</h1>
    <table class="table" style="margin-top: 10em;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Team</th>
                <th scope="col">Principal</th>
                <th scope="col">Owner</th>
                <th scope="col">Driver 1</th>
                <th scope="col">Driver 2</th>
            </tr>
            </thead>
            <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($team as $f1)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $f1->team }}</td>
                <td>{{ $f1->principal }}</td>
                <td>{{ $f1->owner }}</td>
                <td>{{ $f1->driver1 }}</td>
                <td>{{ $f1->driver2 }}</td>
                <td>
                    <a href="/team/detail/{{ $f1->id }}" type="button" class="btn btn-primary">Detail</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        
@endsection