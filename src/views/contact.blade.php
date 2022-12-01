<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://kit.fontawesome.com/9be626d6af.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="{{ asset('vendor/contact/contact.css') }}" rel="stylesheet">
	{{-- <link href="{{ asset('contact::url("css/contact.css")') }}" rel="stylesheet"> --}}
	<style>
		
	</style>
    <title>Contact Us</title>
</head>
<body>
<div id="contact" class="contact-area section-padding">
	<div class="container">										
		<div class="section-title text-center">
			<h1>Contact Us</h1>
			<p>Feel free to contact us any time. We wil get back to you as soon as we can.</p>
		</div>					
		<div class="row">
			<div class="col-lg-7">	
				<div class="contact">
						<form class="form" name="enq" method="post" action="{{route('contact')}}" onsubmit="return validation();">
						<div class="row">
							<div class="form-group col-md-6">
								<input type="text" name="name" class="name" placeholder="Name" required="required">
							</div>
							<div class="form-group col-md-6">
								<input type="email" name="email" class="email" placeholder="Email" required="required">
							</div>
						</div>
							<div class="form-group col-md-12">
								<input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
							</div>
							<div class="form-group col-md-12">
								<textarea rows="6" name="message" class="form-control" placeholder="Your Message" required="required"></textarea>
							</div>
                            <div class="col-md-12 text-center">
                                <button type="submit" value="submit" name="submit" id="submitButton" class="btn btn-contact-bg" title="Submit Your Message!">Send Message</button>
                            </div>
						</div>
					</form>
                
				</div>

			<div class="col-lg-5">
				<div class="single_address">
					<i class="fa fa-map-marker"></i>
					<h4>Our Address</h4>
					<p>3481 Melrose Place, Beverly Hills</p>
				</div>
				<div class="single_address">
					<i class="fa fa-envelope"></i>
					<h4>Send your message</h4>
					<p>Info@example.com</p>
				</div>
				<div class="single_address">
					<i class="fa fa-phone"></i>
					<h4>Call us on</h4>
					<p>(+1) 517 397 7100</p>
				</div>
				<div class="single_address">
					<i class="fa fa-clock-o"></i>
					<h4>Work Time</h4>
					<p>Mon - Fri: 08.00 - 16.00. <br>Sat: 10.00 - 14.00</p>
				</div>					
			</div><!--- END COL --> 
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->	
</div>
</body>
</html>