@extends('layouts.app')  <!-- go into the layouts folder and grab the templete there, import it into this blade file-->

@section('content') <!-- reorganize into an external file, go to layouts.app to find where it yields (basically this section is replaced instead of yeild('content'))-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as an artist') }}
                </div>
            </div>
            @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
        </div>
        
    </div>
    

</div>
@endsection
