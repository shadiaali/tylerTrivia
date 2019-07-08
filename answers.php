<?php require_once('admin/scripts/config.php');
if(isset($_GET['id'])){
	$tbl = 'tbl_questions';
	$col = 'q_id';
	$value = $_GET['id'];
	$results = getSingle($tbl, $col, $value);
}else{
	
}
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Menu</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Pangolin|Rock+Salt&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/2ce5f1a851.js"></script>

  </head>
  <body>

<?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
<div class="grid-container wow fadeIn">
    <div class="grid-x wow fadeIn">
        <div class="auto cell"></div>
        <Div class=" wow fadeIn small-10 cell"><center>
		<h1 class="wow fadeIn" style="font-family:Pangolin;"><?php echo $row['q_title'];?></h1><hr>

  


<?php if($row['q_question']):?>
		<button class="secondary button wow fadeInRight"><h3 class="wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.1s">QUESTION: <?php echo $row['q_question'] ?>
</h3></button><br><?php endif; ?>

    <?php if($row['q_answer']):?>
    <button class="alert button wow fadeInRight"><h1 class="wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.1s">ANSWER: 
<?php echo $row['q_answer'] ?>
</h1></button><br>
<hr><?php endif; ?>

<?php if($row['q_vid']):?>
<video width="320" height="240" controls>
  <source src="images/<?php echo $row['q_vid']; ?>.mp4" type="video/mp4">
</video><br>
<?php endif; ?>
    
<?php if($row['q_clipanswer']):?>
    <button class="alert button wow fadeInRight"><h1 class="wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.1s"> 
<?php echo $row['q_clipanswer'] ?>
</h1></button>
<?php endif; ?>


<!--bottom-->
<hr>
<button class="warning button wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.1s"
                        onclick="goBack()">
                        <h3>Go Back</h3>
                    </button>
</center></div>
<div class="auto cell"></div>

        
    <?php endwhile;?>
</div></div>
</body>
<script>
            function goBack() {
                window.history.back();
            }
        </script>
<script>
              new WOW().init();
              </script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>