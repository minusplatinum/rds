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
                    Package Details
                </div>
                <div class="card-body">
                    <h5>Price: $299</h5>
                    <h6>Whats Included</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li>FREE $15 domain registration credit.</li>
                                <li>Up to 15 responsive website pages.</li>
                                <li>Easy to use Drag and drop website builder</li>
                                <li>Up to 5 MYSQL databases and phpmyadmin access.</li>
                                <li>Basic Ecommerce setup, installation and product set up.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li>Up to 10 website FTP accounts.</li>
                                <li>Premium website hosting services.</li>
                                <li>Up to 15 custom email accounts.</li>
                                <li>Website control panel to maintain your website</li>
                                <li>Basic Wordpress setup and them installation.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Package Extras
                </div>
                <div class="card-body">
                    <p>During the sign up process you will have a chance to request package extras, change package defaults and make special requests.</p>
                    <h6>Available Extras</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li>Website domain name registration services.</li>
                                <li>Ecommerce theme and plugin upgrades.</li>
                                <li>Custom website themes and templates.</li>
                                <li>Custom website features and widgets.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li>Wordpress theme and plugin upgrades.</li>
                                <li>Premium CMS and Ecommerce solutions.</li>
                                <li>Scalable hosting packages available.</li>
                                <li>Add extra databases to your website.</li>
                            </ul>
                        </div>
                        <p class="m-auto"><small>** Package Extras are purchased after account creation **</small></p>
                    </div>
                </div>
                <div class="card-footer">
                        <a href="{{ route('register', ['package_id' => 1]) }}" class="btn btn-success">Sign Up!</a>
                </div>
            </div><!-- /.card -->
        </div><!-- /.col-lg-10 -->
    </div>
</div><!-- /.container -->

@endsection