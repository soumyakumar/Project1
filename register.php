<html>
<head>
<title>Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</lorem>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</head>
<body style="background-color:lightgreen;">
<br><br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-2">
      
    </div>
    <div class="col-sm-8">
      
	<form action="reg.php" method="post">

	<div class="card text-center">
  	<div class="card-header">
    		Registration
  	</div>
  	<div class="card-body">
  	
	<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Name</label>
    	<div class="col-sm-9">
      	<input type="text" class="form-control" id="inputEmail3"  required name="username">
    	</div>
  	</div>
	<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
    	<div class="col-sm-9">
      	<input type="email" class="form-control" id="inputEmail3"  required name="email">
    	</div>
  	</div>
  	<div class="row mb-3">
    	<label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
    	<div class="col-sm-9">
      	<input type="password" class="form-control" id="inputPassword3"  required name="password"> 
    	</div>
  	</div>
	<div class="row mb-3">
    	<label for="inputPassword3" class="col-sm-3 col-form-label">Confirm Password</label>
    	<div class="col-sm-9">
      	<input type="password" class="form-control" id="inputPassword3"  required>
    	</div>
  	</div>
	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
	<input type="submit" name="register" value="REGISTER" class="btn btn-primary btn-lg"></button>
	</div>

	</form>
        </div>

  	</div>
	</div>

    <div class="col-sm-2">
      
    </div>
  </div>
</div>

</body>
</html>

