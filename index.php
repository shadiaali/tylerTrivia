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
<div class="small-4 cell round"><a href="index.php?filter=JeopardyCategoryImages"><h1 style="margin-top:20px;"><b><span>Jeopardy</span></b>
</h1></a><Br><h3 class="ru">"<i>Categories</i>"</h3><br>
               <a href="round5rules.html"><H2 class="ru">Rules</h2></a></div>
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

<div>

<?php if((strpos($_SERVER['REQUEST_URI'],'JeopardyCategoryImages') !== false)): ?>

<?php 
	$results = getAll($tbl);
?>
<?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
<?php echo $row['q_jept1'];?>
<?php echo $row['q_jept2'];?>
<?php echo $row['q_jept3'];?>
<?php echo $row['q_jept4'];?>
<?php echo $row['q_jept5'];?>

<?php endwhile;?>






 <?php else: ?>


</div>


    <?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>

  <div class="small-12 cell wow fadeIn" style="margin:0 auto;margin-top:20px; margin-bottom:20px;background-color:rgba(121, 4, 4, 0.877);padding:10px;width:70%;">
<h1 class="headi wow fadeIn"><b><?php echo $row['q_title'];?></b></h1>
<h2 class="sub wow fadeIn"> <?php if($row['q_jepcat']):?>
        "<?php echo $row['q_jepcat'];?>"
        <?php endif; ?></h2>
<a class="button primary wow fadeIn" href="details.php?id=<?php echo $row['q_id'];?>" >QUESTION</a>
 <a class="button success wow fadeIn" href="answers.php?id=<?php echo $row['q_id'];?>">ANSWER</a>

    

    
</div>
</div>



</div>
<?php endwhile;?>   <?php endif; ?>



</div>

<script>
              new WOW().init();
              </script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>

