<?php
	include 'header.php';

?>
		<style>
			.hom {
				border-bottom: white 1px solid;
			}
		</style>
		<section class="section1">
			<center style="height: 100vh;"><p>BeLogicus</p></center>
		</section>
		<section class="section2">
			<section class="index-banner">
				<div class="vertical-center">
					<h2>Title</h2>

				</div>
			</section>
			<section>
				<div class="wrapper">
                    <p style="padding: 30px 50px; font-size: 20px; margin-bottom:300px;" class="index-text">
                    This website is aiming to spread awareness about Covid-19. Aswell as spreading awareness about this disease we want to promote taking action. <br>If you go though this website, you will learn: What Covid-19 is. How to pevent it, and What is inside of Covid-19.<br></p>  
                </div>
			</section>
		</section> 
		<section class="section3">
			<center style="font-size: 55px"><h1><b>Contact Us</b></h1></center>
			<center style="margin-top: 100px"><p>You can contact us by filling out this form</p></center>

			<center class="cont"><form method="POST">
			<input type="name" name="fname" placeholder="Enter your First name here" class="fname">
			<input type="name" name="lname" placeholder="Enter your last name here"class="lname">
			<input type="email" name="email" placeholder="Enter you email here" class="email">
			<input type="text" name="subject" placeholder="Enter the Subject of the message here" class="subj">
			<textarea type="textarea" name="message" placeholder="Enter the message here" class="txta"></textarea>
			<button type="Submit" name="sub" class="subb">Send</button>
			</form></center>

			<a class="buttonc" href="#popup1">a</a>
			<div id="popup1" class="overlay">
			  <div class="popup">
			    <a class="close" href="#">&times;</a>
			    <div class="content">
			    	<?php
			    		echo $messagecon;
			    	?>
			    </div>
			  </div>
			</div>
		</section>
		<?php 
			include 'footer.php';
		?>
	</body>
</html>