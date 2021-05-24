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
            <h2>การศึกษา</h2>
            <form action="" method = "POST">
                <div class="form-group">
                    <label >หมายเลขประจำตัวบุคลากร</label>
                    <input type="text" class="form-control" id="acadid" placeholder="กรุณากรอกข้อมูล" name="acadid">
                </div>

                <div class="form-group">
                    <label >วุฒิการศึกษา(ไทย)</label>
                    <input type="text" class="form-control" id="eduth" placeholder="กรุณากรอกข้อมูล" name="eduth">
                </div>

                <div class="form-group">
                    <label >วุฒิการศึกษา(อังกฤษ)</label>
                    <input type="text" class="form-control" id="eduen" placeholder="กรุณากรอกข้อมูล" name="eduen">
                </div>

                <div class="form-group">
                    <label >ปีที่สำเร็จการศึกษา</label>
                    <input type="text" class="form-control" id="dated" placeholder="กรุณากรอกข้อมูล" name="dated">
                </div>

                <div class="form-group">
                    <label >สถานที่สำเร็จการศึกษา (ไทย)</label>
                    <input type="text" class="form-control" id="locateTH" placeholder="กรุณากรอกข้อมูล" name="locateTH">
                </div>

                <div class="form-group">
                    <label >สถานที่สำเร็จการศึกษา (อังกฤษ)</label>
                    <input type="text" class="form-control" id="locateEN" placeholder="กรุณากรอกข้อมูล" name="locateEN">
                </div>
                
                <button type="submit" name="education" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
