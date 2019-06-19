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
    <link href="https://fonts.googleapis.com/css?family=Pangolin|Rock+Salt&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/2ce5f1a851.js"></script>

  </head>
  <body>

  <div class="off-canvas position-top" id="offCanvasTop1" data-off-canvas>

    <!-- Close button -->
    <button class="close-button" aria-label="Close menu" type="button" data-close>
      <span aria-hidden="true">&times;</span>
    </button>

  <div class="grid-container rounds">
<div class="grid-x grid-margin-x grid-margin-y">

             <div class="small-4 cell round">
               <a href="index.php?filter=One">Round 1</a><Br>
               <a href="round1/round-1-rules.html">Rules</a>

             </div>
             <div class="small-4 cell round"><a href="index.php?filter=Two">Round 2</a></div>
             <div class="small-4 cell round"><img src="cell.png" style="height:100px"></div>
          
    </div>

    <div class="grid-x grid-margin-x grid-margin-y">

<div class="small-4 cell round"><img src="cell.png" style="height:100px"></div>
<div class="small-4 cell round"><img src="cell.png" style="height:100px"></div>
<div class="small-4 cell round"><img src="cell.png" style="height:100px"></div>

</div>

</div>
  
  </div>



  <div class="off-canvas-content" data-off-canvas-content>
    <button type="button" class="button" data-toggle="offCanvasTop1">Open Game Panel</button>



    <?php echo $headerr ?>



<div class="grid-container">
<?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>

   <div class="grid-x grid-margin-x grid-margin-y">
   

   <div class="grid">
					<figure class="effect-bubba wow fadeIn">
						<img style="width:480px;" src="images/<?php echo $row['q_img'];?>" alt="img02"/>
						<figcaption>
							<h2><Span><?php echo $row['q_title'];?></span></h2>
              
               <p>
               <a class="button primary wow fadeIn" href="details.php?id=<?php echo $row['q_id'];?>" >QUESTION</a>
              <a class="button success wow fadeIn" href="answers.php?id=<?php echo $row['q_id'];?>">Answer</a>
</p>
    

							
						</figcaption>			
					</figure>
					
				</div>

       

</div>
<?php endwhile;?>   
</div>   

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

