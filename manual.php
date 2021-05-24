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
            <h2>คู่มือปฏิบัติงาน</h2>
            <form action="" method = "POST">
                <div class="form-group">
                    <label >หมายเลขประจำตัวบุคลากร</label>
                    <input type="text" class="form-control" id="acadid" placeholder="กรุณากรอกข้อมูล" name="acadid">
                </div>

                <div class="form-group">
                    <label >ชื่อคู่มือ</label>
                    <input type="text" class="form-control" id="manual-name" placeholder="กรุณากรอกข้อมูล" name="manual-name">
                </div>

                <div class="form-group">
                    <label >แหล่งทุน</label>
                    <input type="text" class="form-control" id="manual-funds" placeholder="กรุณากรอกข้อมูล" name="manual-funds">
                </div>

                <button type="submit" name="manual" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
