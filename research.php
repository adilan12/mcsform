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
            <h2>งานวิจัย</h2>
            <form action="" method = "POST">
                <div class="form-group">
                    <label>หมายเลขประจำตัวบุคลากร</label>
                    <input type="text" class="form-control" id="acadid" placeholder="กรุณากรอกข้อมูล" name="acadid">
                </div>

                <div class="form-group">
                    <label >เรื่อง</label>
                    <input type="text" class="form-control" id="topic" placeholder="กรุณากรอกข้อมูล" name="topic">
                </div>

                <div class="form-group">
                    <label >ประเภทวิจัย</label>
                    <select class='form-control' name='res-type'>
                        <option value=>กรุณาเลือก</option>
                        <option value=>เดี่ยว</option>
                        <option value=>ทีม</option>
                    </select>
                </div>

                <div class="form-group">
                    <label >สถานะ</label>
                    <select class='form-control' name='res-partc'>
                        <option value=>กรุณาเลือก</option>
                        <option value=>หัวหน้า</option>
                        <option value=>ผู้ร่วม</option>
                    </select>
                </div>

                <div class="form-group">
                    <label >สัดส่วนวิจัย</label>
                    <input type="text" class="form-control" id="res-ratio" placeholder="กรุณากรอกข้อมูล" name="res-ratio">
                </div>

                <div class="form-group">
                    <label >แหล่งทุน</label>
                    <input type="text" class="form-control" id="source-funds" placeholder="กรุณากรอกข้อมูล" name="source-funds">
                </div>

                <div class="form-group">
                    <label >จำนวนเงินทุน</label>
                    <input type="text" class="form-control" id="cap-amount" placeholder="กรุณากรอกข้อมูล" name="cap-amount">
                </div>

                <div class="form-group">
                    <label >ระยะเวลาดำเนินโครงการ (ระบุเป็นวัน)</label>
                    <input type="text" class="form-control" id="days-period" placeholder="กรุณากรอกข้อมูล" name="days-period">
                </div>
                
                <button type="submit" name="research" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
