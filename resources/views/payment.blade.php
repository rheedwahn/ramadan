
<!DOCTYPE html>
<html>
<head>
	<meta name="description" content="This is for sale">
    <meta name="author" content="Adenekan wonderful">

    <title>payment</title>
    <link rel="icon" type="{{ asset('ramadhan/image/jpg') }}" href="img/07.jpg">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('ramadhan/css/bootstrapf.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('ramadhan/css.bootstrap.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('ramadhan/css/font-awesome.min.css') }}">
    <!-- custom  styles for my site -->
    <link rel="stylesheet" type="text/css" href="{{ asset('ramadhan/css/payment.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ramadhan/css/mdb.css') }}">
    <link rel="stylesheet" type="text/css" href="#">
    <script src="{{ asset('ramadhan/js/mdb.js') }}"></script>
     <script src="{{ asset('ramadhan/js/jquery.js') }}"></script>
        <script src="{{ asset('ramadhan/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('ramadhan/js/boots.js') }}"></script>
</head>
<body>
	  <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark inverse fixed-top">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation" style="visibility: hidden;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav navbar-right ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="#contact">CONTACT</a>
                    </li> 
                    
                       
                </ul>
            </div>
        </div>
    </nav>
<br>
    <section id="b-b-g">
    	<center>
    		<h1 class="erm">Donate An help In Rammadam Kareem.</h1><br><br>
    	</center>
    </section>
    <section class="der">
    	<div class="row">
    		<div class="container">
    			<div class="col-md-5">
    			<h4 class="erm"><b>Stage One</b></h4>
    			<fieldset>
    				<div class="control-group">
    					<div class="controls">
    						<div class="row">
    						<div class="col-md-6">
	    						 <div class="md-form">
								    <i class="fa fa-user prefix" id="prefix"></i>
								    <input type="text" id="form2" class="form-control" placeholder="First Name">
								    
								</div>
	    					</div>
	    						<div class="col-md-6">
	    							  <div class="md-form">
									    <input type="text" id="form2" class="form-control" placeholder="Last Name">
									   
									</div>
	    						</div>
    						</div>
    						
	    						 <div class="md-form">
								    <i class="fa fa-envelope prefix" id="prefix"></i>
								    <input type="text" id="form2" class="form-control" placeholder="Email">
								</div>
	    					
	    					
	    						 <div class="md-form">
								    <i class="fa fa-phone prefix" id="prefix"></i>
								    <input type="text" id="form2" class="form-control" placeholder="Phone Number">
								</div>
	    					
    					</div>
    				</div>
    			</fieldset><br>
    			<h4 class="erm"><b>Stage Two</b></h4>
    			<fieldset>
    				<div class="control-group">
    					<div class="controls">
    					<h5 class="erm">Card Number</h5>
    						<div class="row">
	    						<div class="col-md-3">
		                            <input type="text" class="form-control" autocomplete="off" maxlength="4" pattern="\d{4}" title="First four digits" required="" placeholder="First digit">
		                        </div>
		                        <div class="col-md-3">
		                            <input type="text" class="form-control" autocomplete="off" maxlength="4" pattern="\d{4}" title="Second four digits" required="" placeholder="Second ">
		                        </div>
		                        <div class="col-md-3">
		                            <input type="text" class="form-control" autocomplete="off" maxlength="4" pattern="\d{4}" title="Third four digits" required="" placeholder="Third">
		                        </div>
		                        <div class="col-md-3">
		                            <input type="text" class="form-control" autocomplete="off" maxlength="4" pattern="\d{4}" title="Fourth four digits" required="" placeholder="Fourth">
		                        </div>
    						</div>
    						
	    						 <div class="md-form">
								    <i class="fa fa-list-alt  prefix" id="prefix" aria-hidden="true"></i>
                        
								    <input type="text" id="form2" class="form-control" placeholder="BVN">
								</div>
	    					
	    					
	    						 <div class="md-form">
								    <i class="fa fa-rebel prefix" id="prefix"></i>
								    <input type="text" id="form2" class="form-control" placeholder="Discriptions">
								</div>
	    					
    					</div>
    				</div>
    			</fieldset>
    			</div>
    			<div class="col-md-3">
    				<h4 class="erm"><b>Stage Three</b></h4>
    				<h5 class="erm"><input type="Checkbox" name=""  class="filled-in">&nbsp;I dont Want to use a credit card </h5><br>
    				<h4 class="erm"><b>Step Four</b></h4>
    				<h5 class="erm">What type of Delevery method is preferred</h5><br>
    				<h5 class="erm"><input type="Checkbox" name=""  class="filled-in ">&nbsp;Flat Shopping Method<br>
    				<input type="Checkbox" name=""  class="filled-in ">&nbsp;Trail Shopping Method<br>
    				<input type="Checkbox" name=""  class="filled-in ">&nbsp;Premium Shopping Method<br></h5><br>
    				<h4 class="erm"><b>Stage Five</b></h4>
    				<h5 class="erm">Please Select Preffered Payments</h5>
    				<div class="md-form">
						
                        
						<input type="text" id="form2" class="form-control" placeholder="BVN">
					</div>
					<input  type="text" class="form-control" placeholder="Comment Here">
    			</div>
    			<div class="col-md-4">
    				<fieldset>
    				<div class="control-group">
    					<div class="controls">
    						<div class="row">
    						<h4 class="text-center erm"><b>Stage six</b></h4>
    						<h5  class="text-center">Accounting And billing</h5>
    						<div class="col-md-6">
	    						 <div class="md-form">
								    <i class=" fa fa-shopping-bag prefix"></i>
								    <input type="text" id="form2" class="form-control" placeholder="Budgets">
								    
								</div>
	    					</div>
	    						<div class="col-md-6">
	    							  <div class="md-form">
									    <input type="text" id="form2" class="form-control" placeholder="Amounts">
									   
									</div>
	    						</div>
    						</div>
    						<div class="row">
	    						 <div class="col-md-6 md-form">
								    <i class="fa fa-shopping-bag prefix"></i>
								    <input type="text" id="form2" class="form-control" placeholder="Tasks">
								</div>
	    					
	    					
	    						 <div class="col-md-6 md-form">
								    <input type="text" id="form2" class="form-control" autocomplete="on" maxlength="6" pattern="\d{6}" placeholder="Donate ID">
								</div>
	    					
    					</div>
    				</div>
    			</fieldset>

    			<div class="col-md-offset-2">
    				<span><button class="btn btn-success btn-sm">Donate</button>
    			
    				
    			</div>
    		
    			</div>
    			</div>
    		</div>
    	</div>
    </section>
<section id="modals">    
    <div class="modal fade right" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.48);">
    <div class="modal-dialog modal-notify modal-success modal-side modal-bottom-right" id="modals" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                <center>
                    <img src="{{ asset('ramadhan/img/pf.jpg') }}" class="img-responsive img-circle animated fadeInDown" width="70" height="70" style="animation-delay: 0.5s;">
                </center>
                    <h4 class="text-center f-c-b">I Am Ali Gee</h4>
                    <h5 class="text-center f-c-b">I can help you out in the site</h5>
                   <div class="sm-form form-sm">
                   
                    <input type="text" id="form19" class="form-control" appearance="" placeholder="Send Your Message" style="margin-top: 30px;"><button class="fa fa-send prefix btn btn-success btn-sm" style="float: right;">&nbsp;<b style="font-family: raleway light;">Send</b></button> 
                     
                </div>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-outline-secondary-modal waves-effect btn-sm" data-dismiss="modal" style="float: left;">No, thanks</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
</section>
<script>
         $(window).on('load',function(){
        $('#centralModalSuccess').modal('toggle');
    });


    <!--For a regular waves-->
        Waves.attach('.btn', ['waves-effect']);
</script>
</body>
</html>