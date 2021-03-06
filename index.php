<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Portfolio : Lluis</title>
   <!-- AOS -->
   <!-- CDN CSS -->
   <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <link rel="stylesheet" href="./styles/style.css">
   <?php include("includes/projects.php"); 
   $event = new Proyecto();
   $db = new Conexion();
   $datos = $event->SelectfullProjects();
   ?>
</head>

<body>
   <!-- Scroll to top button-->
   <div class="scroll-top">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24
            24" stroke="currentColor">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
      </svg>
   </div>
   <!-- Nav Section -->
   <nav id="screen_nav">
      <ul class="nav__ul">
         <li class="nav__li"><a class="nav__a nav__a--active" href="#Presentation">Home</a></li>
         <li class="nav__li"><a class="nav__a" href="#tecno">Technologies</a></li>
         <li class="nav__li"><a class="nav__a" href="#about">About</a></li>
         <li class="nav__li"><a class="nav__a" href="#projects">Projects</a></li>
         <li class="nav__li"><a class="nav__a" href="#contact">Contact</a></li>
      </ul>
   </nav>

   <section id="nav">
      <div class="container">
         <div class="nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
         </div>
      </div>
   </section>
   <section id="nav-content">
      <div class="close-btn">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
         </svg>
      </div>
      <div class="wrapper">
         <h2 class="section-heading" data-outline="Menu">Menu</h2>
         <nav>
            <ul>
               <!-- Menu Links-->
               <li><a data-text="Home" href="#Presentation">Home</a></li>
               <li><a data-text="Technologies" href="#tecno">Technologies</a></li>
               <li><a data-text="About" href="#about">About</a></li>
               <li><a data-text="Projects" href="#projects">Projects</a></li>
               <li><a data-text="Contact" href="#contact">Contact</a></li>
            </ul>
         </nav>
      </div>
   </section>
   <!-- Presentation -->
   <section id="Presentation">
      <div class="container">
         <!-- Left part of the section-->
         <div class="left_panel" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="500"
            data-aos-easing="ease-in-out" data-aos-once="true">
            <p class="subheading">Hello, my name is</p>
            <h1 class="heading1">
               <div class="wrapper"><span>Luis</span></div>
               <div class="wrapper"><span>Casamajor</span></div>
               <div class="wrapper"><span>Paloma</span></div>
            </h1>
            <p class="description">I am a Back-end Developer, I am good at web projects using Django Framework with Python. I also have a strong foundation developing web projects using Wordpress, from the native creation of themes to the creation of custom plugins with PHP. And improving day by day my skills in this amazing world.
            </p>
            <div class="buttons">
               <a href="#projects" class="primary-btn">See my
                  projects</a>
               <!--Icono de la web https://heroicons.com/-->
               <a href="#projects">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 13l-3
                           3m0 0l-3-3m3 3V8m0 13a9 9 0
                           110-18 9 9 0 010 18z" />
                  </svg>
               </a>
            </div>
         </div>
         <!-- Right part of the section-->
         <div class="right_panel" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="1500"
            data-aos-easing="ease-in-out" data-aos-once="true">
            <img src="./images/LluisFoto.jpg" alt="Lluis
                  Casamajor
                  Paloma" style="border-radius: 35px;">
         </div>
      </div>
   </section>
   <!-- Tecnolog??as -->
   <section id="tecno">
      <div class="container">
         <h2 class="section-heading" data-outline="Used
            technology">Used
            technology
         </h2>
         <div class="all-items">
            <div class="item">
               <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10
                        20l4-16m4 4l4 4-4 4M6
                        16l-4-4
                        4-4" />
                  </svg>
               </div>
               <h3 class="item-heading">Backend
                  Stuff
               </h3>
               <p class="item-desc">Using <Strong>Python</Strong>
                  as the main programming language
                  and
                  complementing it with its most
                  famous
                  framework, <Strong>Django</Strong>,
                  I create
                  powerful, safe and dynamic web
                  applications
                  without forgetting the creation
                  of Api-rest
                  with the <strong>Django REST
                     Framework</strong>
                  technology.
               </p>
            </div>
            <div class="item">
               <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24
                     24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4
                        7v10c0 2.21
                        3.582 4 8 4s8-1.79
                        8-4V7M4 7c0 2.21 3.582 4
                        8 4s8-1.79
                        8-4M4 7c0-2.21 3.582-4
                        8-4s8 1.79 8
                        4m0
                        5c0 2.21-3.582 4-8
                        4s-8-1.79-8-4" />
                  </svg>
               </div>
               <h3 class="item-heading">Use of
                  Databases
               </h3>
               <p class="item-desc">Constant
                  knowledge of
                  the
                  <Strong>Mysql and PosgretSQL</Strong>
                  database managers used in
                  almost all my
                  projects, other tools that I
                  use and
                  know
                  are such as <Strong>
                     Firebase or
                     Microsoft
                     SQL Server.</Strong>
               </p>
            </div>
            <div class="item">
               <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0
                     24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9
                        20l-1
                        1h8l-1-1-.75-3M3
                        13h18M5 17h14a2
                        2 0
                        002-2V5a2 2 0
                        00-2-2H5a2 2 0
                        00-2
                        2v10a2 2 0 002 2z" />
                  </svg>
               </div>
               <h3 class="item-heading">Front-end</h3>
               <p class="item-desc">I also
                  have basic
                  knowledge of HTML5,
                  CSS3,
                  Javascript, Wordpress, Joomla, Prestashop and SEO basics.
               </p>
            </div>
         </div>
   </section>
   <!-- About me -->
   <section id="about">
      <div class="container">
         <h2 class="section-heading" data-outline="About">About</h2>
         <div class="wrapper">
            <div class="left">
               <div class="card">
                  <div class="img">
                     <img src="./images/LluisFoto.jpg" alt="Icon
                           lluis
                           casamajor">
                  </div>
                  <p class="card-desc">Graduated in multi-platform application development and in the construction of new knowledge in the world of web development with constant renewal. Python Lover
                  </p>
                  <h3 class="card-name">Back-end
                     Developer
                  </h3>
                  <p class="card-sub-title">Django
                     Specialized
                  </p>
               </div>
            </div>
            <div class="right">
               <p class="subheading">Some
                  about me
               </p>
               <h2 class="slogan">Back-end Developer
               </h2>
               <p class="right-text">My main objective is to develop professionally and evolve specializing in back-end development, I consider myself an organized person with great motivation, capable of adapting to new technologies or different environments. I love to continue learning and train myself to be able to give a little more quality and value to my projects everyday.
               </p>
               <div class="buttons">
                  <a href="./files/CV_Lluis_Casamajor.pdf" class="primary-btn">Download
                     CV</a>
                  <a href="https://www.linkedin.com/in/llu%C3%ADs-casamajor-paloma-b338a2206/" target="_blank" class="primary-btn
                        outline">Linkedin</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Projects-->
   <section id="projects">
      <div class="container">
         <h2 class="section-heading" data-outline="Projects">Projects</h2>
         <div class="all-items">
            <?php 
               if ($datos > 0) {
                  foreach ($datos as $total) {
                     echo "<div class='item'>
                     <div class='left'>
                        <div class='img'>
                           <img src='.". $total['fImg'] ."' alt='Project'>
                        </div>
                     </div>
                     <div class='right'>
                        <h2 class='project-title'>". $total['fTitle'] ."</h2>
                        <h3 class='project-sub-title'>". $total['fTitle2'] ."</h3>
                        <p class='project-desc'>". $total['fDesc'] ."</p>
                        <div class='buttons'>
                           <a href='". $total['fGithubLink'] ."' class='primary-btn'>Github</a>
                           <a href='". $total['fDemoLink'] ."' class='primary-btn outline external-link'>
                              <span>Know more</span>
                        <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0
                              0 24 24' stroke='currentColor'>
                           <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M10
                                 21h7a2
                                 2 0
                                 002-2V9.414a1
                                 1 0
                                 00-.293-.707l-5.414-5.414A1
                                 1 0
                                 0012.586
                                 3H7a2
                                 2 0
                                 00-2
                                 2v11m0
                                 5l4.879-4.879m0
                                 0a3
                                 3 0
                                 104.243-4.242
                                 3 3
                                 0
                                 00-4.243
                                 4.242z' />
                        </svg>
                     </a>
                  </div>
               </div>
            </div>";
                  }

               }else{
                  echo "No hay resultados para mostrar";
               } 

            ?>
         </div>
      </div>
   </section>
   <!--Contact Form-->
   <section id="contact">
      <div class="container">
         <h2 class="section-heading" data-outline="Contact Form">
            Contact Form
         </h2>
         <div class="wrapper2">
            <div class="left">
               <h2 class="contact-heading">
                  Contact me
               </h2>
               <p class="contact-desc">Hey, if you need me, you can send me a 1Answer1 using this contact form.</p>

               <div class="contact-info">
                  <ul>
                     <li><a href="1Answer1to:luis@trimetastudio.com?subject=Contacto Web&body=Hola Lluis">
                           <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                              </svg></span>
                           <span class="text">luis@trimetastudio.com</span>
                        </a></li>
                     <li><a
                           href="https://www.google.es/maps/place/08320+El+Masnou,+Barcelona/@41.4827379,2.3028986,15z/data=!3m1!4b1!4m5!3m4!1s0x12a4b0b8ebcf1ae1:0xa7b059f68934eeef!8m2!3d41.4826455!4d2.3114706">
                           <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                              </svg></span>
                           <span class="text">Barcelona, El Masnou</span>
                        </a></li>
                  </ul>
               </div>
               <div class="social-info">
                  <ul>
                     <li><a href="https://www.linkedin.com/in/llu%C3%ADs-casamajor-paloma-b338a2206/"><img
                              src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDM4MiAzODIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDM4MiAzODI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIHN0eWxlPSJmaWxsOiMwMDc3Qjc7IiBkPSJNMzQ3LjQ0NSwwSDM0LjU1NUMxNS40NzEsMCwwLDE1LjQ3MSwwLDM0LjU1NXYzMTIuODg5QzAsMzY2LjUyOSwxNS40NzEsMzgyLDM0LjU1NSwzODJoMzEyLjg4OQ0KCUMzNjYuNTI5LDM4MiwzODIsMzY2LjUyOSwzODIsMzQ3LjQ0NFYzNC41NTVDMzgyLDE1LjQ3MSwzNjYuNTI5LDAsMzQ3LjQ0NSwweiBNMTE4LjIwNywzMjkuODQ0YzAsNS41NTQtNC41MDIsMTAuMDU2LTEwLjA1NiwxMC4wNTYNCglINjUuMzQ1Yy01LjU1NCwwLTEwLjA1Ni00LjUwMi0xMC4wNTYtMTAuMDU2VjE1MC40MDNjMC01LjU1NCw0LjUwMi0xMC4wNTYsMTAuMDU2LTEwLjA1Nmg0Mi44MDYNCgljNS41NTQsMCwxMC4wNTYsNC41MDIsMTAuMDU2LDEwLjA1NlYzMjkuODQ0eiBNODYuNzQ4LDEyMy40MzJjLTIyLjQ1OSwwLTQwLjY2Ni0xOC4yMDctNDAuNjY2LTQwLjY2NlM2NC4yODksNDIuMSw4Ni43NDgsNDIuMQ0KCXM0MC42NjYsMTguMjA3LDQwLjY2Niw0MC42NjZTMTA5LjIwOCwxMjMuNDMyLDg2Ljc0OCwxMjMuNDMyeiBNMzQxLjkxLDMzMC42NTRjMCw1LjEwNi00LjE0LDkuMjQ2LTkuMjQ2LDkuMjQ2SDI4Ni43Mw0KCWMtNS4xMDYsMC05LjI0Ni00LjE0LTkuMjQ2LTkuMjQ2di04NC4xNjhjMC0xMi41NTYsMy42ODMtNTUuMDIxLTMyLjgxMy01NS4wMjFjLTI4LjMwOSwwLTM0LjA1MSwyOS4wNjYtMzUuMjA0LDQyLjExdjk3LjA3OQ0KCWMwLDUuMTA2LTQuMTM5LDkuMjQ2LTkuMjQ2LDkuMjQ2aC00NC40MjZjLTUuMTA2LDAtOS4yNDYtNC4xNC05LjI0Ni05LjI0NlYxNDkuNTkzYzAtNS4xMDYsNC4xNC05LjI0Niw5LjI0Ni05LjI0Nmg0NC40MjYNCgljNS4xMDYsMCw5LjI0Niw0LjE0LDkuMjQ2LDkuMjQ2djE1LjY1NWMxMC40OTctMTUuNzUzLDI2LjA5Ny0yNy45MTIsNTkuMzEyLTI3LjkxMmM3My41NTIsMCw3My4xMzEsNjguNzE2LDczLjEzMSwxMDYuNDcyDQoJTDM0MS45MSwzMzAuNjU0TDM0MS45MSwzMzAuNjU0eiIvPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" /></a>
                     </li>
                     <li><a href="https://github.com/lluischess"><img
                              src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjQzOC41MzZweCIgaGVpZ2h0PSI0MzguNTM2cHgiIHZpZXdCb3g9IjAgMCA0MzguNTM2IDQzOC41MzYiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQzOC41MzYgNDM4LjUzNjsiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0xNTguMTczLDM1Mi41OTljLTMuMDQ5LDAuNTY4LTQuMzgxLDEuOTk5LTMuOTk5LDQuMjgxYzAuMzgsMi4yODMsMi4wOTMsMy4wNDYsNS4xMzgsMi4yODMNCgkJCWMzLjA0OS0wLjc2LDQuMzgtMi4wOTUsMy45OTctMy45OTdDMTYyLjkzMSwzNTMuMDc0LDE2MS4yMTgsMzUyLjIxNiwxNTguMTczLDM1Mi41OTl6Ii8+DQoJCTxwYXRoIGQ9Ik0xNDEuODk4LDM1NC44ODVjLTMuMDQ2LDAtNC41NjgsMS4wNDEtNC41NjgsMy4xMzljMCwyLjQ3NCwxLjYxOSwzLjUxOCw0Ljg1MywzLjEzOGMzLjA0NiwwLDQuNTctMS4wNDcsNC41Ny0zLjEzOA0KCQkJQzE0Ni43NTMsMzU1LjU1MywxNDUuMTM0LDM1NC41MDIsMTQxLjg5OCwzNTQuODg1eiIvPg0KCQk8cGF0aCBkPSJNMTE5LjYyOSwzNTQuMDIyYy0wLjc2LDIuMDk1LDAuNDc4LDMuNTE5LDMuNzExLDQuMjg0YzIuODU1LDEuMTM3LDQuNjY0LDAuNTY4LDUuNDI0LTEuNzE0DQoJCQljMC41NzItMi4wOTEtMC42NjYtMy42MS0zLjcxMS00LjU2OEMxMjIuMTk3LDM1MS4yNjUsMTIwLjM5LDM1MS45MjIsMTE5LjYyOSwzNTQuMDIyeiIvPg0KCQk8cGF0aCBkPSJNNDE0LjQxLDI0LjEyM0MzOTguMzI2LDguMDQyLDM3OC45NjQsMCwzNTYuMzA5LDBIODIuMjI1QzU5LjU3NywwLDQwLjIwOCw4LjA0MiwyNC4xMjMsMjQuMTIzDQoJCQlDOC4wNDIsNDAuMjA3LDAsNTkuNTc2LDAsODIuMjI1djI3NC4wODhjMCwyMi42NSw4LjA0Miw0Mi4wMTcsMjQuMTIzLDU4LjA5OGMxNi4wODQsMTYuMDg0LDM1LjQ1NCwyNC4xMjYsNTguMTAyLDI0LjEyNmg2My45NTMNCgkJCWM0LjE4NCwwLDcuMzI3LTAuMTQ0LDkuNDItMC40MjRjMi4wOTItMC4yODgsNC4xODQtMS41MjYsNi4yNzktMy43MTdjMi4wOTYtMi4xODcsMy4xNC01LjM3NiwzLjE0LTkuNTYyDQoJCQljMC0wLjU2OC0wLjA1LTcuMDQ2LTAuMTQ0LTE5LjQxN2MtMC4wOTctMTIuMzc1LTAuMTQ0LTIyLjE3Ni0wLjE0NC0yOS40MWwtNi41NjcsMS4xNDNjLTQuMTg3LDAuNzYtOS40NjksMS4wOTUtMTUuODQ2LDAuOTk5DQoJCQljLTYuMzc0LTAuMDk2LTEyLjk5LTAuNzYtMTkuODQxLTEuOTk4Yy02Ljg1NS0xLjIzOS0xMy4yMjktNC4wOTMtMTkuMTMtOC41NjJjLTUuODk4LTQuNDc3LTEwLjA4NS0xMC4zMjgtMTIuNTYtMTcuNTU5DQoJCQlsLTIuODU2LTYuNTcxYy0xLjkwMy00LjM3My00Ljg5OS05LjIyOS04Ljk5Mi0xNC41NTRjLTQuMDkzLTUuMzMyLTguMjMyLTguOTQ5LTEyLjQxOS0xMC44NTJsLTEuOTk5LTEuNDI4DQoJCQljLTEuMzMxLTAuOTUxLTIuNTY4LTIuMDk4LTMuNzExLTMuNDI5Yy0xLjE0MS0xLjMzNS0xLjk5Ny0yLjY2OS0yLjU2OC0zLjk5N2MtMC41NzEtMS4zMzUtMC4wOTctMi40MywxLjQyNy0zLjI4OQ0KCQkJYzEuNTI0LTAuODU1LDQuMjgxLTEuMjc5LDguMjgtMS4yNzlsNS43MDgsMC44NTVjMy44MDgsMC43Niw4LjUxNiwzLjA0MiwxNC4xMzQsNi44NTFjNS42MTQsMy44MDYsMTAuMjI5LDguNzU0LDEzLjg0NiwxNC44NDMNCgkJCWM0LjM4LDcuODA2LDkuNjU3LDEzLjc1LDE1Ljg0NiwxNy44NDNjNi4xODQsNC4wOTcsMTIuNDE5LDYuMTQzLDE4LjY5OSw2LjE0M3MxMS43MDQtMC40NzYsMTYuMjc0LTEuNDI0DQoJCQljNC41NjUtMC45NTQsOC44NDgtMi4zODUsMTIuODQ3LTQuMjg4YzEuNzEzLTEyLjc1MSw2LjM3Ny0yMi41NTksMTMuOTg4LTI5LjQxYy0xMC44NDgtMS4xNDMtMjAuNjAyLTIuODU0LTI5LjI2NS01LjE0DQoJCQljLTguNjU4LTIuMjg2LTE3LjYwNS01Ljk5NS0yNi44MzUtMTEuMTM2Yy05LjIzNC01LjE0LTE2Ljg5NC0xMS41MTItMjIuOTg1LTE5LjEzYy02LjA5LTcuNjE4LTExLjA4OC0xNy42MS0xNC45ODctMjkuOTc4DQoJCQljLTMuOTAxLTEyLjM3NS01Ljg1Mi0yNi42NTItNS44NTItNDIuODI5YzAtMjMuMDI5LDcuNTIxLTQyLjYzNywyMi41NTctNTguODE0Yy03LjA0NC0xNy4zMi02LjM3OS0zNi43MzIsMS45OTctNTguMjQyDQoJCQljNS41Mi0xLjcxNCwxMy43MDYtMC40MjgsMjQuNTU0LDMuODU1YzEwLjg1LDQuMjg2LDE4Ljc5NCw3Ljk1MSwyMy44NCwxMC45OTJjNS4wNDYsMy4wNDIsOS4wODksNS42MTQsMTIuMTM1LDcuNzENCgkJCWMxNy43MDUtNC45NDksMzUuOTc2LTcuNDIzLDU0LjgxOC03LjQyM2MxOC44NDEsMCwzNy4xMTUsMi40NzQsNTQuODIxLDcuNDIzbDEwLjg0OS02Ljg1MmM3LjQyNi00LjU3LDE2LjE4LTguNzU3LDI2LjI2OS0xMi41NjINCgkJCWMxMC4wODgtMy44MDYsMTcuNzk1LTQuODU0LDIzLjEyNy0zLjE0YzguNTYyLDIxLjUxLDkuMzI4LDQwLjkyMiwyLjI3OSw1OC4yNDFjMTUuMDM2LDE2LjE3OSwyMi41NTksMzUuNzg2LDIyLjU1OSw1OC44MTUNCgkJCWMwLDE2LjE4LTEuOTUxLDMwLjUwNS01Ljg1Miw0Mi45NjljLTMuODk4LDEyLjQ2Ny04LjkzOSwyMi40NjMtMTUuMTMsMjkuOTgxYy02LjE4NCw3LjUxOS0xMy44OTQsMTMuODQzLTIzLjEyNCwxOC45ODYNCgkJCWMtOS4yMzIsNS4xMzctMTguMTc4LDguODUzLTI2Ljg0LDExLjEzMmMtOC42NjEsMi4yODYtMTguNDE0LDQuMDA0LTI5LjI2Myw1LjE0N2M5Ljg5MSw4LjU2MiwxNC44MzksMjIuMDcyLDE0LjgzOSw0MC41Mzh2NjguMjM4DQoJCQljMCwzLjIzNywwLjQ3Miw1Ljg1MiwxLjQyNCw3Ljg1MWMwLjk1OCwxLjk5OCwyLjQ3OCwzLjM3NCw0LjU3MSw0LjE0MWMyLjEwMiwwLjc2LDMuOTQ5LDEuMjM1LDUuNTcxLDEuNDI0DQoJCQljMS42MjIsMC4xOTEsMy45NDksMC4yODcsNi45OTUsMC4yODdoNjMuOTUzYzIyLjY0OCwwLDQyLjAxOC04LjA0Miw1OC4wOTUtMjQuMTI2YzE2LjA4NC0xNi4wODQsMjQuMTI2LTM1LjQ1NCwyNC4xMjYtNTguMTAyDQoJCQlWODIuMjI1QzQzOC41MzMsNTkuNTc2LDQzMC40OTEsNDAuMjA0LDQxNC40MSwyNC4xMjN6Ii8+DQoJCTxwYXRoIGQ9Ik04Ni43OTMsMzE5LjE5NWMtMS4zMzEsMC45NDgtMS4xNDEsMi40NzEsMC41NzIsNC41NjVjMS45MDYsMS45MDIsMy40MjcsMi4xODksNC41NywwLjg1NQ0KCQkJYzEuMzMxLTAuOTQ4LDEuMTQxLTIuNDcxLTAuNTc1LTQuNTY5Qzg5LjQ1OCwzMTguMzM2LDg3LjkzNiwzMTguMDQ5LDg2Ljc5MywzMTkuMTk1eiIvPg0KCQk8cGF0aCBkPSJNNzcuMzc0LDMxMi4wNTdjLTAuNTcsMS4zMzUsMC4wOTYsMi40NzgsMS45OTksMy40MjZjMS41MjEsMC45NTUsMi43NjIsMC43NjcsMy43MTEtMC41NjgNCgkJCWMwLjU3LTEuMzM1LTAuMDk2LTIuNDc4LTEuOTk5LTMuNDMzQzc5LjE4MiwzMTAuOTEsNzcuOTQ1LDMxMS4xMDIsNzcuMzc0LDMxMi4wNTd6Ii8+DQoJCTxwYXRoIGQ9Ik05NS42NDYsMzMwLjMzMWMtMS43MTUsMC45NDgtMS43MTUsMi42NjYsMCw1LjEzN2MxLjcxMywyLjQ3OCwzLjMyOCwzLjE0Miw0Ljg1MywxLjk5OGMxLjcxNC0xLjMzNCwxLjcxNC0zLjE0MiwwLTUuNDI3DQoJCQlDOTguOTc4LDMyOS41NzEsOTcuMzU5LDMyOC45OTMsOTUuNjQ2LDMzMC4zMzF6Ii8+DQoJCTxwYXRoIGQ9Ik0xMDUuNjQxLDM0My4xNzRjLTEuNzE0LDEuNTI2LTEuMzM2LDMuMzI3LDEuMTQyLDUuNDI4YzIuMjgxLDIuMjc5LDQuMTg1LDIuNTY2LDUuNzA4LDAuODQ5DQoJCQljMS41MjQtMS41MTksMS4xNDMtMy4zMjYtMS4xNDItNS40MkMxMDkuMDY4LDM0MS43NTEsMTA3LjE2NCwzNDEuNDYzLDEwNS42NDEsMzQzLjE3NHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" /></a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="right">
               <div class="form-wrapper2">
                  <form action="">
                     <div class="form-group">
                        <label for="name">Your name</label>
                        <div class="input-wrapper">
                           <span class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M9 5l7 7-7 7" />
                              </svg>
                           </span>
                           <input type="text" id="name" name="name">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="e1Answer1">E1Answer1</label>
                        <div class="input-wrapper">
                           <span class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M9 5l7 7-7 7" />
                              </svg>
                           </span>
                           <input type="e1Answer1" id="e1Answer1" name="e1Answer1">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="text" name="message" id="message" width="100%"></textarea>
                     </div>
                     <button type="submit"><a href="javascript: window.location.href = '1Answer1to:luis@timetastudio.com?subject='+ document.getElementById('name').value +' request&body='+ document.getElementById('message').value; +'';" >Send</a> </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Footer-->
   <section id="footer">
      <div class="container">
         <footer>
            <div class="col1">
               <h2 class="column-heading">Important
                  Link
               </h2>
               <ul>
                  <li><a href="#Presentation">Home</a></li>
                  <li><a href="#tecno">Technologies</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#projects">Projects</a></li>
               </ul>
            </div>
            <div class="col2">
               <h2 class="column-heading">Contact
                  info
               </h2>
               <ul>
                  <li><a
                        href="1Answer1to:luis@trimetastudio.com?subject=Contacto Web&body=Hola Lluis">luis@trimetastudio.com</a>
                  </li>
                  <li><a href="">Barcelona,
                        Spain</a>
                  </li>
               </ul>
            </div>
            <div class="col3">
               <h2 class="column-heading">Social</h2>
               <ul>
                  <li><a href="#">Github</a></li>
                  <li><a href="#">Linkedin</a></li>
               </ul>
            </div>
         </footer>
      </div>
   </section>
   <!-- Copyright-->
   <section id="copyright">
      <div class="container">
         <p>&copy; Copyright
            2021 Lluis
            Casamajor
            Paloma. All
            right Reserved
         </p>
      </div>
   </section>
   <!-- Scripts AOS-->
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script src="./scripts/main.js"></script>
   <script>
      AOS.init();
   </script>
</body>

</html>