<?php 
include_once "includes/db.php";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row">
    <div class="col-xs-12">
        <ul class="breadcrumb">
            <li><a href="index.php?page=home_page">Home</a></li>
            <li class="active">Contact us</li>
        </ul>
    </div>            
</div>
<div class="container">
        
        
        <div class="row row-content">
           <div class="col-xs-12">
              <h3>Location Information</h3> 
           </div>
            <div class="col-xs-12 col-sm-4 col-sm-offset-1">
                   <h4>Our Address</h4>
                    <address style="font-size: 100%; color: black">
		              NAU Coffeehouse, 1st floor <br>
		              11929 W. Airport Blvd<br>
		              Stafford TX 77477<br>
		              <i class="fa fa-phone"></i>: +852 1234 5678<br>
		              <i class="fa fa-fax"></i>: +852 8765 4321<br>
		              <i class="fa fa-envelope"></i>: 
                        <a href="mailto:naucafe@na.edu">Coffeehouse@na.edu</a>
		           </address>
                  <div class="btn-group" role="group" aria-label="...">
                    <a type="button" class="btn btn-primary" href="tel:+85212345678"><i class="fa fa-phone"></i> Call</a>
                    <a type="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                    <a type="button" class="btn btn-success" href="mailto:confusion@food.net"><i class="fa fa-envelope-o"></i> Email</a>
                </div>
                
            </div>
            
            <div class="col-xs-3 col-sm-6 col-sm-offset-1">
                <h4>Our Location</h4>
                <iframe class="col-sm-12" height="250" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3467.5335289449386!2d-95.59047968543412!3d29.64628864422712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640e7bdd9823c57%3A0x4e335dcbd1aa4825!2sNorth+American+University+(NAU)!5e0!3m2!1sen!2sus!4v1485927980989" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            
        </div>
             </div>
    
     <div class="container">

        <div class="row">
            <div class="col-xs-12">
               <h2 style="text-align:center">Contact Us</h2>
            </div>
        </div>



        <div class="row row-content">
           <form action="includes/contact.inc.php" method="post" class="col-md-12 well">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required />
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter phone" required />
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" value="" tabindex="1" placeholder="Subject" required />
                            </div>                        
                        </div>
                
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" name="message" id="textarea" rows="11" placeholder="Enter Message"></textarea>
                            </div>
                            <input type="hidden" name="dt" id="email" value="" tabindex="1" placeholder="Email" />
                            <div class="form-group">
                               <button class="btn btn-primary pull-right" type="submit" name="submit_contact">Send</button>
                            </div>
                        </div>
                    </div>
                        

				</form>
       </div>

    </div>

</body>
</html>