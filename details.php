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
    <link href="https://fonts.googleapis.com/css?family=Rubik|Rubik+Mono+One&display=swap" rel="stylesheet"> 
    
    <script src="https://kit.fontawesome.com/2ce5f1a851.js"></script>

  </head>
  <body class="rounds" >

<?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
<div class="grid-container full wow fadeIn">
    <div class="grid-x wow fadeIn">
        <div class="auto cell"></div>
        <Div class=" wow fadeIn small-10 cell"><center>
        <div data-wow-duration="1.2s" class="wow fadeIn small-12 cell" style="background-color:transparent;margin-top:1%;margin-bottom:2%;">
                <span style="font-size: 4vw;font-family: Rubik Mono One;letter-spacing: -2px;color: #fff;text-shadow: 0 0px 0px, 0 0 2px, 0 0 1em #fff,  0 0 0.1em #fff, 0 10px 3px #000;"><?php echo $row['q_title'];?></span></div>

<!--Round one mixed bag -->
            <?php if($row['q_question']):?>
            <div class="auto cell round" style="padding:2%;width:85%;border-radius:5px;margin-top:5%;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_question'];?></h3></div>
            <?php endif; ?>
  
  <!--Round two have you seen the scene -->
          

  <?php if($row['q_clipquestion']):?>
            <div class="auto cell" style="padding:2%;width:85%;border-radius:5px;"><h3 class="ru wow fadeIn"><?php echo $row['q_clipquestion'];?></h3></div>
            <?php endif; ?>

    <?php if($row['q_vid']):?>

<div class="grid-x grid-margin-x">
  <div class="small-4 cell"><?php if($row['q_op1']):?>
  <div class="auto cell round" style="padding:2%;border-radius:5px;margin-top:5%;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_op1'];?></h3></div><?php endif; ?>

<?php if($row['q_op2']):?>
<div class="auto cell round" style="padding:2%;border-radius:5px;margin-top:5%;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_op2'];?></h3></div><?php endif; ?>

<?php if($row['q_op3']):?>
<div class="auto cell round" style="padding:2%;border-radius:5px;margin-top:5%;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_op3'];?></h3></div><?php endif; ?>

<?php if($row['q_op4']):?>
<div class="auto cell round" style="padding:2%;border-radius:5px;margin-top:5%;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_op4'];?></h3></div><?php endif; ?>

<?php if($row['q_op5']):?>
<div class="auto cell round" style="padding:2%;border-radius:5px;margin-top:5%;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_op5'];?></h3></div><?php endif; ?>
</div>
  <div class="small-8 cell" >
    
  <div class="flex-video">
  <iframe src="images/<?php echo $row['q_vid']; ?>.mp4" frameborder="0" allowfullscreen></iframe>
  
</div>
 
</div>
</div>

<?php endif; ?>



<!--match game -->

<?php if($row['q_mainq']):?>


<div class="auto cell round" style="background:transparent;border-radius:5px;">
<iframe frameborder="0"  src="timer.html">
  <p>Your browser does not support iframes.</p>
</iframe>
</div>

<div class="auto cell round" style="background:transparent;border-radius:5px;"><h3 class="ru wow fadeIn"><?php echo $row['q_mainq'];?></h3></div>
            <?php endif; ?>
<br>
<?php if($row['q_mq1']):?>
<div class="grid-x grid-margin-x">
  <div class="small-6 cell round" style="padding:2%;border-radius:5px;">
<ol style="text-align:left;margin-left:20%;">
<h3 class="ru"><li><?php if($row['q_mq1']):?>
            <?php echo $row['q_mq1'];?>
            <?php endif; ?></li></h3>

            <h3 class="ru"><li><?php if($row['q_mq2']):?>
            <?php echo $row['q_mq2'];?>
            <?php endif; ?></li></h3>

            <h3 class="ru"><li><?php if($row['q_mq3']):?>
            <?php echo $row['q_mq3'];?>
            <?php endif; ?></li></h3>

            <h3 class="ru"><li><?php if($row['q_mq4']):?>
            <?php echo $row['q_mq4'];?>
            <?php endif; ?></li></h3>

            <h3 class="ru"><li><?php if($row['q_mq5']):?>
            <?php echo $row['q_mq5'];?>
            <?php endif; ?></li></h3>

</ol>
</div>
<div class="small-6 cell round" style="padding:2%;border-radius:5px;">
<Div class="cell"><h3 class="ru"><?php if($row['q_mia1']):?>
            <?php echo $row['q_mia1'];?></h3>
            <?php endif; ?></div>

            <Div class="cell"><h3 class="ru"><?php if($row['q_mia2']):?>
            <?php echo $row['q_mia2'];?></h3>
            <?php endif; ?></div>

            <Div class="cell"><h3 class="ru"><?php if($row['q_mia3']):?>
            <?php echo $row['q_mia3'];?></h3>
            <?php endif; ?></div>

            <Div class="cell"><h3 class="ru"><?php if($row['q_mia4']):?>
            <?php echo $row['q_mia4'];?></h3>
            <?php endif; ?></div>

            <Div class="cell"><h3 class="ru"><?php if($row['q_mia5']):?>
            <?php echo $row['q_mia5'];?></h3>
            <?php endif; ?></div>

            <Div class="cell"><h3 class="ru"><?php if($row['q_mia6']):?>
            <?php echo $row['q_mia6'];?></h3>
            <?php endif; ?></div>

            <Div class="cell"><h3 class="ru"><?php if($row['q_mia7']):?>
            <?php echo $row['q_mia7'];?></h3>
            <?php endif; ?></div>
</div>
</div><br>
<?php endif; ?>

<!--name that tune-->
<?php if($row['q_songhint']):?>
<div class="auto cell round" style="padding:2%;width:85%;border-radius:5px;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_songhint'];?></h3><br>
<?php if($row['q_song']):?>
            <audio controls>
  <source src="images/<?php echo $row['q_song']; ?>" type="audio/mpeg">
</audio>
            <?php endif; ?>
          </div>
            <?php endif; ?>

            

            <!--jeopardy  Question Type 1 - Open Ended Question + Answer-->
<?php if($row['q_jepq1']):?>
<div class="auto cell round" style="padding:2%;width:85%;border-radius:5px;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_jepq1'];?></h3></div>
            <?php endif; ?>

    <!--jeopardy  Question Type 2 - Question/Hint + Song clip + Answer-->
<?php if($row['q_jepq2']):?>
<div class="auto cell round" style="padding:2%;width:85%;border-radius:5px;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_jepq2'];?></h3><br>
            

            <?php if($row['q_jepsong']):?>
            <audio controls>
  <source src="images/<?php echo $row['q_jepsong']; ?>" type="audio/mpeg">
</audio></div>
            <?php endif; ?><?php endif; ?>


             <!--jeopardy  Question Type 3 - Question/Hint + Image/Gif + Answer-->
<?php if($row['q_jepq3']):?>
<div class="auto cell round" style="padding:2%;width:85%;border-radius:5px;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_jepq3'];?></h3>
            

            <?php if($row['q_jepimg']):?>
   <img src="images/<?php echo $row['q_jepimg']; ?>">
   </div>
            <?php endif; ?><?php endif; ?>


 <!--final  Open Ended Question + Answer-->
<?php if($row['q_fq']):?>
<div class="auto cell round" style="padding:2%;width:85%;border-radius:5px;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_fq'];?></h3></div>
            <?php endif; ?>


 <!--final type 2  Multiple Options + Video + Answer-->
 <?php if($row['q_finalq']):?>
            <div class="auto cell" style="padding:2%;width:85%;border-radius:5px;"><h3 class="ru wow fadeIn"><?php echo $row['q_finalq'];?></h3></div>
            <?php endif; ?>

    <?php if($row['q_fvid']):?>

<div class="grid-x grid-margin-x">
  <div class="small-4 cell"><?php if($row['q_fop1']):?>
  <div class="auto cell round" style="padding:2%;border-radius:5px;margin-top:5%;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_fop1'];?></h3></div><?php endif; ?>

<?php if($row['q_fop2']):?>
<div class="auto cell round" style="padding:2%;border-radius:5px;margin-top:5%;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_fop2'];?></h3></div><?php endif; ?>

<?php if($row['q_fop3']):?>
<div class="auto cell round" style="padding:2%;border-radius:5px;margin-top:5%;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_fop3'];?></h3></div><?php endif; ?>

<?php if($row['q_fop4']):?>
<div class="auto cell round" style="padding:2%;border-radius:5px;margin-top:5%;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_fop4'];?></h3></div><?php endif; ?>

<?php if($row['q_fop5']):?>
<div class="auto cell round" style="padding:2%;border-radius:5px;margin-top:5%;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_fop5'];?></h3></div><?php endif; ?>
</div>
  <div class="small-8 cell" >
    
  <div class="flex-video">
  <iframe src="images/<?php echo $row['q_fvid']; ?>.mp4" frameborder="0" allowfullscreen></iframe>
  
</div>
 
</div>
</div>

<?php endif; ?>



    <!--final Type 3 - Audio + Question/hint + answer -->
    <?php if($row['q_faq']):?>
<div class="auto cell round" style="padding:2%;width:85%;border-radius:5px;margin-bottom:5%;"><h3 class="ru wow fadeIn"><?php echo $row['q_faq'];?></h3><br>
            

            <?php if($row['q_faudio']):?>
            <audio controls>
  <source src="images/<?php echo $row['q_faudio']; ?>" type="audio/mpeg">
</audio></div>
            <?php endif; ?><?php endif; ?>
<!--bottom-->

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