<?php include ('php/header.php');?>


	<main>
		<img class="img-banner" src="images/banner.jpg" alt="banner" width="3000px" height="400px">
		<div class="wrapper" align="center">
			<article class="img-info">
			<div class="index-title">
				<h2>ASDA of pentesting tools</h2>
			</div>

		<div class="user-status">
			<?php
					if(isset($_SESSION['userId'])){
						echo '<p class="login-status">You are logged in!</p>';
					}
					else {
						echo '<p class="login-status">You are logged out!</p>';
						echo '<p>Sign up for your free account , new customers get 50% off their 1st tool! click <a href="signup.php">here</a> to sign up  .</p>';
					}

					if(isset($_GET['logout=success'])){
						echo '<script>alert("Logout was successful")</script>';
						}
					
				?>

		</div>
				
				<p> Our state of the arc penetration tools are used by thousands of white hat hackers across the globe and galaxy. 
                    Penetration testers need to know about the tool and the extent of the damage it can cause. 
                    You do not need a vast technical background to understand how our tools work , the interfaces have a very basic layout,
                    Even Freddie Flintstone could make sense of it! </p>

				
				

				<div class="row" >
					<div class="column">
						<img src="images/globe.png" alt="globe" >
					</div>
					<div class="column">
						<img src="images/tick.png" alt="tick">
					</div>
					<div class="column">
						<img src="images/house.png" alt="house">

					</div>
				</div>


				<p> Companies that reuqire penetration tests used to hire a penetration tester and let him/her use the tools that they felt suitable. 
                    The issue was that the white hat hacker would be inexperienced and new to the tool and therefore was unable to predict the true extent of the attack.
                    The attack caused significant damage to the company , they could not trade and as a result filed for bankruptsy. 
                    To avoid this , the employers select the tools for the penetration testers. Even the CEOS/directors (who do not have a vast technical background) have taken an interest         
        			in learning how to hack for defensive purposes. As long as your interest is there , our tools will trun you into an expert in just 3 weeks. </p>
			</article>	
		</div>


	</main>	
			

	</body>


</html>