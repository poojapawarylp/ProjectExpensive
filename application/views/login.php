<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://jqueryvalidation.org/files/lib/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
  <style type="text/css">
   body{
    background-image: url( '/codeigniter12/images/money7.jpg');
    background-repeat:no-repeat;
    background-size:1500px 1000px;
  }
  form .error {
  color: #ff0000;
}
  
  </style>
  
</head>
<body>
<div class="container" style="margin-top: 5%;">
    <div class="row">
        
        <div class="col-md-4 ">
            
            <div>
			    <h1 class="text-center text-success">Login page</h1>
                <form action="<?php echo base_url();?>Balances/addlogin" method="post">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password" class="form-control"required>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button></br>
                    <button type="submit" class=" pull-right btn-link"><a href="www.google.com">Forget password</a></button>
				</form>
                <a href="<?php echo base_url();?>Balances/signup" id="demo" class="pull-right btn btn-block btn-danger" > Register here </a>
		    </div>

      
          <?php if($this->session->flashdata('email')){ ?>
              
                <h4 class="text-success">
                  <strong class="text-danger"><?php echo $this->session->flashdata('email'); ?></strong>
                <h4>
             <?php } ?>
    



    </div>
   </div>
  </div>
 <script>
 
</body>
</html>

