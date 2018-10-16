@extends('layouts.app')

@section('content')
<section id="showcase-inner" class="py-5 text-white">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12">
              <h1 class="display-4">Browse Our Recipes</h1>
              <p class="lead">Look here for a plethora of new and exciting meal ideas!</p>
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
              <li class="breadcrumb-item active"> Browse Recipes</li>
            </ol>
          </nav>
        </div>
      </section>

      <!-- Listings -->
      <section id="listings" class="py-4">
        <div class="container">
          <div class="row">

            <!-- Listing 1 -->
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card listing-preview">
                <img class="card-img-top" src="assets/img/homes/home-1.jpg" alt="">
                <div class="card-img-overlay">
                  <h2>
                    <span class="badge badge-secondary text-white">'Easy!'</span>
                  </h2>
                </div>
                <div class="card-body">
                  <div class="listing-heading text-center">
                    <h4 class="text-primary">Ranch Chicken Quesadillas</h4>
                    <p>
                      <i class="fas fa-map-marker text-secondary"></i> with corn and jalapeno salsa</p>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-th-large"></i> Spice Level: 1</div>
                    <div class="col-6">
                      <i class="fas fa-car"></i> Cooking Time: 30 min</div>
                  </div>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-bed"></i> Difficulty: 3</div>
                    <div class="col-6">
                      <i class="fas fa-bath"></i> Rating: 4</div>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-12">
                      <i class="fas fa-user"></i>Chef: Kyle Brown</div>
                  </div>
                  <div class="row text-secondary pb-2">
                    <div class="col-6">
                      <i class="fas fa-clock"></i> 2 days ago</div>
                  </div>
                  <hr>
                  <a href="listing.html" class="btn btn-primary btn-block">Let's Cook!</a>
                </div>
              </div>
            </div>

            <!-- Listing 2 -->
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card listing-preview">
                <img class="card-img-top" src="assets/img/homes/home-2.jpg" alt="">
                <div class="card-img-overlay">
                  <h2>
                    <span class="badge badge-secondary text-white">'Spicy!'</span>
                  </h2>
                </div>
                <div class="card-body">
                  <div class="listing-heading text-center">
                    <h4 class="text-primary">Beef and Sherry Steak Diane</h4>
                    <p>
                      <i class="fas fa-map-marker text-secondary"></i> with cremini and Dijon cream sauce</p>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-th-large"></i> Spice Level: 3200</div>
                    <div class="col-6">
                      <i class="fas fa-car"></i> Cooking Time: 1</div>
                  </div>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-bed"></i> Difficulty: 4</div>
                    <div class="col-6">
                      <i class="fas fa-bath"></i> Rating: 2.5</div>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-user"></i> Chef: Mark Hudson</div>
                  </div>
                  <div class="row text-secondary pb-2">
                    <div class="col-6">
                      <i class="fas fa-clock"></i> 5 days ago</div>
                  </div>
                  <hr>
                  <a href="listing.html" class="btn btn-primary btn-block">Let's Cook!</a>
                </div>
              </div>
            </div>

            <!-- Listing 3 -->
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card listing-preview">
                <img class="card-img-top" src="assets/img/homes/home-3.jpg" alt="">
                <div class="card-img-overlay">
                  <h2>
                    <span class="badge badge-secondary text-white">'Summer!'</span>
                  </h2>
                </div>
                <div class="card-body">
                  <div class="listing-heading text-center">
                    <h4 class="text-primary">Chicken Ranch Taco Salad</h4>
                    <p>
                      <i class="fas fa-map-marker text-secondary"></i> with homemade tortilla bowl</p>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-th-large"></i> Spice Level: 2</div>
                    <div class="col-6">
                      <i class="fas fa-car"></i> Cooking Time: 0</div>
                  </div>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-bed"></i> Difficulty: 1</div>
                    <div class="col-6">
                      <i class="fas fa-bath"></i> Rating: 3</div>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-user"></i> Chef: Mark Hudson</div>
                  </div>
                  <div class="row text-secondary pb-2">
                    <div class="col-6">
                      <i class="fas fa-clock"></i> 5 days ago</div>
                  </div>
                  <hr>
                  <a href="listing.html" class="btn btn-primary btn-block">Let's Cook!</a>
                </div>
              </div>
            </div>

            <!-- Listing 4 -->
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card listing-preview">
                <img class="card-img-top" src="assets/img/homes/home-4.jpg" alt="">
                <div class="card-img-overlay">
                  <h2>
                    <span class="badge badge-secondary text-white">'mouth watering!'</span>
                  </h2>
                </div>
                <div class="card-body">
                  <div class="listing-heading text-center">
                    <h4 class="text-primary">Shrimp Pad Thai</h4>
                    <p>
                      <i class="fas fa-map-marker text-secondary"></i> with carrots, roasted peanuts, and cilantro</p>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-th-large"></i> Spice Level: 4</div>
                    <div class="col-6">
                      <i class="fas fa-car"></i> Cooking Time: 20</div>
                  </div>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-bed"></i> Difficulty: 4</div>
                    <div class="col-6">
                      <i class="fas fa-bath"></i> Rating: 2</div>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-user"></i> Chef: Jenny Johnson</div>
                  </div>
                  <div class="row text-secondary pb-2">
                    <div class="col-6">
                      <i class="fas fa-clock"></i> 5 days ago</div>
                  </div>
                  <hr>
                  <a href="listing.html" class="btn btn-primary btn-block">Let's Cook!</a>
                </div>
              </div>
            </div>

            <!-- Listing 5 -->
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card listing-preview">
                <img class="card-img-top" src="assets/img/homes/home-5.jpg" alt="">
                <div class="card-img-overlay">
                  <h2>
                    <span class="badge badge-secondary text-white">'variety'</span>
                  </h2>
                </div>
                <div class="card-body">
                  <div class="listing-heading text-center">
                    <h4 class="text-primary">Cheesy French Onion Chicken Hero</h4>
                    <p>
                      <i class="fas fa-map-marker text-secondary"></i> and roasted potato rounds</p>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-th-large"></i> Spice Level: 5</div>
                    <div class="col-6">
                      <i class="fas fa-car"></i> Cooking Time: 1</div>
                  </div>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-bed"></i> Difficulty: 3</div>
                    <div class="col-6">
                      <i class="fas fa-bath"></i> Rating: 1.5</div>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-user"></i> Chef: Kyle Brown</div>
                  </div>
                  <div class="row text-secondary pb-2">
                    <div class="col-6">
                      <i class="fas fa-clock"></i> 5 days ago</div>
                  </div>
                  <hr>
                  <a href="listing.html" class="btn btn-primary btn-block">Let's Cook!</a>
                </div>
              </div>
            </div>

            <!-- Listing 6 -->
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card listing-preview">
                <img class="card-img-top" src="assets/img/homes/home-6.jpg" alt="">
                <div class="card-img-overlay">
                  <h2>
                    <span class="badge badge-secondary text-white">'simple'</span>
                  </h2>
                </div>
                <div class="card-body">
                  <div class="listing-heading text-center">
                    <h4 class="text-primary">Al Pastor Tacos</h4>
                    <p>
                      <i class="fas fa-map-marker text-secondary"></i> with pineapple and chipotle</p>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-th-large"></i> Spice Level: 3</div>
                    <div class="col-6">
                      <i class="fas fa-car"></i> Cooking Time: 1</div>
                  </div>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-bed"></i> Difficulty: 5</div>
                    <div class="col-6">
                      <i class="fas fa-bath"></i> Rating: 3.5</div>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-user"></i> Chef: Kyle Brown</div>
                  </div>
                  <div class="row text-secondary pb-2">
                    <div class="col-6">
                      <i class="fas fa-clock"></i> 5 days ago</div>
                  </div>
                  <hr>
                  <a href="listing.html" class="btn btn-primary btn-block">Let's Cook!</a>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-12">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#">&laquo;</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">&raquo;</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
@endsection
