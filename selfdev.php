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
            <h2>การพัฒนาตัวเอง</h2>
            <form action="" method = "POST">
                <div class="form-group">
                    <label >หมายเลขประจำตัวบุคลากร</label>
                    <input type="text" class="form-control" id="acadid" placeholder="กรุณากรอกข้อมูล" name="acadid">
                </div>

                <div class="form-group">
                    <label>หัวข้อการเข้าร่วมอบรม ประชุม สัมมนา</label>
                    <input type="text" class="form-control" id="sd-topic" placeholder="กรุณากรอกข้อมูล" name="sd-topic">
                </div>

                <div class="form-group">
                    <label>ช่วงเวลาที่อบรม</label>
                    <input type="text" class="form-control" id="sd-date" placeholder="กรุณากรอกข้อมูล" name="sd-date">
                </div>

                <div class="form-group">
                    <label>สถานที่</label>
                    <input type="text" class="form-control" id="sd-locat" placeholder="กรุณากรอกข้อมูล" name="sd-locat">
                </div>

                <div class="form-group">
                    <label>ผู้จัด</label>
                    <input type="text" class="form-control" id="sd-org" placeholder="กรุณากรอกข้อมูล" name="sd-org">
                </div>

                <div class="form-group">
                    <label>งบประมาณที่ใช้</label>
                    <input type="text" class="form-control" id="sd-funds" placeholder="กรุณากรอกข้อมูล" name="sd-funds">
                </div>

                <button type="submit" name="selfdev" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
