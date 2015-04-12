<!doctype HTML>
<html>
	<head>
    	<title>Aaruush SignUp</title>
 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="css/srm.css" />
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">    
    </head>
    <body> 
    <div class="container-fluid">
       <br>
        <br>
        <br>

    <div class="row">
		<div class="col-sm-5">
        <form role="form" class="contain" method="post" id="form">
    <label for="exampleInputEmail1">Name</label>
	<div class="form-group">
    <div class="row">
   <div class="col-sm-6" id="f1"> <input type="text" class="form-control" id="first" placeholder="First" name="first"></div>
    <div class="col-sm-6" id="f11"><input type="text" class="form-control" id="last" placeholder="Last" name="last"></div>
   </div>
   </div>
   <div id="1" style="color:red;"></div>
   <div class="form-group" data-toggle="popover" data-trigger="focus" title="Enter Register Number" data-content="Unique College Id Number Given to each Student" id="f2">
   <label>Registration Number</label>
   <input type="text" class="form-control" id="regno" name="regno">
   </div>
   <div  id="2" style="color:red;"></div>
   <div class="form-group" data-toggle="popover" data-trigger="focus" title="Enter Valid Email ID" data-content="Use Valid Email Address As Your Activation Code Will Be Sent There" id="f3">
   	<label>Enter Your Email Address</label>
    <input type="email" class="form-control" id="email" name="email">
   </div>
   <div  id="3" style="color:red;"></div>
   <div class="form-group"  data-toggle="popover" data-trigger="focus" title="Enter Valid Password" data-content="Use at least 8 characters. Don’t use a password from another site, or something too obvious like your pet’s name" id="f4">
   <label>Create A Password</label>
   <input type="password" class="form-control" id="password" min="8" name="pass1">
   </div>
   <div id="3" style="color:red;"></div>
   <div class="form-group">
   <label>Confirm Your Password</label>
   <input type="password" class="form-control" id="password2" min="8" name="pass2">
   </div>
   <div id="4" style="color:red;"></div>
   <div class="form-group" id="f5">
   	<label>Category</label>
    <select class="form-control" id="cat" name="cat">
    	<option id="del" value="a">Choose</option>
    	<option value="PR">PR</option>
        <option value="Events">Events</option>
        <option value="Workshops">Workshop</option>
    </select>
   </div>
      <div id="5" style="color:red;"></div>
   <div class="form-group">
   	<label>Sub Category</label>
    <select class="form-control" id="subcat" name="subcat">
	<option id="del" value="a">Choose</option>
    </select>
   </div>
   <div id="6" style="color:red;"></div>
   <div  id="8" style="color:red;"></div>
   <div class="form-group">
   <label class="form-inline">
   	<input type="checkbox" value="Agree" class="form-control" id="check" name="check">&nbsp;I Agree to <a>Terms</a>And <a>Conditions</a>
   </label>
 
   </div>
   <div  id="9" style="color:red;"></div>
   <div class="row">
   <div class="col-sm-8"></div>
   <div class="col-sm-2">
   <div class="form-group">
   		<input type="submit" class="btn btn-primary" value="Submit" id="submit">
   </div>
   </div>
   </div>
   </form>
    </div>
        <div class="col-sm-5">
        	<div align="center">
        	<canvas id="myChart" width="400" height="400">
            </canvas>
            <h2><small>Uptill Now Joined</small></h2>
            <h2><div id="joined"></div></h2>
        </div>
        </div>
  
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/prog.js"></script>
     <script src="js/des.js"></script>
	 <script src="js/intlTelInput.min.js"></script>
     <script src="js/submit.js"></script>
     <script src="js/Chart.min.js"></script>
     <script src="js/countUp.min.js"></script>

     </body>
</html>