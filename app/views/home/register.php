<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<div class="container">
<div class="row">
 <div class="col-md-5">
 <!-- <form action="postRegister" method="post">


    


</form> -->

<form action="postRegister" method="post" >
<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">UserName</label>
    <input type="text"  name="username" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Name">
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Email">
    </div>

    <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Password">
    </div>

    <div class="mb-3">
  
    <input  class="btn btn-info " type="submit"  class="form-control" id="formGroupExampleInput2" >
    </div>
 
  </form>
 </div>
</div>
</div>

</body>
</html>