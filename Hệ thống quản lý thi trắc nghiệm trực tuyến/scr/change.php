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

    $sql = 'UPDATE tb_exam SET exam_title = "'.$title.'",exam_datetime="'$examdate'",duration="'$duration'",total_question="'$totalquestion'",
    marks_per_right_answer="'$answer'",created_on"'=$date_created'",status="'$status'",exam_code="'$exam_code'") WHERE id = "'$id'"';
    
    echo $sql;
    // $result = mysqli_query($conn, $sql);
    // if($result == true){
    //     header ('Location: index.php');
    // }else{
    //     header ('Location: error.php');
    // }

?>