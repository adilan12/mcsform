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
            <h2>งานวิจัยนักศึกษา</h2>
            <form action="" method = "POST">
                <div class="form-group">
                    <label for="STDID">รหัสนักศึกษา</label>
                    <input type="text" class="form-control" id="stdid" placeholder="กรุณากรอกข้อมูล" name="stdid">
                </div>

                <div class="form-group">
                    <label for="ENname">อาจารย์ที่ปรึกษาหลัก</label>
                    <input type="text" class="form-control" id="major-adv" placeholder="กรุณากรอกข้อมูล" name="major-adv">
                </div>

                <div class="form-group">
                    <label for="ENname">อาจารย์ที่ปรึกษาร่วม</label>
                    <input type="text" class="form-control" id="join-adv" placeholder="กรุณากรอกข้อมูล" name="join-adv">
                </div>

                <div class="form-group">
                    <label for="source_funds">แหล่งทุน</label>
                    <input type="text" class="form-control" id="source-funds" placeholder="กรุณากรอกข้อมูล" name="source-funds">
                </div>
                
                <button type="submit" name="stdresearch" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
