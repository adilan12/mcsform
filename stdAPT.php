<!DOCTYPE html>
<html lang="en" >
<?php
        include "head.php";
    ?>
<body>
<!-- partial:index.partial.html -->
<div id="viewport">
    <?php
        include "sidebar.php";
    ?>
    <!-- Content -->    
    <div id="content">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
                        </a>
                    </li>
                    <li><a href="#">Test User</a></li>
                </ul>
            </div>
        </nav>
        <!-- FORM -->
        <div class="container">
            <h2>การฝึกงาน</h2>
            <form action="cust_operations.php" method = "POST">
                <div class="form-group">
                    <label for="STDID">รหัสนักศึกษา</label>
                    <input type="text" class="form-control" id="stdid" placeholder="กรุณากรอกข้อมูล" name="stdid">
                </div>

                <div class="form-group">
                    <label >สถานที่ฝึกงาน</label>
                    <input type="text" class="form-control" id="apt-locat" placeholder="กรุณากรอกข้อมูล" name="apt-locat">
                </div>
                
                <button type="submit" name="stdapt" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
