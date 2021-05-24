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
            <h2>ข้อมูลศิษย์เก่า</h2>
            <form action="" method = "POST">
                <div class="form-group">
                    <label >รหัสนักศึกษาเดิม</label>
                    <input type="text" class="form-control" id="stdid" placeholder="กรุณากรอกข้อมูล" name="stdid">
                </div>

                <div class="form-group">
                    <label>ตำแหน่งงานปัจจุบัน</label>
                    <input type="text" class="form-control" id="work" placeholder="กรุณากรอกข้อมูล" name="work">
                </div>

                <div class="form-group">
                    <label >เบอร์ติดต่อ</label>
                    <input type="text" class="form-control" id="contact" placeholder="กรุณากรอกข้อมูล" name="contact">
                </div>

                <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control" id="email" placeholder="กรุณากรอกข้อมูล" name="email">
                </div>

                <div class="form-group">
                    <label >Line</label>
                    <input type="text" class="form-control" id="line" placeholder="กรุณากรอกข้อมูล" name="line">
                </div>

                <div class="form-group">
                    <label >Facebook</label>
                    <input type="text" class="form-control" id="fb" placeholder="กรุณากรอกข้อมูล" name="fb">
                </div>

                <div class="form-group">
                    <label >วุฒิการศึกษาระดับสูงสุด และปีที่จบ</label>
                    <input type="text" class="form-control" id="fn" placeholder="กรุณากรอกข้อมูล" name="fn">
                </div>

                <button type="submit" name="alumni" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
