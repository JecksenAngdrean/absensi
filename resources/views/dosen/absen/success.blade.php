@extends('user.layouts.layout')

@section('content')
<div id="absen" class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Status</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <a href="{{ url('absens') }}" class="btn btn-primary">Lihat Absen</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection