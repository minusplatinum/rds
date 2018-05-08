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
                        <li>Responsive websites designed and optimized to work accross all devices, allowing your website to reach more visitors.</li>
                        <li>Take advantage of the amazing features the jQuery plugin library has to offer, adding anamations and special effects to your website.</li>
                        <li>Use the Bootstrap 4 framework to give your website a modern look and feel, utilizing the variety of built in classes to style your website.</li>
                        <li>Enjoy custom website features like newsletter sign-ups, contact forms, image carousels, sliders and much more. </li>
                        <li>The Basic Website Package includes up to 5 website pages, additional pages are able to be purchased during sign up.</li>
                    </ul>
                </div>
            </div><!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Package Extras
                </div>
                <div class="card-body">
                    <p>During the sign up process you will have a chance to add extras to your package, make changes to package defaults and make custom requests.</p>
                    <h6>Available Extras</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li>Website domain name registration services.</li>
                                <li>Website and email hosting services.</li>
                                <li>Custom website themes and templates.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li>Bring your own paid template or theme.</li>
                                <li>Basic CMS and Ecommerce installations.</li>
                                <li>Responsive image galleries and content sliders.</li>
                            </ul>
                        </div>
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