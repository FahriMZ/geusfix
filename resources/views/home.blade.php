@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

            <div class="card-body bg-info">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                
            </div>
            </div>
        </div>
    </div> -->

    <div class="container">
        <div class="card bg-info">
            <div class="card-body">
                <span class="text-white">You are logged in, {{Auth::user()->username}}!</span>
            </div>            
        </div>

        
    </div>
    
@if(Auth::user()->userAkses)
    @if(Auth::user()->userAkses->hakAkses->hak_akses == 'Administrator')
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <a href="{{route('user-akses')}}" class="btn btn-warning">Kelola User Akses</a>
            </div>
        </div>
    </div>
    @endif
@endif
</div>
@endsection