<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Danh sách</title>
  </head>
  <body>
    <h1><center>Danh sách bài thi</center></h1>

    <div class = "container">
        <a href="addexam.php" class = "btn btn-success">Thêm bài thi</a>
    </div>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên bài thi</th>
        <th scope="col">Ngày thi</th>
        <th scope="col">Thời gian làm bài</th>
        <th scope="col">Số câu hỏi</th>
        <th scope="col">Điểm cho mỗi câu trả lời đúng</th>
        <th scope="col">Ngày tạo bài thi</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $conn = mysqli_connect("localhost","root","12345","exam");
            if(!$conn){
                header ('Location: error.php');
            }

            $sql = "SELECT * FROM tb_exam";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                echo '<tr>';
                echo  '<th scope="row">'.$row['id'].'</th>';
                echo  '<td>'.$row['exam_title'].'</td>';
                echo  '<td>'.$row['exam_datetime'].'</td>';
                echo  '<td>'.$row['duration'].'</td>';
                echo  '<td>'.$row['total_question'].'</td>';
                echo  '<td>'.$row['marks_per_right_answer'].'</td>';
                echo  '<td>'.$row['created_on'].'</td>';
                echo  '<td>'.$row['status'].'</td>';
                echo  '<td>'.$row['exam_code'].'</td>';
                echo   '<td><a href="details.php?id='.$row["id"].'" class = "btn btn-warning" method = "GET">Chi tiết</a></td>';
                echo   '</tr>';
                }
            }
        ?>
    </tbody>
    </table>
    <!-- Kết thúc danh sách nhân viên -->

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