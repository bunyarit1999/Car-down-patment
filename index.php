<?php
    require_once('car-down-payment.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Down Payment</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>
<body>

<div class="container"> <br>
<div class="card"> 
  <h5 class="card-header"> <i class="fa-solid fa-file-invoice-dollar"></i> เงินดาวน์ (บาท)</h5>
  <div class="card-body">

    <form action=" " method="GET">  

    <div class="form-group mb-3">
        <label for="price" class="form-label">ราคารถ </label>
        <input class="form-control" type="number" name="price" value="<?=$price?>" placeholder="กรุณาใส่ราคารถ ..." required>
    </div>

    <div class="form-group mb-3">
        <label for="down_baht" class="form-label">เงินดาวน์ (บาท) </label>
        <input class="form-control" type="number" name="down_baht" value="<?=$down_baht?>" placeholder="กรุณาใส่เงินดาวน์ ..." required>
    </div>

    <div class="form-group mb-3">
    <span>จำนวนงวด</span> 
        <select class="form-control" name="pernum" value="<?=$pernum?>" > 
            <option value="12">12 งวด (1 ปี)</option>
            <option value="24">24 งวด (2 ปี)</option>
            <option value="36">36 งวด (3 ปี)</option>
            <option value="48">48 งวด (4 ปี)</option>
            <option value="60">60 งวด (5 ปี)</option>
            <option value="72">72 งวด (6 ปี)</option>
        </select> 
    </div>

    <div class="form-group mb-3">
        <label for="interest" class="form-label">ดอกเบี้ย % ต่อปี </label>
        <input class="form-control" type="number" name="interest" value="<?=$interest?>" placeholder="กรุณาใส่ดอกเบี้ย % ต่อปี ..." required>
    </div> 

    <span>เงินดาวน์ % :    	   <?=$down_percent?> </span> <br>
    <span>จัดไฟแนนซ์ (บาท) :  <?=$price_remain?> </span> <br>
    <span>ค่างวด/เดือน (บาท) : <?=$pay_month?> </span>

    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-success">คำนวณเงินดาวน์</button>
        <button class="btn btn-danger" name="Delect">ล้างข้อมูล</button>
    </div>

    </form>
    
  </div>

</body>
</html>