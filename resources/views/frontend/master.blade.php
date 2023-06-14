<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="{{ asset('/backend/assets/css/style.css') }}">
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark header-section">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ul-list">
            <li class="nav-item active" data-target="all">ALL</li>
            @foreach ($catagoryes as $row)
            <li class="nav-item" data-target="{{ $row->data_target }}">{{ $row->name }}</li>
            @endforeach
            <!-- <li data-target="car">CAR</li>
            <li class="nav-item" data-target="tv">TV</li>
            <li class="nav-item" data-target="honda">HONDA</li>
            <li class="nav-item" data-target="phone">PHONE</li> -->
          </ul>

        </div>
      </div>
    </nav>
    <!---banner section start-->
    <div class="banner-section py-5">
        <div class="container">
            <div class="row banners">
            @foreach ($subcatagorys as $row )

              <div data-id="{{$row->catagory->data_target}}" class="col-lg-3 background-banner">
                  <a href="">
                    <div class="card">
                      <div class="img-div">
                          <img src="{{ asset('/subcatagory/'.$row->image) }}" alt="">
                      </div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $row->name }}</h5>
                      <h6 class="card-subtitle mb-2 text-muted ">$ <strong>{{ $row->price }}</strong> </h6>
                      <p class="card-text">{{ $row->comment }}</p>
                      <button id="buttons">Buy Now</button>
                    </div>
                  </div>
                  </a>
              </div>
              @endforeach


                <!-- <div data-id="phone" class="col-lg-3">
                    <div class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/p1.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">I phone</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>


                <div data-id="flower" class="col-lg-3">
                    <div  class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/f1.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Rose</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>


                <div data-id="honda" class="col-lg-3">
                    <div class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/h1.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">R15 v-4</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>


                <div data-id="tv" class="col-lg-3">
                    <div  class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/t1.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>


                <div  data-id="car" class="col-lg-3">
                    <div class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/c2.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>


                <div data-id="phone" class="col-lg-3">
                    <div  class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/p2.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>



                <div data-id="honda" class="col-lg-3">
                    <div class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/h1.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>


                <div data-id="tv" class="col-lg-3">
                    <div  class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/t2.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>


                <div data-id="flower" class="col-lg-3">
                    <div  class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/f2.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>


                <div data-id="honda"class="col-lg-3">
                    <div class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/h3.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>



                <div data-id="phone" class="col-lg-3">
                    <div class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/p3.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>

                <div data-id="car" class="col-lg-3">
                    <div  class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/c3.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>

                <div data-id="flower" class="col-lg-3">
                    <div  class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/f3.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>


                <div data-id="tv" class="col-lg-3">
                    <div  class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/t3.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>


                <div data-id="tv" class="col-lg-3">
                    <div  class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/t4.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>


                <div data-id="flower" class="col-lg-3">
                    <div  class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/f4.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>


                <div data-id="car" class="col-lg-3">
                    <div  class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/c4.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>

                <div data-id="phone" class="col-lg-3">
                    <div class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/p4.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>

                <div data-id="honda" class="col-lg-3">
                    <div class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/h4.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>

                <div  data-id="honda" class="col-lg-3">
                    <div class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/h5.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>

                <div data-id="phone" class="col-lg-3">
                    <div class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/p5.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>

                <div data-id="car" class="col-lg-3">
                    <div  class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/c5.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>

                <div data-id="flower" class="col-lg-3">
                    <div  class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/f5.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>
                <div data-id="tv" class="col-lg-3">
                    <div  class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/t5.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>
                <div data-id="honda"  class="col-lg-3">
                    <div class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/h9.jpg" alt="">
                        </div>
                        <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>

                <div data-id="phone" class="col-lg-3">
                    <div  class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/p6.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>

                <div data-id="honda" class="col-lg-3">
                    <div class="card">
                        <div class="img-div">
                            <img src="{{ asset('/backend/assets/img/') }}/h6.jpg" alt="">
                        </div>                      <div class="card-body">
                        <h5 class="card-title">Hundai</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">$10000</h6>
                        <p class="card-text">very expennsive car</p>
                        <button type="submit">Buy Now</button>
                      </div>
                    </div>
                </div>   -->
            </div>
        </div>
    </div>

    <!---banner section end-->

    <div class="banner-section">

    </div>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="{{ asset('/backend/assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>