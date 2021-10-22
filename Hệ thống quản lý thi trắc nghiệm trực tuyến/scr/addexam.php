<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Thêm bài thi</title>
  </head>
  <body>
      <h1 class = "mt-3"><center>Thêm bài thi</center></h1>

      <form action="addexam-act.php" method = "POST" >
            <div class = "container mb-3">
                Tên bài thi <input type="text" name = "exam-title" class = "form-control">
            </div>
            <div class = "container mb-3">
                Ngày thi <input type="date" name = "exam-date" class = "form-control">
            </div>
            <div class = "container mb-3">
                Thời gian làm bài <input type="number" name = "duration" class = "form-control">
            </div>
            <div class = "container mb-3">
                Số câu hỏi <input type="number" name = "total-question" class = "form-control">
            </div>
            <div class = "container mb-3">
                Điểm cho mỗi câu trả lời đúng <input type="number" name = "right-answer" class = "form-control">
            </div>
            <div class = "container mb-3">
                Ngày tạo bài thi <input type="date" name = "date-created" class = "form-control">
            </div>
            <div class = "container mb-3">
                Trạng thái 
                <select name="status" id="">
                    <option value="Pending">Pending</option>
                    <option value="Created">Creadted</option>
                    <option value="Started">Started</option>
                    <option value="Complete">Complete</option>
                </select>
            </div>
            <div class = "container mb-3">
                Mã truy cập bài thi: <input type="text" name = "exam-code">
            </div>
        
            <div class = "container d-grid gap-2 d-md-flex justify-content-md-end">
                <button class = "btn btn-success">Thêm bài thi</button>
            </div>
        </form>

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