<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
.form{
    color:white;
    background-color:#92A9BD;
    padding-top:20px;
}
h1{
    text-align:center;
    margin:40px 0 10px 0;
    color:black;
}
p{
    text-align:center;
    color:black;
}
.heading{
    background-color:white;

}

        </style>
</head>
<body>
<div class="heading">
        <h1>Feel Free to Contact Us </h1>
        <p><em>Will respond to you Shortly<em></p>
    </div> 
<form action="validate" method="POST">
      
<div class="form">
     <div class="mb-3 mt-3 row">
        <div class="offset-4 col-4">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
  </div>
  
    <div class="mb-3 mt-3 row">
        <div class="offset-4 col-4">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
  </div>
  
  <div class="mb-3 mt-3 row">
        <div class="offset-4 col-4">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        </div>
  </div>
  
  <div class="mb-3 mt-3 row">
        <div class="offset-4 col-4">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" class="form-control" id="ph" placeholder="Enter phone" name="phone">
        </div>
  
   <div class="mb-3 mt-3 row">
        <div class="offset-4 col-4">
            <label for="msg">Message:</label>
            <textarea class="form-control" rows="4" id="msg" name="text-area"></textarea>
        </div>
    </div>
  
  <div class="mb-3 mt-3 row">
        <div class="offset-4 col-3">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me</label>
         </div>    
            <div class="col-3">
            <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
       
  </div>
    
      </div>
</form>
</body>
</html>