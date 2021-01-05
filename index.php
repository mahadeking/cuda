<!DOCTYPE html>
<html lang="en">
<head>
    <!--META TAG REQ-->
    <meta charset="UTF-8">
    <title>Cuda-By-mahade</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="awesome portfolio">
     <!--FAVICON place-->
    <link rel="shortcut icon" href="resources/img/favicon.png" type="image/x-icon">    
     <!--LINE ICONS -->   
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <!--vendors -CSS FILES-->
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" href="vendors/css/grid.css">
    <link rel="stylesheet" href="vendors/css/animated.css">
    <!-- resources CSS FILES-->
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/responsive.css">
    
</head>
<body>
    
    <!--START HEADER SECTION-->
    <header id="home">
        <nav>
            <div class="row">
                <a href="#home">
                    <img src="resources/img/logo.png" alt="logo" class="logo">
                </a>
                <ul class="nav-manu">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#services">services</a></li>
                    <li><a href="#team">team</a></li>
                    <li><a href="#skills">skills</a></li>
                    <li><a href="#portfo">portfolio</a></li>
                    <li><a href="#testimonial">testmonial</a></li>
                    <li><a href="#contact">contact</a></li>
                </ul>
                <div class="mobile-menu">
                    <span onclick="openNav()">&#9776;</span>
                    <div id="myNav" class="overlay">
                        <a href="javascript:void" onclick="closeNav()" class="closebtn">&times;</a>
                        <div class="mobile-container">
                            <a onclick="closeNav()" href="#home" class="ahover">Home</a> 
                            <a onclick="closeNav()" href="#services">services</a>    
                            <a onclick="closeNav()" href="#team">team</a>    
                            <a onclick="closeNav()" href="#skills">skills</a>    
                            <a onclick="closeNav()" href="#portfo">portfolio</a> 
                            <a onclick="closeNav()" href="#testimonial">testmonial</a>   
                            <a onclick="closeNav()" href="#contact">contact</a>  
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="hero-text">
                <h1>Hi there! We are the new kids on the block and we build awesome websites and mobile apps.</h1>
                <a href="#" class="btn work-btn">work with us!</a>
            </div>
        </div>
    </header>
    <!--END HEADER SECTION-->
    <!--START SERVICES SECTION-->
    <section id="services" class="clear-fix js-services">
        <div class="row">
            <h2>SERVICES WE PROVIDE</h2>
            <p class="p-s">
                We are working with both individuals and businesses from all over the globe 
                to create awesome websites and applications.
            </p>
            <div class="row">
                <div class="col span_1_of_4 box">
                    <img src="resources/img/flag.png" alt="flag" class="service-img">
                    <h4>Branding</h4>
                    <p>
                        mangoman chakman hudaiman, 
                        consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                </div>
                <div class="col span_1_of_4 box">
                    <img src="resources/img/crayon.png" alt="crayon" class="service-img">
                    <h4>Design</h4>
                    <p>
                       mahade ipsum dolor sit amet, 
                        consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                </div>
                <div class="col span_1_of_4 box">
                    <img src="resources/img/gears.png" alt="gears" class="service-img">
                    <h4>Development</h4>
                    <p>
                        ipsum dolor sit amet.  ipsum , 
                        consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                </div>
                <div class="col span_1_of_4 box">
                    <img src="resources/img/rocket.png" alt="rocket" class="service-img">
                    <h4>Rocket Science</h4>
                    <p>
                        sit amet. ipsum dolor sit  
                        consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                </div>
            </div>
        </div>
    </section>
    <!--END SERVICES SECTION-->
    <!--START TEAM SECTION-->   
    <section id="team"  class="clear-fix">
        <div class="row team-box">
            <h2>MEET OUR BEAUTIFUL TEAM</h2>
            <p class="p-s">We are a small team of designers and developers, who help brands with big ideas.</p>
        </div>
        <div class="row">
            <div class="col span_1_of_4 box">
                <img src="resources/img/1.jpg" alt="picture" class="team-img">
                <h4>ANNE HATHAWAY</h4>
                <span class="role">CEO / Marketing expert</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, ab assumenda quod! Lorem, ipsum </p>
                <div class="social-link">
                    <ul>
                        <li><a href="#"><i class="lni lni-facebook-oval"></i>
                        </a></li>
                        <li><a href="#">
                            <i class="lni lni-twitter"></i>
                        </a></li>
                        <li><a href="#">
                            <i class="lni lni-linkedin-original"></i>
                        </a></li>
                        <li><a href="#">
                            <i class="lni lni-instagram-original"></i>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="col span_1_of_4 box">
                <img src="resources/img/2.jpg" alt="picture" class="team-img">
                    <h4>ANNE HATHAWAY</h4>
                    <span class="role">CEO / Marketing Guru</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, ab assumenda quod! Lorem, ipsum </p>
                <div class="social-link">
                    <ul>
                        <li><a href="#"><i class="lni lni-facebook-oval"></i>
                        </a></li>
                        <li><a href="#">
                            <i class="lni lni-twitter"></i>
                        </a></li>
                        <li><a href="#">
                            <i class="lni lni-linkedin-original"></i>
                        </a></li>
                        <li><a href="#">
                            <i class="lni lni-instagram-original"></i>
                        </a></li>
                    </ul>
                </div>
            </div>
            <div class="col span_1_of_4 box">
                <img src="resources/img/3.jpg" alt="picture" class="team-img">
                 <h4>ANNE HATHAWAY</h4>
                 <span class="role">CEO / Marketing Guru</span>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, ab assumenda quod! Lorem, ipsum </p>
                <div class="social-link">
                    <ul>
                        <li><a href="#"><i class="lni lni-facebook-oval"></i>
                        </a></li>
                        <li><a href="#">
                            <i class="lni lni-twitter"></i>
                        </a></li>
                        <li><a href="#">
                            <i class="lni lni-linkedin-original"></i>
                        </a></li>
                        <li><a href="#">
                            <i class="lni lni-instagram-original"></i>
                        </a></li>
                    </ul>
                </div>
            </div>
            <div class="col span_1_of_4 box">
                <img src="resources/img/4.jpg" alt="picture" class="team-img">
                 <h4>ANNE HATHAWAY</h4>
                    <span class="role">CEO / Marketing Guru</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, ab assumenda quod Lorem, ipsum </p>
                <div class="social-link">
                    <ul>
                        <li><a href="#"><i class="lni lni-facebook-oval"></i>
                        </a></li>
                        <li><a href="#">
                            <i class="lni lni-twitter"></i>
                        </a></li>
                        <li><a href="#">
                            <i class="lni lni-linkedin-original"></i>
                        </a></li>
                        <li><a href="#">
                            <i class="lni lni-instagram-original"></i>
                        </a></li>
                    </ul>
            </div>
        </div>
    </section>  
    <!--END TEAM SECTION-->
    <!--START SKILLS SECTION-->
    <section id="skills" class="clear-fix">
        <div class="row skills-box">
            <h2>WE GOT SKILLS!</h2>
            <p class="p-s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
        <div class="row">
           <div class="col span_1_of_4 box-skills">
            <svg class="radial-progress web-design" data-percentage="90" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">90%</text>
              </svg>
              <h4>WeB Design</h4>
           </div>
           <div class="col span_1_of_4 box-skills">
            <svg class="radial-progress html-css" data-percentage="90" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">90%</text>
              </svg>
              <h4>html / css</h4>
           </div> <div class="col span_1_of_4 box-skills">
            <svg class="radial-progress graphics-design" data-percentage="80" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">80%</text>
              </svg>
              <h4>Graphics Design</h4>
           </div> <div class="col span_1_of_4 box-skills">
            <svg class="radial-progress ui-ux" data-percentage="75" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">75%</text>
              </svg>
              <h4>ui / ux</h4>
           </div>
        </div>
    </section>
    <!--END SKILLS SECTION-->
    <!--START PORTFOLIO SECTION-->
    <section id="portfo" class="clear-fix">
        <div class="row portfo-box">
            <h2>OUR PORTFOLIO</h2>
            <p class="p-s">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam</p>
        </div>
        <div class="portfo-filter">
            <button type="button" data-filter="all">ALL</button>
            <button type="button" data-filter=".web">WEB</button>
            <button type="button" data-filter=".design">DESIGN</button>
            <button type="button" data-filter=".dev">DEVLOPMENT</button>
        </div>
        <div class="row container">
            <div class="col span_1_of_2 mix web box-portfo">
                <img src="resources/img/portfolio1.png" alt="portfolio">
                <h4>Isometric Perspective Mock-Up</h4>
            </div>
            <div class="col span_1_of_2 mix design box-portfo">
                <img src="resources/img/portfolio2.png" alt="portfolio">
                <h4>Isometric Perspective Mock-Up</h4>
            </div>
            <div class="col span_1_of_2 mix esign dev box-portfo">
                <img src="resources/img/portfolio3.png" alt="portfolio">
                <h4>Isometric Perspective Mock-Up</h4>
            </div>
            <div class="col span_1_of_2 mix  web dev box-portfo">
                <img src="resources/img/portfolio4.png" alt="portfolio">
                <h4>Isometric Perspective Mock-</h4>
            </div>
        </div>
    </section>
    <!--END PORTFOLIO  SECTION-->
    <!--START TESTIMONIAL  SECTION-->
    <section id="testimonial" class="clear-fix">
        <div class="row">
            <h2>WHAT POEPLE SAY ABOUT US</h2>
            <div class="p-s">Our clients love us! </div>
        </div>
        <div class="row">
            <div class="col span_1_of_2">
                <div class="cphoto">
                    <img src="resources/img/1.jpg" alt="jerry">
                </div>
                <div class="creview">
                    <q>Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.</q>
                    <h4>GUINIVER KOF</h4>
                    <span class="role">CEO of Pinterest</span>
                </div>
            </div>
            <div class="col span_1_of_2">
                <div class="cphoto">
                    <img src="resources/img/2.jpg" alt="jerry">
                </div>
                <div class="creview">
                    <q>Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.</q>
                    <h4>GUINIVER KOF</h4>
                    <span class="role">CEO of Pinterest</span>
                </div>
            </div>
            <div class="col span_1_of_2">
                <div class="cphoto">
                    <img src="resources/img/3.jpg" alt="jerry">
                </div>
                <div class="creview">
                    <q>Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.</q>
                    <h4>GUINIVER KOF</h4>
                    <span class="role">CEO of Pinterest</span>
                </div>
            </div>
            <div class="col span_1_of_2">
                <div class="cphoto">
                    <img src="resources/img/4.jpg" alt="jerry">
                </div>
                <div class="creview">
                    <q>Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.</q>
                    <h4>GUINIVER KOF</h4>
                    <span class="role">CEO of Pinterest</span>
                </div>
            </div>
        </div>
    </section>
    <!--END TESTIMONIAL  SECTION-->
    <!--start contact  SECTION-->
    <section id="contact" class="clear-fix">
        <div class="row">
            <h2>GET IN TOUCH</h2>
            <span class="p-s">1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: (202) 456-1111</span>
        </div>
        <div class="row">
            <form action="#" method="POST">
                <div class="row">
                    <div class="col span_1_of_2">
                        <input type="text" name="name" placeholder="your name*" required>
                    </div>
                </div>                
                    <div class="col span_1_of_2">
                        <input type="email" name="email" placeholder="your email*" required >
                    </div>
                <div class="row">
                    <textarea name="message"  cols="30" rows="10" placeholder="your message*" required ></textarea>
                </div>
                <div class="row">
                    <input type="submit" value="SEND MESSAGE" class="btn_submit">
                </div>
            </form>
        </div>
    </section>
    <!--END contact   SECTION-->
    <!--start footer SECTION-->
    <section id="footer" class="clear-fix">
        <div class="row">
            <ul>
                <li><a href="https://www.facebook.com/Mahde.Hasan.King/">facebook</a></li>
                <li><a href="">Twitter</a></li>
                <li><a href="">Google+</a></li>
                <li><a href="">LinkedIn</a></li>
                <li><a href="">Behance</a></li>
                <li><a href="">Dribbble</a></li>
                <li><a href="">GitHub</a></li>
            </ul>
        </div>
    </section>
    <!--END footer  SECTION-->


    <script src="vendors/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="vendors/js/modernizr-3.11.2.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="vendors/js/animated-js.js"></script>
    <script src="vendors/js/mixitup.min.js"></script>
    <script src="resources/js/custom.js"></script>
</body>
</html>
