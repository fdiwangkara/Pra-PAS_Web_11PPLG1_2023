@extends('layouts.main')

@section('content')
    <h2>Team Details</h2>
    <div class="form">
        <div class="form-group">
            <label for="">Team</label>
            <input type="text" class="form-control" name="team" id="team" value="{{ $team->team }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Principal</label>
            <input type="text" class="form-control" name="principal" id="principal" value="{{ $team->principal }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Owner</label>
            <input type="text" class="form-control" name="owner" id="owner" value="{{ $team->owner }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Driver 1</label>
            <input type="text" class="form-control" name="driver1" id="driver1" value="{{ $team->driver1 }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Driver 2</label>
            <input type="text" class="form-control" name="driver2" id="driver2" value="{{ $team->driver2 }}" disabled>
        </div>
        <div class="form-group">
            <label for="">World Driver Championships</label>
            <input type="text" class="form-control" name="wdc" id="wdc" value="{{ $team->wdc }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Since</label>
            <input type="text" class="form-control" name="since" id="since" value="{{ $team->since }}" disabled>
        </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="/team/all" class="btn btn-secondary" type="button">Back</a>
    </div>
@endsection