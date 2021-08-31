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
      </div>-->

      <!-- Titel1 -->
      <h1>SWITCH STATEMENT</h1>

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
      <p>The switch statement executes a block of code depending on different cases.</p>
 
    </div>

    <!-- article -->
    
    <!--Code Area -->
    <h3>Example 1: Week Day Number to specify Week Day Name</h3>
     <div class="codeArea">
    <pre class="language-css">
      <code class="language-css">
        <!-- EXAMPLE 1 ----------------------------------------------------------->
&lt;script>
  
function myFunction() {
    var day
    switch (new Date().getDay()) {
      case 0:
        day = "Sunday";
        break;
      case 1:
        day = "Monday";
        break;
      case 2:
        day = "Tuesday";
        break;
      case 3:
        day = "Wednesday";
        break;
      case 4:
        day = "Thursday";
        break;
      case 5:
        day = "Friday";
        break;
      case  6:
        day = "Saturday";
        break;
      default:
        day = "Unknown Day";
    }
    document.getElementById("myfunction").innerHTML = "Today is " + day;
  }
&lt;/script>

      </code>
    </pre>

    
  <button onclick="myFunction();">Run</button>  
  <button onClick="window.location.reload();">Clear</button>
  <p id="result-text-1" class="result-text">&nbsp;</p>

 <!-- EXAMPLE 2 ----------------------------------------------------------->
  <h3>Example 2: Different cases uses the same code</h3>

  <pre class="language-css">
    <code class="language-css">
&lt;script>
<p>Click the button to display a message based on what day it is.</p>


  function myFunction() {
  var text;
  switch (new Date().getDay()) {
    case 1:
    case 2:
    case 3:
    default:
      text = "Looking forward to the Weekend";
      break;
    case 4:
    case 5:
      text = "Soon it is Weekend";
      break;
    case 0:
    case 6:
      text = "It is Weekend";
  }
  document.getElementById("myFunction").innerHTML = text;
}
&lt;/script>
    </code>
  </pre>
  <div id="demo">

  </div>
<div>
  <button onclick="Weekend();">Run</button>
  <button onClick="window.location.reload();">Clear</button>
  <p id="result-text-2" class="result-text">&nbsp;</p>
</div>
</div>
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
  <a href="#topic.K-jerome.php">Switch Cases - Jerome</a>

    <h3>More Info</h3>
 
  <a href="https://www.javascripttutorial.net/javascript-switch-case/"> Switch Statement JSTutorial</a>
  
    </div>

</body>
<script src="/js/topic.K-claudia.js"></script>
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