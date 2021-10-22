<?php
    $id = $_POST['id'];
    $title = $_POST['exam-title'];
    $examdate = $_POST['exam-date'];
    $duration = $_POST['duration'];
    $totalquestion = $_POST['total-question'];
    $answer = $_POST['right-answer'];
    $date_created = $_POST['date-created'];
    $status = $_POST['status'];
    $exam_code = $_POST['exam-code'];

    $conn = mysqli_connect("localhost","root","12345","exam");
    if(!$conn){
        header ('Location: error.php');
    }

    $sql = "INSERT INTO tb_exam(exam_title, exam_datetime,duration,total_question,marks_per_right_answer,created_on,status,exam_code) 
            VALUES ('$title','$examdate','$duration','$totalquestion','$answer','$date_created','$status','$exam_code')";
    $result = mysqli_query($conn, $sql);
    if($result == true){
        header ('Location: index.php');
    }else{
        header ('Location: error.php');
    }

?>