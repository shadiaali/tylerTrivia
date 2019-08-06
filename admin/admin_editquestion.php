<?php require_once('scripts/config.php');
if(isset($_GET['filter'])){
	$tbl = 'tbl_questions';
	$tbl_2 = 'tbl_category';
	$tbl_3 = 'tbl_question_category';
	$col = 'q_id';
	$col_2 = 'cat_id';
	$col_3 = 'cat_name';
	$filter = $_GET['filter'];
	$results = filterResults($tbl,$tbl_2,$tbl_3,$col,$col_2,$col_3,$filter);
}else{
  $results = getAll('tbl_questions');
  $headerr = "Welcome!";

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Edit or Delete Questions</title>
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/css/mdb.min.css" rel="stylesheet">
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

<body style="background-color: #ffffff;
background-image: url('https://www.transparenttextures.com/patterns/gplay.png');">

  <Br><Br>

  

  <!--Main layout-->
  <main>
    <div class="container" style="text-align:center;background-color:#ffffff;">

    <div class="btn-group" role="group" aria-label="order by category">
    <a href="admin_editquestion.php?filter=One">
    <button type="button" class="btn btn-info btn-sm m-0">
    Round 1: Mixed Bag</button></a>

    <a href="admin_editquestion.php?filter=Two">
    <button type="button" class="btn btn-info btn-sm m-0">
    Round 2: Have You Seen the Scene?</button></a>

    <a href="admin_editquestion.php?filter=Three">
    <button type="button" class="btn btn-info btn-sm m-0">
    Round 3: Match Game</button></a>

    <a href="admin_editquestion.php?filter=Four">
    <button type="button" class="btn btn-info btn-sm m-0">
    Round 4: Name that Tune</button></a>

    <a href="admin_editquestion.php?filter=Final">
    <button type="button" class="btn btn-block btn-info btn-sm m-0">
    Round 6: Final Questions</button></a>
  </div>

  <div class="btn-group" role="group" aria-label="order by category row 2">
    <a href="admin_editquestion.php?filter=JeopardyCategories">
    <button type="button" class="btn btn-info btn-sm m-0">
    Round 5: Jeopardy Category Images</button></a>

    <a href="admin_editquestion.php?filter=JeopardyCategory1">
    <button type="button" class="btn btn-info btn-sm m-0">
    Round 5: Jeopardy Category 1</button></a>
    
    <a href="admin_editquestion.php?filter=JeopardyCategory2">
    <button type="button" class="btn btn-info btn-sm m-0">
    Round 5: Jeopardy Category 2</button></a>

    <a href="admin_editquestion.php?filter=JeopardyCategory3">
    <button type="button" class="btn btn-info btn-sm m-0">
    Round 5: Jeopardy Category 3</button></a>

    <a href="admin_editquestion.php?filter=JeopardyCategory4">
    <button type="button" class="btn btn-info btn-sm m-0">
    Round 5: Jeopardy Category 4</button></a>

    <a href="admin_editquestion.php?filter=JeopardyCategory5">
    <button type="button" class="btn btn-info btn-sm m-0">
    Round 5: Jeopardy Category 5</button></a>

  </div>

  <hr>


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

	
	<a href="../admin/index.php"><button class="btn btn-info btn-rounded btn-block z-depth-0 my-4 waves-effect">Back to Admin index</button></a>

</div>
  </main>
  <!--Main layout-->

  
  <!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
