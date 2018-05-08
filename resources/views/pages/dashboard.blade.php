@extends('layouts.app')
@section('content')
<!-- My Profile Container -->
<div class="container">
    <div class="card m-3 p-3">
        <div class="row d-flex justify-content-center">
            <div class="card-header col-lg-12">
                <h4>My Account Information</h4>
            </div>
           <div class="card-body col-lg-10">
               <div class="row">
                    <div class="col-lg-6">
                        <span><b>First Name:</b> </span>{{ $user->fName }}
                    </div>
                    <div class="col-lg-6">
                        <span><b>Last Name:</b> </span>{{ $user->lName }}
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-6">
                        <span><b>Username:</b> </span>{{ $user->username }}
                    </div>
                    <div class="col-lg-6">
                        <span><b>Email Address:</b> </span>{{ $user->email }}
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-6">
                        <span><b>Telephone:</b> </span>{{ $user->phone1 }}
                    </div>
                    <div class="col-lg-6">
                        <span><b>Cellphone:</b> </span>{{ $user->phone2 }}
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-6">
                        <span><b>Address:</b> </span>{{ $user->streetAddress}}
                    </div>
                    <div class="col-lg-6">
                        <span><b>Apt/Unit:</b> </span>{{ $user->apt }}
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-6">
                        <span><b>City:</b> </span>{{ $user->city }}
                    </div>
                    <div class="col-lg-6">
                        <span><b>Province/State:</b> </span>{{ $user->province }}
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-6">
                        <span><b>Postal/Zipcode</b> </span>{{ $user->postal }}
                    </div>
                    <div class="col-lg-6">
                        <span><b>Country:</b> </span>{{ $user->country }}
                    </div>
               </div>
           </div>
           <div class="card-header card-footer col-lg-12">
                <h4>My Package Information</h4>
            </div>
            <div class="card-body col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <span><b>Package Name: </b> </span>{{ $package->name }}
                    </div>
                    <div class="col-lg-6">
                            <span><b>Template Name: </b> </span>{{ $template->name }}
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-6">
                        <span><b>Package Price: </b> </span>${{ $package->price }}
                    </div>
                    <div class="col-lg-6">
                            <span><b>Template Type: </b> </span>{{ $template->templateType }}
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-6">
                        <span><b>Package Description: </b> </span>{{ $package->description }}
                    </div>
                    <div class="col-lg-6">
                            <span><b>Template Description: </b> </span>{{ $template->description }}
                    </div>
               </div>
            </div>
           <div class="card-footer col-lg-12 text-center">
               
                <p class="lead text-muted pt-3"><i>{{ $quote }}</i></p>  
             </div>
        </div>        
    </div>
</div>
@endsection