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
    $pic = trim($_POST['pic']);
    $title   = trim($_POST['title']);
    $question  	= trim($_POST['question']);
    $answer = trim($_POST['answer']);
    $op1 = trim($_POST['op1']);
    $op2 = trim($_POST['op2']);
    $op3 = trim($_POST['op3']);
    $op4 = trim($_POST['op4']);
    $op5 = trim($_POST['op5']);
    $clipanswer = trim($_POST['clipanswer']);
    $vid = trim($_POST['vid']);
    $mq1 = trim($_POST['mq1']);
    $mq2 = trim($_POST['mq2']);
    $mq3 = trim($_POST['mq3']);
    $mq4 = trim($_POST['mq4']);
    $mq5 = trim($_POST['mq5']);
    $ma1 = trim($_POST['ma1']);
    $ma2 = trim($_POST['ma2']);
    $ma3 = trim($_POST['ma3']);
    $ma4 = trim($_POST['ma4']);
    $ma5 = trim($_POST['ma5']);
    $mia1 = trim($_POST['mia1']);
    $mia2 = trim($_POST['mia2']);
    $mia3 = trim($_POST['mia3']);
    $mia4 = trim($_POST['mia4']);
    $mia5 = trim($_POST['mia5']);
    $mia6 = trim($_POST['mia6']);
    $mia7 = trim($_POST['mia7']);
    $songhint = trim($_POST['songhint']);
    $song = trim($_POST['song']);
    $songanswer = trim($_POST['songanswer']);
    $jepcat = trim($_POST['jepcat']);
    $jepq1 = trim($_POST['jepq1']);
    $jepa1 = trim($_POST['jepa1']);
    $jepq2 = trim($_POST['jepq2']);
    $jepa2 = trim($_POST['jepa2']);
    $jepsong = trim($_POST['jepsong']);
    $jepq3 = trim($_POST['jepq3']);
    $jepa3 = trim($_POST['jepa3']);
    $jepimg = trim($_POST['jepimg']);
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
    $faudio = trim($_POST['faudio']);
    $faanswer = trim($_POST['faanswer']);





		$category = trim($_POST['catList']);
		$result = editQuestion($pic, $title, $question, $answer, $op1, $op2, $op3, $op4, $op5, $clipanswer, $vid, $mq1, $mq2, $mq3, $mq4, $mq5, $ma1, $ma2, $ma3, $ma4, $ma5, $mia1, $mia2, $mia3, $mia4, $mia5, $mia6, $mia7, $songhint, $song, $songanswer, $jepcat, $jepq1, $jepa1, $jepq2, $jepa2, $jepsong, $jepq3, $jepa3, $jepimg, $fq, $fqa, $fop1, $fop2, $fop3, $fop4, $fop5, $fanswer, $fvid, $faq, $faudio, $faanswer, $category);
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

<b>Insert into what round?</b><br>
<select name="catList" id="catlist select" class="mdb-select md-form mb-4 initialized" >
        <option value="" disabled selected>Product Category</option>
        <?php while ($product_category = $product_categories->fetch(PDO::FETCH_ASSOC)): ?>
<option value="<?php echo $product_category['cat_id']; ?>">
    <?php echo $product_category['cat_name']; ?>
</option>
<?php endwhile; ?>
    </select><br>

    <b>Question Title image background (<i>shown on question list</i>)</b><Br>
    <div class="file-field">
    <div class="btn btn-primary float-center ">
        <span>Choose an image for the question background<br>No spaces, periods, commas or strange characters in filename.</span><br>Giving all the questions in a round the same background will help you identify them easier.<br>
		<input type="file" name="pic" id="pic" value="<?php echo $row['q_img'];?>"><br>
		<img src="../images/<?php echo $row['q_img']; ?>" height="100" width="100" />
    </div>
</div>

    <hr><br><br>

    <?php if($row['q_question']):?>

    <b>Question</b><br>
    <input type="text" name="question"  id="question" class="form-control" value="<?php echo $row['q_question'];?>">
<b>Answer</b><br>
<input type="text" id="answer" name="answer" class="form-control" value="<?php echo $row['q_answer'];?>">
<?php endif; ?>


<?php if($row['q_op1']):?>

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



</div>



<button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="update_prod" value="Update" name="submit">Submit</button>

</form>
<?php endif; ?>

</div>
</div>



<a href="../admin"><button class="btn btn-info btn-rounded btn-block z-depth-0 my-4 waves-effect">Back</button></a>

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
