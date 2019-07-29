<?php
	require_once('scripts/config.php');
	include('scripts/connect.php');
	confirm_logged_in();


	if(isset($_REQUEST['update_id'])){
		try{
			$id = $_REQUEST['update_id']; 
			$update_user_query = 'SELECT * FROM tbl_questions WHERE q_id =:id';
			
			$update_set = $pdo->prepare($update_user_query);
			$update_set->execute(
				array(
					':id'=>$id
				)
			);
		}
		catch(PDOException $e) {
			$e->getMessage();
		}
	}

	$cat_tbl            = 'tbl_category';
	$product_categories = getAll($cat_tbl);

	if(isset($_REQUEST['update_prod'])){
   
		$title = trim($_POST['title']);
		$question = trim($_POST['question']);
    $answer = trim($_POST['answer']);
		$op1  	= trim($_POST['op1']);
		$op2  	= trim($_POST['op2']);
		$op3  	= trim($_POST['op3']);
		$op4  	= trim($_POST['op4']);
		$op5  	= trim($_POST['op5']);
		$clipanswer  	= trim($_POST['clipanswer']);
		$vid  	= trim($_POST['vid']);
		$mq1  	= trim($_POST['mq1']);
		$mq2  	= trim($_POST['mq2']);
		$mq3  	= trim($_POST['mq3']);
		$mq4  	= trim($_POST['mq4']);
		$mq5  	= trim($_POST['mq5']);
		$ma1  	= trim($_POST['ma1']);
		$ma2  	= trim($_POST['ma2']);
		$ma3  	= trim($_POST['ma3']);
		$ma4  	= trim($_POST['ma4']);
		$ma5  	= trim($_POST['ma5']);
    $mia1  	= trim($_POST['mia1']);
		$mia2  	= trim($_POST['mia2']);
		$mia3  	= trim($_POST['mia3']);
		$mia4  	= trim($_POST['mia4']);
		$mia5  	= trim($_POST['mia5']);
    $mia6  	= trim($_POST['mia6']);
		$mia7  	= trim($_POST['mia7']);
    $songhint  	= trim($_POST['songhint']);


		$songanswer  	= trim($_POST['songanswer']);
		$jepcat  	= trim($_POST['jepcat']);
		$jepq1  	= trim($_POST['jepq1']);
    $jepa1 = trim($_POST['jepa1']);
    $jepq2 = trim($_POST['jepq2']);
    $jepa2 = trim($_POST['jepa2']);


    $jepq3 = trim($_POST['jepq3']);
    $jepa3 = trim($_POST['jepa3']);


    $fq = trim($_POST['fq']);
    $fqa = trim($_POST['fqa']);
    $fop1 = trim($_POST['fop1']);
    $fop2 = trim($_POST['fop2']);
    $fop3 = trim($_POST['fop3']);
    $fop4 = trim($_POST['fop4']);
    $fop5 = trim($_POST['fop5']);
    $fanswer = trim($_POST['fanswer']);
    $fvid = trim($_POST['fvid']);
    $faq = trim($_POST['faq']);


    $faanswer = trim($_POST['faanswer']);
    $clipquestion = trim($_POST['clipquestion']);
    $mainq = trim($_POST['mainq']);
    $finalq = trim($_POST['finalq']);

   

    $category = trim($_POST['catList']);
    
    
  

		$result = editQuestion($title, $question, $answer, $op1, $op2, $op3, $op4, $op5, $clipanswer, $vid, $mq1, $mq2, $mq3, $mq4, $mq5, $ma1, $ma2, $ma3, $ma4, $ma5, $mia1, $mia2, $mia3, $mia4, $mia5, $mia6, $mia7, $songhint,  $songanswer, $jepcat, $jepq1, $jepa1, $jepq2, $jepa2,  $jepq3, $jepa3,  $fq, $fqa, $fop1, $fop2, $fop3, $fop4, $fop5, $fanswer, $fvid, $faq, $faanswer, $clipquestion, $mainq, $finalq, $category);
		$message = $result;
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Edit a Question</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">
  <!-- css -->
  <link href="../css/app.css" rel="stylesheet">
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
</head>

<body>

  


  <!--Main layout-->
  <main>
    <div class="container">

<br><br>
   


<div class="card">
<?php if (!empty($message)): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
<h5 class="card-header mdb-color white-text text-center py-4">
    <strong>Edit a Question</strong>
</h5>

<div class="card-body px-lg-5 pt-0">



	<?php if($row = $update_set->fetch(PDO::FETCH_ASSOC)):?>
<form  method="post"  class="md-form" style="color: #757575;">

<b>Question Title <i>(shown on question list)</i></b><br>
<input type="text" name="title"  value="<?php echo $row['q_title'];?>" id="title" class="form-control"><br>

<b>Insert into what round?</b><i style="color:#cc0000">(If not changing round, leave blank)</i><br>
<select name="catList" id="catlist select" class="mdb-select md-form mb-4 initialized" >
        <option value="" disabled selected>Product Category</option>
        <?php while ($product_category = $product_categories->fetch(PDO::FETCH_ASSOC)): ?>
<option value="<?php echo $product_category['cat_id']; ?>">
    <?php echo $product_category['cat_name']; ?>
</option>
<?php endwhile; ?>
    </select><br>

    

    <hr><br><br>

    <?php if($row['q_question']):?>

    <b>Question</b><br>
    <input type="text" name="question"  id="question" class="form-control" value="<?php echo $row['q_question'];?>">
<b>Answer</b><br>
<input type="text" id="answer" name="answer" class="form-control" value="<?php echo $row['q_answer'];?>">
<?php endif; ?>


<?php if($row['q_clipquestion']):?>
<b>Question/hint</b><br>
  <input type="text" id="clipquestion" name="clipquestion" class="form-control" value="<?php echo $row['q_clipquestion'];?>">

<br><i>Options will only show if they're filled in. For fewer options/choices, leave blank.</i><br><br>

<b>Answer choice 1</b><br>
  <input type="text" id="op1" name="op1" class="form-control" value="<?php echo $row['q_op1'];?>">

  <b>Answer choice 2</b><br>
  <input type="text" id="op2" name="op2" class="form-control" value="<?php echo $row['q_op2'];?>">

  <b>Answer choice 3</b><br>
  <input type="text" id="op3" name="op3" class="form-control" value="<?php echo $row['q_op3'];?>">

  <b>Answer choice 4</b><br>
  <input type="text" id="op4" name="op4" class="form-control" value="<?php echo $row['q_op4'];?>">

  <b>Answer choice 5</b><br>
  <input type="text" id="op5" name="op5" class="form-control" value="<?php echo $row['q_op5'];?>">

  <b>Correct Answer</b><br>
  <input type="text" id="clipanswer" name="clipanswer" class="form-control" value="<?php echo $row['q_clipanswer'];?>">

  <b>Video (mp4) file name. Do not include extension. Eg, CORRECT: GoodWillHunting | INCORRECT: GoodWillHunting.mp4</b><br>
  <input type="text" id="vid" name="vid" class="form-control" value="<?php echo $row['q_vid'];?>">
<?php endif; ?>



<?php if($row['q_mainq']):?>

<b>Main question/instructions</b><br>
<input type="text" id="mainq" name="mainq" class="form-control" value="<?php echo $row['q_mainq'];?>"><br>

<b>Question/choice 1</b><br>
<input type="text" id="mq1" name="mq1" class="form-control" value="<?php echo $row['q_mq1'];?>">

<b>Question/choice 2</b><br>
  <input type="text" id="mq2" name="mq2" class="form-control" value="<?php echo $row['q_mq2'];?>">

  <b>Question/choice 3</b><br>
  <input type="text" id="mq3" name="mq3" class="form-control" value="<?php echo $row['q_mq3'];?>">

  <b>Question/choice 4</b><br>
  <input type="text" id="mq4" name="mq4" class="form-control" value="<?php echo $row['q_mq4'];?>">

  <b>Question/choice 5</b><br>
  <input type="text" id="mq5" name="mq5" class="form-control" value="<?php echo $row['q_mq5'];?>">
  <br><br>

  <b>Correct answer/choice/match for 1</b><br>
  <input type="text" id="ma1" name="ma1" class="form-control" value="<?php echo $row['q_ma1'];?>">

  <b>Correct answer/choice/match for 2</b><br>
  <input type="text" id="ma2" name="ma2" class="form-control" value="<?php echo $row['q_ma2'];?>">

  <b>Correct answer/choice/match for 3</b><br>
  <input type="text" id="ma3" name="ma3" class="form-control" value="<?php echo $row['q_ma3'];?>">

  <b>Correct answer/choice/match for 4</b><br>
  <input type="text" id="ma4" name="ma4" class="form-control" value="<?php echo $row['q_ma4'];?>">

  <b>Correct answer/choice/match for 5</b><br>
  <input type="text" id="ma5" name="ma5" class="form-control" value="<?php echo $row['q_ma5'];?>">
  <br><br>

  <b>INcorrect answer/choice/match for 1</b><br>
  <input type="text" id="mia1" name="mia1" class="form-control" value="<?php echo $row['q_mia1'];?>">

  <b>INcorrect answer/choice/match for 2</b><br>
  <input type="text" id="mia2" name="mia2" class="form-control" value="<?php echo $row['q_mia2'];?>">

  <b>INcorrect answer/choice/match for 3</b><br>
  <input type="text" id="mia3" name="mia3" class="form-control" value="<?php echo $row['q_mia3'];?>">

  <b>INcorrect answer/choice/match for 4</b><br>
  <input type="text" id="mia4" name="mia4" class="form-control" value="<?php echo $row['q_mia4'];?>">

  <b>INcorrect answer/choice/match for 5</b><br>
  <input type="text" id="mia5" name="mia5" class="form-control" value="<?php echo $row['q_mia5'];?>">

  <b>Another INcorrect answer/choice/match to throw them off</b><br>
  <input type="text" id="mia6" name="mia6" class="form-control" value="<?php echo $row['q_mia6'];?>">

  <b>Another INcorrect answer/choice/match to throw them off</b><br>
  <input type="text" id="mia7" name="mia7" class="form-control" value="<?php echo $row['q_mia7'];?>">
<?php endif; ?>


<?php if($row['q_songanswer']):?>

<b>Song hint or question</b><br>
<input type="text" id="songhint" name="songhint" class="form-control" value="<?php echo $row['q_songhint'];?>"><br>

<b>Song</b><br>
<div class="file-field">
    <div class="btn btn-light float-center ">
        <span>Current uploaded media: <?php echo $row['q_song'];?><br><?php if($row['q_song']):?>
            <audio controls>
  <source src="../images/<?php echo $row['q_song']; ?>" type="audio/mpeg">
</audio><br>
            <?php endif; ?><i style="font-family:arial;text-transform:none;">You cannot edit your media. If you need to reupload your media please delete this question and reinsert it on the Add Questions page.</i></span>
    </div>
</div> 
  <br>
<b>Answer</b><br>
<input type="text" id="songanswer" name="songanswer" class="form-control" value="<?php echo $row['q_songanswer'];?>">

<?php endif; ?>

<?php if($row['q_jepcat']):?>
<b>Jeopardy Category Name <i>(shown on questions list</i>)</b><br>
<input type="text" id="jepcat" name="jepcat" class="form-control" value="<?php echo $row['q_jepcat'];?>">
<?php endif; ?>


<?php if($row['q_jepq1']):?>

<b>Jeopardy open ended question</b><Br>
<input type="text" id="jepq1" name="jepq1" class="form-control" value="<?php echo $row['q_jepq1'];?>"><Br>

<b>Jeopardy open ended answer</b><br>
<input type="text" id="jepa1" name="jepa1" class="form-control" value="<?php echo $row['q_jepa1'];?>">
<?php endif; ?>


<?php if($row['q_jepq2']):?>

<b>Jeopardy question/hint</b><Br>
<input type="text" id="jepq2" name="jepq2" class="form-control" value="<?php echo $row['q_jepq2'];?>"><br>

<b>Jeopardy answer</b><Br>
<input type="text" id="jepa2" name="jepa2" class="form-control" value="<?php echo $row['q_jepa2'];?>"> <br>

<b>Jeopardy Song Clip</b><br>
<div class="file-field">
    <div class="btn btn-light float-center ">
        <span>Current uploaded media: <?php echo $row['q_jepsong'];?><br><?php if($row['q_jepsong']):?>
            <audio controls>
  <source src="../images/<?php echo $row['q_jepsong']; ?>" type="audio/mpeg">
</audio><br>
            <?php endif; ?><i style="font-family:arial;text-transform:none;">You cannot edit your media. If you need to reupload your media please delete this question and reinsert it on the Add Questions page.</i></span>
    </div>
</div> 
<?php endif; ?>



<?php if($row['q_jepq3']):?>

<b>Jeopardy Question/hint</b><br>
<input type="text" id="jepq3" name="jepq3" class="form-control" value="<?php echo $row['q_jepq3'];?>"><br>

<b>Jeopardy answer</b><br>
<input type="text" id="jepa3" name="jepa3" class="form-control" value="<?php echo $row['q_jepa3'];?>"> <br>

<b>Jeopardy Image/Gif</b><br>
<div class="file-field">
    <div class="btn btn-light float-center">
        <span>Current uploaded media: <?php echo $row['q_jepimg'];?><br><img src="../images/<?php echo $row['q_jepimg'];?>"><br><i style="font-family:arial;text-transform:none;">You cannot edit your media. If you need to reupload your media please delete this question and reinsert it on the Add Questions page.</i></span>
    </div>
</div> 
<?php endif; ?>

<?php if($row['q_jept1']):?>

<b>Jeopardy category 1 image</b><br>
<div class="file-field">
    <div class="btn btn-light float-center">
        <span>Current uploaded media: <?php echo $row['q_jept1'];?><br><img src="../images/<?php echo $row['q_jept1'];?>"><br><i style="font-family:arial;text-transform:none;">You cannot edit your media. If you need to reupload your media please delete this question and reinsert it on the Add Questions page.</i></span>
    </div>
</div>   
<?php endif; ?>



<?php if($row['q_jept2']):?>

<b>Jeopardy category 2 image</b><br>
<div class="file-field">
    <div class="btn btn-light float-center">
        <span>Current uploaded media: <?php echo $row['q_jept2'];?><br><img src="../images/<?php echo $row['q_jept2'];?>"><br><i style="font-family:arial;text-transform:none;">You cannot edit your media. If you need to reupload your media please delete this question and reinsert it on the Add Questions page.</i></span>
    </div>
</div> 
<?php endif; ?>

<?php if($row['q_jept3']):?>

<b>Jeopardy category 3 image</b><br>
<div class="file-field">
    <div class="btn btn-light float-center">
        <span>Current uploaded media: <?php echo $row['q_jept3'];?><br><img src="../images/<?php echo $row['q_jept3'];?>"><br><i style="font-family:arial;text-transform:none;">You cannot edit your media. If you need to reupload your media please delete this question and reinsert it on the Add Questions page.</i></span>
    </div>
</div> 
<?php endif; ?>

<?php if($row['q_jept4']):?>

<b>Jeopardy category 4 image</b><br>
<div class="file-field">
    <div class="btn btn-light float-center">
        <span>Current uploaded media: <?php echo $row['q_jept4'];?><br><img src="../images/<?php echo $row['q_jept4'];?>"><br><i style="font-family:arial;text-transform:none;">You cannot edit your media. If you need to reupload your media please delete this question and reinsert it on the Add Questions page.</i></span>
    </div>
</div> 
<?php endif; ?>

<?php if($row['q_jept5']):?>

<b>Jeopardy category 5 image</b><br>
<div class="file-field">
    <div class="btn btn-light float-center">
        <span>Current uploaded media: <?php echo $row['q_jept5'];?><br><img src="../images/<?php echo $row['q_jept5'];?>"><br><i style="font-family:arial;text-transform:none;">You cannot edit your media. If you need to reupload your media please delete this question and reinsert it on the Add Questions page.</i></span>
    </div>
</div> 
<?php endif; ?>


<?php if($row['q_fq']):?>

<b>open ended Question/hint</b><br>
<input type="text" id="fq" name="fq" class="form-control" value="<?php echo $row['q_fq'];?>"><br>

<b>open ended answer</b><br>
<input type="text" id="fqa" name="fqa" class="form-control" value="<?php echo $row['q_fqa'];?>"> <br>

<?php endif; ?>


<?php if($row['q_finalq']):?>
<b>Overall question/hint/instructions</b><br>
<input type="text" id="finalq" name="finalq" class="form-control" value="<?php echo $row['q_finalq'];?>"><br>
<br><i>Options will only show if they're filled in.</i><br>
  <input type="text" id="fop1" name="fop1" class="form-control" value="<?php echo $row['q_fop1'];?>">
  <input type="text" id="fop2" name="fop2" class="form-control" value="<?php echo $row['q_fop2'];?>">
  <input type="text" id="fop3" name="fop3" class="form-control" value="<?php echo $row['q_fop3'];?>">
  <input type="text" id="fop4" name="fop4" class="form-control" value="<?php echo $row['q_fop4'];?>">
  <input type="text" id="fop5" name="fop5" class="form-control" value="<?php echo $row['q_fop5'];?>">

  <B>answer</b><Br>
  <input type="text" id="fanswer" name="fanswer" class="form-control" value="<?php echo $row['q_fanswer'];?>">

  <b>MP4 file name. Do not add extension. Eg, CORRECT: GoodWillHunting | INCORRECT: GoodWillHunting.mp4</b><br>
  <input type="text" id="fvid" name="fvid" class="form-control" value="<?php echo $row['q_fvid'];?>">
<?php endif; ?>



<?php if($row['q_faq']):?>

<b>open ended Question/hint</b><br>
<input type="text" id="faq" name="faq" class="form-control" value="<?php echo $row['q_faq'];?>"><br>

<b>open ended answer</b><br>
<input type="text" id="faanswer" name="faanswer" class="form-control" value="<?php echo $row['q_faanswer'];?>"> <br>

<b>Audio</b>
<div class="file-field">
    <div class="btn btn-light float-center ">
        <span>Current uploaded media: <?php echo $row['q_faudio'];?><br><?php if($row['q_faudio']):?>
            <audio controls>
  <source src="../images/<?php echo $row['q_faudio']; ?>" type="audio/mpeg">
</audio><br>
            <?php endif; ?><i style="font-family:arial;text-transform:none;">You cannot edit your media. If you need to reupload your media please delete this question and reinsert it on the Add Questions page.</i></span>
    </div>
</div> 

<?php endif; ?>


</div>



<button class="btn btn-info" type="submit" name="update_prod" value="Update">Submit</button>

</form>
<?php endif; ?>

</div>
</div>


<div style="margin-left:20%;margin-right:20%;">
<a href="../admin/admin_editquestion.php"><button class="btn btn-info btn-rounded btn-block z-depth-0 my-4 waves-effect">Back to question list</button></a>
  </div>
</div>
  </main>
  <!--Main layout-->

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
