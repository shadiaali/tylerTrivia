<?php
require_once 'scripts/config.php';
confirm_logged_in();

$cat_tbl            = 'tbl_category';
$product_categories = getAll($cat_tbl);

if (isset($_POST['submit'])) {
    
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
    $jepcat = $_POST['jepcat'];
    $jepq1 = $_POST['jepq1'];
    $jepa1 = $_POST['jepa1'];
    $jepq2 = $_POST['jepq2'];
    $jepa2 = $_POST['jepa2'];
    $jepsong = $_FILES['jepsong'];
    $jepq3 = $_POST['jepq3'];
    $jepa3 = $_POST['jepa3'];
    $jepimg = $_FILES['jepimg'];
    $fq = $_POST['fq'];
    $fqa = $_POST['fqa'];
    $fop1 = $_POST['fop1'];
    $fop2 = $_POST['fop2'];
    $fop3 = $_POST['fop3'];
    $fop4 = $_POST['fop4'];
    $fop5 = $_POST['fop5'];
    $fanswer = $_POST['fanswer'];
    $fvid = $_POST['fvid'];
    $faq = $_POST['faq'];
    $faudio = $_FILES['faudio'];
    $faanswer = $_POST['faanswer'];
    $clipquestion = $_POST['clipquestion'];
    $mainq = $_POST['mainq'];
    $finalq = $_POST['finalq'];
    $faudio = $_FILES['faudio'];
    $jept1 = $_FILES['jept1'];
    $jept2 = $_FILES['jept2'];
    $jept3 = $_FILES['jept3'];
    $jept4 = $_FILES['jept4'];
    $jept5 = $_FILES['jept5'];


    $cat     = $_POST['catList'];

   
        $result  = addQuestion($title, $question, $answer, $op1, $op2, $op3, $op4, $op5, $clipanswer, $vid, $mq1, $mq2, $mq3, $mq4, $mq5, $ma1, $ma2, $ma3, $ma4, $ma5, $mia1, $mia2, $mia3, $mia4, $mia5, $mia6, $mia7, $songhint, $song, $songanswer, $jepcat, $jepq1, $jepa1, $jepq2, $jepa2, $jepsong, $jepq3, $jepa3, $jepimg, $fq, $fqa, $fop1, $fop2, $fop3, $fop4, $fop5, $fanswer, $fvid, $faq, $faudio, $faanswer, $clipquestion, $mainq, $finalq, $jept1, $jept2, $jept3, $jept4, $jept5, $cat);        
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




$('.questionselector').change(function(){
    var roundNumber;


    switch($(this).val())
    {
        case "one":
             roundNumber = 1;
             break;
        case "two":
             roundNumber = 2;
             break;
        case "three":
             roundNumber = 3;
             break;
        case "four":
             roundNumber = 4;
             break;
        case "five":
             roundNumber = 5;
             break;
        case "six":
             roundNumber = 6;
             break;
        case "seven":
             roundNumber = 7;
             break;
        case "eight":
             roundNumber = 8;
             break;
        case "nine":
             roundNumber = 9;
             break;
        case "ten":
             roundNumber = 10;
             break;
        case "eleven":
             roundNumber = 11;
             break;
    }


    $('.rounds').hide();
    $('.' + $(this).val()).show();
    $('#catlist').val(roundNumber)
});
});

    $(document).ready(function() {
    $("input[name$='qs']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#Qs" + test).show();
    });
});

$(document).ready(function() {
    $("input[name$='q1s']").click(function() {
        var test = $(this).val();

        $("div.desc1").hide();
        $("#Q1s" + test).show();
    });
});


    </script>
    
</head>

<body>

  
  <Br><Br>

  

  <!--Main layout-->
  <main>
    <div class="container">

<br><br>
   

    <div class="card">
    <?php if (!empty($message)): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
<h5 class="card-header info-color white-text text-center py-4">
    <strong>Add a Question</strong>
</h5>

<div class="md-form md-bg form-lg card-body px-lg-5 pt-0">

<form  action="admin_addquestion.php" method="post" enctype="multipart/form-data"  style="color: #757575;">
<br>

<Select class="questionselector">
   <option value="none" disabled selected>Select a Question Type</option>

   <option value="one">Round One: Mixed Bag Questions</option>
   <option value="two">Round Two: Have you seen the scene? Questions</option>
   <option value="three">Round Three: Match Game Questions</option>
   <option value="four">Round Four: Name that Tune Questions</option>
   <option value="five">Category Images for Jeopardy</option>
   <option value="seven">Jeopardy Category 1 Questions</option>
   <option value="eight">Jeopardy Category 2 Questions</option>
   <option value="nine">Jeopardy Category 3 Questions</option>
   <option value="ten">Jeopardy Category 4 Questions</option>
   <option value="eleven">Jeopardy Category 5 Questions</option>
   <option value="six">Final Round Questions</option>

</Select>



<select name="catList" id="catlist" class="mdb-select md-form mb-4 initialized" >
        <option value="">Insert into a Round...</option>
        <?php while ($product_category = $product_categories->fetch(PDO::FETCH_ASSOC)): ?>
<option value="<?php echo $product_category['cat_id']; ?>">
    <?php echo $product_category['cat_name']; ?> 
</option>
<?php endwhile; ?>
    </select><br>




    <input type="text" name="title"  id="title" class="form-control form-control-lg" placeholder="Title/round number of Question (shows on question round list)">
<br>
 


<div  class="one rounds" style="display:none">

<input type="text" name="question" id="question" class="form-control form-control-lg" placeholder="question">


<input type="text" id="answer" name="answer" class="form-control form-control-lg" placeholder="answer">


  </div>
<br>
  
  <div class="two rounds" style="display:none">
  <input type="text" id="clipquestion" name="clipquestion" class="form-control" placeholder="question">
  
  <br><i>Options will only show if they're filled in.</i><br>
  <input type="text" id="op1" name="op1" class="form-control form-control-lg" placeholder="Option 1">
  <input type="text" id="op2" name="op2" class="form-control form-control-lg" placeholder="Option 2">
  <input type="text" id="op3" name="op3" class="form-control form-control-lg" placeholder="Option 3">
  <input type="text" id="op4" name="op4" class="form-control form-control-lg" placeholder="Option 4">
  <input type="text" id="op5" name="op5" class="form-control form-control-lg" placeholder="Option 5">

  <input type="text" id="clipanswer" name="clipanswer" class="form-control form-control-lg" placeholder="Answer">

  <input type="text" id="vid" name="vid" class="form-control form-control-lg" placeholder="MP4 file name. Do not add extension. Eg, CORRECT: GoodWillHunting | INCORRECT: GoodWillHunting.mp4">


  </div>

  
  <div  class="three rounds" style="display:none">
  <input type="text" id="mainq" name="mainq" class="form-control form-control-lg" placeholder="main question/instructions">
  <input type="text" id="mq1" name="mq1" class="form-control form-control-lg" placeholder="question 1">
  <input type="text" id="mq2" name="mq2" class="form-control form-control-lg" placeholder="question 2">
  <input type="text" id="mq3" name="mq3" class="form-control form-control-lg" placeholder="question 3">
  <input type="text" id="mq4" name="mq4" class="form-control form-control-lg" placeholder="question 4">
  <input type="text" id="mq5" name="mq5" class="form-control form-control-lg" placeholder="question 5">
  <br><br>
  <input type="text" id="ma1" name="ma1" class="form-control form-control-lg" placeholder="correct answer/choice/match for 1">
  <input type="text" id="ma2" name="ma2" class="form-control form-control-lg" placeholder="correct answer/choice/match for 2">
  <input type="text" id="ma3" name="ma3" class="form-control form-control-lg" placeholder="correct answer/choice/match for 3">
  <input type="text" id="ma4" name="ma4" class="form-control form-control-lg" placeholder="correct answer/choice/match for 4">
  <input type="text" id="ma5" name="ma5" class="form-control form-control-lg" placeholder="correct answer/choice/match for 5">
  <br>
  <input type="text" id="mia1" name="mia1" class="form-control form-control-lg" placeholder="incorrect answer/choice/match for 1">
  <input type="text" id="mia2" name="mia2" class="form-control form-control-lg" placeholder="incorrect answer/choice/match for 2">
  <input type="text" id="mia3" name="mia3" class="form-control form-control-lg" placeholder="incorrect answer/choice/match for 3">
  <input type="text" id="mia4" name="mia4" class="form-control form-control-lg" placeholder="incorrect answer/choice/match for 4">
  <input type="text" id="mia5" name="mia5" class="form-control form-control-lg" placeholder="incorrect answer/choice/match for 5">
  <input type="text" id="mia6" name="mia6" class="form-control form-control-lg" placeholder="another incorrect answer/choice/match to throw them off">
  <input type="text" id="mia7" name="mia7" class="form-control form-control-lg" placeholder="another incorrect answer/choice/match to throw them off">
  


  </div>

  <div class="four rounds" style="display:none">

  <input type="text" id="songhint" name="songhint" class="form-control form-control-lg" placeholder="Song question/hint">

  <div class="file-field">
    <div class="btn btn-primary float-center ">
        <span>mp3 </span><br>
        <input type="file" name="song" id="song">
    </div>
</div>

<input type="text" id="songanswer" name="songanswer" class="form-control form-control-lg" placeholder="song answer">

  </div>

  <div class="five rounds" style="display:none">
  <div class="file-field">
    <div class="btn btn-primary float-center ">
        <span>image </span><br>
        <input type="file" name="jept1" id="jept1">
    </div>
</div>

<div class="file-field">
    <div class="btn btn-primary float-center ">
        <span>image 2</span><br>
        <input type="file" name="jept2" id="jept2">
    </div>
</div>

<div class="file-field">
    <div class="btn btn-primary float-center ">
        <span>image 3</span><br>
        <input type="file" name="jept3" id="jept3">
    </div>
</div>

<div class="file-field">
    <div class="btn btn-primary float-center ">
        <span>image 4</span><br>
        <input type="file" name="jept4" id="jept4">
    </div>
</div>

<div class="file-field">
    <div class="btn btn-primary float-center ">
        <span>image 5</span><br>
        <input type="file" name="jept5" id="jept5">
    </div>
</div>
</div>

  <div class="seven eight nine ten eleven rounds" style="display:none">
  
  <input type="text" id="jepcat" name="jepcat" class="form-control form-control-lg" placeholder="Jeopardy category name (eg, Animal Kingdom) Will show on question list.">

  <input type="radio" name="qs"  value="1"/> Question Type 1 - Open Ended Question + Answer<br>
<input type="radio" name="qs"  value="2"/> Question Type 2 - Question/Hint + Song clip + Answer <br>
<input type="radio" name="qs" value="3"/> Question Type 3 - Question/Hint + Image/Gif + Answer

 <div id="Qs1" class="desc" style="display: none;">
 <input type="text" id="jepq1" name="jepq1" class="form-control form-control-lg" placeholder="Jeopardy question one">

<input type="text" id="jepa1" name="jepa1" class="form-control form-control-lg" placeholder="Jeopardy answer one">
</div>


<div id="Qs2" class="desc" style="display: none;">
<input type="text" id="jepq2" name="jepq2" class="form-control form-control-lg" placeholder="Jeopardy question one">

<input type="text" id="jepa2" name="jepa2" class="form-control form-control-lg" placeholder="Jeopardy answer one"> 

<div class="file-field">
    <div class="btn btn-primary float-center ">
        <span>mp3 </span><br>
        <input type="file" name="jepsong" id="jepsong">
    </div>
</div>
</div>


<div id="Qs3" class="desc" style="display: none;">
<input type="text" id="jepq3" name="jepq3" class="form-control form-control-lg" placeholder="Jeopardy question one">

<input type="text" id="jepa3" name="jepa3" class="form-control form-control-lg" placeholder="Jeopardy answer one"> 

<div class="file-field">
    <div class="btn btn-primary float-center ">
        <span>image </span><br>
        <input type="file" name="jepimg" id="jepimg">
    </div>
</div> 
</div>
  </div>

  <div class="six rounds" style="display:none">

  <input type="radio" name="q1s" value="1"/> Type 1 - Open Ended Question + Answer<br>
  <input type="radio" name="q1s" value="2"/> Type 2 - Multiple Options + Video + Answer<br>
  <input type="radio" name="q1s" value="3"/> Type 3 - Audio + Question/hint + answer <br>


<div id="Q1s1" class="desc1" style="display: none;">
<input type="text" id="fq" name="fq" class="form-control form-control-lg" placeholder="question one">

<input type="text" id="fqa" name="fqa" class="form-control form-control-lg" placeholder="answer one">
</div>

<div id="Q1s2" class="desc1" style="display: none;">
<br><i>Options will only show if they're filled in.</i><br>
<input type="text" id="finalq" name="finalq" class="form-control form-control-lg" placeholder="multiple choice overall title/question/instructions">
<br>
  <input type="text" id="fop1" name="fop1" class="form-control form-control-lg" placeholder="Option 1">
  <input type="text" id="fop2" name="fop2" class="form-control form-control-lg" placeholder="Option 2">
  <input type="text" id="fop3" name="fop3" class="form-control form-control-lg" placeholder="Option 3">
  <input type="text" id="fop4" name="fop4" class="form-control form-control-lg" placeholder="Option 4">
  <input type="text" id="fop5" name="fop5" class="form-control form-control-lg" placeholder="Option 5">

  <input type="text" id="fanswer" name="fanswer" class="form-control form-control-lg" placeholder="Answer">

  <input type="text" id="fvid" name="fvid" class="form-control form-control-lg" placeholder="MP4 file name. Do not add extension. Eg, CORRECT: GoodWillHunting | INCORRECT: GoodWillHunting.mp4">

</div>

<div id="Q1s3" class="desc1" style="display: none;">
<input type="text" id="faq" name="faq" class="form-control form-control-lg" placeholder="question">

<input type="text" id="faanswer" name="faanswer" class="form-control form-control-lg" placeholder="answer"> 

<div class="file-field">
    <div class="btn btn-primary float-center ">
        <span>mp3 </span><br>
        <input type="file" name="faudio" id="faudio">
    </div>
</div>
</div>


</div>




<button class="btn btn-red  btn-block z-depth-0 my-4 waves-effect" type="submit" name="submit">Submit</button>

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
