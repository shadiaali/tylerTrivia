<?php

function addQuestion($pic, $title, $question, $answer, $op1, $op2, $op3, $op4, $op5, $clipanswer, $vid, $mq1, $mq2, $mq3, $mq4, $mq5, $ma1, $ma2, $ma3, $ma4, $ma5, $mia1, $mia2, $mia3, $mia4, $mia5, $mia6, $mia7, $songhint, $song, $songanswer, $jepcat, $jepq1, $jepa1, $jepq2, $jepa2, $jepsong, $jepq3, $jepa3, $jepimg, $fq, $fqa, $fop1, $fop2, $fop3, $fop4, $fop5, $fanswer, $fvid, $faq, $faudio, $faanswer, $cat) {
    try {
        include 'connect.php';

       

        $target_path = '../images/' . $pic['name'];
        !move_uploaded_file($pic['tmp_name'], $target_path); 

        $target_path2 = '../images/' . $song['name'];
        !move_uploaded_file($song['tmp_name'], $target_path2); 

        $target_path3 = '../images/' . $jepsong['name'];
        !move_uploaded_file($jepsong['tmp_name'], $target_path3); 

        $target_path4 = '../images/' . $jepimg['name'];
        !move_uploaded_file($jepimg['tmp_name'], $target_path4); 

        

        $target_path5 = '../images/' . $faudio['name'];
        !move_uploaded_file($faudio['tmp_name'], $target_path5); 
       
        $insert_prod_query = 'INSERT INTO tbl_questions(q_img, q_title, q_question, q_answer,q_op1, q_op2, q_op3, q_op4, q_op5, q_clipanswer, q_vid, q_mq1, q_mq2, q_mq3, q_mq4, q_mq5, q_ma1, q_ma2, q_ma3, q_ma4, q_ma5, q_mia1, q_mia2, q_mia3, q_mia4, q_mia5, q_mia6, q_mia7, q_songhint, q_song, q_songanswer, q_jepcat, q_jepq1, q_jepa1, q_jepq2, q_jepa2, q_jepsong, q_jepq3, q_jepa3, q_jepimg, q_fq, q_fqa, q_fop1, q_fop2, q_fop3, q_fop4, q_fop5, q_fanswer, q_fvid, q_faq, q_faudio, q_faanswer)';
        $insert_prod_query .= ' VALUES(:pic, :title, :question, :answer, :op1, :op2, :op3, :op4, :op5, :clipanswer, :vid, :mq1, :mq2, :mq3, :mq4, :mq5, :ma1, :ma2, :ma3, :ma4, :ma5, :mia1, :mia2, :mia3, :mia4, :mia5, :mia6, :mia7, :songhint, :song, :songanswer, :jepcat, :jepq1, :jepa1, :jepq2, :jepa2, :jepsong, :jepq3, :jepa3, :jepimg, :fq, :fqa, :fop1, :fop2, :fop3, :fop4, :fop5, :fanswer, :fvid, :faq, :faudio, :faanswer)';
         $insert_prod   = $pdo->prepare($insert_prod_query);
        $insert_result = $insert_prod->execute(
            array(
                ':pic'       => $pic['name'],
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

function editQuestion($title, $question, $ansr, $category) {
      
      try {
          include 'connect.php';
        
        if (isset($_GET['update_id'])) {
          $edit_cat = $_GET['update_id'];
        }

        
            $query = "UPDATE tbl_questions SET q_title = :title, q_question = :question, q_answer = :question_answer WHERE q_id = :question_id";

            $edit_product = $pdo->prepare($query);
            $edit_product->execute(
            array(
                ':question' => $question,
                ':title' => $title,
                ':question_answer' => $ansr,
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
