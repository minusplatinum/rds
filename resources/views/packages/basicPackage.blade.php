@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card mt-4">
                <img class="card-img-top img-fluid" src="{{ url('/storage/cover_images/BasicWebsitePackage.jpg') }}" style="max-height:400px;"  alt="">
                <div class="card-body">
                    <h3 class="card-title">Basic Website Package</h3>
                    <p class="card-text">Looking for an afforadable website solution for your personal or small business website? The Basic Website Package is a perfect choice offering rich features and a variety of plugins. All of our Website Packages offer Website Hosting, Domain Registration and Website templates. Dont need any of that? Don't worry, we also offer you the flexability to use your own Hosting, Domain Registration and Website Templates or we can design you a custom template for your website</p>
                </div>
            </div> <!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Package Features
                </div>
                <div class="card-body">
                    <ul>
                        <li>Responsive websites designed and optimized to work accross all devices, allowing your website to reach the maximum amount of visitors.</li>
                        <li>Take advantage of the amazing features the jQuery plugin library has to offer, adding anamations, effects and special utilities to your website.</li>
                        <li>Use the Bootstrap 4 framework to give your website a modern look and feel, utilizing the variety of built in classes, custom helpers and utilities to style your website.</li>
                        <li>Enjoy custom website features like newsletter sign-ups, contact forms, image carousels, Google Maps integration and much more. </li>
                    </ul>
                </div>
            </div><!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Package Details
                </div>
                <div class="card-body">
                    <h5>Price: $99</h5>
                    <h6>Whats Included</h6>
                    <ul>
                        <li>Up to 5 responsive website pages are included</li>
                        <li>Choose one of our FREE templates for your website</li>
                        <li>Responsive image gallery and image slider</li>
                        <li>Integrated Google maps into your website</li>
                        <li>Up to 5 domain email accounts are included</li>
                        <li>1 MYSQL database is included with phpmyadmin access</li>
                        <li>Easy to use control panel to maintain your website</li>
                    </ul>
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
                                <li>Website and email hosting services.</li>
                                <li>Custom website themes and templates.</li>
                                <li>Custom website features and widgets.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li>Bring your own paid template or theme.</li>
                                <li>Basic CMS and Ecommerce installations.</li>
                                <li>Responsive image galleries and content sliders.</li>
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