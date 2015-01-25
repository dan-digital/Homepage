<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Dandigital</title>

	<!-- Attach portBox CSS -->
	<link rel="stylesheet" href="/.dev/css/portBox.css">
	<link rel="stylesheet" href="/.dev/css/main.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

	<script type='text/javascript' src='/js/build/main.js'></script>

	<!-- Attach portBox script -->
	<script type='text/javascript' src='/js/build/portBox.slimscroll.min.js'></script>
	<script src="http://cdn.jsdelivr.net/isotope/2.0.0/isotope.pkgd.min.js"></script>
	<script src="https://rawgit.com/louisremi/jquery-smartresize/master/jquery.debouncedresize.js"></script>
</head>
<body>

	<header class="dark">
		<a class="logo" href="#">
			<object id="size" type="image/svg+xml" data="/images/logo.svg">Your browser does not support SVG</object>
			<span>DANDIGITAL</span>
		</a>
		
		<nav class="desktop">
			<a class="scroll" href="#Home">Home</a>
			<a class="scroll" href="#About">About</a>
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
				<a class="scroll" href="#About">About</a>
				<a class="scroll" href="#Folio">Folio</a>
				<a class="scroll" href="#Services">Services</a>
				<a href="">Team</a>
				<a href="">Features</a>
				<a href="">Blog</a>
			</div>
		</nav>


	</header>
	<section id="Home">
        <video autoplay loop poster="polina.jpg" id="bgVid">
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

	<section id="About">
		<div class="content">
			<div>
				<p>Do you have a pet project that hasn’t had the opportunity to come to fruition? We want to inspire you to bring your campaigns, brand and business to the next level. Get in touch via our contact page, tell us about your vision, and we'll be in touch to get things rolling.
				<p>
			</div>
		</div>
	</section>

	<section id="Services">
		<div class="content">
			
			<div class="col1">	
				
				<object class="icon" type="image/svg+xml" data="/images/svg/webDesign.svg">Your browser does not support SVG</object>
				<h2>Web Design</h2>
				<p>Making a change to see if Git picks it up?<p>
			</div>
			<div class="col1">	
				<object class="icon" type="image/svg+xml" data="/images/svg/commerce.svg">Your browser does not support SVG</object>
				<h2>E Commerce</h2>
				<p>We keep you in the loop throughout the project<p>
			</div>
			<div class="col1">
				<object class="icon" type="image/svg+xml" data="/images/svg/strategy.svg">Your browser does not support SVG</object>
				<h2>Strategy</h2>
				<p>We analyse your competitors and target audience <p>
			</div>	
			<div class="col1">
				<object class="icon" type="image/svg+xml" data="/images/svg/socialMedia.svg">Your browser does not support SVG</object>
				<h2>Social Media</h2>
				<p>You're a part of our journey, success stories make it all worth the effort<p>
			</div>	
			<div class="col1">
			<object class="icon" type="image/svg+xml" data="/images/svg/seo.svg">Your browser does not support SVG</object>	
				<h2>SEO</h2>
				<p>Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam. Aliquam in tortor enim.<p>
			</div>
			<div class="col1">
				<object class="icon" type="image/svg+xml" data="/images/svg/seo.svg">Your browser does not support SVG</object>	
				<h2>Content Mangement System</h2>
				<p>Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam. Aliquam in tortor enim.<p>
			</div>
									
		</div>
	</section>

	<section id="Folio" class="folio">
		<a href="#" data-display="betwayBingo">
			<div class="item item-w2 item-h2">
				<img src="/images/bb.jpg">
				<div class="overlay">

				</div>
				<figcaption>Item 1</figcaption>
			</div>
		</a>
		<a href="#" data-display="db">
			<div class="item item-h2">
				<img src="/images/db.jpg">
				<figcaption>Item 2</figcaption>
			</div>
		</a>
		<a href="#" data-display="coal">
			<div class="item item-h2">
				
				<img src="/images/coal.jpg">
				<figcaption>Item 3</figcaption>
			</div>
		</a>
		<div class="item item-h2">
			<img src="/images/wintech.jpg">
			<figcaption>Item 4</figcaption>
			
		</div>
		<div class="item item-h2">
			<img src="/images/dbApp.jpg">
			<figcaption>Item 5</figcaption>
		</div>
		<a href="#" data-display="apb">
			<div class="item item-w2 item-h4">
				<img src="/images/abi.jpg">
					
				<figcaption>Item 6</figcaption>
			</div>
		<a/>
		<div class="item item-w2 item-h4">
			<img src="/images/apb.jpg">
			<figcaption>Item 7</figcaption>
		</div>
		<a href="#" data-display="casinotop10list">
			<div class="item item-h2">
				<img src="/images/cttl.jpg">
				<figcaption>Item 8</figcaption>
			</div>
		</a>
		<div class="item item-h2">
			<img src="/images/gf.jpg">
			<figcaption>Item 9</figcaption>
		</div>
		<div class="item item-h2">
			<img src="http://themenectar.com/demo/salient-frostwave/wp-content/uploads/2014/03/onemore-preload1121-1000x1000.jpg">
			<figcaption>Item 10</figcaption>
		</div>
		<div class="item item-h2">
			<img src="http://themenectar.com/demo/salient-frostwave/wp-content/uploads/2014/03/CSD_06b11-500x500.jpg">
			<figcaption>Item 11</figcaption>
		</div>
		<div class="item item-w2 item-h2">
			<img src="http://themenectar.com/demo/salient-frostwave/wp-content/uploads/2013/03/theMoose1.jpg">
			<figcaption>Item 12</figcaption>
		</div> 
	</section>





	<section id="Footer">
		<div class="content">
			<div class="col1">	
				<object class="footerIcon" type="image/svg+xml" data="/images/svg/call10.svg">Your browser does not support SVG</object>
				<h2>07946 492 781</h2>
				
			</div>
			<div class="col1">	
				<object class="footerIcon" type="image/svg+xml" data="/images/svg/packet.svg">Your browser does not support SVG</object>
				<h2>dan@dandigital.com</h2>
				
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
<div id="apb" class="portBox">
    <div class="project">
        
    	<div class="project-pics">

            <img src="/images/behance/apb.jpg">
             
            
        </div>
        
        <div class="project-info">
            <h3>My Awsome Project</h3>
            
            <p>Short description of the project or the work that went into finishing it.</p>
            
            <ul>
                <li><h4>CLIENT</h4></li>
                	<li>Dude McMan</li>
                <li><h4>ROLE</h4></li>
                	<li>Stuff, Stuff, More Stuff</li>
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
            <h3>My Awsome Project</h3>
            
            <p>Short description of the project or the work that went into finishing it.</p>
            
            <ul>
                <li><h4>CLIENT</h4></li>
                	<li>Dude McMan</li>
                <li><h4>ROLE</h4></li>
                	<li>Stuff, Stuff, More Stuff</li>
                <li><h4>SKILLS</h4></li>
                	<li>this, that, the other</li>
            </ul>
            
            <a href="#" class="project-button">Visit Site</a>
        
        </div><!-- Project Info Close -->
    </div><!-- Project Close -->
</div><!-- portBox Close -->



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
            <h3>My Awsome Project</h3>
            
            <p>Short description of the project or the work that went into finishing it.</p>
            
            <ul>
                <li><h4>CLIENT</h4></li>
                	<li>Dude McMan</li>
                <li><h4>ROLE</h4></li>
                	<li>Stuff, Stuff, More Stuff</li>
                <li><h4>SKILLS</h4></li>
                	<li>this, that, the other</li>
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
</body>
</html>