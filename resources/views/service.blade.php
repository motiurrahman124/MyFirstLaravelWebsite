@extends('layout.app')
@section('title','Service')

@section('content')

<div class="container-fluid bg-dark">
    <div class="row p-5">
        <div class="col-md-12 text-center">
            <h4 class="text-white">My Services</h4>
            
        </div>
            
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/Laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/Laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/Laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Your Name:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Your Mobile:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Your Email:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Your Message:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
  
                    <button type="submit" class="btn btn-block btn-primary mt-3 ">Send Now</button>
            </form>
                </div>
                <div class="col-md-6">
                    <h5>Address:</h5>
                    <p>Daulatpur, Khulna</p>
                    <p>+8801920085604</p>
                    <p>motiur.cse.nubtk@gmail.com</p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection        