<?php
$link = mysqli_connect("localhost", 'root', '','hwk5');
$_GET['order'] = isset($order) ? $_GET['order'] : null;
?>
<html>
<head>
	<meta charset="utf-8">
	<title>입장</title>
    <style>
        .input-wrap {
            width: 1100px;
            margin: 0 auto;
        }
        h1 { text-align: center; }
        th, td { text-align: center; }
        table, th, td {
         border: 1px solid black;
          border-collapse: collapse;
        }
        table {margin: 0 auto;}
        a { text-decoration: none; }
        .right-box{
            float : right;
        }
        .result{
            position: relative;
            top: 10px;
        }
    </style>
</head>
<body>
    <div class="input-wrap">
        <form action="homework5.php" method="POST">
            고객 성명 <input type = "text" name = "name"> 
            <div class = "right-box">
            <input type="submit" name="sum" value="합계"> 
            </div>
            <td>
            <table width="50%" height=100>
                <thead>
                    <tr>
                        <th>No</th>
                        <th colspan = "3">구분</th>
                        <th colspan = "4">어린이</th>
                        <th colspan = "4">어른</th>
                        <th colspan = "3">비고</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <th colspan = "3">입장권</th>
                        <th colspan = "2">7,000</th>
                        <th colspan = "2">
                            <SELECT NAME=ch_ent SIZE=1>
                                <OPTION VALUE=0>0</OPTION>
                                <OPTION VALUE=1>1</OPTION>
                                <OPTION VALUE=2>2</OPTION>
                                <OPTION VALUE=3>3</OPTION>
                                <OPTION VALUE=4>4</OPTION>
                                <OPTION VALUE=5>5</OPTION>
                                <OPTION VALUE=6>6</OPTION>
                                <OPTION VALUE=7>7</OPTION>
                                <OPTION VALUE=8>8</OPTION>
                                <OPTION VALUE=9>9</OPTION>
                            </SELECT>
                        </th>
                        <th colspan = "2">10,000</th>
                        <th colspan = "2">
                            <SELECT NAME=ad_ent SIZE=1>
                                <OPTION VALUE=0>0</OPTION>
                                <OPTION VALUE=1>1</OPTION>
                                <OPTION VALUE=2>2</OPTION>
                                <OPTION VALUE=3>3</OPTION>
                                <OPTION VALUE=4>4</OPTION>
                                <OPTION VALUE=5>5</OPTION>
                                <OPTION VALUE=6>6</OPTION>
                                <OPTION VALUE=7>7</OPTION>
                                <OPTION VALUE=8>8</OPTION>
                                <OPTION VALUE=9>9</OPTION>
                            </SELECT>
                        </th>
                        <th colspan = "3">입장</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th colspan = "3">BIG3</th>
                        <th colspan = "2">12,000</th>
                        <th colspan = "2">
                            <SELECT NAME=ch_big SIZE=1>
                                <OPTION VALUE=0>0</OPTION>
                                <OPTION VALUE=1>1</OPTION>
                                <OPTION VALUE=2>2</OPTION>
                                <OPTION VALUE=3>3</OPTION>
                                <OPTION VALUE=4>4</OPTION>
                                <OPTION VALUE=5>5</OPTION>
                                <OPTION VALUE=6>6</OPTION>
                                <OPTION VALUE=7>7</OPTION>
                                <OPTION VALUE=8>8</OPTION>
                                <OPTION VALUE=9>9</OPTION>
                            </SELECT>
                        </th>
                        <th colspan = "2">16,000</th>
                        <th colspan = "2">
                            <SELECT NAME=ad_big SIZE=1>
                                <OPTION VALUE=0>0</OPTION>
                                <OPTION VALUE=1>1</OPTION>
                                <OPTION VALUE=2>2</OPTION>
                                <OPTION VALUE=3>3</OPTION>
                                <OPTION VALUE=4>4</OPTION>
                                <OPTION VALUE=5>5</OPTION>
                                <OPTION VALUE=6>6</OPTION>
                                <OPTION VALUE=7>7</OPTION>
                                <OPTION VALUE=8>8</OPTION>
                                <OPTION VALUE=9>9</OPTION>
                            </SELECT>
                        </th>
                        <th colspan = "3">입장+놀이3종</th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th colspan = "3">자유이용권</th>
                        <th colspan = "2">21,000</th>
                        <th colspan = "2">
                            <SELECT NAME=ch_free SIZE=1>
                                <OPTION VALUE=0>0</OPTION>
                                <OPTION VALUE=1>1</OPTION>
                                <OPTION VALUE=2>2</OPTION>
                                <OPTION VALUE=3>3</OPTION>
                                <OPTION VALUE=4>4</OPTION>
                                <OPTION VALUE=5>5</OPTION>
                                <OPTION VALUE=6>6</OPTION>
                                <OPTION VALUE=7>7</OPTION>
                                <OPTION VALUE=8>8</OPTION>
                                <OPTION VALUE=9>9</OPTION>
                            </SELECT>
                        </th>
                        <th colspan = "2">26,000</th>
                        <th colspan = "2">
                            <SELECT NAME=ad_free SIZE=1>
                                <OPTION VALUE=0>0</OPTION>
                                <OPTION VALUE=1>1</OPTION>
                                <OPTION VALUE=2>2</OPTION>
                                <OPTION VALUE=3>3</OPTION>
                                <OPTION VALUE=4>4</OPTION>
                                <OPTION VALUE=5>5</OPTION>
                                <OPTION VALUE=6>6</OPTION>
                                <OPTION VALUE=7>7</OPTION>
                                <OPTION VALUE=8>8</OPTION>
                                <OPTION VALUE=9>9</OPTION>
                            </SELECT>
                        </th>
                        <th colspan = "3">입장+놀이자유</th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th colspan = "3">연간이용권</th>
                        <th colspan = "2">70,000</th>
                        <th colspan = "2">
                            <SELECT NAME=ch_year SIZE=1>
                                <OPTION VALUE=0>0</OPTION>
                                <OPTION VALUE=1>1</OPTION>
                                <OPTION VALUE=2>2</OPTION>
                                <OPTION VALUE=3>3</OPTION>
                                <OPTION VALUE=4>4</OPTION>
                                <OPTION VALUE=5>5</OPTION>
                                <OPTION VALUE=6>6</OPTION>
                                <OPTION VALUE=7>7</OPTION>
                                <OPTION VALUE=8>8</OPTION>
                                <OPTION VALUE=9>9</OPTION>
                            </SELECT>
                        </th>
                        <th colspan = "2">90,000</th>
                        <th colspan = "2">
                            <SELECT NAME=ad_year SIZE=1>
                                <OPTION VALUE=0>0</OPTION>
                                <OPTION VALUE=1>1</OPTION>
                                <OPTION VALUE=2>2</OPTION>
                                <OPTION VALUE=3>3</OPTION>
                                <OPTION VALUE=4>4</OPTION>
                                <OPTION VALUE=5>5</OPTION>
                                <OPTION VALUE=6>6</OPTION>
                                <OPTION VALUE=7>7</OPTION>
                                <OPTION VALUE=8>8</OPTION>
                                <OPTION VALUE=9>9</OPTION>
                            </SELECT>
                        </th>
                        <th colspan = "3">입장+놀이자유</th>
                    </tr>
                </tbody>
            </table>
        </form>
        <div class = "result">
        <?php 
        date_default_timezone_set("Asia/Seoul");
        echo date("Y년 n월 j일 h시 i분").("<br>"); 
        if (isset($_GET['customer'])){
            echo ($_GET['customer']).("고객님 감사합니다.").("<br>");
            if ($_GET['kid_ent']!=0){
                echo ("어린이 입장권 ").($_GET['kid_ent']).("매").("<br>");}
            if ($_GET['kid_big3']!=0){
                echo ("어린이 BIG3 ").($_GET['kid_big3']).("매").("<br>");}
            if ($_GET['kid_free']!=0){
                echo ("어린이 자유이용권 ").($_GET['kid_free']).("매").("<br>");}
            if ($_GET['kid_year']!=0){
                echo ("어린이 연간이용권 ").($_GET['kid_year']).("매").("<br>");}
            if ($_GET['adu_ent']!=0){
                echo ("어른 입장권 ").($_GET['adu_ent']).("매").("<br>");}
            if ($_GET['adu_big3']!=0){
                echo ("어른 BIG3 ").($_GET['adu_big3']).("매").("<br>");}
            if ($_GET['adu_free']!=0){
                echo ("어른 자유이용권 ").($_GET['adu_free']).("매").("<br>");}
            if ($_GET['adu_year']!=0){
                echo ("어른 연간이용권 ").($_GET['adu_year']).("매").("<br>");}
            $sum=($_GET['kid_ent']*7000)+($_GET['kid_big3']*12000)+($_GET['kid_free']*21000)+($_GET['kid_year']*70000)+($_GET['adu_ent']*10000)+($_GET['adu_big3']*16000)+($_GET['adu_free']*26000)+($_GET['adu_year']*90000);
            echo ("합계 ").($sum).("원 입니다.");
        }
        ?>
        </div>
    </div>
</body>