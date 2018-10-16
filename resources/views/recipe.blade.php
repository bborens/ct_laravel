@extends('layouts.app')

@section('content')
<section id="showcase-inner" class="py-5 text-white">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12">
              <h1 class="display-4">Ranch Chicken Quesadilla</h1>
              <p class="lead">
                <i class="fas fa-map-marker"></i> with corn and jalapeno salsa</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Breadcrumb -->
      <section id="bc" class="mt-3">
        <div class="container">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Homepage</a>
              </li>
              <li class="breadcrumb-item">
                <a href="listings.html">Recipes</a>
              </li>
              <li class="breadcrumb-item active">Ranch Chicken Quesadilla</li>
            </ol>
          </nav>
        </div>
      </section>

      <!-- Listing -->
      <section id="listing" class="py-4">
        <div class="container">
          <h2>Basic Information</h2><br><hr>



          <div class="row">
            <div class="col-md-9">
              <!-- Home Main Image -->
              <img src="assets/img/homes/home-1.jpg" alt="" class="img-main img-fluid mb-3">
              <!-- Thumbnails -->
              <div class="row mb-5 thumbs">
                <div class="col-md-2">
                  <a href="assets/img/homes/home-inside-1.jpg" data-lightbox="home-images">
                    <img src="assets/img/homes/home-inside-1.jpg" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="assets/img/homes/home-inside-2.jpg" data-lightbox="home-images">
                    <img src="assets/img/homes/home-inside-2.jpg" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="assets/img/homes/home-inside-3.jpg" data-lightbox="home-images">
                    <img src="assets/img/homes/home-inside-3.jpg" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="assets/img/homes/home-inside-4.jpg" data-lightbox="home-images">
                    <img src="assets/img/homes/home-inside-4.jpg" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="assets/img/homes/home-inside-5.jpg" data-lightbox="home-images">
                    <img src="assets/img/homes/home-inside-5.jpg" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="assets/img/homes/home-inside-6.jpg" data-lightbox="home-images">
                    <img src="assets/img/homes/home-inside-6.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
              <!-- Fields -->
              <div class="row mb-5 fields">
                <div class="col-md-6">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item text-secondary">
                      <i class="fas fa-money-bill-alt"></i> Cook Time:
                      <span class="float-right">25-35 min</span>
                    </li>
                    <li class="list-group-item text-secondary">
                      <i class="fas fa-bed"></i> Cook Within:
                      <span class="float-right"> 5 days</span>
                    </li>
                    <li class="list-group-item text-secondary">
                      <i class="fas fa-bath"></i> Difficulty:
                      <span class="float-right">Easy</span>
                    </li>
                    <li class="list-group-item text-secondary">
                      <i class="fas fa-car"></i> Rating:
                      <span class="float-right">4.3
                      </span>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item text-secondary">
                      <i class="fas fa-th-large"></i> Spice:
                      <span class="float-right">2</span>
                    </li>
                    <li class="list-group-item text-secondary">
                      <i class="fas fa-square"></i> Items:
                      <span class="float-right">9
                      </span>
                    </li>
                    <li class="list-group-item text-secondary">
                      <i class="fas fa-calendar"></i> Pubilshed Date:
                      <span class="float-right">8/30/2018</span>
                    </li>
                    <li class="list-group-item text-secondary">
                      <i class="fas fa-bed"></i> Chef:
                      <span class="float-right">Bryan Borenstein
                      </span>
                    </li>
                    <br>
                  </ul>






                </div>
              </div>

              <!-- Description -->
              <div class="row mb-5">
                <div class="col-md-12">
                        A quesadilla is a tortilla, usually a corn tortilla but also sometimes made with a flour tortilla; particularly in northern Mexico and the United States, which is filled with cheese and then grilled. Other items, such as a savoury mixture of spices or vegetables, are often added, then they are cooked on a griddle
                </div>
                <!-- <a href="listings.html" class="btn btn-light mb-4">Back To Recipes</a> -->
              </div>

               <!-- Fields -->
               <h2>Ingredient Box</h2><br><hr>
               <div class="row mb-5 fields">


                    <div class="col-md-6">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item text-secondary">
                          <i class="fas fa-money-bill-alt"></i> Boneless Skinless Chicken Breasts:
                          <span class="float-right">2</span>
                        </li>
                        <li class="list-group-item text-secondary">
                          <i class="fas fa-bed"></i> Ear of Corn:
                          <span class="float-right"> 1</span>
                        </li>
                        <li class="list-group-item text-secondary">
                          <i class="fas fa-bath"></i> Jalapeno Pepper
                          <span class="float-right">1</span>
                        </li>
                        <li class="list-group-item text-secondary">
                          <i class="fas fa-car"></i> Cilantro:
                          <span class="float-right">1.25 oz
                          </span>
                        </li>
                        <li class="list-group-item text-secondary">
                                <i class="fas fa-car"></i> Sour Cream:
                                <span class="float-right">1 oz
                                </span>
                              </li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item text-secondary">
                          <i class="fas fa-th-large"></i> Lime:
                          <span class="float-right">1</span>
                        </li>
                        <li class="list-group-item text-secondary">
                          <i class="fas fa-square"></i> Powdered Ranch Seasoning:
                          <span class="float-right">1 tsp
                          </span>
                        </li>
                        <li class="list-group-item text-secondary">
                          <i class="fas fa-calendar"></i> Small Flour Tortillas:
                          <span class="float-right">6</span>
                        </li>
                        <li class="list-group-item text-secondary">
                          <i class="fas fa-bed"></i> Shredded Chedder Cheese
                          <span class="float-right">2 oz
                          </span>
                        </li>
                        <li class="list-group-item text-secondary">
                                <i class="fas fa-car"></i> Null:
                                <span class="float-right">Null
                                </span>
                              </li>
                        <br>
                      </ul>



            </div>

      </section>

      <section id="listing" class="py-4">
            <div class="container">
              <h2>Before You Cook</h2><br>
              <h3>Check Box</h3><hr>

              <div class="col-md-6">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item text-secondary">
                        <i class="fas fa-money-bill-alt"></i> Prehead oven to 400 degrees
                        <span class="float-right">
                            <form action="/action_page.php" method="get">
                                <input type="checkbox" name="step" value="preheat-oven">
                            </form>
                        </span>
                      </li>
                      <li class="list-group-item text-secondary">
                        <i class="fas fa-bed"></i> Rinse produce and pat dry
                        <span class="float-right">
                            <form action="/action_page.php" method="get">
                                <input type="checkbox" name="step" value="rinse-produce">
                            </form>
                        </span>
                      </li>
                      <li class="list-group-item text-secondary">
                        <i class="fas fa-bath"></i> Prepare a baking sheet with foil and cooking spray.
                        <span class="float-right">
                            <form action="/action_page.php" method="get">
                            <input type="checkbox" name="step" value="baking-sheet">
                          </form>
                        </span>
                      </li>
          </div>



    </section>


      <!-- Inquiry Modal -->
      <div class="modal fade" id="inquiryModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="inquiryModalLabel">Save Recipe to Dashboard</h5>
              <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="property_name" class="col-form-label">Property:</label>
                  <input type="text" name="listing" class="form-control" value="45 Drivewood Cirlce" disabled>
                </div>
                <div class="form-group">
                  <label for="name" class="col-form-label">Name:</label>
                  <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="email" class="col-form-label">Email:</label>
                  <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="phone" class="col-form-label">Phone:</label>
                  <input type="text" name="phone" class="form-control">
                </div>
                <div class="form-group">
                  <label for="message" class="col-form-label">Message:</label>
                  <textarea name="message" class="form-control"></textarea>
                </div>
                <hr>
                <input type="submit" value="Send" class="btn btn-block btn-secondary">
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection
