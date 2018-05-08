@extends('layouts.app')
@section('content')
<!-- My Purchase History Container -->
<div class="container">    
    <div class="card p-3 my-3">
        <div class="row">
            <div class="card-header col-lg-12 text-center">
                <h3>Purchase History</h3>    
            </div>
            <div class="card-body col-lg-12 border-bottom">
                <div class="row">
                    <div class="col-lg-3">
                        <span>Item Name</span>    
                    </div>
                    <div class="col-lg-5">
                        <span>Description</span>    
                    </div> 
                    <div class="col-lg-1">
                        <span>Price</span>    
                    </div> 
                    <div class="col-lg-3">
                        <span>Date Purchased</span>    
                    </div>     
                </div>    
            </div>    
        </div> 

        <div class="card-body col-lg-12">
            <div class="row">
                <div class="col-lg-3">
                <span>{{ $template->name }}</span>    
                </div>
                <div class="col-lg-5">
                <span>{{ $template->description }}</span>    
                </div> 
                <div class="col-lg-1">
                <span>{{ $package->price }}</span>    
                </div> 
                <div class="col-lg-3">
                <span>{{ $user->created_at }}</span>    
                </div>
            </div>
        </div>
    </div>                
</div>
@endsection