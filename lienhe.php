<!-- <?php include 'mail.php';?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <form action="mail.php" method="post"> 
        <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control bg-light" name="email" placeholder="Nhập email của bạn">
        </div>
        <div class="mb-3">
        <label class="form-label">Nội dung liên hệ</label>
        <textarea class="form-control bg-light" name="noidunglienhe" rows="5"></textarea>
        </div>  
        <div class="mb-3">
            <button name="btn" type="submit" class="btn btn-primary">GỬI LIÊN HỆ</button>
        </div>
        </form> 
    </div>
</body>
</html>

 

