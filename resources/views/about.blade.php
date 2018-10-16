@extends('layouts.app')

@section('content')

<section id="showcase-inner" class="py-5 text-white">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12">
              <h1 class="display-4">About cheftube.io</h1>
              <p class="lead">cheftube is a community based solution to finding new, delicious, high quality meals on a budget.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Breadcrumb -->
      <section id="bc" class="mt-3">
        <div class="container">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <i class="fas fa-home"></i> Homepage</a>
              </li>
              <li class="breadcrumb-item active"> About</li>
            </ol>
          </nav>
        </div>
      </section>

      <section id="about" class="py-4">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h2>We help you find the perfect dinner</h2>
              <p class="lead">No need to get takeout again!</p>
              <img src="assets/img/about.jpg" alt="">
              <p class="mt-4">Make fresh, delicious, healthy meals for your family. </p>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="assets/img/realtors/kyle.jpg" alt="">
                <div class="card-body">
                  <h5 class="card-title">Chef Of The Month</h5>
                  <h6 class="text-secondary">Megan Hatcher</h6>
                  <p class="card-text">Megan has been cooking with cheftube for over 5 months and has 1405 subscribers with an average rating of 4.5.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Work -->
      <section id="work" class="bg-dark text-white text-center">
        <h2 class="display-4">We're here for you!</h2>
        <h4>We've come up with advanced querying in order to suggest wonderful meals based on your dietary preferences and more!</h4>
        <hr>
        <a href="listings.html" class="btn btn-secondary text-white btn-lg">View Our Featured Recipes!</a>
      </section>

      <!-- Team -->
      <section id="team" class="py-5">
        <div class="container">
          <h2 class="text-center">Our Chefs</h2>
          <div class="row text-center">
            <div class="col-md-4">
              <img src="assets/img/realtors/kyle.jpg" alt="" class="rounded-circle mb-3">
              <h4>Godron Ramsey</h4>
              <p class="text-success">
                <i class="fas fa-award text-success mb-3"></i>Professional Chef</p>
              <hr>
              <p>
                <i class="fas fa-phone"></i> (555)-555-5555</p>
              <p>
                <i class="fas fa-envelope-open"></i> gramsey@foodnetwork.co</p>
            </div>

            <div class="col-md-4">
              <img src="assets/img/realtors/mark.jpg" alt="" class="rounded-circle mb-3">
              <h4>Bryan Borenstein</h4>
              <p class="text-success">Community Chef</p>
              <hr>
              <p>
                <i class="fas fa-phone"></i> (444)-444-4444</p>
              <p>
                <i class="fas fa-envelope-open"></i> bryanborenstein@cheftube.io</p>
            </div>

            <div class="col-md-4">
              <img src="assets/img/realtors/jenny.jpg" alt="" class="rounded-circle mb-3">
              <h4>Jordon Johnson</h4>
              <p class="text-success">Community Chef</p>
              <hr>
              <p>
                <i class="fas fa-phone"></i> (333)-333-3333</p>
              <p>
                <i class="fas fa-envelope-open"></i> jordon@gmail.com</p>
            </div>
          </div>
        </div>
      </section>
@endsection
