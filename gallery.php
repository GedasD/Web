<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galerija</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/MUSUSTILIUS.css">
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="js/validation.js"></script> 
	<style>
		td{
			width:300px;
		}
		td img{
			width:100%;
		}
		table{
			position:relative;
			bottom:100px;
		
		.remas{
			border:solid 1px red;
		}
		.balta1{
			color:white;
		}
	</style>
	
  </head> 
  
  <body class="size-1140">
  
    <!-- HEADER -->
    <header role="banner">    
      
      
 
       <!-- Top Navigation -->
	   <div>
      <nav class="melyna padding">
        <div class="line">
          <div class="s-12 l-2">
            <a href="index.php" class="Logo logo2"><img src="img/logo.png" alt="" class="logoDydis"></a>
          </div>
		  
          <div class="top-nav s-12 l-10">
            <p class="nav-text"></p>
            <ul class="right chevron hoverRaudona nav-butt">
				<li><a>Paskyra</a>
					<ul>
						<?php 
						if(!isset($_SESSION['vart_num'])){ 
								echo'
								<li class="hoverRaudona nav-butt">
									  <a href="Prisijungimas.php" class="nav-butt">Prisijungti</a>
								 </li>
								 <li class="hoverRaudona">
									  <a href="Registracija.php">Registruotis</a>
								</li>';
						 } 
						 else{
							 echo'
								<li class="hoverRaudona nav-butt pilka">
									  <a href="Logout.php">Atsijungti</a>
								 </li>';
						 }
						 ?>
					</ul>
				</li>
				<li class="hoverRaudona"><a href="index.php" >Pagrindis</a></li>
				<li class="hoverRaudona"><a>TOP10</a>
					<ul>
						<li class="hoverRaudona"><a href="TOP10.php">TOP10 filmai 2017</a>
						</li>
					</ul>
				</li>
              <li class="hoverRaudona"><a href="gallery.php">Galerija</a></li>
              <li class="hoverRaudona"><a href="about.php">Apie mus</a></li>
              <li class="hoverRaudona"><a href="contact.php">Kontaktinė informacija</a></li>
            </ul>
          </div>
        </div>
      </nav>
	  </div>
    </header>
    
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <div class="gallery-width">
        <header class="section text-center raudona">
          <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1" style="color: white">Galerija</h1>
        </header>
		<div class="section"> 
          <div class="line">
            <div class="margin">
		<table>
		<tr>
		
              <div class="s-12 m-6 l-3">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>  
                    </div> 
                  </div> 
				  <td class="cell-padding">
                  <img src="img/11.jpg" alt="" title="Portfolio Image 1"  class="table-image"/>
				  </td>
                </div>	
              </div>
			  
			  
              <div class="s-12 m-6 l-3">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>  
					  
                    </div> 
                  </div> 
				  <td class="cell-padding">
                  <img src="img/12.jpg" alt="" title="Portfolio Image 2" />
				  </td>
                </div>	
              </div>
			  
			  
              <div class="s-12 m-6 l-3">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>  
                    </div> 
                  </div> 
				  <td>
                  <img src="img/13.jpg" alt="" title="Portfolio Image 3" />
				  </td>
                </div>	
              </div>
			  
			  
              <div class="s-12 m-6 l-3">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>  
                    </div> 
                  </div> 
				  <td>
                  <img src="img/14.jpg" alt="" title="Portfolio Image 4" />
				  </td>
                </div>	
              </div>
			  
			  </tr>
			  <tr>
			  
              <div class="s-12 m-6 l-3">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>  
                    </div> 
                  </div> 
				  <td>
                  <img src="img/15.jpg" alt="" title="Portfolio Image 5" />
				  </td>
                </div>	
              </div>
			  
			  
              <div class="s-12 m-6 l-3">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>  
                    </div> 
                  </div> 
				  <td>
                  <img src="img/16.jpg" alt="" title="Portfolio Image 6" />
				  </td>
                </div>	
              </div>
			  
			  
              <div class="s-12 m-6 l-3">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>  
                    </div> 
                  </div> 
				  <td>
                  <img src="img/17.jpg" alt="" title="Portfolio Image 7" />
				  </td>
                </div>	
              </div>
			  
			  
              <div class="s-12 m-6 l-3">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>  
                    </div> 
                  </div> 
				  <td>
                  <img src="img/18.jpg" alt="" title="Portfolio Image 8" />
				  </td>
                </div>	
              </div>
			  
			  </tr>
			  <tr>
			  
              <div class="s-12 m-6 l-3">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>  
                    </div> 
                  </div> 
				  <td>
                  <img src="img/19.jpg" alt="" title="Portfolio Image 9" />
				  </td>
                </div>	
              </div>
			  
			  
              <div class="s-12 m-6 l-3">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p> 				
                    </div> 
                  </div> 
				  <td>
                  <img src="img/20.jpg" alt="" title="Portfolio Image 10" />
				  </td>
                </div>	
              </div>
     
					<td>              
					</td>	

              </tr>
			  
		</table>
      </div>
  </div>
</div>
    </main>
    
    <!--FOOTER -->
    <footer>
		<!-- Social -->
      <div class=" raudona padding text-center">
        <a href="https://www.facebook.com/"><i class="icon-facebook_circle icon2x text-white balta" style="color: white"></i></a> 
        <a href="https://twitter.com/"><i class="icon-twitter_circle icon2x balta" style="color: white"></i></a>
        <a href="https://plus.google.com/"><i class="icon-google_plus_circle icon2x text-white balta" style="color: white"></i></a>
        <a href="https://www.instagram.com/?hl=en/"><i class="icon-instagram_circle icon2x text-white" style="color: white" ></i></a>                                                                        
      </div>
      <!-- Main Footer -->
      <section class="pilka section ">
        <div class="line">
          <div class="margin">
            <!-- Collumn 1 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Mūsų šūkis</h4>
              <p class="text-size-20"><em>Gyvenimas be filmų - neįmanomas.</em><p>
                            
              <div class="line">
                <h4 class="text-uppercase text-strong margin-top-30">Apie kompaniją</h4>
                <div class="margin">
                  <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom" href="/"><img src="img/blog-04.jpg" alt=""></a>
                  </div>
                  <div class="s-12 m-12 l-8 margin-m-bottom">
                    <p>Per ilgą gyvavimo laika turime tukstančius patenkintų klientų.</p>
                    <a class="text-more-info text-primary-hover" href="/">Skaityti daugiau</a>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Collumn 2 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Susisiekite</h4>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-placepin text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Adresas:</b> Ulonų g.5, Vilnius</p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-mail text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="/" class="text-primary-hover"><b>El.paštas:</b>info@lgd.lt</a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-smartphone text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Telefonas:</b>+37061234567</p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-twitter text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="/" class="text-primary-hover"><b>Twitter</b></a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-facebook text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11">
                  <p><a href="/" class="text-primary-hover"><b>Facebook</b></a></p>
                </div>
              </div>
            </div>
            
             <!-- Collumn 3 -->
            <div class="s-12 m-12 l-4">
              <h4 class="text-uppercase text-strong">Siūskite žinutę mums</h4>
              <form class="customform" method="post" action="insert.php">
                <div class="line">
                  <div class="margin">
                    <div class="s-12 m-12 l-6">
                      <input title="Your e-mail"  name="email" class="required email border-radius" placeholder="Jūsų el-paštas" required  type="text" />
                    </div>
                    <div class="s-12 m-12 l-6">
                      <input name="name" class="name border-radius" placeholder="Jūsų vardas" title="Your name" type="text" />
                    </div>
                  </div>
                </div>
                <div class="s-12">
                  <textarea name="message" class="required message border-radius" placeholder="Jūsų pranešimas"  required rows="3"></textarea>
                </div>
				<?php 
					if(!isset($_SESSION['vart_num'])){
						echo'
						<div class="s-12"><button  onclick=redir();>Siūsti</button></div>';
					}
					else{
						echo'
						<div class="s-12"><button  type="submit";>Siūsti</button></div>';
					}
				?>
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
     
   </body>
</html>