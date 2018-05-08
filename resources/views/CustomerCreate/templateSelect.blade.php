@extends('layouts.app')
@section('content')
<div class="container">
    <form id="templateSelectForm" action="{{ route('UpdateTemplate') }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('patch') }}
       <div class="row card p-3">
            <div class="row">
                @foreach($templates as $template)
                    <div class="col-md-6 my-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <img class="card-img-top" src="{{ url($template->imgUrl . $template->img1Name) }}" alt="">
                                <h4 class="card-title">
                                    {{ $template->name }}
                                </h4>
                            </div>
                        
                            <div class="card-body">
                                <p class="card-text">{{ $template->description }}</p>
                            </div>
                            <div class="card-footer">
                                <button id="template_id" name="template_id" class="btn btn-lg btn-block btn-success" form="templateSelectForm" type="submit" value="{{ $template->id }}">Select</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
       </div>
    </form> 
</div>
@endsection