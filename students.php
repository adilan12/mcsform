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
            <h2>ข้อมูลนักศึกษา</h2>
            <form action="cust_operations.php" method = "POST">
                <div class="form-group">
                    <label for="stdid">รหัสนักศึกษา</label>
                    <input type="text" class="form-control" id="stdid" placeholder="กรุณากรอกรหัสนักศึกษา" name="stdid">
                </div>

                <div class="form-group">
                    <label>ประเภทนักศึกษา</label>
                    <select class='form-control' name='std-type'>
                        <option value=>กรุณาเลือก</option>
                        <option value=>Normal</option>
                        <option value=>Extention</option>
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
                    <label for="Major">วิชาเอก-โท</label>
                    <input type="text" class="form-control" id="major" placeholder="กรุณากรอกวิชาเอก-โท" name="major">
                </div>

                <div class="form-group">
                    <label for="grad_type">ระดับการศึกษา</label>
                    <input type="text" class="form-control" id="grad-type" placeholder="กรุณากรอกระดับการศึกษา" name="grad-type">
                </div>

                <div class="form-group">
                    <label for="Advs">อาจารย์ที่ปรึกษา</label>
                    <input type="text" class="form-control" id="advs" placeholder="กรุณากรอกอาจารย์ที่ปรึกษา" name="advs">
                </div>

                <div class="form-group">
                    <label for="start_edu">วันที่เข้าศึกษา</label>
                    <input type="text" class="form-control" id="start_edu" placeholder="กรุณากรอกวันที่เข้าศึกษา" name="start_edu">
                </div>

                <div class="form-group">
                    <label for="end_edu">วันที่จบการศึกษา</label>
                    <input type="text" class="form-control" id="end-edu" placeholder="กรุณากรอกวันที่จบการศึกษา" name="end-edu">
                </div>

                <div class="form-group">
                    <label for="edu_none">ประวัติการเทียบโอน</label>
                    <input type="text" class="form-control" id="edu-none" placeholder="กรุณากรอกประวัติการเทียบโอน" name="edu-none">
                </div>
                
                <button type="submit" name="students" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
