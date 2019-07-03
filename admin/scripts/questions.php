<?php

function addQuestion($pic, $title, $question, $answer, $cat) {
    try {
        include 'connect.php';

        

        $target_path = '../images/' . $pic['name'];
        !move_uploaded_file($pic['tmp_name'], $target_path); 

        $insert_prod_query = 'INSERT INTO tbl_questions(q_img, q_title, q_question, q_answer)';
        $insert_prod_query .= ' VALUES(:pic, :title, :question, :answer)';
         $insert_prod   = $pdo->prepare($insert_prod_query);
        $insert_result = $insert_prod->execute(
            array(
                ':pic'       => $pic['name'],
                ':title'      => $title,
                ':question'      => $question,
                ':answer'      => $answer,
                
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

function editQuestion($pic, $title, $question, $ansr, $category) {
      
      try {
          include 'connect.php';
        
        if (isset($_GET['update_id'])) {
          $edit_cat = $_GET['update_id'];
        }

        if($pic){
            $question_image_type = $pic['type'];

            $file_type      = pathinfo($pic['name'], PATHINFO_EXTENSION);
            $accepted_types = array('gif', 'jpg', 'jpeg', 'png');
            if (!in_array($file_type, $accepted_types)) {
                throw new Exception('File type not supported');
            }

            $target_path = '../images/' . $pic['name'];
            if (!move_uploaded_file($pic['tmp_name'], $target_path)) {
                throw new Exception('Failed to upload');
            }

            $query = "UPDATE tbl_questions SET q_title = :title, q_question = :question, q_img = :question_image, q_answer = :question_answer; WHERE q_id = :question_id";

            $edit_product = $pdo->prepare($query);
            $edit_product->execute(
            array(
                ':question_image' => $pic,
                ':question' => $question,
                ':title' => $title,
                ':question_answer' => $ansr,
                ':question_id' => $edit_cat,
            )
            );


            if (!$edit_product) {
            throw new Exception('Failed to update');
            }

        } else {
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

        }

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
