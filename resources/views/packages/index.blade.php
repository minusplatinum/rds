@extends('layouts.app')
@section('content')
<div class="container">
    @foreach($packages as $package)
    <div id="{{ str_replace_array(' ', ['',''], $package->name) }}" name="{{ str_replace_array(' ', ['',''], $package->name) }}" class="row px-3 py-3">
        <div data-aos="fade-down-left" class="packageItem col-lg-4">
            <img class="img-fluid img-thumbnail rounded" src="{{ url($package->imgUrl . $package->imgName) }}" alt="">
        </div>
        <div class="col-lg-8">
            <h2>{{ $package->name }}</h2>
            <ul>
                <li data-aos="fade-left">{{ $package->features1 }}</li>
                <li data-aos="fade-leftt">{{ $package->features2 }}</li>
                <li data-aos="fade-left">{{ $package->features3 }}</li>
                <li data-aos="fade-left">{{ $package->features4 }}</li>
                <li data-aos="fade-left">{{ $package->features5 }}</li>
                <li data-aos="fade-left">{{ $package->features6 }}</li>    
            </ul>
        </div>
        <p>{{ $package->description }}</p>
    </div><!-- /.row -->
    <hr>
    <!-- Call to Action Section -->
    <div class="row mb-4">
        <div data-aos="fade-left" class="col-md-8">
            <p>Think a {{ $package->name }} is for you? Click the link to get started!</p>
        </div>
        <div data-aos="fade-right" class="col-md-4">
        <a class="btn btn-lg btn-success btn-block" href="{{ url('/packages/' . $package->id) }}">Learn More!</a>
        </div>
    </div>
    <hr>
    @endforeach
</div>
@endsection