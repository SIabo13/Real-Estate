<nav class="navbar navbar-expand-lg navbar-dark ">
    <a class="navbar-brand" href="#">JD REAL ESTATE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php if($secondary){echo '../';}?>index.php">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php if(!$secondary){echo 'pages/';}?>testi.php">TESTIMONIALS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php if(!$secondary){echo 'pages/';}?>about.php">ABOUT</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="<?php if(!$secondary){echo 'pages/';}?>page_template.php">PAGE TEMPLATE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php if(!$secondary){echo 'pages/';}?>morgage_calc.php">MORGAGE CALCULATOR</a>
        </li> -->
      </ul>

      </ul>
    </div>
  </nav>