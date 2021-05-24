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
            <h2>กิจกรรมนักศึกษา</h2>
            <form action="" method = "POST">
                <div class="form-group">
                    <label for="STDID">รหัสนักศึกษา</label>
                    <input type="text" class="form-control" id="stdid" placeholder="กรุณากรอกข้อมูล" name="stdid">
                </div>

                <div class="form-group">
                    <label >ประเภทกิจกรรม</label>
                    <select class='form-control' name='activity-type'>
                        <option value=>กรุณาเลือก</option>
                        <option value=>มหาวิทยาลัย</option>
                        <option value=>คณะ</option>
                        <option value=>สาขาวิชา</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>ชื่อกิจกรรม</label>
                    <input type="text" class="form-control" id="activity-name" placeholder="กรุณากรอกข้อมูล" name="activity-name">
                </div>

                <div class="form-group">
                    <label>ระยะเวลาเข้าร่วม</label>
                    <input type="text" class="form-control" id="activity-time" placeholder="กรุณากรอกข้อมูล" name="activity-time">
                </div>
                
                <button type="submit" name="stdactivity" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
