<?php $secondary = TRUE; 
$page_title = 'Testimonial';
$page_subtitle = 'What Clients Are Saying';
?>


<?php include '../includes/secondary_header.php'?>



  


  <section id="testimonial_section-2">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
        </ol>
      </nav>
      <h2 class="fp-title ">
        What Clients Are Saying
      </h2>
      <div class="row">


        <?php 
        while($row = mysqli_fetch_assoc($result)){ ?>
          
          <div class="col-md-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="../assets/images/<?php echo $row['img'] ?>" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['test_name'] ?></h5>
                  <p><?php $row['test_ID'] ?></p>
                  <p class="card-text"><?php 
                  $string = $row['testimonial']; 
                  if (strlen($string) > 100) {
                    echo substr($string, 0, 100);
                } else {
                    echo $string;
                }

                  ?></p>
                  <a href="single_test.php?id=<?php echo $row['test_ID']; ?>">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php }
        
        
        ?>


      </div>

      

      
    </div>
  </section>

  <section id="testimonial-section-3">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-center">START YOUR LISTING</h2>
          <p>Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Velit voluptatum eaque assumenda qui
            nobis repellendus suscipit vero reiciendis iste architecto
            labore, perspiciatis consequatur
            facilis eos error, ex cupiditate deserunt explicabo?
          </p>
          <button class="btn btn-success">CONTACT ME</button>
        </div>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php';?>