@extends('layouts.app')
@section('content')
<!-- My Profile Container -->
<div class="container">
    <div class="card">
        <div class="row">
            <div class="col-lg-4">
                <img class="img-fluid img-thumbnail p-2" src="{{ url('/storage/cover_images/noimage.jpg') }}" alt="Profile Image">
            </div>
           <div class="col-lg-8">
               <div class="row">
                    <div class="col-lg-6">
                        {{ $user->fName }}
                    </div>
                    <div class="col-lg-6">
                        {{ $user->lName }}
                    </div>
               </div>
           </div>
        </div>        
    </div>
</div>
@endsection