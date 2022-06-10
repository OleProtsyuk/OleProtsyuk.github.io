<?php

$msg = '';
$msgClass = '';

if(filter_has_var(INPUT_POST, 'submit')){
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);
}

if (!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
    $msg ='Please use a valid email';
    $msgClass = 'dangerAlert';
  } else {
    $toEmail = 'oleksandr.protsyuk.dev@gmail.com';
    $subject = 'Contact Request from' .$name;
    $body = '<h2>Contact Request</h2>
         <h4>Name</h4><p>'.$name.'</p>
         <h4>Email</h4><p>'.$email.'</p>
         <h4>Subject</h4><p>'.$subject.'</p>
         <h4>Message</h4><p>'.$message.'</p>
         ';

         $headers =  'MIME-Version: 1.0' . "\r\n"; 
         $headers .= 'From: sashaprotsuik@gmail.com' . "\r\n";
         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

         if(mail($toEmail, $subject, $body, $headers)){
          $msg ='Thank you fror your email';
          $msgClass = 'successAlert';
         } else {
          $msg = 'Please try again';
          $msgClass = 'dangerAlert';
         }
  }
} else {
  $msg = 'Please fill in all fields';
  $msgClass = 'dangerAlert';
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS link -->
    <link rel="stylesheet" href="portfolio style.css">
    <!-- Google Fonts Link -->
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Page Title -->
    <title>Oleksandr Protsyuk Portfolio</title>
</head>
<body>
   <header>
        <div class="Header">
            <div class="Brow"></div>
            <div class="Greeting">Hi, I'm Oleksandr</div>
            <div class="Title">IT Developer</div>
            <div class="Points">
                <ul>
                    <li>Web Developer</li>
                    <li>Software Developer</li>
                    <li>Spreadsheet Developer</li>
                </ul>
            </div>
            <div class="Buttons">
                <a href="#Contact_Form">Contact Me</a>
                <a href="#My_Projects">My Projects</a>
            </div>
            <img class="Image" src="Assets/me1.jpeg" alt="Picture of Myself">
        </div>
    </header>
    <main>
        <div class="About_Me">
            <div class="About_Me_Heading">About Me</div>
            <img class="About_Me_Image" src="Assets/Another Pictute of Myself.jpg" alt="Another Picture of Myself">
            <div class="About_Me_Info">
                <p class="p1">At the moment, I am an IT student at Oldham College, however, I can say I am also a student outside my college. For as long as I could remember myself, my unresting curiosity and habitual work ethic have been proving my status of a lifelong learner, who is looking forward to facing and overcoming challenges.</p>
                <p class="p2">Since I was a child, I have been interested in not just learning, but understanding Mathematics and its applications in solving real life problems, coming up with both creative and effective solutions. It is for these aspects that I became fascinated with such a borderless field as IT, especially with how both creativity and technical understanding blend together to allow driven individuals such as myself to revolutionise the society.</p>
                <p class="p3">Currently, I am exploring the ways to express my creativity and to showcase my design skills through website development. I have already got my head around HTML, CSS, and working my way through JavaScript and never plan to stop learning more. My other technical skills include programming with Python and spreadsheet development using macros and VBA.</p>
                <p class="p4">Striving to refine my knowledge, my next step will be to master web development frameworks such as Bootstrap, fully learn responsive design and look at exploring UX and UI design. Another objective is to grasp OOP with Python.</p>
            </div>
        </div>
        <div class="My_Projects" id="My_Projects">
            <div class="My_Projects_Heading">My Projects</div>
            <div class="My_Projects_Subheading">Hover over the Cards to discover the work I've done</div>
            <div class="Projects">
                <div class="Project Project1" id="Project1">
                 <div class="container">
                  <img id="img1" src="Assets/U9.png">
                 </div>
                 <div class="details">
                  <h3>Spreadsheet Development</h3>
                  <div class="link">
                   <a id="link1" href="#"> </a>
                  </div>
                 </div>
                </div>
                <div class="Project Project2" id="Project2">
                 <div class="container">
                  <img id="img2" src="Assets/U12.png">
                 </div>
                 <div class="details">
                  <h3>Software Development</h3>
                  <div class="link">
                   <a id="link2" href="#"> </a>
                  </div>
                 </div>
                </div>
                <div class="Project Project3" id="Project3">
                 <div class="container">
                  <img id="img3" src="Assets/U13.png">
                 </div>
                 <div class="details">
                  <h3>Website Development</h3>
                  <div class="link">
                   <a id="link3" href="#"> </a>
                  </div>
                 </div>
                </div>
                <div class="Project Project4" id="Project4">
                 <div class="container">
                  <img id="img4" src="Assets/U14.png">
                 </div>
                 <div class="details">
                  <h3>Hardware Maintenance</h3>
                  <div class="link">
                   <a id="link4" href="#"> </a>
                  </div>
                 </div>
                </div>
                <div class="Project Project5" id="Project5">
                 <div class="container">
                  <img id="img5" src="Assets/U15.jpg">
                 </div>
                 <div class="details">
                  <h3>Software Maintenance</h3>
                  <div class="link">
                   <a id="link5" href="#"> </a>
                  </div>
                 </div>
                </div>
              </div>
        </div>
 <!-- Card Scripts -->
 <!-- 1st Card Script -->
 <script>
  document.getElementById("Project1").onmouseover = function() {HoverFunction1()};
  document.getElementById("Project1").onmouseout = function() {OutFunction1()};
 
 function HoverFunction1() {
   document.getElementById("link1").href = "U9 Page.html";
   document.getElementById("link1").innerHTML = "View My Work Here";
  
   document.getElementById("img1").style.display = "none";
 }
 function OutFunction1() { 
   document.getElementById("link1").href = " ";
   document.getElementById("link1").innerHTML = " ";
   
   document.getElementById("img1").style.display = "block";
 }
 </script>
 
 <!-- 2nd Card Script -->
 <script>
  document.getElementById("Project2").onmouseover = function() {HoverFunction2()};
  document.getElementById("Project2").onmouseout = function() {OutFunction2()};
 
 function HoverFunction2() {
   document.getElementById("link2").href = "U12 page.html";
   document.getElementById("link2").innerHTML = "View My Work Here";
  
   document.getElementById("img2").style.display = "none";
 }
 function OutFunction2() { 
   document.getElementById("link2").href = " ";
   document.getElementById("link2").innerHTML = " ";
   
   document.getElementById("img2").style.display = "block";
 }
 </script>
 
 <!-- 3rd Card Script -->
 <script>
  document.getElementById("Project3").onmouseover = function() {HoverFunction3()};
  document.getElementById("Project3").onmouseout = function() {OutFunction3()};
 
 function HoverFunction3() {
   document.getElementById("link3").href = "U13 page.html";
   document.getElementById("link3").innerHTML = "View My Work Here";
  
   document.getElementById("img3").style.display = "none";
 }
 function OutFunction3() { 
   document.getElementById("link3").href = " ";
   document.getElementById("link3").innerHTML = " ";
   
   document.getElementById("img3").style.display = "block";
 }
 </script>
 
 <!-- 4th Card Script -->
 <script>
  document.getElementById("Project4").onmouseover = function() {HoverFunction4()};
  document.getElementById("Project4").onmouseout = function() {OutFunction4()};
 
 function HoverFunction4() {
   document.getElementById("link4").href = "U14 page.html";
   document.getElementById("link4").innerHTML = "View My Work Here";
  
   document.getElementById("img4").style.display = "none";
 }
 function OutFunction4() { 
   document.getElementById("link4").href = " ";
   document.getElementById("link4").innerHTML = " ";
   
   document.getElementById("img4").style.display = "block";
 }
 </script>
 
 <!-- 5th Card Script -->
 <script>
  document.getElementById("Project5").onmouseover = function() {HoverFunction5()};
  document.getElementById("Project5").onmouseout = function() {OutFunction5()};
 
 function HoverFunction5() {
   document.getElementById("link5").href = "U15 page.html";
   document.getElementById("link5").innerHTML = "View My Work Here";
  
   document.getElementById("img5").style.display = "none";
 }
 function OutFunction5() { 
   document.getElementById("link5").href = " ";
   document.getElementById("link5").innerHTML = " ";
   
   document.getElementById("img5").style.display = "block";
 }
 </script>

<div class="Why_Me">
  <div class="Why_Me_Heading">Why Me</div>
  <div class="Why_Me_Subheading">Hover over the points on the left and contact me on the right</div>

</div>

<div class="Why_Me_Container">
<div class="Why_Me_Points">
  <div class="Point Point1" id="Point1">
    <div class="PointHeader Header1" id="Point1Head">Original Design</div>
    <div class="PointInfo Info1" id="Point1Info">With each new website I am developing, I am seeking for original and meaningful design ideas which can be implemented to provide the user not only with better visual quality of the website, but to convey some key ideas of the project in a simple and digestible way</div>
  </div>
  <div class="Point Point2" id="Point2">
    <div class="PointHeader Header2" id="Point2Head">Problem-Solving</div>
    <div class="PointInfo Info2" id="Point2Info">I manage to find usage for my creativity not only in design, but in the technical aspect of the development, coming up with both creative and effective solutions to problems that may arise.</div>
  </div>
  <div class="Point Point3" id="Point3">
    <div class="PointHeader Header3" id="Point3Head">Aiming at Excellence</div>
    <div class="PointInfo Info3" id="Point3Info">Although being perfect is impossible, I aim to developing both my professional and personal sides of my identity. Consistent refinement is what makes difference between being just good and great.</div>
  </div>
  <div class="Point Point4" id=Point4>
    <div class="PointHeader Header4" id="Point4Head">Flexibility to Change</div>
    <div class="PointInfo Info4" id="Point4Info">With each new website I am developing, I am seeking for original and meaningful design ideas which can be implemented to provide the user not only with better visual quality of the website, but to convey some key ideas of the project in a simple and digestible way</div>
  </div>
</div> 

 <!-- 1st Card Script -->
 <script>
  document.getElementById("Point1").onmouseover = function() {PointHover1()};
  document.getElementById("Point1").onmouseout = function() {PointOut1()};
 
 function PointHover1() {
  document.getElementById("Point1Info").style.display = "block";

  document.getElementById("Point1Head").style.borderRadius = "25px 25px 0px 0px"
  document.getElementById("Point1Head").style.borderBottom = "2px solid #f8c14d"

 }
 function PointOut1() { 
  document.getElementById("Point1Info").style.display = "none";

  document.getElementById("Point1Head").style.borderRadius = "25px"
  document.getElementById("Point1Head").style.borderBottom = "none"
 }
 </script>

  <!-- 2nd Card Script -->
  <script>
    document.getElementById("Point2").onmouseover = function() {PointHover2()};
    document.getElementById("Point2").onmouseout = function() {PointOut2()};
   
   function PointHover2() {
    document.getElementById("Point2Info").style.display = "block";
  
    document.getElementById("Point2Head").style.borderRadius = "25px 25px 0px 0px"
    document.getElementById("Point2Head").style.borderBottom = "2px solid #f8c14d"
  
   }
   function PointOut2() { 
    document.getElementById("Point2Info").style.display = "none";
  
    document.getElementById("Point2Head").style.borderRadius = "25px"
    document.getElementById("Point2Head").style.borderBottom = "none"
   }
   </script>

  <!-- 3rd Card Script -->
  <script>
    document.getElementById("Point3").onmouseover = function() {PointHover3()};
    document.getElementById("Point3").onmouseout = function() {PointOut3()};
   
   function PointHover3() {
    document.getElementById("Point3Info").style.display = "block";
  
    document.getElementById("Point3Head").style.borderRadius = "25px 25px 0px 0px"
    document.getElementById("Point3Head").style.borderBottom = "2px solid #f8c14d"
  
   }
   function PointOut3() { 
    document.getElementById("Point3Info").style.display = "none";
  
    document.getElementById("Point3Head").style.borderRadius = "25px"
    document.getElementById("Point3Head").style.borderBottom = "none"
   }
   </script>

  <!-- 4th Card Script -->
  <script>
    document.getElementById("Point4").onmouseover = function() {PointHover4()};
    document.getElementById("Point4").onmouseout = function() {PointOut4()};
   
   function PointHover4() {
    document.getElementById("Point4Info").style.display = "block";
  
    document.getElementById("Point4Head").style.borderRadius = "25px 25px 0px 0px"
    document.getElementById("Point4Head").style.borderBottom = "2px solid #f8c14d"
  
   }
   function PointOut4() { 
    document.getElementById("Point4Info").style.display = "none";
  
    document.getElementById("Point4Head").style.borderRadius = "25px"
    document.getElementById("Point4Head").style.borderBottom = "none"
   }
   </script>

 <div class="Contact_Form" id="Contact_Form">

   <div class="FormHeading">Contact Me</div>
   
   <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Full Name</label>
    <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ' '; ?>">

    <label for="email">Email</label>
    <input type="email" id="name" name="email" value="<?php echo isset($_POST['email']) ? $email : ' '; ?>">

    <label>Subject</label>
    <select name="subject" value="<?php echo isset($_POST['subject']) ? $subject : ' '; ?>">
      <option value="Spreadsheet Development">Spreadsheet Development</option>
      <option value="Software Development">Software Development</option>
      <option value="Website Development">Website Development</option>
    </select>

    <label>Provide any Details</label>
    <textarea name="message"><?php echo isset($_POST['message']) ? $message : ' '; ?></textarea>

    <?php if($msg != ' '): ?>
      <div class="<?php echo $msgClass; ?>"><?php echo $msg; ?></div>
   <?php endif; ?>

    <input type="submit" value="Submit" name="submit">
  </form>
 </div>
</div>

</main>
</body>
</html>