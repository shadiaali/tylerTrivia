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
  <title>Product Details</title>
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

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="../index.php">
        <img src="../images/logo.png" style="height:50px;padding:5px;margin-right:10px;">
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

  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">



    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('../images/top.png'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-white-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center black-text mx-5 wow fadeIn">
              
                <center><img src="../images/logo.png" style="height:140px;margin-top:2em;"><br></center>
              

              <h1 class="mb-4">
                <strong>Administrator Panel</strong>
              </h1>

            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      
    </div>
    <!--/.Slides-->

    

  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>
    <div class="container">

<br><br>
   


<div class="card">
<?php if (!empty($message)): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
<h5 class="card-header mdb-color white-text text-center py-4">
    <strong>Add a Product</strong>
</h5>

<div class="card-body px-lg-5 pt-0">



	<?php if($row = $update_set->fetch(PDO::FETCH_ASSOC)):?>
<form  method="post"  class="md-form" style="color: #757575;">


<input type="text" name="title"  value="<?php echo $row['q_title'];?>" id="title" class="form-control">
       
<input type="text" name="question"  value="<?php echo $row['q_question'];?>" id="question" class="form-control">


<input type="text" id="answer" name="answer" class="form-control" value="<?php echo $row['q_answer'];?>">


<select name="catList" id="catlist select" class="mdb-select md-form mb-4 initialized" >
        <option value="" disabled selected>Product Category</option>
        <?php while ($product_category = $product_categories->fetch(PDO::FETCH_ASSOC)): ?>
<option value="<?php echo $product_category['cat_id']; ?>">
    <?php echo $product_category['cat_name']; ?>
</option>
<?php endwhile; ?>
    </select>

<label for="pic">Product Image:</label>
        <input type="file" id="pic" name="pic" value="<?php echo $row['q_img'];?>"><br><br>
   

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

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

   

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright
      Sportchek
    </div>
    <!--/.Copyright-->

  </footer>
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
