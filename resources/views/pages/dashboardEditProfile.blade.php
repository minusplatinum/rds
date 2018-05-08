@extends('layouts.app')
@section('content')
<!-- Edit Profile Container -->
<div class="container">
    <div class="card my-3">
        <div class="row p-3">
            <div class="card-header col-lg-12">
                <h4>Edit Profile</h4>
            </div>
            <div class="card-body col-lg-12">
                <form id="EditProfileForm"  action="{{ route('updateProfile', $user) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="fName">First Name: </label>
                            <input name="fName" id="fName" type="text" class="form-control" value="{{$user->fName}}">
                        </div>
                        <div class="form-group col-6">
                            <label for="lName">Last Name: </label>
                            <input name="lName" id="lName" type="text" class="form-control" value="{{$user->lName}}">
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-6"> 
                            <label for="username">Username</label>
                            <input name="username" id="username" type="text" class="form-control" value="{{ $user->username }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="email">Email Address</label>
                            <input name="email" id="email" type="text" class="form-control" value="{{$user->email}}">
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="phone1">Telephone</label>
                            <input name="phone1" id="phone1" type="text" class="form-control" value="{{$user->phone1}}">
                        </div>
                        <div class="form-group col-6">
                            <label name="" for="phone2">Cellphone</label>
                            <input name="phone2" id="phone2" type="text" class="form-control" value="{{$user->phone2}}">
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="streetAddress">Address</label>
                            <input name="streetAddress" id="streetAddress" type="text" class="form-control" value="{{$user->streetAddress}}">
                        </div>
                        <div class="form-group col-6">
                            <label for="city">City</label>
                            <input name="city" id="city" type="text" class="form-control" value="{{$user->city}}">
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-4">
                            <label for="province">Province</label>
                            <input name="province" id="province" type="text" class="form-control" value="{{$user->province}}">
                        </div>
                        <div class="form-group col-4">
                            <label for="postal">Postal Code</label>
                            <input name="postal" id="postal" type="text" class="form-control" value="{{$user->postal}}">
                        </div>
                        <div class="form-group col-4">
                            <label for="country">Country</label>
                            <input name="country" id="country" type="text" class="form-control" value="{{$user->country}}">
                        </div>                                
                    </div>
                    <hr> 
                    <button form="EditProfileForm" type="submit" value="UpdateProfile" class="btn btn-lg btn-block btn-primary">Update Profile</button> 
                </form>
            </div>   
        </div>         
    </div>    
</div>
@endsection
