@extends('layouts.main')

@section('content')
    <h2>Track Details</h2>
    <div class="form">
        <div class="form-group">
            <label for="">Track</label>
            <input type="text" class="form-control" name="tracks" id="tracks" value="{{ $tracks->track }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Location</label>
            <input type="text" class="form-control" name="location" id="location" value="{{ $tracks->location }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Release Date</label>
            <input type="text" class="form-control" name="release_date" id="release_date" value="{{ $tracks->release_date }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Type</label>
            <input type="text" class="form-control" name="type" id="type" value="{{ $tracks->type }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Length</label>
            <input type="text" class="form-control" name="length" id="length" value="{{ $tracks->length }} KM" disabled>
        </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="/tracks/all" class="btn btn-secondary" type="button">Back</a>
    </div>
@endsection