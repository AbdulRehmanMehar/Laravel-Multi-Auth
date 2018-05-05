@extends('layout.client')
@section('content')
  <div class="header">
    <div class="bg-video">
      <video src="{{asset('vid/bg.mp4')}}" autoplay='true' loop='true'></video>
    </div>
    <div class="content">
      <h1>{{config('app.name')}}</h1>
      <h5>A perfect place to learn and teach!</h5>
      @guest
        <div class="links">
          <h6>
            <a href="{{ route('register') }}">Sign Up</a> | Login With... &nbsp;
            <a href="login/google" class="btn btn-outline-danger"><i class="fab fa-google fa-lg"></i></a>&nbsp;
            <a href="login/facebook" class="btn btn-outline-primary"><i class="fab fa-facebook-f fa-lg"></i></a>&nbsp;
            <a href="login/twitter" class="btn btn-outline-info"><i class="fab fa-twitter fa-lg"></i></a>&nbsp;
          </h6>
        </div>
      @endguest
    </div>
    <div class="info">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4">
            <div class="table">
              <div class="td">
                <i class="fas fa-hands-helping fa-3x"></i>
              </div>
              <div class="td">
                <h4>Why Choose Us?</h4>
                <h6>We've plenty of Courses</h6>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="table">
              <div class="td">
                <i class="fas fa-clock fa-3x"></i>
              </div>
              <div class="td">
                <h4>Time doesn't matter!</h4>
                <h6>Life time access to Courses</h6>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="table">
              <div class="td">
                <i class="fas fa-download fa-3x"></i>
              </div>
              <div class="td">
                <h4>Offline Access</h4>
                <h6>Buy &amp; Download Courses</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Header Ends..... --}}
  <div class="container mt-4">
    <h3>Top Courses in Development</h3>
  </div>
@endsection
