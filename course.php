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
            <h2>หลักสูตร</h2>
            <form action="" method = "POST">
            <div class="form-group">
                    <label for="course">หลักสูตร</label>
                    <select class='form-control' name='coursename'>
                        <option value=>กรุณาเลือก</option>
                        <option value=>วท.บ.(คณิตศาสตร์ประยุกต์)</option>
                        <option value=>วท.ม.(คณิตศาสตร์ประยุกต์และนวัตกรรมการสอนคณิตศาสตร์)</option>
                        <option value=>วท.ม.(วิธีวิทยาการวิจัย)</option>
                        <option value=>ปร.ด.(วิธีวิทยาการวิจัย)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label >อาจารย์ประจำหลักสูตร</label>
                    <input type="text" class="form-control" id="acadid" name="acadid">
                </div>

                <button type="submit" name="course" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
