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
            <h2>การรับทุน</h2>
            <form action="cust_operations.php" method = "POST">
                <div class="form-group">
                    <label for="STDID">รหัสนักศึกษา</label>
                    <input type="text" class="form-control" id="stdid" placeholder="กรุณากรอกข้อมูล" name="stdid">
                </div>


                <div class="form-group">
                    <label for="source_funds">แหล่งทุน</label>
                    <input type="text" class="form-control" id="source_funds" placeholder="กรุณากรอกข้อมูล" name="source_funds">
                </div>

                <div class="form-group">
                    <label for="funds_value">มูลค่าทุน</label>
                    <input type="text" class="form-control" id="funds_value" placeholder="กรุณากรอกข้อมูล" name="funds_value">
                </div>

                <div class="form-group">
                    <label for="funds_year">จำนวนปีที่ได้รับทุน</label>
                    <input type="text" class="form-control" id="funds_year" placeholder="กรุณากรอกข้อมูล" name="funds_year">
                </div>

                <button type="submit" name="stdfunds" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
