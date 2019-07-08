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

<!--match game -->

<?php if($row['q_mainq']):?>
            <?php echo $row['q_mainq'];?>
            <?php endif; ?>
<br>
<?php if($row['q_mq1']):?>
<div class="grid-x">
  <div class="small-6 cell">
<ol>
  <li><?php if($row['q_mq1']):?>
            <?php echo $row['q_mq1'];?>
            <?php endif; ?></li>

            <li><?php if($row['q_mq2']):?>
            <?php echo $row['q_mq2'];?>
            <?php endif; ?></li>

            <li><?php if($row['q_mq3']):?>
            <?php echo $row['q_mq3'];?>
            <?php endif; ?></li>

            <li><?php if($row['q_mq4']):?>
            <?php echo $row['q_mq4'];?>
            <?php endif; ?></li>

            <li><?php if($row['q_mq5']):?>
            <?php echo $row['q_mq5'];?>
            <?php endif; ?></li>

</ol>
</div>
<div class="small-6 cell">

<ol>
  <li><?php if($row['q_ma1']):?>
            <?php echo $row['q_ma1'];?>
            <?php endif; ?></li>

            <li><?php if($row['q_ma2']):?>
            <?php echo $row['q_ma2'];?>
            <?php endif; ?></li>

            <li><?php if($row['q_ma3']):?>
            <?php echo $row['q_ma3'];?>
            <?php endif; ?></li>

            <li><?php if($row['q_ma4']):?>
            <?php echo $row['q_ma4'];?>
            <?php endif; ?></li>

            <li><?php if($row['q_ma5']):?>
            <?php echo $row['q_ma5'];?>
            <?php endif; ?></li>

</ol>

</div>
</div>
<?php endif; ?>

<!--name that tune-->
<?php if($row['q_songanswer']):?>
            <?php echo $row['q_songanswer'];?>
            <?php endif; ?>


 <!--jeopardy  Question Type 1 - Open Ended Question + Answer-->
 <?php if($row['q_jepa1']):?>
            <?php echo $row['q_jepa1'];?>
            <?php endif; ?>

 <!--jeopardy  Question Type 2 - Question/Hint + Song clip + Answer-->
 <?php if($row['q_jepa2']):?>
            <?php echo $row['q_jepa2'];?><Br>
            <?php endif; ?>


   <!--jeopardy  Question Type 3 - Question/Hint + Image/Gif + Answer-->
   <?php if($row['q_jepa3']):?>
            <?php echo $row['q_jepa3'];?><Br>
            <?php endif; ?>


 <!--final  Open Ended Question + Answer-->
<?php if($row['q_fqa']):?>
            <?php echo $row['q_fqa'];?><Br>
            <?php endif; ?>

 <!--final type 2  Multiple Options + Video + Answer-->
  <?php if($row['q_fvid']):?>
<video width="320" height="240" controls>
  <source src="images/<?php echo $row['q_fvid']; ?>.mp4" type="video/mp4">
</video><br>
<?php endif; ?>

<?php if($row['q_fanswer']):?>
            <?php echo $row['q_fanswer'];?><Br>
            <?php endif; ?>


   <!--final Type 3 - Audio + Question/hint + answer -->
   <?php if($row['q_faanswer']):?>
            <?php echo $row['q_faanswer'];?><Br>
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