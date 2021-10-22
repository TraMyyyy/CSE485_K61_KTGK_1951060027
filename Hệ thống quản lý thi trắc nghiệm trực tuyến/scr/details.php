<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Chi tiết</title>
  </head>
  <body>
    <h1 class = "mt-3"><center>Chi tiết bài thi</center></h1>
    <?php
      $id = $_GET['id'];
      $conn = mysqli_connect("localhost","root","12345","exam");
      if(!$conn){
          header ('Location: error.php');
      }

      $sql = "SELECT * FROM tb_exam WHERE id ='$id'";
      $result = mysqli_query($conn,$sql);

      if($result == true){
        while($row = mysqli_fetch_assoc($result)){
          
          echo '<div class = "container mb-3">ID <input type="text" name = "id" class = "form-control" value="'.$row['id'].'" readonly></div>';
          echo '<div class = "container mb-3">Tên bài thi<input type="text" name = "exam-title" class = "form-control" value="'.$row['exam_title'].'"></div>';
          echo '<div class = "container mb-3">Ngày thi<input type="date" name = "exam-date" class = "form-control" value="'.$row['exam_datetime'].'"></div>';
          echo '<div class = "container mb-3">Thời gian làm bài<input type="number" name = "duration" class = "form-control" value="'.$row['duration'].'"></div>';
          echo '<div class = "container mb-3">Số câu hỏi<input type="text" name = "total-question" class = "form-control" value="'.$row['total_question'].'"></div>';
          echo '<div class = "container mb-3">Điểm cho mỗi câu trả lời đúng<input type="number" name = "right-answer" class = "form-control" value="'.$row['marks_per_right_answer'].'"></div>';
          echo '<div class = "container mb-3">Ngày tạo bài thi<input type="date" name = "date-created" class = "form-control" value="'.$row['created_on'].'"></div>';
          echo '<div class = "container mb-3">
                Trạng thái ';
          echo '<select name="offices" id="">';
                    $sql = "SELECT status FROM tb_exam WHERE id = '$id'";
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<option value = "'.$row['status'].'">'.$row['status'].'</option>';
                            echo '<option value="Pending">Pending</option>
                            <option value="Created">Creadted</option>
                            <option value="Started">Started</option>
                            <option value="Complete">Complete</option>';
                        }
                    }
                echo '</select>';
    
            echo'</div>';
            echo '<div class = "container mb-3">Mã truy cập bài thi<input type="text" name = "exam-code" class = "form-control" value="'.$row['exam_code'].'"></div>';
          }
      }
        echo '<div class = "container d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                        <a href="change.php?id='.$id.'" class = "btn btn-warning" method = "GET">Sửa bài thi</a>
                        <a href="delete.php?id='.$id.'" class = "btn btn-danger" method = "GET">Xóa bài thi</a>
                    </div>';
            
    ?>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>