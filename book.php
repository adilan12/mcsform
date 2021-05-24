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
            <h2>หนังสือ ตำรา คู่มือปฏิบัติงาน</h2>
            <form action="" method = "POST">
                <div class="form-group">
                    <label >หมายเลขประจำตัวบุคลากร</label>
                    <input type="text" class="form-control" id="acadid" placeholder="กรุณากรอกข้อมูล" name="acadid">
                </div>

                <div class="form-group">
                    <label >ชื่อหนังสือ/ตำรา</label>
                    <input type="text" class="form-control" id="name" placeholder="กรุณากรอกข้อมูล" name="name">
                </div>

                <div class="form-group">
                    <label >ปีที่ตีพิมพ์</label>
                    <input type="text" class="form-control" id="printed" placeholder="กรุณากรอกข้อมูล" name="printed">
                </div>

                <div class="form-group">
                    <label >โรงพิมพ์</label>
                    <input type="text" class="form-control" id="fac" placeholder="กรุณากรอกข้อมูล" name="fac">
                </div>

                <div class="form-group">
                    <label >แหล่งทุน</label>
                    <input type="text" class="form-control" id="funds" placeholder="กรุณากรอกข้อมูล" name="funds">
                </div>

                <button type="submit" name="book" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
