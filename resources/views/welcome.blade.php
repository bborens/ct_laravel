@extends('layouts.app')

@section('content')

 <!-- Showcase -->
 <section id="showcase">
        <div class="container text-center">
          <div class="home-search p-5">
            <div class="overlay p-5">
              <h1 class="display-4 mb-4">
                Eating Healthy Has Never Been Easier!
            </h1>
              <p class="lead">Get paid to help others eat healthy by submitting your personal recipes and creating cooking guides with out Web App!</p>
              <div class="search">
                <form action="search.html">
                  <!-- Form Row 1 -->
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label class="sr-only">Keywords</label>
                      <input type="text" name="keywords" class="form-control" placeholder="Keyword (Mexican, pasta, vegan etc)">
                    </div>

                    <div class="col-md-4 mb-3">
                            <label class="sr-only">Rating</label>
                            <select name="rating" class="form-control">
                              <option selected="true" disabled="disabled">Rating (minimum)</option>
                              <option value="1">1 Star</option>
                              <option value="2">2 Stars</option>
                              <option value="3">3 Stars</option>
                              <option value="4">4 Stars</option>
                              <option value="5">5 Stars</option>

                            </select>
                          </div>

                    <div class="col-md-4 mb-3">
                      <label class="sr-only">Difficulty</label>
                      <select name="difficulty" class="form-control">
                        <option selected="true" disabled="disabled">Difficulty</option>
                        <option value="1">Easy</option>
                        <option value="2">Intermediate</option>
                        <option value="3">Difficult</option>

                      </select>
                    </div>
                  </div>
                  <!-- Form Row 2 -->
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label class="sr-only">Catagories</label>
                      <select name="Catagories" class="form-control">
                        <option selected="true" disabled="disabled">Catagories (All)</option>
                        <option value="1">Mexican</option>
                        <option value="2">Pasta</option>
                        <option value="3">Vegetarian</option>
                        <option value="4">Steak</option>
                        <option value="5">Fish</option>
                        <option value="6">Non-Dairy</option>
                        <option value="7">Chicken</option>
                        <option value="8">Lunch</option>
                        <option value="9">Smoothies</option>
                        <option value="10">Desserts</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <select name="price" class="form-control" id="type">
                        <option selected="true" disabled="disabled">Cooking Time</option>
                        <option value="25">20-30 mins</option>
                        <option value="35">30-40 mins</option>
                        <option value="45">40-50 mins</option>
                        <option value="55">50-60 mins</option>

                      </select>
                    </div>
                  </div>
                  <button class="btn btn-secondary btn-block mt-4" type="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Listings -->
      <section id="listings" class="py-5">
        <div class="container">
          <h3 class="text-center mb-3">Latest Recipes</h3>
          <div class="row">
            <!-- Listing 1 -->
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="card listing-preview">
                <img class="card-img-top" src="assets/img/homes/home-1.jpg" alt="">
                <div class="card-img-overlay">
                  <h2>
                    <span class="badge badge-secondary text-white">'DELICIOUS'!</span>
                  </h2>
                </div>
                <div class="card-body">
                  <div class="listing-heading text-center">
                    <h4 class="text-primary">Mexican Street Corn Flatbread</h4>
                    <p>
                      <i class="fas fa-map-marker text-secondary"></i> with Chihuahua cheese and lime</p>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-th-large"></i> Spice Level: 2</div>
                    <div class="col-6">
                      <i class="fas fa-car"></i> Cooking Time: 40-50 min</div>
                  </div>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-bed"></i> Difficulty: 1</div>
                    <div class="col-6">
                      <i class="fas fa-bath"></i> Rating: 5</div>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-user"></i> Chef: Bryan Venator</div>
                  </div>
                  <div class="row text-secondary pb-2">
                    <div class="col-6">
                      <i class="fas fa-clock"></i> 9 days ago</div>
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
                    <span class="badge badge-secondary text-white">'Tasty!'</span>
                  </h2>
                </div>
                <div class="card-body">
                  <div class="listing-heading text-center">
                    <h4 class="text-primary">Orange Chicken Lettuce Wraps</h4>
                    <p>
                      <i class="fas fa-map-marker text-secondary"></i> with roasted peanuts</p>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-th-large"></i> Spice Level: 1 </div>
                    <div class="col-6">
                      <i class="fas fa-car"></i> Cooking Time: 20-30 min</div>
                  </div>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-bed"></i> Difficulty: 1</div>
                    <div class="col-6">
                      <i class="fas fa-bath"></i> Rating: 4</div>
                  </div>
                  <hr>
                  <div class="row py-2 text-secondary">
                    <div class="col-6">
                      <i class="fas fa-user"></i> Chef: Megan Borenstein</div>
                  </div>
                  <div class="row text-secondary pb-2">
                    <div class="col-6">
                      <i class="fas fa-clock"></i> 3 days ago</div>
                  </div>
                  <hr>
                  <a href="listing.html" class="btn btn-primary btn-block">Let's Cook!</a>
                </div>
              </div>
            </div>

            <!-- Listing 3 -->
            <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card listing-preview">
                      <img class="card-img-top" src="assets/img/homes/home-2.jpg" alt="">
                      <div class="card-img-overlay">
                        <h2>
                          <span class="badge badge-secondary text-white">'Juicy!'</span>
                        </h2>
                      </div>
                      <div class="card-body">
                        <div class="listing-heading text-center">
                          <h4 class="text-primary">Provolone Stuffed Mini Meatloaves</h4>
                          <p>
                            <i class="fas fa-map-marker text-secondary"></i> with spicy green beans and peppers</p>
                        </div>
                        <hr>
                        <div class="row py-2 text-secondary">
                          <div class="col-6">
                            <i class="fas fa-th-large"></i> Spice Level: 1 </div>
                          <div class="col-6">
                            <i class="fas fa-car"></i> Cooking Time: 20-30 min</div>
                        </div>
                        <div class="row py-2 text-secondary">
                          <div class="col-6">
                            <i class="fas fa-bed"></i> Difficulty: 1</div>
                          <div class="col-6">
                            <i class="fas fa-bath"></i> Rating: 4</div>
                        </div>
                        <hr>
                        <div class="row py-2 text-secondary">
                          <div class="col-6">
                            <i class="fas fa-user"></i> Chef: Beau Borenstein</div>
                        </div>
                        <div class="row text-secondary pb-2">
                          <div class="col-6">
                            <i class="fas fa-clock"></i> 3 days ago</div>
                        </div>
                        <hr>
                        <a href="listing.html" class="btn btn-primary btn-block">Let's Cook!</a>
                      </div>
                    </div>
                  </div>



          </div>
        </div>
      </section>

      <section id="services" class="py-5 bg-secondary text-white">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-4">
              <i class="fas fa-comment fa-4x mr-4"></i>
              <hr>
              <h3>Open Source</h3>
              <p>An open, transparent web app to help families and individuals eat healthy no matter what the budget.</p>
            </div>
            <div class="col-md-4">
              <i class="fas fa-home fa-4x mr-4"></i>
              <hr>
              <h3>Healthy Eating</h3>
              <p>Change your diet, change your life! Feel the positive benefits of eating healthy without breaking your wallet. </p>
            </div>
            <div class="col-md-4">
              <i class="fas fa-suitcase fa-4x mr-4"></i>
              <hr>
              <h3>Fresh Variety</h3>
              <p>A fresh variety of in season recipes help the community share and enjoy across the World.</p>
            </div>
          </div>
        </div>
      </section>

@endsection
