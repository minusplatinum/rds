@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card mt-4">
                <img class="card-img-top img-fluid" src="{{ url('/storage/cover_images/BasicWebsitePackage.jpg') }}" style="max-height:400px;"  alt="">
                <div class="card-body">
                    <h3 class="card-title">Premium Website Package</h3>
                    <p class="card-text"></p>
                </div>
            </div> <!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Package Features
                </div>
                <div class="card-body">
                    <ul>
                        
                    </ul>
                </div>
            </div><!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Package Extras
                </div>
                <div class="card-body">
                    <p></p>
                    <h6>Available Extras</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                        <a href="{{ route('register', ['package_id' => 2]) }}" class="btn btn-success">Sign Up!</a>
                </div>
            </div><!-- /.card -->
        </div><!-- /.col-lg-10 -->
    </div>
</div><!-- /.container -->

@endsection