<?php
require_once 'scripts/config.php';
confirm_logged_in();

$cat_tbl            = 'tbl_category';
$product_categories = getAll($cat_tbl);

if (isset($_POST['submit'])) {
    $pic = $_FILES['pic'];
    $title = $_POST['title'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $op3 = $_POST['op3'];
    $op4 = $_POST['op4'];
    $op5 = $_POST['op5'];
    $clipanswer = $_POST['clipanswer'];
    $vid = $_POST['vid'];
    $mq1 = $_POST['mq1'];
    $mq2 = $_POST['mq2'];
    $mq3 = $_POST['mq3'];
    $mq4 = $_POST['mq4'];
    $mq5 = $_POST['mq5'];
    $ma1 = $_POST['ma1'];
    $ma2 = $_POST['ma2'];
    $ma3 = $_POST['ma3'];
    $ma4 = $_POST['ma4'];
    $ma5 = $_POST['ma5'];
    $mia1 = $_POST['mia1'];
    $mia2 = $_POST['mia2'];
    $mia3 = $_POST['mia3'];
    $mia4 = $_POST['mia4'];
    $mia5 = $_POST['mia5'];
    $mia6 = $_POST['mia6'];
    $mia7 = $_POST['mia7'];
    $songhint = $_POST['songhint'];
    $song = $_FILES['song'];
    $songanswer = $_POST['songanswer'];


    

    
    $cat     = $_POST['catList'];

   
        $result  = addQuestion($pic, $title, $question, $answer, $op1, $op2, $op3, $op4, $op5, $clipanswer, $vid, $mq1, $mq2, $mq3, $mq4, $mq5, $ma1, $ma2, $ma3, $ma4, $ma5, $mia1, $mia2, $mia3, $mia4, $mia5, $mia6, $mia7, $songhint, $song, $songanswer, $cat);        
        $message = $result;
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Add Question</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">
  <!-- css -->
  <link href="../css/style.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.2/jquery.js" integrity="sha256-lcAjyA3+DTAwTFgkSHiZUGH4eAGmbapda/TyUSvg5vk=" crossorigin="anonymous"></script>

  <script>

$(function() {
        $('.colorselector').change(function(){
            $('.colors').hide();
            $('#' + $(this).val()).show();
        });
    });
    </script>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="../index.php">
        <img src="../assets/pubLogo.png" style="height:100px;margin-right:10px;">
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons ml-auto">
         
          
          <li class="nav-item">
            <a href="scripts/caller.php?caller_id=logout" class="nav-link border border-light rounded waves-effect">
              <i class="far fa-id-badge mr-2"></i>Logout
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
  <Br><Br><Br><Br><Br><Br>

  

  <!--Main layout-->
  <main>
    <div class="container">

<br><br>
   

    <div class="card">
    <?php if (!empty($message)): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
<h5 class="card-header mdb-color white-text text-center py-4">
    <strong>Add a Question</strong>
</h5>

<div class="card-body px-lg-5 pt-0">

<form  action="admin_addquestion.php" method="post" enctype="multipart/form-data" class="md-form" style="color: #757575;">


<Select class="colorselector">
   <option value="none">select</option>

   <option value="red">Round One - Mixed bag</option>
   <option value="yellow">Round Two - Have you seen the scene?</option>
   <option value="blue">Round Three - Match Game</option>
   <option value="four">Round Four - Name that Tune</option>

</Select>
<hr>
<input type="text" name="title"  id="title" class="form-control" placeholder="Title of Question (will show on question round list)">
<hr>


<div id="red" class="colors" style="display:none">

<input type="text" name="question"  id="question" class="form-control" placeholder="question">


<input type="text" id="answer" name="answer" class="form-control" placeholder="answer">


    <div class="file-field">
    <div class="btn btn-primary float-center ">
        <span>Choose an image(png, jpeg, jpg or gif) <br>No spaces, periods, commas or strange characters in filename.  </span><br>
        <input type="file" name="pic" id="fileInput pic">
    </div>
</div>

  </div>


  <div id="yellow" class="colors" style="display:none"><br><i>Options will only show if they're filled in.</i><br>
  <input type="text" id="op1" name="op1" class="form-control" placeholder="Option 1">
  <input type="text" id="op2" name="op2" class="form-control" placeholder="Option 2">
  <input type="text" id="op3" name="op3" class="form-control" placeholder="Option 3">
  <input type="text" id="op4" name="op4" class="form-control" placeholder="Option 4">
  <input type="text" id="op5" name="op5" class="form-control" placeholder="Option 5">

  <input type="text" id="clipanswer" name="clipanswer" class="form-control" placeholder="Answer">

  <input type="text" id="vid" name="vid" class="form-control" placeholder="MP4 file name. Do not add extension. Eg, CORRECT: GoodWillHunting | INCORRECT: GoodWillHunting.mp4">


  </div>

  
  <div id="blue" class="colors" style="display:none">
  <input type="text" id="mq1" name="mq1" class="form-control" placeholder="question 1">
  <input type="text" id="mq2" name="mq2" class="form-control" placeholder="question 2">
  <input type="text" id="mq3" name="mq3" class="form-control" placeholder="question 3">
  <input type="text" id="mq4" name="mq4" class="form-control" placeholder="question 4">
  <input type="text" id="mq5" name="mq5" class="form-control" placeholder="question 5">
  <br><br>
  <input type="text" id="ma1" name="ma1" class="form-control" placeholder="answer 1">
  <input type="text" id="ma2" name="ma2" class="form-control" placeholder="answer 2">
  <input type="text" id="ma3" name="ma3" class="form-control" placeholder="answer 3">
  <input type="text" id="ma4" name="ma4" class="form-control" placeholder="answer 4">
  <input type="text" id="ma5" name="ma5" class="form-control" placeholder="answer 5">
  <br>
  <input type="text" id="mia1" name="mia1" class="form-control" placeholder="incorrect answer 1">
  <input type="text" id="mia2" name="mia2" class="form-control" placeholder="incorrect answer 2">
  <input type="text" id="mia3" name="mia3" class="form-control" placeholder="incorrect answer 3">
  <input type="text" id="mia4" name="mia4" class="form-control" placeholder="incorrect answer 4">
  <input type="text" id="mia5" name="mia5" class="form-control" placeholder="incorrect answer 5">
  <input type="text" id="mia6" name="mia6" class="form-control" placeholder="incorrect answer 5">
  <input type="text" id="mia7" name="mia7" class="form-control" placeholder="incorrect answer 5">
  


  </div>

  <div id="four" class="colors" style="display:none">

  <input type="text" id="songhint" name="songhint" class="form-control" placeholder="song hint or year">

  <div class="file-field">
    <div class="btn btn-primary float-center ">
        <span>mp3 </span><br>
        <input type="file" name="song" id="song">
    </div>
</div>

<input type="text" id="songanswer" name="songanswer" class="form-control" placeholder="song answer">

  </div>

  <select name="catList" id="catlist select" class="mdb-select md-form mb-4 initialized" >
        <option value="" disabled selected>Insert into Category...</option>
        <?php while ($product_category = $product_categories->fetch(PDO::FETCH_ASSOC)): ?>
<option value="<?php echo $product_category['cat_id']; ?>">
    <?php echo $product_category['cat_name']; ?>
</option>
<?php endwhile; ?>
    </select>

<button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="submit">Submit</button>

</form>
</div>
</div>





<a href="../admin/index.php"><button class="btn btn-info btn-rounded btn-block z-depth-0 my-4 waves-effect">Back</button></a>

</div>
  </main>
  <!--Main layout-->

  
  <!--/.Footer-->
  <!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
