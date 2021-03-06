<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Dandigital</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- build:css(./public) /css/build/libs.min.css -->
	<link rel="stylesheet" href="/.dev/css/portBox.css">
	<!-- endbuild -->

	<!-- build:css(./public) /css/build/main.min.css -->
	<link rel="stylesheet" href="/.dev/css/main.css">
	<!-- endbuild -->

	<!-- build:js(./public) /js/build/libs.min.js -->
	<script src="/.dev/bower_components/jquery/dist/jquery.js"></script>
	<script src="/.dev/bower_components/jquery-ui/jquery-ui.js"></script>
	<script src='/.dev/js/portBox.slimscroll.js'></script>
	<script src='/.dev/js/isotope.pkgd.min.js'></script>
	<script src='/.dev/js/jquery.debouncedresize.js'></script>
	<!-- endbuild -->

	<!-- build:js(./public) /js/build/main.min.js -->
	<script type='text/javascript' src='/.dev/js/main.js'></script>
	<!-- endbuild -->


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>


</head>
<body>

	<header class="dark">
		<a class="logo" href="#">
			<object id="size" type="image/svg+xml" data="/images/logo.svg">Your browser does not support SVG</object>
			<span>DANDIGITAL</span>
		</a>
		
		<nav class="desktop">
			<a class="scroll" href="#Home">Home</a>
			
			<a class="scroll" href="#Services">Services</a>
			<a class="scroll" href="#Folio">Folio</a>
			<a href="">Team</a>
			<a href="">Features</a>
			<a href="">Blog</a>
		</nav>

		<nav class="mobile">
			<button>Toggle</button>
			<div>
				<a class="scroll" href="#Home">Home</a>
				
				<a class="scroll" href="#Folio">Folio</a>
				<a class="scroll" href="#Services">Services</a>
				<a href="">Team</a>
				<a href="">Features</a>
				<a href="">Blog</a>
			</div>
		</nav>


	</header>
	<section id="Home">
        <video autoplay loop poster="/images/homeScreen.jpg" id="bgVid">
			<source src="/video/db1080p2.mp4" type="video/mp4"> 
		</video>
		<div style="position:absolute; width:100%; height:100%; background:rgba(145, 229, 239, 0.08);"></div>
		<div class="content">
			<object style="padding-top: 160px;" width="170" height="170" type="image/svg+xml" data="/images/ddLogoRound.svg">Your browser does not support SVG</object>
			<div class="ticker">
				<h1>Creative Design.</h1>
				<h1>Creative Solutions.</h1>
			</div>
			<div class="ctas">
				<a class="scroll button" href="#Folio">View Our Work</a>
				<a class="scroll button blue" href="#About">Learn About Us</a>
			</div>	
		</div>
	</section>

	

	<section id="Services">
		<div class="content">
			
			<div class="col1">	
				
				<object class="icon" type="image/svg+xml" data="/images/svg/webDesign.svg">Your browser does not support SVG</object>
				<h2>Web Design</h2>
<p>We design websites with a clear purpose, that fullfill a specific need for your users in the most effective way possible. Utilising principles that can help your website be more engaging, useful and memorable for visitors.<p>			</div>
			<div class="col1">	
				<object class="icon" type="image/svg+xml" data="/images/svg/commerce.svg">Your browser does not support SVG</object>
				<h2>E Commerce</h2>
<p>User centered design is at the heart of our successful ecommerce platforms, and we put ourselves in the minds of the customers to deliver intuitive experiences.  <p>
			</div>
			<div class="col1">
				<object class="icon" type="image/svg+xml" data="/images/svg/strategy.svg">Your browser does not support SVG</object>
				<h2>Strategy</h2>
				<p>Here at Dandigital, we "think" more and design less. We analyse your competitors and target audience, utilise A/B split campaigns to test how different factors affect the way users engage with your website. <p>
			</div>	
			<div class="col1">
				<object class="icon" type="image/svg+xml" data="/images/svg/socialMedia.svg">Your browser does not support SVG</object>
				<h2>Social Media</h2>
<p>Every post you make on a social media platform (e.g. facebook or twitter) is an opportunity for customers to convert. We specialise in social media integration and Social Business pages. Making use of Social Api's and Social Development Tools.<p>
			</div>	
			<div class="col1">
			<object class="icon" type="image/svg+xml" data="/images/svg/seo.svg">Your browser does not support SVG</object>	
				<h2>SEO</h2>
<p>We thoroughly develop all of our websites to be search engine friendly to improve both the quality and quantity of potential consumers visiting your site from an online search. <p>
			</div>
			<div class="col1">
				<object class="icon" type="image/svg+xml" data="/images/svg/seo.svg">Your browser does not support SVG</object>	
				<h2>Content Mangement System</h2>
<p> All Dandigital websites utilise our personilised Content Management System, allowing you to edit, add, or delete content on the web, or even on your mobile.<p>			</div>
									
		</div>
	</section>

	<section id="About">
		<div class="content">
			<div>
				<p>Do you have a pet project that hasn’t had the opportunity to come to fruition? We want to inspire you to bring your campaigns, brand and business to the next level. Get in touch via our contact page, tell us about your vision, and we'll be in touch to get things rolling.
				
			</div>
		</div>
	</section>

	<section id="Folio" class="folio">



		<a href="#" data-display="betwayBingo">
			<div class="item item-w2 item-h2">
				<img src="/images/bb.jpg">
				<div class="overlay bb">

				
				<figcaption>
					<h1>Betway Bingo</h1>
					<p>Online Bingo Website</p>
				</figcaption>
				</div>
			</div>
		</a>



	<a href="#" data-display="wintech">
		<div class="item item-h2">
			<img src="/images/wintech.jpg">
			<div class="overlay wintech">
				<figcaption>
		<h1>Wintechnologies</h1>
		<p>IGaming Website</p>
	</figcaption>
			</div>

		</div>
	</a>



			<a href="#" data-display="db">
		<div class="item item-h2">
			<img src="/images/db.jpg">
			<div class="overlay db">
				<figcaption>
		<h1>Dream Bingo</h1>
		<p>Online Bingo Website</p>
	</figcaption>
			</div>

		</div>
	</a>



		<a href="#" data-display="coal">
	<div class="item item-h2">

		<img src="/images/coal.jpg">
		<div class="overlay coal">
			<figcaption>
				<h1>Coal Mining</h1>
				<p>Infographic Website</p>
			</figcaption>
		</div>

	</div>
</a>
		
	<a href="#" data-display="dbMobile">
		<div class="item item-h2">
			<img src="/images/dbApp.jpg">
		<div class="overlay dbMob">
			<figcaption>
				<h1>Dream Bingo</h1>
				<p>Mobile App</p>
			</figcaption>
		</div>
		</div>
	</a>


	<a href="#" data-display="bwSportsMob">
		<div class="item item-w2 item-h4">
			<img src="/images/bwapp2.jpg">
			<div class="overlay bwMob">
				
			<figcaption>
				<h1>Betway Sports Mobile</h1>
					<p>Sports Betting App</p>
			</figcaption>
			</div>
		</div>
		<a/>



	<a href="#" data-display="apb">
	<div class="item item-w2 item-h4">
		<img src="/images/apb2.jpg">
		<figcaption>Item 7</figcaption>
		<div class="overlay apb">
		
		<figcaption>
			<h1>APB</h1>
			<p>Game Website</p>
		</figcaption>
		</div>
	</div>
</a>
		
	<a href="#" data-display="bwSports">
		<div class="item item-h2">
			<img src="/images/bwSports.jpg">
			<div class="overlay">
			
			<figcaption>
				<h1>Betway Sports</h1>
				<p>Sports Betting Website</p>
			</figcaption>
			</div>
		</div>
	</a>

	<a href="#" data-display="hippo">
		<div class="item item-h2">
			<img src="/images/hippodrome.jpg">
			<div class="overlay">
				<figcaption>
					<h1>Hippodrome Online</h1>
					<p>Igaming Website</p>
				</figcaption>
			</div>
		</div>
	</a>

	<a href="#" data-display="gf">
		<div class="item item-h2">
			<img src="/images/gf.jpg">
			<div class="overlay">
				<figcaption>
					<h1>Girl Fit</h1>
					<p>Fitness Mobile App</p>
				</figcaption>		
			</div>
		</div>
	</a>

	

	<a href="#" data-display="casinotop10list">
		<div class="item item-h2">
<img src="/images/cttl.jpg">			
			<div class="overlay">
				<figcaption>
					<h1>Casino Top 10 List</h1>
					<p>Website</p>
				</figcaption>	
			</div>
		</div> 
	</a>


	<a href="#" data-display="abi">
		<div class="item item-w2 item-h2">
			<img src="/images/abi.jpg">			
			<div class="overlay">
				<figcaption class=large>
					<h1>Abi 3D</h1>
					<p>And other 3D Projects</p>
				</figcaption>		
			</div>
		</div>
	</a>

	</section>





	<section id="Footer">
		<div class="content">
			<div class="col1">	
				<object class="footerIcon" type="image/svg+xml" data="/images/svg/call10.svg">Your browser does not support SVG</object>
				<h2>07946 492 781</h2>
				
			</div>
			<div class="col1">	
				<object class="footerIcon" type="image/svg+xml" data="/images/svg/packet.svg">Your browser does not support SVG</object>
				<h2><a href="mailto:dan@dandigital.com">dan@dandigital.com</a></h2>
				
			</div>
			<div class="col1">
			<object class="footerIcon" type="image/svg+xml" data="/images/svg/location4.svg">Your browser does not support SVG</object>	
				<h2>EN8 8LE</h2>
				
			</div>					
		</div>
	</section>
	<section id="Footer2">
		<div class="content">
			<p>©2014 DANDIGITAL. ALL RIGHTS RESERVED.
				<a href="#">
					<object class="footerIcon" type="image/svg+xml" data="/images/svg/facebook.svg">Your browser does not support SVG</object>
					<object class="footerIcon" type="image/svg+xml" data="/images/svg/twitter.svg">Your browser does not support SVG</object>
				</a>
			</p>

		</div>
	</section>
	



	



	<!-- portBox Content -->



	<div id="betwayBingo" class="portBox">
    <div class="project">
    	 	<div  class="project-pics">
    	 		 <div style="position:relative;">
            	<img src="/images/behance/betwayBingo.jpg">
	    		<video autoplay loop poster="polina.jpg" id="betwayBingoVid">
					<source src="/video/betwayBingo.mp4" type="video/mp4">
				</video>
            </div>
             
            
        </div>
        
        <div class="project-info">
        	 <h3>Betway Bingo</h3>
            
            <p>With the new Betway branding created primarily around their sports product, our client wanted us to maintain the new brand Identity of Betway, but also appeal to a Bingo demographic. </p>
            <p>We created a sub brand that envoked the identity of Betway, but also gave the Bingo product an even stronger identity of it's own.</p>
            <ul>
                <li><h4>CLIENT</h4></li>
                	<li>Betway</li>
                <li><h4>ROLE</h4></li>
                <li>UI/UX, 3D Designer and orchestrating development</li>
                <li><h4>SKILLS</h4></li>

                <li>HTML5, CSS3 animation, 3D Max, </li>
            </ul>
            
            <a href="#" class="project-button">Visit Site</a>
        
        </div><!-- Project Info Close -->
    </div><!-- Project Close -->
</div><!-- portBox Close -->





<div id="wintech" class="portBox">
    <div class="project">

    	<div  class="project-pics">

            <div style="position:relative;">
              <img src="/images/behance/wt.jpg">
              <video autoplay loop poster="polina.jpg" id="winTech">
               <source src="/video/winTech.mp4" type="video/mp4">
               </video>


           </div>


       </div>
       <div class="project-info">
             
             <h3>Wintechnologies Website</h3>

             <p>A website created primarily for recruitment purposes, we wanted potential candidates to take away a sense of community and professionalism, and for current employees, to have a company name they could be proud to tell their family and friends they worked for.</p>
             <p>The previous website left alot to be desired, and whilst stakeholders brought up the corporate aesthetics of the website. A lot of employee feedback surprisingly revolved around a nepotistic environment and lack of equality within the workplace.</p>
             <p>So with the side goal to help improve employee morale, we put together a photo shoot, gathering over 200 employees, and took pictures of each of them in different moods and poses.</p>
             <p>It made for a fun community building activity, and gave  everyone who took part a sense of belonging, having their photo on the homepage.</p>
             <ul>
                <li><h4>CLIENT</h4></li>
                <li>Wintechnologies</li>
                <li><h4>ROLE</h4></li>
                <li>UI Web Designer, Prototyping</li>
                <li><h4>SKILLS</h4></li>
                <li>HTML5, CSS3, after effects, Jquery, Fireworks, Photoshop</li>
            </ul>

                <a href="#" class="project-button">Visit Site</a>
        </div><!-- Project Info Close -->
</div><!-- Project Close -->
            </div><!-- portBox Close -->









<div id="apb" class="portBox">
    <div class="project">
        
    	<div class="project-pics">

            <img src="/images/behance/apb.jpg">
             
            
        </div>
        
        <div class="project-info">
            <h3>APB - All Points Bulletin</h3>
            
            <p>Website Concept</p>
            
            <ul>
                <li><h4>CLIENT</h4></li>
                	<li>Gamers First</li>
                <li><h4>ROLE</h4></li>
                	<li>Concept Design</li>
                	<li>Web Prototype</li>
                <li><h4>SKILLS</h4></li>
                	<li>this, that, the other</li>
            </ul>
            



            <a href="#" class="project-button">Visit Site</a>
        
        </div><!-- Project Info Close -->
    </div><!-- Project Close -->
</div><!-- portBox Close -->














<div id="casinotop10list" class="portBox">
    <div class="project">
        
    	<div class="project-pics">

            <img src="/images/behance/casinotop10list.jpg">
             
            
        </div>
        
        <div class="project-info">
            <h3>Casino Top 10 List</h3>
            
            <p>Most casino review sites leave a lot to be desired, and with the market being immensely oversaturated. My objective was to find an edge in the market by creating a more aesthetically pleasing, intuitive user interface.
</p>
            
            <ul>
                <li><h4>CLIENT</h4></li>
                	<li>Casino top 10 List</li>
                <li><h4>ROLE</h4></li>
                	<li>Concept Design</li>
                	<li>UI / UX Design</li>
                	<li>Creating Custom Wordpress Theme</li>
            		<li>Front end Development</li>
            		<li>Back End Development</li>
                <li><h4>SKILLS</h4></li>
                	<li>Fireworks (UI & Design),  HTML 5, CSS3, Wordpress.</li>
            </ul>
            






            <a href="#" class="project-button">Visit Site</a>
        
        </div><!-- Project Info Close -->
    </div><!-- Project Close -->
</div><!-- portBox Close -->






<div id="coal" class="portBox">
    <div class="project">
        
    	<div  class="project-pics">

            <div style="position:relative;">
            	<img src="/images/behance/coalMining.jpg">
	    		<video autoplay loop poster="polina.jpg" id="coalVid">
					<source src="/video/coal.mp4" type="video/mp4">
				</video>
            </div>
             
            
        </div>
        
        <div class="project-info">
            <h3>Coal Mining Brief Facts</h3>
            
            <p>Parallax Responsive Website</p>
            
            <ul>
                <li><h4>CLIENT</h4></li>
                	<li>Coal Mining History Resource Centre</li>
                <li><h4>ROLE</h4></li>
                	<li>How to present Coal Mining facts in a fun, enticing infographic design style.</li>
                <li><h4>SKILLS</h4></li>
                	<li>HTML5, CSS3, Jquery, Fireworks, Photoshop</li>
            </ul>
            
            <a href="#" class="project-button">Visit Site</a>
        
        </div><!-- Project Info Close -->
    </div><!-- Project Close -->
</div><!-- portBox Close -->




<div id="db" class="portBox">
    <div class="project">
        
    	<div  class="project-pics">

            <div style="position:relative;">
            	<img src="/images/behance/db.jpg">
	    		<video autoplay loop poster="polina.jpg" id="dbVid">
					<source src="/video/dbVid.mp4" type="video/mp4">
				</video>

				<video autoplay loop poster="polina.jpg" id="dbSketch">
					<source src="/video/dbSketch.mp4" type="video/mp4">
				</video>
            </div>
             
            
        </div>
        
        <div class="project-info">
            <h3>Dream Bingo</h3>
            
            <p>Website Rebrand and design</p>
            p
            <ul>
                <li><h4>CLIENT</h4></li>
                	<li>london bridge media</li>
                <li><h4>ROLE</h4></li>
                	<li>Creating concept and pitching the brand vision for dream bingo
</li><li>Designing and animating background video</li>
<li>Designing the homepage user interface</li>
<li>Orchestrating the development</li>
                <li><h4>SKILLS</h4></li>
                	<li>Photoshop (Matte Painting), Fireworks (UI), After effects (animation), 3D Max (terrain base)
</li>
            </ul>

            <a href="#" class="project-button">Visit Site</a>
        
        </div><!-- Project Info Close -->
    </div><!-- Project Close -->
</div><!-- portBox Close -->







<div id="dbMobile" class="portBox">
    <div class="project">
        
    	<div  class="project-pics">

            <div style="position:relative;">
            	<img src="/images/behance/dbMobile.jpg">
	    		
            </div>
             
            
        </div>
        
        <div class="project-info">
            <h3>Dream Bingo
</h3>
            
            <p>Mobile App Design</p>
            
            <ul>
                <li><h4>CLIENT</h4></li>
                	<li>LBM</li>
                <li><h4>ROLE</h4></li>
				<li>Creating concept designs and animations
				</li>                
				<li>Pitching Concept Design</li>
				<li>Designing Mobile Branding</li>
				<li>Orchestrating the development</li>
				<li><h4>SKILLS</h4></li>
        		<li> Fireworks (UI & Design), After effects (concept animation)</li>
            </ul>
            




            <a href="#" class="project-button">Visit Site</a>
        
        </div><!-- Project Info Close -->
    </div><!-- Project Close -->
</div><!-- portBox Close -->






<div id="bwSports" class="portBox">
    <div class="project">
        
    	<div  class="project-pics">

            <div style="position:relative;">
            	<img src="/images/behance/bwSports.jpg">
	    		
            </div>
             
            
        </div>
        
        <div class="project-info">
            <h3>Coal Mining Brief Facts</h3>
            
            <p>Parallax Responsive Website</p>
            
            <ul>
                <li><h4>CLIENT</h4></li>
                	<li>Coal Mining History Resource Centre</li>
                <li><h4>ROLE</h4></li>
                	<li>How to present Coal Mining facts in a fun, enticing infographic design style.</li>
                <li><h4>SKILLS</h4></li>
                	<li>HTML5, CSS3, Jquery, Fireworks, Photoshop</li>
            </ul>
            
            <a href="#" class="project-button">Visit Site</a>
        
        </div><!-- Project Info Close -->
    </div><!-- Project Close -->
</div><!-- portBox Close -->




<div id="bwSportsMob" class="portBox">
    <div class="project">
        
    	<div  class="project-pics">

            <div style="position:relative;">
            	<img src="/images/behance/bwSportsMob.jpg">
	    		
            </div>
             
            
        </div>
        
        <div class="project-info">
            <h3>Betway Sports Mobile</h3>
            
           <p>Mobile App Design</p>
            
            <ul>
                <li><h4>CLIENT</h4></li>
                	<li>Betway</li>
                <li><h4>ROLE</h4></li>
                	<li>Creating concept designs, UI / UX and animations</li>
                <li><h4>SKILLS</h4></li>
                	<li>Fireworks (UI & Design), After effects (concept animation)</li>
            </ul>
            

 





            <a href="#" class="project-button">Visit Site</a>
        
        </div><!-- Project Info Close -->
    </div><!-- Project Close -->
</div><!-- portBox Close -->





<div id="hippo" class="portBox">
    <div class="project">
        
    	<div  class="project-pics">

            <div style="position:relative;">
            	<img src="/images/behance/hippo.jpg">
	    		
            </div>
             
            
        </div>
        
        <div class="project-info">
            <h3>Hippodrome Online</h3>
            
            <p>Online Gambling site for the popular Hippodrome Land based Casino.</p>
            <p>Originally intended to be a "generic" white label landing page, and with a underwhelming design already signed off by the Director. I took it upon myself to work through my evening at home and create a new concept, with the incentive of creating a user experience much more intuitive than our lead brands.
The next morning I pitched it to the Director, who thankfully was onboard. As a result of showing initiative… I was given the opportunity of being Lead Designer for the project.
<p>One year later, Hippodrome Casino is now one of our most successful Casino Brands.</p>
</p>
            <ul>
                <li><h4>CLIENT</h4></li>
                	<li>Hippodrome Casino</li>
                <li><h4>ROLE</h4></li>
                	<li>Concept Design</li>
                	<li>UI / UX Design</li>
                		<li>Front end Development</li>
                <li><h4>SKILLS</h4></li>
                	<li>Fireworks (UI & Design),  HTML 5, CSS3, and Jquery</li>
            </ul>
          



            <a href="#" class="project-button">Visit Site</a>
        
        </div><!-- Project Info Close -->
    </div><!-- Project Close -->
</div><!-- portBox Close -->







<div id="gf" class="portBox">
    <div class="project">
        
    	<div  class="project-pics">

            <div style="position:relative;">
            	<img src="/images/behance/gf.jpg">
	    		
            </div>
             
            
        </div>
        
        <div class="project-info">
            <h3>Girl Fit</h3>
            
            <p>Fitness Mobile App concept</p>
            
            <ul>
                <li><h4>CLIENT</h4></li>
                	<li>Womans Health Fitnesse</li>
                <li><h4>ROLE</h4></li>
                <li>Concept Design</li>                

                <li><h4>SKILLS</h4></li>
                	<li>Fireworks (UI & Design), After Effects (Concept Design)</li>
            </ul>
            

            <a href="#" class="project-button">Visit Site</a>
        
        </div><!-- Project Info Close -->
    </div><!-- Project Close -->
</div><!-- portBox Close -->





<div id="abi" class="portBox">
    <div class="project">
        
    	<div  class="project-pics">

            <div style="position:relative;">
            	<img src="/images/behance/behanceAbi.jpg">
	    		
            </div>
             
            
        </div>
        
        <div class="project-info">
            <h3>ABI 3D and other 3D projects</h3>
            
            <p>We also have professional experience working within the field of 3D Art and Design</p>
            
            <ul>
                <li><h4>CLIENTS</h4></li>
                	<li>16 bit studios, 3D Reigns</li>
                <li><h4>ROLE</h4></li>
                	<li>Creating 3D assets</li>
                <li><h4>SKILLS</h4></li>
                	<li>Modeling, Rendering, Rigging, Texturing</li>
            </ul>

            
            <a href="#" class="project-button">Visit Site</a>
        
        </div><!-- Project Info Close -->
    </div><!-- Project Close -->
</div><!-- portBox Close -->


</body>
</html>