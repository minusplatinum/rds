@extends('layouts.app')
@section('content')
<!-- My Packages Container -->
<div class="container">
    <div class="card p-3 m-3">
        <div class="row">
            <div class="card-header col-lg-12">
                <h4>My Packages</h4>
            </div>
            <div class="card-body col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-thumbnail img-fluid" src="{{ url('storage/cover_images/noimage.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-8">
                        <h3>Package Name: </h3>
                        <h5>Package Type: </h5>
                        <h5>Website Address: <a href="#">Website URL</a></h5>
                        <h5>Template Type: </h5>
                        <h5>Template Name: </h5>
                        <p>Price: $299</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam vitae ex quod cupiditate quos? Aliquam numquam ipsa dolorum assumenda. Facilis magnam minima cumque possimus iste sapiente error amet, in eius.</p>
                    </div>
                    
                    <div class="col-lg-12">
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li>Feature</li>
                                    <li>Feature</li>
                                    <li>Feature</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li>Feature</li>
                                    <li>Feature</li>
                                    <li>Feature</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection