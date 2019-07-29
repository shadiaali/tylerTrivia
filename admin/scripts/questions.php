<?php

function addQuestion($title, $question, $answer, $op1, $op2, $op3, $op4, $op5, $clipanswer, $vid, $mq1, $mq2, $mq3, $mq4, $mq5, $ma1, $ma2, $ma3, $ma4, $ma5, $mia1, $mia2, $mia3, $mia4, $mia5, $mia6, $mia7, $songhint, $song, $songanswer, $jepcat, $jepq1, $jepa1, $jepq2, $jepa2, $jepsong, $jepq3, $jepa3, $jepimg, $fq, $fqa, $fop1, $fop2, $fop3, $fop4, $fop5, $fanswer, $fvid, $faq, $faudio, $faanswer, $clipquestion, $mainq, $finalq, $jept1, $jept2, $jept3, $jept4, $jept5, $cat) {
    try {
        include 'connect.php';

       


        $target_path2 = '../images/' . $song['name'];
        !move_uploaded_file($song['tmp_name'], $target_path2); 

        $target_path3 = '../images/' . $jepsong['name'];
        !move_uploaded_file($jepsong['tmp_name'], $target_path3); 

        $target_path4 = '../images/' . $jepimg['name'];
        !move_uploaded_file($jepimg['tmp_name'], $target_path4); 

        

        $target_path5 = '../images/' . $faudio['name'];
        !move_uploaded_file($faudio['tmp_name'], $target_path5); 

        $target_path6 = '../images/' . $jept1['name'];
        !move_uploaded_file($jept1['tmp_name'], $target_path6); 

        $target_path7 = '../images/' . $jept2['name'];
        !move_uploaded_file($jept2['tmp_name'], $target_path7); 

        $target_path8 = '../images/' . $jept3['name'];
        !move_uploaded_file($jept3['tmp_name'], $target_path8); 

        $target_path9 = '../images/' . $jept4['name'];
        !move_uploaded_file($jept4['tmp_name'], $target_path9); 

        $target_path10 = '../images/' . $jept5['name'];
        !move_uploaded_file($jept5['tmp_name'], $target_path10); 
    
       
        $insert_prod_query = 'INSERT INTO tbl_questions(q_title, q_question, q_answer,q_op1, q_op2, q_op3, q_op4, q_op5, q_clipanswer, q_vid, q_mq1, q_mq2, q_mq3, q_mq4, q_mq5, q_ma1, q_ma2, q_ma3, q_ma4, q_ma5, q_mia1, q_mia2, q_mia3, q_mia4, q_mia5, q_mia6, q_mia7, q_songhint, q_song, q_songanswer, q_jepcat, q_jepq1, q_jepa1, q_jepq2, q_jepa2, q_jepsong, q_jepq3, q_jepa3, q_jepimg, q_fq, q_fqa, q_fop1, q_fop2, q_fop3, q_fop4, q_fop5, q_fanswer, q_fvid, q_faq, q_faudio, q_faanswer, q_clipquestion, q_mainq, q_finalq, q_jept1, q_jept2, q_jept3, q_jept4, q_jept5)';
        $insert_prod_query .= ' VALUES(:title, :question, :answer, :op1, :op2, :op3, :op4, :op5, :clipanswer, :vid, :mq1, :mq2, :mq3, :mq4, :mq5, :ma1, :ma2, :ma3, :ma4, :ma5, :mia1, :mia2, :mia3, :mia4, :mia5, :mia6, :mia7, :songhint, :song, :songanswer, :jepcat, :jepq1, :jepa1, :jepq2, :jepa2, :jepsong, :jepq3, :jepa3, :jepimg, :fq, :fqa, :fop1, :fop2, :fop3, :fop4, :fop5, :fanswer, :fvid, :faq, :faudio, :faanswer, :clipquestion, :mainq, :finalq, :jept1, :jept2, :jept3, :jept4, :jept5)';
         $insert_prod   = $pdo->prepare($insert_prod_query);
        $insert_result = $insert_prod->execute(
            array(
                ':title'      => $title,
                ':question'      => $question,
                ':answer'      => $answer,
                ':op1'      => $op1,
                ':op2'      => $op2,
                ':op3'      => $op3,
                ':op4'      => $op4,
                ':op5'      => $op5,
                ':clipanswer'      => $clipanswer,
                ':vid'      => $vid,
                ':mq1'      => $mq1,
                ':mq2'      => $mq2,
                ':mq3'      => $mq3,
                ':mq4'      => $mq4,
                ':mq5'      => $mq5,
                ':ma1'      => $ma1,
                ':ma2'      => $ma2,
                ':ma3'      => $ma3,
                ':ma4'      => $ma4,
                ':ma5'      => $ma5,
                ':mia1'      => $mia1,
                ':mia2'      => $mia2,
                ':mia3'      => $mia3,
                ':mia4'      => $mia4,
                ':mia5'      => $mia5,
                ':mia6'      => $mia6,
                ':mia7'      => $mia7,
                ':songhint'      => $songhint,
                ':song'       => $song['name'],
                ':songanswer'      => $songanswer,
                ':jepcat'      => $jepcat,
                ':jepq1'      => $jepq1,
                ':jepa1'      => $jepa1,
                ':jepq2'      => $jepq2,
                ':jepa2'      => $jepa2,
                ':jepsong'       => $jepsong['name'],
                ':jepq3'      => $jepq3,
                ':jepa3'      => $jepa3,
                ':jepimg'       => $jepimg['name'],
                ':fq'      => $fq,
                ':fqa'      => $fqa,
                ':fop1'      => $fop1,
                ':fop2'      => $fop2,
                ':fop3'      => $fop3,
                ':fop4'      => $fop4,
                ':fop5'      => $fop5,
                ':fanswer'      => $fanswer,
                ':fvid'      => $fvid,
                ':faq'      => $faq,
                ':faudio'       => $faudio['name'],
                ':faanswer'      => $faanswer,
                ':clipquestion'      => $clipquestion,
                ':mainq'      => $mainq,
                ':finalq'      => $finalq,
                ':jept1'       => $jept1['name'],
                ':jept2'       => $jept2['name'],
                ':jept3'       => $jept3['name'],
                ':jept4'       => $jept4['name'],
                ':jept5'       => $jept5['name'],


 
            )
        );

        if (!$insert_result) {
            throw new Exception('Failed to insert');
        }

        $last_id = $pdo->lastInsertId();
        $insert_cat_query = 'INSERT INTO tbl_question_category (q_id, cat_id) VALUES ("'. $last_id.'", :cat_id)';
        $insert_cat       = $pdo->prepare($insert_cat_query);
        $insert_cat->execute(
            array(
                ':cat_id'  => $cat,
            )
        );

        header("Location: index.php");

    } catch (Exception $e) {
        $error = $e->getMessage();
        return $error;
    }
}

function editQuestion($title, $question, $answer, $op1, $op2, $op3, $op4, $op5, $clipanswer, $vid, $mq1, $mq2, $mq3, $mq4, $mq5, $ma1, $ma2, $ma3, $ma4, $ma5, $mia1, $mia2, $mia3, $mia4, $mia5, $mia6, $mia7, $songhint,  $songanswer, $jepcat, $jepq1, $jepa1, $jepq2, $jepa2,  $jepq3, $jepa3,  $fq, $fqa, $fop1, $fop2, $fop3, $fop4, $fop5, $fanswer, $fvid, $faq,  $faanswer, $clipquestion, $mainq, $finalq,  $category) {
      
      try {
          include 'connect.php';
        
        if (isset($_GET['update_id'])) {
          $edit_cat = $_GET['update_id'];
        }

         

        
            $query = "UPDATE tbl_questions SET q_title = :title, q_question = :question, q_answer = :answer, q_op1 = :op1, q_op2 = :op2, q_op3 = :op3, q_op4 = :op4, q_op5 = :op5, q_clipanswer = :clipanswer, q_vid = :vid, q_mq1 = :mq1, q_mq2 = :mq2, q_mq3 = :mq3, q_mq4 = :mq4, q_mq5 = :mq5, q_ma1 = :ma1, q_ma2 = :ma2, q_ma3 = :ma3, q_ma4 = :ma4, q_ma5 = :ma5, q_mia1 = :mia1, q_mia2 = :mia2, q_mia3 = :mia3, q_mia4 = :mia4, q_mia5 = :mia5, q_mia6 = :mia6, q_mia7 = :mia7, q_songhint = :songhint,  q_songanswer = :songanswer, q_jepcat = :jepcat, q_jepq1 = :jepq1, q_jepa1 = :jepa1, q_jepq2 = :jepq2, q_jepa2 = :jepa2,  q_jepq3 = :jepq3, q_jepa3 = :jepa3,  q_fq = :fq, q_fqa = :fqa, q_fop1 = :fop1, q_fop2 = :fop2, q_fop3 = :fop3, q_fop4 = :fop4, q_fop5 = :fop5, q_fanswer = :fanswer, q_fvid = :fvid, q_faq = :faq,  q_faanswer = :faanswer, q_clipquestion = :clipquestion, q_mainq = :mainq, q_finalq = :finalq WHERE q_id = :question_id";

            $edit_product = $pdo->prepare($query);
            $edit_product->execute(
            array(
                ':title'      => $title,
                ':question'      => $question,
                ':answer'      => $answer,
                ':op1'      => $op1,
                ':op2'      => $op2,
                ':op3'      => $op3,
                ':op4'      => $op4,
                ':op5'      => $op5,
                ':clipanswer'      => $clipanswer,
                ':vid'      => $vid,
                ':mq1'      => $mq1,
                ':mq2'      => $mq2,
                ':mq3'      => $mq3,
                ':mq4'      => $mq4,
                ':mq5'      => $mq5,
                ':ma1'      => $ma1,
                ':ma2'      => $ma2,
                ':ma3'      => $ma3,
                ':ma4'      => $ma4,
                ':ma5'      => $ma5,
                ':mia1'      => $mia1,
                ':mia2'      => $mia2,
                ':mia3'      => $mia3,
                ':mia4'      => $mia4,
                ':mia5'      => $mia5,
                ':mia6'      => $mia6,
                ':mia7'      => $mia7,
                ':songhint'      => $songhint,
                ':songanswer'      => $songanswer,
                ':jepcat'      => $jepcat,
                ':jepq1'      => $jepq1,
                ':jepa1'      => $jepa1,
                ':jepq2'      => $jepq2,
                ':jepa2'      => $jepa2,
                ':jepq3'      => $jepq3,
                ':jepa3'      => $jepa3,
                ':fq'      => $fq,
                ':fqa'      => $fqa,
                ':fop1'      => $fop1,
                ':fop2'      => $fop2,
                ':fop3'      => $fop3,
                ':fop4'      => $fop4,
                ':fop5'      => $fop5,
                ':fanswer'      => $fanswer,
                ':fvid'      => $fvid,
                ':faq'      => $faq,
                ':faanswer'      => $faanswer,
                ':clipquestion'      => $clipquestion,
                ':mainq'      => $mainq,
                ':finalq'      => $finalq,
                

                ':question_id' => $edit_cat,
            )
            );

        

    if($category){

        $change_cat_query = "UPDATE tbl_question_category SET cat_id = :cat_id WHERE q_id = :question_id";
        $change_cat = $pdo->prepare($change_cat_query);
        $change_cat->execute(
            array(
                ':question_id' => $edit_cat,
                ':cat_id' => $category
            )
        );
        if (!$change_cat) {
            throw new Exception('Failed to change');
        }
    }

        header("Location:admin_editquestion.php");

    } catch (Exception $e) {
        $error = $e->getMessage();
        return $error;
    }

    header("Location:admin_editquestion.php");
}            

function deleteProduct($id){

	include('connect.php');
	$delete_prod_query = 'DELETE FROM tbl_questions WHERE q_id = :id';
	$delete_prod = $pdo->prepare($delete_prod_query);
	$delete_prod->execute(
		array(
			':id'=>$id
		)
    );

	if($delete_prod){
		redirect_to('../admin_editquestion.php');
	}else{
		$message = 'Not deleted';
		return $message;
	}
}
