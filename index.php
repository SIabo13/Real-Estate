<?php $secondary = false ;?> 

<?php include 'includes/header.php';?>

<?php include 'includes/nav.php';?>
  <section id="main_header">
    <div id="m-header-container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/house1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/realestate2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/mansion_with_pool.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <div class="control-box">
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="overlay_header"></div>

    </div>

    <div class="container" id="main_header_row">

<div class="row">
  <div class="col">
    <h1 class="text-left hero_header">Real Estate</h1>
    <h2 class="text-light"><em>I am a subheader</em></h2>
    <button class="btn btn-success">Click</button>
  </div>
</div>
</div>
</section>

    </div>
    <!----- NavBar ------->

    

    


  <section id="section-1">
    <h2 class="text-center">Property Search</h2>
    <form action="">
      <div class="container">

        <div class="row">

          <div class="col-md-2">
            <div class="form-group">
              <input class="search-inputs" type="text" placeholder="Zip Code">
            </div>

          </div>


          <div class="col-md-2">
            <div class="form-group">
              <select name="" id="">
                <option value="label">House/Condo</option>
                <option value="house">House</option>
                <option value="multifamily">Multifamily</option>
                <option value="rental">Rental</option>
              </select>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <select name="" id="">
                <option value="bedrooms">Bedrooms</option>
                <option value="bedroom1">1+</option>
                <option value="bedroom2">2+</option>
                <option value="bedroom3">3+</option>
              </select>
            </div>
          </div>


          <div class="col-md-2">
            <div class="form-group">
              <select name="" id="">
                <option value="label">Bathroom</option>
                <option value="bathroom1">1+</option>
                <option value="bathroom2">2+</option>
                <option value="bathroom3">3+</option>
              </select>
            </div>
          </div>


          <div class="col-md-2">
            <div class="form-group">
              <input class="search-inputs" type="text" placeholder="Min.Price">
            </div>

          </div>

          <div class="col-md-2">
            <div class="form-group">
              <input class="search-inputs" type="text" placeholder="Max.Price">
            </div>

          </div>



        </div>
        <div class="row" id="s-submit">
          <div class="col-md-2">

            <button class="search-inputs" type="submit">Submit</button>
          </div>
        </div>
    </form>
    </div>
  </section>

  <section id="feature_sec">
    <div class="container">
      <div class="row">

        <div class="col-md-5">
          <h2 class="fp-title">
            <span><em>Feature</em></span>
            <br>
            Properties
          </h2>
          <div class="fp-price">$9,995,000</div>
          <div class="fp-address">
            "671 Main Street"
            <br>
            "New York NY 10001"
          </div>
          <button class="btn btn-success">VIEW DETAILS</button>
        </div>



        <div class="col-md-7">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/house2.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/house1.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/realestate1.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="section-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 cta-col">
          <img src="images/home_interior.jpeg" alt="">
          <a href="" class="cta">
            <h2>APPRAISAL</h2>
          </a>
          
          <div class="overlay">
        </div>
        </div>
        
        <div class="col-md-6 cta-col">
          <a href="" class="cta">
            <img src="images/happy-couple.jpeg" alt="">
            <h2>BUYERS</h2>
          </a>
          <div class="overlay"></div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-6 cta-col">
          <a href="" class="cta">
            <img src="images/deal_handshake.jpeg" alt="">
            <h2>LIST WITH US</h2>
          </a>
          <div class="overlay"></div>
        </div>
        <div class="col-md-6 cta-col">
          <a href="" class="cta">
            <img src="images/family_outside_house.jpeg" alt="">
            <h2>SELLERS</h2>
          </a>
          <div class="overlay"></div>
        </div>
      </div>
    </div>

  </section>

  <section id="section-5" class="bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="fp-title text-light">
            <span><em>Meet</em></span>
            <br>
            John Doe
          </h2>
        </div>
        <div class="col-md-6">
          <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Rem dolor minima, laboriosam itaque hic reprehenderit amet explicabo unde placeat
            officiis odio doloremque, optio atque? Optio alias provident dicta officia dolorem?
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Rem dolor minima, laboriosam itaque hic reprehenderit amet explicabo unde placeat
            officiis odio doloremque, optio atque? Optio alias provident dicta officia dolorem?
          </p>
          <button class="btn btn-success" href="about.html">READ MORE</button>
        </div>
      </div>
    </div>
  </section>

  <section id="section-6">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/house2.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/house1.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/realestate1.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-5">
          <h2 class="fp-title text-light">
            <span><em>See our</em></span>
            <br>
            Testimonials
          </h2>
          <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Labore, quos consectetur. Dolorum natus itaque cumque soluta accusantium,
            officiis ex ipsum reprehenderit.
            Voluptatum nostrum amet aspernatur odit fugit totam, consequatur alias!
          </p>
          <button class="btn btn-success">READ MORE</button>
        </div>
      </div>
    </div>
  </section>


  <section id="section-7" class="bg-dark">
    <div class="container">
      <h2 class="fp-title text-light">
        <span><em>LASTEST</em></span>
        <br>
        NEWS
      </h2>
      <div class="row">
        <div class="col-md-4">
          <div class="ln-date text-light text-center">02-17-2020</div>
          <h3 class="ln-title text-light text-center">My Latest Articles</h3>
          <div class="ln-img">
            <a href="#">
              <img src="images/pexels-photo-2287310.jpeg" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="ln-date text-light text-center">02-17-2020</div>
          <h3 class="ln-title text-light text-center">My Latest Articles</h3>
          <div class="ln-img">
            <a href="#"><img src="images/realestate2.jpg" alt=""></a>
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="ln-date text-light text-center">02-17-2020</div>
          <h3 class="ln-title text-light text-center">My Latest Articles</h3>
          <div class="ln-img">
           <a href="#"><img src="images/realestate1.jpg" alt=""></a> 
          </div>
        </div>
      </div>
    </div>
  </section>

 
  
  <?php include 'includes/footer.php' ?>