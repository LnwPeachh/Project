<?php
    $objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
    $db = mysqli_select_db($objConnect, "movie");
    mysqli_query($objConnect, "SET NAMES utf8");
    $sql="SELECT * FROM artist";
    $result=mysqli_query($objConnect, $sql);
    echo "<table width=\"700\" border=\"0\">";
    echo "<tr bgcolor=\"#993333\"> ";
    echo "<td><color=\"#FFFFFF\"> รหัสประจำตัวนักแสดง </font></td>";
    echo "<td><color=\"#FFFFFF\"> ชื่อนักแสดง </font></td>";
    echo "<td><color=\"#FFFFFF\"> ผลงานภาพยนตร์ </font></td>";
    echo "<td><color=\"#FFFFFF\"> C-Date </font></td>";
    echo "<td><color=\"#FFFFFF\"> Mod-Date </font></td>";
    echo "</tr>";
    while($data = mysqli_fetch_array($result)) {
        echo "<td>$data[id]</td>";
        echo "<td>$data[name]</td>";
        echo "<td>$data[namemovie]</td>";
        echo "<td>$data[cdate]</td>";
        echo "<td>$data[moddate]</td></tr>";
    }
    echo "<a href='main.html'>หน้าหลัก</a>";
?>
