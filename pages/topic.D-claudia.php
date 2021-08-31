<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link href="../libs/prism/prism.css" rel="stylesheet" />
       
</head>
<body>
     <!-- Logo 
    <header>
      <div class="siteLogo">
        <img src="../images /jslogo.png" alt="TestScreen" />
      </div> -->

      <!-- Titel1 -->
      <h1>CONDITIONAL STATEMENTS</h1>
      

      <!-- Nav Bar -->
      <!--<nav class="navbar navbar-expand-sm navbar-light bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">primary</a>
          <img src="" alt="" class="siteLogo" />

          <button
            class="btn navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarID"
            aria-controls="navbarID"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarID">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </div>
          </div>
        </div>
      </nav>*/

      <button class="btn">Click</button>
    
    </header>-->
    <!-- Teaser -->
    <div class="teaser">
      
      <p>Very often when you write code, you want to perform 
        different actions for different decisions<br>
        You can use conditional statements in your code to do this</p>
    </div>

    <!-- article -->
    
    <!--Code Area -->
    <div class="codeArea">
    <h2>IF ELSE Statements </h2>
    <pre class="language-css">
      <code class="language-css">
        <!-- EXAMPLE 1 ----------------------------------------------------------->
&lt;script>
  
  const hour = new Date().getHours(); 
  let greeting;

  /*  Use IF ELSE to specify a block of code to be executed
        if a specified condition is true or false. */
 
  function ExerciseD(){
    console.log(hour);
    if (hour < 18) {
        greeting = "Good day";
      } else {
        greeting = "Good evening";   
      }
    document.getElementById("ExerciseD").innerHTML = greeting;    
    
    setInnerHTML("#result-clear ExerciseD");
  }
&lt;/script>
      </code>
    </pre>

    <div>
    <div id="ExD"></div>
    <p>If the hour is less than 18, create a "Good day" greeting, otherwise "Good evening"</p>
  <button onclick="ExerciseD()">Run</button>
  <button onClick="window.location.reload();">Clear</button>
  <p id="ExerciseD" class="result-text">&nbsp;</p>
</div>

<div class="codeArea">
    <h2>IF ELSE Statements </h2>
    <pre class="language-css">
      <code class="language-css">
        <!-- EXAMPLE 2 ----------------------------------------------------------->
&lt;script>

function changeImage() {
  var image = document.getElementById("myImage");
  if (image.src.match("bulbon")) {
    image.src = "pic_bulboff.png";
  } else {
    image.src = "pic_bulbon.png";
  }
}
&lt;/script>
      </code>
    </pre>

  <div>
    <div id="changeImage">
    <p>Click the light bulb to turn on/off the light.</p>
    <div>
  <img id="myImage" onclick="changeImage()" src="/images/pic_bulboff.png" width="100" height="180">
</div>

      <!--<div class="container">
        <pre>
            Code here Chocolate cake I love lollipop cookie marzipan topping chocolate bar cupcake.<br> Tiramisu marshmallow pastry chocolate cake cake tart dragée apple pie candy.<br> Fruitcake cupcake brownie ice cream tiramisu I love cake brownie I love.
        </pre>
        <button class="btn btn-run"></button>
      </div>
    </div>-->

    <!-- Table of Content -->
    <div class="toc">

    <h3>More Examples</h3>
  <a href="#topic.D-jerome.php">Template Strings - Jerome</a><br>
  <h3>More Info</h3>
      
        <a href=""></a>
        <a href="https://www.w3schools.com/js/js_if_else.asp">IF ELSE w3 school</a>
      
    </div>



</body>
<script src="../js/topic.D-claudia.js"></script>
<script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
      integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
      crossorigin="anonymous"
    ></script>
    <script src="../libs/prism/prism.js"></script>
  
</html>