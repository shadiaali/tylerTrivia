<?php require_once('admin/scripts/config.php');
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
  <body class="rounds" style="height:100%">

  <div class="off-canvas position-top" id="offCanvasTop1" data-off-canvas>

    <!-- Close button -->
    <button class="close-button" aria-label="Close menu" type="button" data-close>
      <span aria-hidden="true">&times;</span>
    </button>

  <div class="grid-container full rounds" style="height:99%;padding-top:0.5%;padding-left:1%;padding-right:1%;">
<div class="grid-x grid-margin-x grid-margin-y"style="height:50%;">

             <div class="small-4 cell round">
<a href="index.php?filter=One"><h1 style="margin-top:20px;"><b><span>Round 1</span></b>
</h1></a><Br><h3 class="ru">"<i>Mixed Bag</i>"</h3><Br>
               <a href="round1/round-1-rules.html"><H2 class="ru">Rules</h2></a>

             </div>
             <div class="small-4 cell round"> 
             <a href="index.php?filter=Two"><h1 style="margin-top:20px;"><b><span>Round 2</span></b>
</h1></a><Br><h3 class="ru">"<i>Have you seen<br>the scene?</i>"</h3><br>
               <a href="round2rules.html"><H2 class="ru">Rules</h2></a>
              </div>
             <div class="small-4 cell round"> <a href="index.php?filter=Three"><h1 style="margin-top:20px;"><b><span>Round 3</span></b>
</h1></a><Br><h3 class="ru">"<i>Match Game</i>"</h3><br>
               <a href="round3rules.html"><H2 class="ru">Rules</h2></a></div>
          
    </div>

    <div class="grid-x grid-margin-x grid-margin-y" style="height:50%;">

<div class="small-4 cell round"> <a href="index.php?filter=Four"><h1 style="margin-top:20px;"><b><span>Round 4</span></b>
</h1></a><Br><h3 class="ru">"<i>Name that tune!</i>"</h3><br>
               <a href="round4rules.html"><H2 class="ru">Rules</h2></a></div>
<div class="small-4 cell round"><a href="index.php?filter=JeopardyCategories"><h1 style="margin-top:20px;"><b><span>Jeopardy</span></b>
</h1></a><Br><h3 class="ru">"<i>Categories</i>"</h3></div>
<div class="small-4 cell round"> <a href="index.php?filter=Final"><h1 style="margin-top:20px;"><b><span>Final</span></b>
</h1></a><Br><h3 class="ru">"<i>Winner winner<Br>chicken dinner</i>"</h3><br>
               <a href="round6rules.html"><H2 class="ru">Rules</h2></a></div>

</div>

</div>
  
  </div>



  <div class="off-canvas-content" data-off-canvas-content>
    <button type="button" class="button" data-toggle="offCanvasTop1"><i class="fas fa-bars"></i> Game Panel</button>



<div class="grid-container full wow fadeIn">
  <div class="grid-x">



<?php if((strpos($_SERVER['REQUEST_URI'],'JeopardyCategories') !== false)): ?>


<div class="grid-x grid-margin-x grid-margin-y" style="margin-right:0.5%;margin-left:0.5%;margin-top:1%;"> 

  <div data-wow-duration="1.2s" class="wow fadeIn small-12 cell" style="background-color:transparent;margin-top:0.5%;margin-bottom:2%;">
                <b><span style="font: 4vw Rubik Mono One;letter-spacing: -2px;color: #fff;text-shadow: 0 0px 0px, 0 0 2px, 0 0 1em #fff,  0 0 0.1em #fff, 0 10px 3px #000;">Round 5: Jeopardy</span></b></div>
            

  <div class="medium-4 small-12 cell wow fadeIn cats" data-wow-duration="1s">
  <?php $results = getAll($tbl);?>
            <?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
<?php if($row['q_jept1']):?><a href="?filter=JeopardyCategory1"><h3 class="ru wow fadeIn">Category 1</h3>
<img style="border-radius:5%;width:60vh;height:40vh;" src="images/<?php echo $row['q_jept1'];?>"></a>
            <?php endif; ?>
            <?php endwhile;?></div>

  <div class="medium-4 small-12 cell wow fadeIn cats" data-wow-duration="1.1s"><?php $results = getAll($tbl);?>
            <?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
            <?php if($row['q_jept2']):?><a href="?filter=JeopardyCategory2"><h3 class="ru wow fadeIn">Category 2</h3>
<img style="border-radius:5%;width:60vh;height:40vh;" src="images/<?php echo $row['q_jept2'];?>"></a>
            <?php endif; ?>
            <?php endwhile;?>
          </div>

  <div class="medium-4 small-12 cell wow fadeIn cats" data-wow-duration="1.2s">  <?php $results = getAll($tbl);?>
            <?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
            <?php if($row['q_jept3']):?><a href="?filter=JeopardyCategory3"><h3 class="ru wow fadeIn">Category 3</h3>
<img style="border-radius:5%;width:60vh;height:40vh;" src="images/<?php echo $row['q_jept3'];?>"></a>
            <?php endif; ?>
            <?php endwhile;?>
</div>

<div class="grid-x grid-margin-x" style="margin-right:10%;margin-left:15%;margin-top:1%;margin-bottom:1%;">
  <div  class="medium-6 small-12 cell wow fadeIn cats" data-wow-duration="1.3s"> <?php $results = getAll($tbl);?>
            <?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
            <?php if($row['q_jept4']):?><a href="?filter=JeopardyCategory4"><h3 class="ru wow fadeIn">Category 4</h3>
<img style="border-radius:5%;width:60vh;height:40vh;" src="images/<?php echo $row['q_jept4'];?>"></a>
            <?php endif; ?>
            <?php endwhile;?></div>

  <div class="medium-6 small-12 cell wow fadeIn cats" data-wow-duration="1.4s"> <?php $results = getAll($tbl);?>
 <?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
 <?php if($row['q_jept5']):?><a href="?filter=JeopardyCategory5"><h3 class="ru wow fadeIn">Category 5</h3>
<img style="border-radius:5%;width:60vh;height:40vh;" src="images/<?php echo $row['q_jept5'];?>"></a>
            <?php endif; ?>
          <?php endwhile;?>
</div>
</div>
</div>



 <?php else: ?>

 <?php if((strpos($_SERVER['REQUEST_URI'],'Final') !== false)):?>
 <div data-wow-duration="1.2s" class="wow fadeIn small-12 cell" style="background-color:transparent;margin-top:0.5%;margin-bottom:2%;">
                <b><span style="font: 4vw Rubik Mono One;letter-spacing: -2px;color: #fff;text-shadow: 0 0px 0px, 0 0 2px, 0 0 1em #fff,  0 0 0.1em #fff, 0 10px 3px #000;">Round 6: Final Round</span></b></div>
            <?php endif; ?>

            <?php if((strpos($_SERVER['REQUEST_URI'],'Four') !== false)):?>
 <div data-wow-duration="1.2s" class="wow fadeIn small-12 cell" style="background-color:transparent;margin-top:0.5%;margin-bottom:2%;">
                <b><span style="font: 4vw Rubik Mono One;letter-spacing: -2px;color: #fff;text-shadow: 0 0px 0px, 0 0 2px, 0 0 1em #fff,  0 0 0.1em #fff, 0 10px 3px #000;">Round 4: Name that Tune!</span></b></div>
            <?php endif; ?>

            <?php if((strpos($_SERVER['REQUEST_URI'],'Three') !== false)):?>
 <div data-wow-duration="1.2s" class="wow fadeIn small-12 cell" style="background-color:transparent;margin-top:0.5%;margin-bottom:2%;">
                <b><span style="font: 4vw Rubik Mono One;letter-spacing: -2px;color: #fff;text-shadow: 0 0px 0px, 0 0 2px, 0 0 1em #fff,  0 0 0.1em #fff, 0 10px 3px #000;">Round 3: Match Game</span></b></div>
            <?php endif; ?>

            <?php if((strpos($_SERVER['REQUEST_URI'],'Two') !== false)):?>
 <div data-wow-duration="1.2s" class="wow fadeIn small-12 cell" style="background-color:transparent;margin-top:0.5%;margin-bottom:2%;">
                <b><span style="font: 4vw Rubik Mono One;letter-spacing: -2px;color: #fff;text-shadow: 0 0px 0px, 0 0 2px, 0 0 1em #fff,  0 0 0.1em #fff, 0 10px 3px #000;">Round 2: Have You <br>Seen the Scene?</span></b></div>
            <?php endif; ?>

            <?php if((strpos($_SERVER['REQUEST_URI'],'One') !== false)):?>
 <div data-wow-duration="1.2s" class="wow fadeIn small-12 cell" style="background-color:transparent;margin-top:0.5%;margin-bottom:2%;">
                <b><span style="font: 4vw Rubik Mono One;letter-spacing: -2px;color: #fff;text-shadow: 0 0px 0px, 0 0 2px, 0 0 1em #fff,  0 0 0.1em #fff, 0 10px 3px #000;">Round 1: Mixed Bag</span></b></div>
            <?php endif; ?>

            <?php if((strpos($_SERVER['REQUEST_URI'],'JeopardyCategory1') !== false)):?>
 <div data-wow-duration="1.2s" class="wow fadeIn small-12 cell" style="background-color:transparent;margin-top:0.5%;margin-bottom:2%;">
                <b><span style="font: 4vw Rubik Mono One;letter-spacing: -2px;color: #fff;text-shadow: 0 0px 0px, 0 0 2px, 0 0 1em #fff,  0 0 0.1em #fff, 0 10px 3px #000;">Jeopardy: Category 1</span></b></div>
            <?php endif; ?>

            <?php if((strpos($_SERVER['REQUEST_URI'],'JeopardyCategory2') !== false)):?>
 <div data-wow-duration="1.2s" class="wow fadeIn small-12 cell" style="background-color:transparent;margin-top:0.5%;margin-bottom:2%;">
                <b><span style="font: 4vw Rubik Mono One;letter-spacing: -2px;color: #fff;text-shadow: 0 0px 0px, 0 0 2px, 0 0 1em #fff,  0 0 0.1em #fff, 0 10px 3px #000;">Jeopardy: Category 2</span></b></div>
            <?php endif; ?>

            <?php if((strpos($_SERVER['REQUEST_URI'],'JeopardyCategory3') !== false)):?>
 <div data-wow-duration="1.2s" class="wow fadeIn small-12 cell" style="background-color:transparent;margin-top:0.5%;margin-bottom:2%;">
                <b><span style="font: 4vw Rubik Mono One;letter-spacing: -2px;color: #fff;text-shadow: 0 0px 0px, 0 0 2px, 0 0 1em #fff,  0 0 0.1em #fff, 0 10px 3px #000;">Jeopardy: Category 3</span></b></div>
            <?php endif; ?>

            <?php if((strpos($_SERVER['REQUEST_URI'],'JeopardyCategory4') !== false)):?>
 <div data-wow-duration="1.2s" class="wow fadeIn small-12 cell" style="background-color:transparent;margin-top:0.5%;margin-bottom:2%;">
                <b><span style="font: 4vw Rubik Mono One;letter-spacing: -2px;color: #fff;text-shadow: 0 0px 0px, 0 0 2px, 0 0 1em #fff,  0 0 0.1em #fff, 0 10px 3px #000;">Jeopardy: Category 4</span></b></div>
            <?php endif; ?>

            <?php if((strpos($_SERVER['REQUEST_URI'],'JeopardyCategory5') !== false)):?>
 <div data-wow-duration="1.2s" class="wow fadeIn small-12 cell" style="background-color:transparent;margin-top:0.5%;margin-bottom:2%;">
                <b><span style="font: 4vw Rubik Mono One;letter-spacing: -2px;color: #fff;text-shadow: 0 0px 0px, 0 0 2px, 0 0 1em #fff,  0 0 0.1em #fff, 0 10px 3px #000;">Jeopardy: Category 5</span></b>
                
</div>
                
                 
            <?php endif; ?>
           


 <?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
  <div class="small-12 cell wow fadeIn qb" style="width:70%;">    

<h1 class="headi wow fadeIn"><b><?php echo $row['q_title'];?></b></h1>
<h2 class="sub wow fadeIn"> <?php if($row['q_jepcat']):?>
        "<?php echo $row['q_jepcat'];?>"<br>
        <?php endif; ?></h2>
        <div class="grid-x">
<div style="padding-left:15px;padding-right:5px;" class="small-6 cell"><a class="button expanded primary wow fadeIn" href="details.php?id=<?php echo $row['q_id'];?>" >QUESTION</a>  </div>
 <div style="padding-right:15px;padding-left:5px;" class="small-6 cell"><a class="button expanded success wow fadeIn" href="answers.php?id=<?php echo $row['q_id'];?>">ANSWER</a></div>
</div>
    

    
</div>


</div>



</div><br>
<?php endwhile;?>   <?php endif; ?>

<?php if((strpos($_SERVER['REQUEST_URI'],'JeopardyCategory') !== false)):?>
            <button class="warning button small wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.1s"
                        onclick="goBack()">
                        <h3>Back to Categories</h3>
                    </button>
            <?php endif; ?>

</div>
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

