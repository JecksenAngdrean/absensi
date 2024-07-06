@extends('user.layouts.layout3')

@section('content')
<!-- profile -->
<div id="profile">
    <div class="container">
        <div class="row">
          <div class="col-md-4">
          </div>
            <div class="col-md-4 offset-md-1">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5>Selamat Datang, </h5>
                        <h5 class="card-title">{{Auth::user()->name}}</h5>
                        <p class="card-text">{{Auth::user()->username}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
  </div>
  <!-- end profile -->
@endsection