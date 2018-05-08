<?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = 'Message from Contact Demo ';
 
    
    
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Please enter your name';
    }
    
    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }
    
    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 5) {
      $errHuman = 'Your anti-spam is incorrect';
    }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
  } else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
  }
}
}
?>
<!-- Start of HTML WEB PAGE -->
<!DOCTYPE html>
<html>
<title>Antoine Johnson - Welcome to My Page</title>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
body {background-image: url("http://priceandpricecreative.com/wp-content/uploads/2012/09/ppc_bg.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;  
      }
header {background-image: url("http://priceandpricecreative.com/wp-content/uploads/2012/09/ppc_bg.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed; 
}

#webname {
  color: white;
}
</style>
<body class="w3-black">



<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="https://github.com/CuseBredDeveloper/CuseBredDeveloper.github.io/blob/master/Headshot.png?raw=true" alt="headshot file not shown" class="w3-image"  style="width:100%"/>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#resume" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>RESUME</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-paper-plane-o fa-3x" aria-hidden="true"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->

<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Antoine Johnson.</h1>
    <p>Front End Developer.</p>
    <img src="https://github.com/CuseBredDeveloper/CuseBredDeveloper.github.io/blob/master/Headshot.png?raw=true" alt="headshot file not shown" class="w3-image" style="width: 500px">
  </header>

<!-- About Section -->
 
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey"><i class="fa fa-code" aria-hidden="true"></i>
      Behind the Code:</h2>
    <hr style="width:200px" class="w3-opacity">
      <p><p>Hello, my name is Antoine Johnson and I am a freelance front end developer. After a successful career in engineering, project management and sales, I have redirected my career path into web development. In the days of Myspace, where college kids were inadvertently coding to customize their home pages, my passion for web development began! The more I have learned the more I became extremely intrigued about coding. Over the last year I dove deeply into coding and I have spend time learning through different coding boot camps, self teaching, and mentored learning. I am currently an active member of <a href="https://github.com/CuseBredDeveloper" id="webname">Github</a>, <a href="https://stackoverflow.com/story/cusebreddev81" id="webname">Stack Overflow</a>, & <a href="https://bitbucket.org/CuseBredDev81/" id="webname">Bitbucket</a>.

        <p>My strengths are:</p> <p>
            <ul>
               <li><i class="fa fa-html5" aria-hidden="true"></i> HTML5</li>
               <li><i class="fa fa-css3" aria-hidden="true"></i> CSS</li>
               <li><i class="fa fa-coffee" aria-hidden="true"></i> JavaScript</li>
               <li><i class="fa fa-bold" aria-hidden="true"></i> Bootstrap</li>
               <li><i class="fa fa-wordpress" aria-hidden="true"></i>Wordpress</li>
               <li>Adobe CS</li> 
             </ul>
      
      <p>I am looking to push my skills further into a developer role and look forward to the challenges that will arrive in the future! 
      </p>
      <p>Outside of </>coding, my time is spent with my family and coaching 7th grade youth basketball. Married for 9 years (together for 18 years), we have 4 beautiful children. We relocated to Charlotte, North Carolina in 2013 by way of Syracuse, New York and have enjoyed every bit of life here.Thank you for taking the time to read about me!  
      </p>
      
    <h3 class="w3-padding-16 w3-text-light-grey">My Skills and Qualifications:</h3>
      <hr style="width:200px" class="w3-opacity">
        <p class="w3-wide" >Project Management</p>
          <div class="w3-blue">
            <div class="w3-dark-grey" style="height:28px;width:95%"></div>
          </div>
          
          <p class="w3-wide">Web Development</p>
            <div class="w3-blue">
              <div class="w3-dark-grey" style="height:28px;width:85%"></div>
            </div>
          
          <p class="w3-wide">Photoshop</p>
            <div class="w3-blue">
              <div class="w3-dark-grey" style="height:28px;width:65%"></div>
            </div>
         
          <p class="w3-wide">HTML5</p>
            <div class="w3-blue">
              <div class="w3-dark-grey" style="height:28px;width:85%"></div>
            </div>
         
          <p class="w3-wide">CSS</p>
            <div class="w3-blue">
              <div class="w3-dark-grey" style="height:28px;width:85%"></div>
            </div>
         
          <p class="w3-wide">Javascript</p>
            <div class="w3-blue">
              <div class="w3-dark-grey" style="height:28px;width:85%"></div>
            </div>
         
          <p class="w3-wide">Bootstrap</p>
            <div class="w3-blue">
              <div class="w3-dark-grey" style="height:28px;width:75%"></div>
            </div>
          
          <h3 class="w3-padding-16 w3-text-light-grey">Software Used:</h3>
            <hr style="width:200px" class="w3-opacity">
              <p class="w3-wide">Wordpress</p>
            <div class="w3-blue">
              <div class="w3-dark-grey" style="height:28px;width:80%"></div>
            </div>
              
              <p class="w3-wide">Adobe CS</p>
            <div class="w3-blue">
              <div class="w3-dark-grey" style="height:28px;width:80%"></div>
            </div>
              
              <p class="w3-wide">Oracle</p>
            <div class="w3-blue">
              <div class="w3-dark-grey" style="height:28px;width:80%"></div>
            </div>
             
              <p class="w3-wide">Microsoft Dynamics</p>
            <div class="w3-blue">
              <div class="w3-dark-grey" style="height:28px;width:80%"></div>
            </div>
              
              <p class="w3-wide">SAP</p>
            <div class="w3-blue">
              <div class="w3-dark-grey" style="height:28px;width:80%"></div>
            </div>
              
              <p class="w3-wide">Dreamweaver</p>
            <div class="w3-blue">
              <div class="w3-dark-grey" style="height:28px;width:60%"></div>
            </div><br>
        
        <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
          <div class="w3-quarter w3-section">
            <span class="w3-xlarge">01</span><br>
            Partners
          </div>
          <div class="w3-quarter w3-section">
            <span class="w3-xlarge">01</span><br>
            Projects Done
          </div>
          <div class="w3-quarter w3-section">
            <span class="w3-xlarge">--</span><br>
            Happy Clients
          </div>
          <div class="w3-quarter w3-section">
            <span class="w3-xlarge">--</span><br>
            Meetings
          </div>
        </div>
    
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-light-grey">My Services</h3>
    <hr style="width:200px" class="w3-opacity">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16">Current Webpage Update</li>
          <li class="w3-padding-16">Blog Page Development</li>
          <li class="w3-padding-16">LinkedIn Profile Setup</li>
          <li class="w3-padding-16">Webpage Support</li>
          <li class="w3-padding-16">
            <h2>$ 30</h2>
            <span class="w3-opacity">Per Hour</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
          <li class="w3-padding-16">Webpage Design</li>
          <li class="w3-padding-16">Online Resume Design</li>
          <li class="w3-padding-16">Database Management</li>
          <li class="w3-padding-16">Photoshop/Wordpress Design</li>
          <li class="w3-padding-16">
            <h2>Starting at $35</h2>
            <span class="w3-opacity">Per Hour(includes webhosting)</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
<!-- End Grid/Pricing tables -->
    </div>
    
    <!-- Resume -->
<!-- Freelance Web Developer -->
      <h3 class="w3-padding-24 w3-text-light-grey" id="resume">My Resume</h3>  
          <hr style="width:200px" class="w3-opacity">
      <div class="w3-container">
            <h5 class="w3-opacity"><b>Freelance Front End Developer / Charlotte, NC</b></h5>
            <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <span class="w3-tag w3-grey w3-round">June 2017 - Present</span></h6>
            <p>
              <ul>
            <li>Offering web services and bidding on web development services through www.upwork.com</li>
            <li>Developing online resume web pages for Clients</li>
            <li>Completed developer training through codeacademy.com, skillscrush.com and udemy.com.</li>
              </ul>
            </p>
            <hr>
          </div>
       
<!-- Okuma America Corporation  -->
        
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Regional Sales Engineer / Okuma America Corporation / Charlotte, NC</b></h5>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span class="w3-tag w3-grey w3-round"></i>Nov 2015 - Jun 2017</span></h6>
            <p>
              <ul>
                <li>Recognized for surpassing annual sales and machine unit quota. 
                <li>Management of proposals through distribution to ensure proper configurations.</li> 
                <li>Successful territory management through market share analysis.</li>
                <li>Responsible for distributor sales and marketing quarterly budgets.</li>
                <li>Coordination of order acknowledgements between OEM and distributor.</li>
                <li>Provided technical and project sales support for distributor sales team.</li>
              </ul>
            </p>
          <hr>
        </div>
        
<!-- Haeger Incorporated -->
        
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Regional Sales and Service Engineer / Haeger Incorporated / Charlotte, NC</b></h5>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span class="w3-tag w3-grey w3-round"></i>Mar 2014 - Nov 2015</span></h6>
            <p>
              <ul>
                <li>CRM management utilizing Salesforce Cloud.</li> 
                <li>Increased the Haeger brand and profits within the Southeast Region through territory market analysis and management.</li>
                <li>Performed machine PLC programming and controls software updates.</li>
                <li>Provided machine recommendations and developed machine quotations based on customer need analysis</li>
                <li>Developed time studies and machine configurations.</li>
                <li>Responsible for the sales, installation, training and service support of new machines to ensure continuous customer satisfaction.</li>
              </ul>
            </p>
          <hr>
        </div>

<!-- NYMAT Machine Tool Corporation -->

        <div class="w3-container">
          <h5 class="w3-opacity"><b>Sales Engineer / NYMAT Machine Tool / Syracuse, NY</b></h5>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span class="w3-tag w3-grey w3-round"></i>Aug 2013 - Mar 2014</span></h6>
            <p>
              <ul>
                <li>Gained successful sales and expertise in CNC machine tools.</li>
                <li>Proven effective development of the Central New York territory through market analysis, forecasting on new customers, as well as continuous post- sales service of existing customers.</li>
                <li>Accruement of $2.3m in total overall sales and $294k in gross profit in 2012.</li>
                <li>Utilized SAP and Microsoft Office for customer order entry, and quote preparation.</li>
                <li>Multiple recognitions as sale engineer of the month.</li>

              </ul>
            </p>
          <hr>
        </div>

        <div class="w3-container">
          <h5 class="w3-opacity"><b>Aflac Insurance / Adept Machine Tool / Syracuse, NY</b></h5>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span class="w3-tag w3-grey w3-round"></i>Sept 2009 - Mar 2010</span></h6>
            <p>
              <ul>
                <li>• Responsibilities included providing families and small businesses with supplemental insurance.</li>
                <li>Held licenses in Accidental, Life, Property, Casualty, Accident and Sickness Insurance.</li>
              </ul>
            </p>
          <hr>
        </div>

        <div class="w3-container">
          <h5 class="w3-opacity"><b>Sales Support Specialist/Design Engineer/Project Manager / G.A. Braun / Syracuse, NY</b></h5>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span class="w3-tag w3-grey w3-round"></i>Jul 2005 - Aug 2009</span></h6>
            <p>
              <ul>
                <li>Responsible for the successful initiation, planning, design, execution, monitoring, controlling and closure of Cruise Line capital projects.</li>
                <li>Generation of bid binders and project scope of work per RFP process.</li>
                <li>• Responsible for the improvement and implementation of business practices within the Engineering department through the development of ISO work instruction.</li>
                <li>Developed layout design concepts and solutions for potential customers’ laundry facilities, both new and re-tooling projects utilizing AutoCAD to support sales.</li>
                <li>Granted 3 promotions during my tenure.</li>
                <li>CAD file creation and management of company’s CAD drawings.</li>
              </ul>
            </p>
            <hr>
    <a href="AntoineResume.docx" download = "AntoineResume.docx"><button class="w3-button w3-light-grey w3-padding-large w3-section "><i class="fa fa-download"></i> Download Resume
    </button></a>
        </div>
  </div>
  
<!-- End About Section -->

<!-- Portfolio Section -->

  <span class="w3-large w3-margin-right"><div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">Training and Certifications</h2>
    <hr style="width:200px" class="w3-opacity">
  </span>
      <div class="w3-container">
        <h5 class="w3-opacity"><b>Udemy.Com</b></h5>
        <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span class="w3-tag w3-grey w3-round"></i> Completed Jun 2017</span></h6>
            <p>
              <ul>
                <li><a href="https://www.udemy.com/the-web-developer-bootcamp/learn/v4/overview">Web Developer Bootcamp</a>
                  <ul style="list-style-type:circle;">
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Javascript</li>
                    <li>DOM</li>
                    <li>JQuery</li>
                    <li>NodeJS</li>
                    <li>Express</li>
                    <li>MondoDB</li>
                  </ul>
                </li>
              </ul>
            </p>
            
        <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span class="w3-tag w3-grey w3-round"></i> Completed March 2017</span></h6>
        <p>
          <ul>
          <li><a href="https://www.udemy.com/webdevelopment101_html/learn/v4/overview">Introduction to Web Development: HTML</a></li>
            <ul style="list-style-type:circle;">
                <li>HTML5</li>
            </ul>      
          </ul>
        </p>

        <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span class="w3-tag w3-grey w3-round"></i> Completed August 2016</span></h6>
        <p>
          <ul>
          <li><a href="https://www.udemy.com/psd-html5-css3/learn/v4/overview">Beginner Photoshop to HTML5 and CSS3</a></li>
            <ul style="list-style-type:circle;">
                <li>Photoshop</li>
                <li>HTML5</li>
                <li>CSS3</li>
            </ul>
        </div>   
              
        </p>

          <div class="w3-container">
          <h5 class="w3-opacity"><b>Skillscrush.com</b></h5>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span class="w3-tag w3-grey w3-round"></i> Completed Jul 2017</span></h6>
            <p>
              <ul>
              <li><a href="https://learn.skillcrush.com/classes/skillcrush-10-day-bootcamp-wpcw/"> Skillscrush 10-Day Bootcamp</a></li>
              </ul>
            </p>
        </div>
  
<!-- End Portfolio Section -->
  

<!-- Contact Section -->
  
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Indian Trail, NC 28079</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +01 (315)418-8009</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: antoine71581@gmail.com</p>
    </div><br>
    <p>Lets get in touch. Send me a message:</p>

  <?=$thankYou ?>  

    <form method="post" action="contact.php";?>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit" maxlength="250">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  </div>

<!-- End Contact Section -->
  
  
<!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"><a href="https://www.linkedin.com/in/antoine-johnson/"></a></i>
    
<!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
