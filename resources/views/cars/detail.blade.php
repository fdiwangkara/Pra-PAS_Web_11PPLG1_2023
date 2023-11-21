@extends('layouts.main')

@section('content')
    <h2>Car Details</h2>
    <div class="form">
        <div class="form-group">
            <label for="">Model</label>
            <input type="text" class="form-control" name="model" id="mode" value="{{ $car->model }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Constructor</label>
            <input type="text" class="form-control" name="constructor" id="constructor" value="{{ $car->constructor }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Designer</label>
            <input type="text" class="form-control" name="designer" id="designer" value="{{ $car->designer }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Horse Power</label>
            <input type="text" class="form-control" name="horse_power" id="horse_power" value="{{ $car->horse_power }} HP" disabled>
        </div>
        <div class="form-group">
            <label for="">Debut</label>
            <input type="text" class="form-control" name="debut" id="debut" value="{{ $car->debut }}" disabled>
        </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="/cars/all" class="btn btn-secondary" type="button">Back</a>
    </div>
@endsection