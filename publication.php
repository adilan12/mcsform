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
            <h2>งานตีพิมพ์</h2>
            <form action="" method = "POST">
                <div class="form-group">
                    <label >หมายเลขประจำตัวบุคลากร</label>
                    <input type="text" class="form-control" id="acadid" placeholder="กรุณากรอกข้อมูล" name="acadid">
                </div>

                <div class="form-group">
                    <label >ชื่อเรื่อง</label>
                    <input type="text" class="form-control" id="pub-name" placeholder="กรุณากรอกข้อมูล" name="pub-name">
                </div>

                <div class="form-group">
                    <label >ปีที่พิมพ์</label>
                    <input type="text" class="form-control" id="pub-year" placeholder="กรุณากรอกข้อมูล" name="pub-year">
                </div>

                <div class="form-group">
                    <label >ชื่อวารสาร</label>
                    <input type="text" class="form-control" id="journal-name" placeholder="กรุณากรอกข้อมูล" name="journal-name">
                </div>

                <div class="form-group">
                    <label >ฉบับที่</label>
                    <input type="text" class="form-control" id="journal-no" placeholder="กรุณากรอกข้อมูล" name="journal-no">
                </div>

                <div class="form-group">
                    <label >หน้าที่</label>
                    <input type="text" class="form-control" id="journal-page" placeholder="กรุณากรอกข้อมูล" name="journal-page">
                </div>

                <div class="form-group">
                    <label >ฐานวารสาร</label>
                    <input type="text" class="form-control" id="journal-based" placeholder="กรุณากรอกข้อมูล" name="journal-based">
                </div>

                <div class="form-group">
                    <label>ไฟล์วารสาร</label>
                    <input type="file" class="form-file" id="fileUpload"  name="fileUpload">
                </div>
                
                <button type="submit" name="publication" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
