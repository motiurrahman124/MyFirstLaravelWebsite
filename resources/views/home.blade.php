@extends('layout.app')
@section('title','Home')

@section('content')

<div class="container-fluid banner mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 top text-center">
            <h1 class="text-white">Software Engineer</h1>
            <h3 class="text-white">Mobile & Web</h3>
            <buttun class="btn btn-warning">Learn More..</buttun>
        </div>
            
    </div>
</div>

<div class="container text-center mt-5">
    <h2>My Services</h2>
    <div class="row mt-5">
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
    </div>
</div>

<div class="container text-center mt-5 mb-5">
    <h2>Recent Projects</h2>
    <div class="row mt-5">
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/Laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Project Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <buttun class="btn btn-primary">Learn More..</buttun>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/Laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Project Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <buttun class="btn btn-primary">Learn More..</buttun>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/Laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Project Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <buttun class="btn btn-primary">Learn More..</buttun>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5 text-center">
    <h2>Contact with me</h2>
    <div class="row mt-5">
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.250266563536!2d89.52420021433122!3d22.86721162785632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9a5c9cca8e25%3A0xfd3179831eb4b803!2sDaulatpur%20Registry%20Office!5e0!3m2!1sen!2sbd!4v1646158792226!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>

@endsection