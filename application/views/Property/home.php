<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
    <script src="https://kit.fontawesome.com/64b2f2f07b.js" crossorigin="anonymous"></script>
  </head>

<body>
    <!-- NavBar-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid ms-auto">
          <a class="navbar-brand" href="#"><i class="fab fa-accusoft"></i> Property</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02 ml-4">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item ">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href=<?php echo base_url('Property/about'); ?>>About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url('Property/contact')?>">Contact Us</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    
      <!--Grid -->
 <div class="container-fluid">
    <div class="row ">
      <div class="col-12" style="background-color:grey; border:1px solid;">
      Header
      </div>
    </div>
    
    <div class="row">
      <div class="col-3" Style="background-color:yellow; border:1px solid;">
        2of 1
      </div>
      <div class="col-lg-9"Style=" background-color:yellow;border:1px solid;">
        2 of 2
      </div>
    </div>
   
    <div class="row">
      <div class="col-3" Style="background-color:red;border:1px solid;">
        3of 1
      </div>
      <div class="col-lg-9"Style=" background-color:red;border:1px solid;">
        3 of 2
      </div>
    </div>
    
    <div class="row">
      <div class="col-3" Style="background-color:green;border:1px solid;">
        4of 1
      </div>
      <div class="col-lg-9" Style="background-color:green;border:1px solid;">
        4 of 2
      </div>
    </div>
    
    <div class="row">
      <div class="col-12"Style="background-color:grey;border:1px solid;">
        Footer
      </div>
    </div>
  </div>
</body>
</html>
