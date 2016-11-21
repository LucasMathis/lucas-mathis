<!DOCTYPE html>
<html lang="en">
<head>
   <title>Lucas Mathis | Contact</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" type="image/ico" href="favicon.ico?">
    
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

   <!-- Google's reCAPTCHA -->
   <script src='https://www.google.com/recaptcha/api.js'></script>
    
   <!-- Main CSS -->
   <link rel="stylesheet" type="text/css" href="main.css">
    
</head>
    
<body>

<nav class="navbar-default">
   <div class="container-fluid">
      
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
         </button>
         <a class="navbar-brand" href="index.html"><img id="mainLogo" src="./images/logo/LM_logo.png" alt="Lucas Mathis"></a>
    </div>
      
    <div class="collapse navbar-collapse" id="myNavbar">
       <ul id="navList" class="nav navbar-nav navbar-right text-uppercase">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="works.html">Works</a></li>
          <li><a href="http://lucaswebdevelopment.blogspot.com/" target="_blank">Blog</a></li>
          <li class="activeL"><a href="#">Contact</a></li>
       </ul>
    </div>
      
  </div>
</nav>

<div class="row">
    <div class="col-sm-6 text-center contactLeftSide">
       <h1 id="contactHeader">Contact</h1>
       <p>Please feel free to contact me with any questions. I typically respond within 24 hours.</p>
        <p id="availabilityP">I am currently available for hire through contract or full-time employment.</p>
    </div>
    <div  id="rightSideContact" class="col-sm-6">
       <h3>Contact Me!</h3><br />

       <form action="sendMyMail.php" method="post">
          <div class="form-group">
             <label for="name">Name</label>
             <input type="text" class="form-control" id="name" name="sendersName">
          </div>
           
          <div class="form-group">
             <label for="email">Email</label>
             <input type="email" class="form-control" id="sendersEmail" name="sendersEmail">
          </div>
          
          <div class="form-group">
             <label for="message">Your Message</label><br/>
             <textarea id="emailMsg" rows="4" name="emailMsg"></textarea>
          </div>

          <div class="g-recaptcha" data-sitekey="6Lf3aQwUAAAAABzAssa5SF3fnazG9uamu62qaMQy"></div>
          <input id="formSubmitButton" type="submit" value="Submit">

        
       </form>
        
    </div>
</div>

<div class="row">
    <div>
    
    </div>    
</div>

<div id="bottomPage" class="row">
   <div class="col-sm-6 socIcons">
      <a target="_blank" href="https://www.linkedin.com/in/lucas-mathis-development">
         <img src="images/socialMedia/linkedInIcon.png">
      </a>
      <a target="_blank" href="https://github.com/LucasMathis">
         <img src="images/socialMedia/githubIcon.png">    
      </a>
      <a target="_blank" href="https://www.facebook.com/profile.php?id=100006696736786">
          <img src="images/socialMedia/facebookIcon.png">
      </a>
   </div>
   <div class="col-sm-6 text-right">
      <a href="#"><img src="images/topOfPageIcon.png"></a>
   </div>
</div>
<div id="bottomPage" class="row text-center">
   <div class="col-sm-12">
       <p>&copy; 2016 Lucas Mathis</p>
   </div>
</div>

</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82756822-1', 'auto');
  ga('send', 'pageview');

</script>
</html>