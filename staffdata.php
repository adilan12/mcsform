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
            <h2>ข้อมูลบุคลากร</h2>
            <form action="" method = "POST">
                <div class="form-group">
                    <label for="THname">หมายเลขประจำตัวบุคลากร</label>
                    <input type="text" class="form-control" id="acadid" placeholder="กรุณากรอกชื่อ-สกุล" name="acadid">
                </div>

                <div class="form-group">
                    <label for="title">ประเภทบุคลากร</label>
                    <select class='form-control' name='acatype'>
                        <option value=>กรุณาเลือก</option>
                        <option value=>อาจารย์</option>
                        <option value=>เจ้าหน้าที่</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="title">ประเภทกลุ่มวิชา</label>
                    <select class='form-control' name='section'>
                        <option value=>กรุณาเลือก</option>
                        <option value=>คณิตศาสตร์</option>
                        <option value=>สถิติ</option>
                        <option value=>คอมพิวเตอร์</option>
                        <option value=>ฝ่ายสนับสนุน</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="THname">ชื่อ-สกุล (ไทย)</label>
                    <input type="text" class="form-control" id="name-th" placeholder="กรุณากรอกชื่อ-สกุล" name="name-th">
                </div>

                <div class="form-group">
                    <label for="ENname">ชื่อ-สกุล (อังกฤษ)</label>
                    <input type="text" class="form-control" id="name-en" placeholder="กรุณากรอกชื่อ-สกุล" name="name-en">
                </div>

                <div class="form-group">
                    <label for="pos">ตำแหน่งทางวิชาการ</label>
                    <select class='form-control' name='pos_tid'>
                        <option value=>กรุณาเลือก</option>
                        <option value=>ผู้ช่วยศาสตรจารย์</option>
                        <option value=>รองศาสตรจารย์</option>
                        <option value=>ศาสตรจารย์</option>
                        <option value=>ไม่มี</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="title">คำนำหน้า</label>
                    <select class='form-control' name='title'>
                        <option value=>กรุณาเลือก</option>
                        <option value=>ดร.</option>
                        <option value=>ไม่มี</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="กรุณากรอก email" name="email">
                </div>
                
                <button type="submit" name="reg" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
