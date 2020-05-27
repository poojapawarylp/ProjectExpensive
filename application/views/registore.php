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
            <div id="registore" class="tab-pane fade in active">
				<h1 class="text-center text-success"> Register page</h1>
                    <form action="<?php echo base_url();?>Balances/addsignup" method="post" id="form_register">
                        <div class="form-group">
                            <label for="UserName">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Confirm Password:</label>
                            <input type="password" name="cpassword" class="form-control" id="cpassword">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                       
                    </form></br>
                   <a href="<?php echo base_url();?>Balances/login" id="klick" class="pull-right btn btn-block btn-danger" > Login here  </a>
            </div>
           

          <?php if($this->session->flashdata('registor')){ ?>
              
                <h4 class="text-success">
                  <strong>Success!</strong><?php echo $this->session->flashdata('registor'); ?>
                <h4>
             <?php } ?>
    
          <?php if($this->session->flashdata('email')){ ?>
              
                <h4 class="text-success">
                  <strong class="text-danger"><?php echo $this->session->flashdata('email'); ?></strong>
                <h4>
             <?php } ?>
    



    </div>
   </div>
  </div>
 <script>
 $(function() {
	 $("#form_register").validate({
		 rules:{
			 'name':{
				 required:true,
				 minlength:4
			 },
			 'email':{
				 required:true,
			     email:true,
				
			   },
			   'password':{
				   required:true,
				   minlength:8
			   },
			   'cpassword':{
				   equalTo:"#password"
			   }
		 },
		 messages:{
			 'name':{
				 required:"field is required",
				 minlength:"Choose a username of at least 4 letters!"
			 },
			 'email':{
				  required:"field is required",
				  email:"enter valid email",
				 
				  
			 },
			 'password':{
				 required:"password is required",
				 minlength:"least 8 charcters are required"
			 },
			 'cpassword':{
				 equalTo:"the two password dont match"
			 }
		 },
		  submitHandler: function(form) {
      form.submit();
    }
	 });
	 
 });
</script> 

</body>
</html>

