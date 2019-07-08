<?php require_once('scripts/config.php');
    $results = getAll('tbl_questions');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Edit or Delete Product</title>
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



	<table class="table table-striped table-responsive-md btn-table">
        <thead>
            <tr>
       	<th scope="row">Question Title</th>
				<th scope="row">Question</th>
        <th scope="row">Answer</th>
				<th scope="row">Edit</th>
				<th scope="row">Delete</th>

            </tr>
        </thead>
        <tbody>
			<?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
                <td class="wow fadeIn"><?php echo $row['q_title'];?></td>


        <td class="wow fadeIn">

        <?php if($row['q_question']):?>
        <?php echo $row['q_question'];?>
        <?php endif; ?>

        <?php if($row['q_clipquestion']):?>
        <?php echo $row['q_clipquestion'];?>
        <?php endif; ?>

        <?php if($row['q_mainq']):?>
        <?php echo $row['q_mainq'];?>
        <?php endif; ?>

        <?php if($row['q_songhint']):?>
        <?php echo $row['q_songhint'];?>
        <?php endif; ?>

        <?php if($row['q_jepq1']):?>
        <?php echo $row['q_jepq1'];?>
        <?php endif; ?>

        <?php if($row['q_jepq2']):?>
        <?php echo $row['q_jepq2'];?>
        <?php endif; ?>

        <?php if($row['q_jepq3']):?>
        <?php echo $row['q_jepq3'];?>
        <?php endif; ?>

        <?php if($row['q_fq']):?>
        <?php echo $row['q_fq'];?>
        <?php endif; ?>

        <?php if($row['q_finalq']):?>
        <?php echo $row['q_finalq'];?>
        <?php endif; ?>

        <?php if($row['q_faq']):?>
        <?php echo $row['q_faq'];?>
        <?php endif; ?>

        </td>
        

				<td class="wow fadeIn">

        <?php if($row['q_answer']):?>
        <?php echo $row['q_answer'];?>
        <?php endif; ?>

        <?php if($row['q_clipanswer']):?>
        <?php echo $row['q_clipanswer'];?>
        <?php endif; ?>

        <?php if($row['q_ma1']):?>
        <?php echo $row['q_ma1'];?>,
        <?php echo $row['q_ma2'];?>,
        <?php echo $row['q_ma3'];?>,
        <?php echo $row['q_ma4'];?>,
        <?php echo $row['q_ma5'];?>
        <?php endif; ?>

        <?php if($row['q_songanswer']):?>
        <?php echo $row['q_songanswer'];?>
        <?php endif; ?>

        <?php if($row['q_jepa1']):?>
        <?php echo $row['q_jepa1'];?>
        <?php endif; ?>

        <?php if($row['q_jepa2']):?>
        <?php echo $row['q_jepa2'];?>
        <?php endif; ?>

        <?php if($row['q_jepa3']):?>
        <?php echo $row['q_jepa3'];?>
        <?php endif; ?>

        <?php if($row['q_fqa']):?>
        <?php echo $row['q_fqa'];?>
        <?php endif; ?>

        <?php if($row['q_fanswer']):?>
        <?php echo $row['q_fanswer'];?>
        <?php endif; ?>

        <?php if($row['q_faanswer']):?>
        <?php echo $row['q_faanswer'];?>
        <?php endif; ?>
        
        </td>
        
				<td class="wow fadeIn"><a href="question_detail.php?update_id=<?php echo $row['q_id']; ?>"><button type="button" class="btn btn-indigo btn-sm m-0">Edit</button></a></td>
				<td class="wow fadeIn"><a href="scripts/caller.php?caller_id=erase&id=<?php echo $row['q_id']; ?>"><button type="button" class="btn btn-red btn-sm m-0">Delete</button></a></td>

            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

	
	<a href="../admin/index.php"><button class="btn btn-info btn-rounded btn-block z-depth-0 my-4 waves-effect">Back</button></a>

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
