<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="container">
      <div class="header-row">

      <!-- header --> 
      <div class="header" role="navigation"> 
          <div class="header-title">
            <h4>EMILY LAVELLE</h4>
          </div>
          <div class="menu">
              <div class="btn-group">
                <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  QUICK LINKS <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="mailto:elavelle@kent.edu" target="_blank">Contact</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Skills</a></li>
                  <!-- <li role="separator" class="divider"></li> -->
                  <li><a href="#">Resume</a></li>
                </ul>
              </div>




          </div>
          <div class="header-social">
            <a href="www.linkedin.com/in/emilylavelle" target="_blank"><i class="fa fa-linkedin"></a></i> 
            <a href="https://github.com/elavelle13" target="_blank"><i class="fa fa-github"></a></i>
            <a href="https://plus.google.com/102496178335066219991/about" target="_blank"><i class="fa fa-google-plus"></a></i>
            <a href="mailto:elavelle@kent.edu"><i class="fa fa-envelope"></a></i>
          </div>
        </div>
              </div>
            </span>
          </div>
      </div>
    </div>
    <div class="divider"> </div>
    <div class="backdrop">
      <div class="main-container">
        <div class="back-img">
          <img src="images/hero-img-2.png">
        </div>
        <div class="main-text">
          <h2>Multimedia & Web Design Specialist</h2>
          <h4>"Design does not matter" - said no one ever.</h4>
          <div class="hero-btns">
            <a class="fancy-btn btn" id="about">About</a>
            <a class="fancy-btn btn" id="media">Media</a>
            <a class="fancy-btn btn" id="web">Web</a>
            <a class="fancy-btn btn" id="resume" href="#">Resume</a>
          </div>
        </div>
      </div>
    </div>
    <div id="about" class="about-container">
      <div class="about-text">
        <h2>Get To Know Me</h2>
        <h4>
          I am currently finishing up my last year of school at Kent State University with a bachelor in Digital Sciences. My program, which is new to the tech world, is a disciplinary major that was created from three other majors: Computer Science, Information & Management Systems, and [BLANK].
        </h4>

        <h4>
          I have worked in three different locations with three different companies and/or organizations. This has ranged from big corporations, like Kent State University, to start-ups like Uncubed in New York City, and small non-profit organizations like Chartiers-Houstin Soccer Assocation in Pittsburgh, PA.
        </h4>

        <h4>
          I have recently emerged myself in the freelancing world, hoping to help as many companies/organizations as I can...for a small price (lets be honest, I'm a poor 
        college student).
      </h4>

        <h4>
          You can contact me at anytime to chat about tech, design, or life. For more in-depth info about my background, please view my courses below.
        </h4>
      </div>
      <div class="about-icons">
        <div class="icon-circle">
          <div class="code-icon-alignment">
            <img src="images/code-icon.png" width="90" height="90">
          </div>
        </div>
        <div class="icon-circle">
          <div class="design-icon-alignment">
            <img src="images/graphic_design_icon.png" width="125" height="125">
          </div>
        </div>
        <div class="icon-circle">
          <div class="camera-icon-alignment">
            <img src="images/camera-icon.png" width="60" height="60">
          </div>
        </div>
      </div>
      <div class="about-btns">
        <a href ="mailto:elavelle@kent.edu" class="body-btn btn" id="contact">Contact</a>
        <a href="" class="body-btn btn" id="courses">Courses</a>
      </div>
    </div>	

    <div id="media" class="media-container">
      <div class="media-text">
        <h2>Media Projects</h2>
        <h4>
          There is nothing more exciting than seeing your media projects posted everywhere. That 
          feeling is what helps me to improve my design background more and more everyday. Just like technology, design is always evolving. 
        </h4>

        <h4>
          I have been involved in design courses since freshman year of high school. I can work with various programs from Adobe, Microsoft, Sony, and more. I currently only work in Adobe based applications, via Creative Cloud Suite. 
        </h4>

        <h4>
          My skills with design range from print based material, web based material, typography, video editing, and more. If you ever want to know more in-depth information about my design skills and projects, feel free to <a href="mailto:elavelle@kent.edu">ask</a>. 
        </h4>
      </div>
      <div class="media-slideshow">
      </div>  
    </div>

    <div id="web" class="web-container">
      <div class="web-text">
        <h2>Web Projects</h2>
        <h4>
          Web design has always been one of my greater passions. I focused more on this when I moved to New York City for the summer. The best thing about being a web designer is that you are constantly learning and expanding yourself into a better developer everyday. Any developer who says they have learned it all is a liar. Seriously, don't trust them.
        </h4>

        <h4>
          Below are the websites I have, or currently still, work with:
        </h4>
      </div>
      <div class="web-showcase">
        <div class="col-lg-6">
          <img src="images/backdrop.jpeg" />
        </div>
        <div class="col-lg-6">
          <img src="images/backdrop.jpeg" />
        </div>
        <div class="col-lg-6">
          <img src="images/backdrop.jpeg" />
        </div>
        <div class="col-lg-6">
          <img src="images/backdrop.jpeg" />
        </div>

      </div> 
      <div class="web-sec-text">
        <h4>
          * I have been working with University College for the past two years now. I was lucky enough to be apart of such a great design team. Though I have contributed a lot to the site, not 
everything on there is done by me. To clear up this confusion, please take some time to view the specific departments I have solely worked in.
        </h4>
        <div class="web-links">
          <ul>
            <li><a href="#">Webpage 1 </a> </li>
            <li><a href="#">Webpage 2 </a> </li>
            <li><a href="#">Webpage 3 </a> </li>
            <li><a href="#">Webpage 4 </a> </li>
            <li><a href="#">Webpage 5 </a> </li>
            <li style="border:none!important;"><a href="#">Webpage 6 </a></li>
          </ul>
        </div>
        <h4>
          My skills vary between front-end and back-end design, some application design, email templates, and more. You can view my skills, or my courses I have taken through the years, more intently <a href="#">here</a>.
        </h4>
        <h4>
          While you're at it, view some of my code on <a href="#">Github</a>. There's some good stuff on there!
        </h4>
      </div> 
    </div>

    <div class="contact-container">
      <div class="contact-width">
      <div class="contact-text">
        <h2>Need Help? Don't Lie, You Do. Just Ask.</h2>
        <h4>
          Lets be honest, anyone can build a website if they really want to. But not everyone can create a good website. That's what I'm here for! Let me help you create media content for your company or organization so you have one less thing to worry about. All you have to do is ask. Seriously, that's it. No project is too big or too small. So c'mon, lets <a href="mailto:elavelle@kent.edu" target="_blank">talk</a>!
        </h4>
      </div>
      <div class="contact-img">
        <img src="images/computer.png" />
      </div> 
      </div> 
    </div>

      <div class="footer-container">
        <div class="footer-text">
          <div class="footer-contact">
            <h2>
              EMILY LAVELLE
            </h2>
            <div class="footer-social">
              <a href="www.linkedin.com/in/emilylavelle"><i class="fa fa-linkedin"></a></i> 
              <a href="https://github.com/elavelle13" target="_blank"><i class="fa fa-github"></a></i>
              <a href="https://plus.google.com/102496178335066219991/about" target="_blank"><i class="fa fa-google-plus"></a></i>
              <a href="mailto:elavelle@kent.edu" target="_blank"><i class="fa fa-envelope"></a></i>
            </div>
            <div class="quick-links">
  <ul>
    <li><a href="mailto:elavelle@kent.edu" target="_blank">Contact</a></li>
    <li><a href="" target="_blank">Courses</a></li>
    <li><a href="www.linkedin.com/in/emilylavelle" target="_blank">Skills</a></li>
    <li style="border-right: none!important"><a href="" target="_blank">Resume</a></li>
  </ul>
</div>
<div class="copyright">
  <h4>&copy; 2015 EMILY LAVELLE ALL RIGHTS RESERVED</h4>
</div>
          </div>
        </div>
      </div>
  </div>

  <?php get_footer(); ?>