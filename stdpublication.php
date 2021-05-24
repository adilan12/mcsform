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
            <h2>การตีพิมพ์วารสาร</h2>
            <form action="cust_operations.php" method = "POST">
                <div class="form-group">
                    <label for="STDID">รหัสนักศึกษา</label>
                    <input type="text" class="form-control" id="stdid" placeholder="กรุณากรอกข้อมูล" name="stdid">
                </div>

                <div class="form-group">
                    <label for="ENname">ชื่อเรื่อง</label>
                    <input type="text" class="form-control" id="pub-name" placeholder="กรุณากรอกข้อมูล" name="pub-name">
                </div>

                <div class="form-group">
                    <label for="ENname">ปีที่พิมพ์</label>
                    <input type="text" class="form-control" id="pub-year" placeholder="กรุณากรอกข้อมูล" name="pub-year">
                </div>

                <div class="form-group">
                    <label for="ENname">ชื่อวารสาร</label>
                    <input type="text" class="form-control" id="joutnal-name" placeholder="กรุณากรอกข้อมูล" name="joutnal-name">
                </div>

                <div class="form-group">
                    <label for="ENname">ฉบับที่</label>
                    <input type="text" class="form-control" id="joutnal-no" placeholder="กรุณากรอกข้อมูล" name="joutnal-no">
                </div>

                <div class="form-group">
                    <label for="ENname">หน้าที่</label>
                    <input type="text" class="form-control" id="joutnal-page" placeholder="กรุณากรอกข้อมูล" name="joutnal-page">
                </div>

                <div class="form-group">
                    <label for="ENname">ฐานวารสาร</label>
                    <input type="text" class="form-control" id="joutnal-based" placeholder="กรุณากรอกข้อมูล" name="joutnal-based">
                </div>

                <div class="form-group">
                    <label for="ENname">ไฟล์วารสาร</label>
                    <input type="file" class="form-file" id="fileUpload"  name="fileUpload">
                </div>
                
                <button type="submit" name="stdpublication" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
