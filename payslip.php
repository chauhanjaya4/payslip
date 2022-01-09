





<?php

include'header.php';
//ini_set('display_errors',1);

	//mysqli_select_db($dbname,$db_conn) or die(mysql_error($db_conn));

include("config.php");
/*global $current_user;
$chk_no=$current_user-> user_login;
$User_name=$current_user->display_name;

 $count = 0;*/
 /*if($chk_no=='web' or $chk_no=='1234' or $chk_no=='3411' or $chk_no=='asct9'){
 $sql = "SELECT * FROM `conflict_interest` WHERE `check_no`= '$chk_no'";

 $result = mysqli_query($db_conn,$sql) or die(mysql_error());
 $count = mysqli_num_rows($result);

 if ($count == 0) {
    header('Location: https://convergence.trf.co.in/iframes/conflict/conflict.php');
 }
 }*/


  //echo "Your Check No.:".$User_name;
?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
<Style type=text/css>


@import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');

body{
  background:url('images/trf.jpg');
  
}
.login {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
  font-family: 'Comfortaa', cursive;
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  border:1px solid #000000;
}

.form select {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  font-family: 'Comfortaa', cursive;
  border:1px solid #000000;
}

.form input:focus {
  background: #dbdbdb;
}

.form input[type=submit] {
  font-family: 'Comfortaa', cursive;
  text-transform: uppercase;
  outline: 0;
  background: #0015d4cc;
  width: 100%;
  border: 0;
  border-radius: 5px;
  padding: 8px 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  
}

.form input[type=submit]:active {
  background: #395591;
}

.form span {
  font-size: 75px;
  color: #4b6cb7;
}


.btn2{
  position: relative;
  display: block;
  margin: 0 auto;
  padding: 1.6em 1em;
  max-width: 20em;
  width:200px;
  color: #fff;
  font-size: 1.0  em;
  line-height: 1;
  text-align: center;
  text-decoration: none;
  background-color: #2da3ee;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzVmYzFmZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAwODhkZSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #0015d4cc), color-stop(100%, #0015d4cc));
  background-image: -moz-linear-gradient(#0015d4cc 0%, #0015d4cc 100%);
  background-image: -webkit-linear-gradient(#0015d4cc 0%, #0015d4cc 100%);
  background-image: linear-gradient(#0015d4cc 0%, #0015d4cc 100%);
  border: 1px solid #0015d4cc;
  border-radius: 3px;
  box-shadow: inset 0 0 7px 0 rgba(255, 255, 255, 0.5);
  margin:20px;
  float:left;
}
.btn2:before, .btn:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
}
.btn2:before {
  height: 1px;
  background: rgba(255, 255, 255, 0.4);
}
.btn2:after {
  height: 100%;
  border-radius: 3px;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.3);
}
.btn2:hover, .btn2:focus {
  text-decoration: none;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzVmYzFmZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAwN2ZkMCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #5fc1ff), color-stop(100%, #007fd0));
  background-image: -moz-linear-gradient(#5fc1ff 0%, #007fd0 100%);
  background-image: -webkit-linear-gradient(#5fc1ff 0%, #007fd0 100%);
  background-image: linear-gradient(#5fc1ff 0%, #007fd0 100%);
}
.btn2:focus {
  outline: none;
  border: 1px solid #021c2d;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzVmYzFmZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAwNzhjNSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #5fc1ff), color-stop(100%, #0078c5));
  background-image: -moz-linear-gradient(#5fc1ff 0%, #0078c5 100%);
  background-image: -webkit-linear-gradient(#5fc1ff 0%, #0078c5 100%);
  background-image: linear-gradient(#5fc1ff 0%, #0078c5 100%);
}
.btn2:active {
  top: 1px;
}
.btn2:active:after {
  box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.3);
}
</style>

</head>

<body >



      <div><img src="images/1.png" style="float:right;margin:50px;padding:10px auto;height:5%;width:5%;"	></div>
<div><img src="images/trfltd-logo.png"  style="float:left;margin:50px;padding:10px auto;height:10%;width:10%;"	></div>



<div class="login">

<div style="display:flex;">


<a   class="btn2" href="password_reset.php">Reset Password</a>
<a href="logout.php" class="btn2">Logout</a></div>

  <div class="form">
<form action="pdffile.php" method="post" class="login-form">
<h3 style="padding:2px auto; margin-bottom:10px;">Payslip</h3>


<!--<input type="text" name="user_login">-->

<select class="textboxes1" name="select_1" required>
<option value="Select Option">Select Option</option> 
<option value="2022">2022</option>
<option value="2021">2021</option>  
<option value="2020">2020</option>    
<option value="2019">2019</option>
<option value="2018">2018</option>
<!--<option value="2017">2017</option>-->
<!--<option value="2016">2016</option>-->
<!-- <option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option> -->
</select>





<select class="textboxes1" name="select_2" required> <option selected="selected">..Select Month..</option>
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>

</select>

<input type="submit" onclick = calc()  value="Enter" >

</form>
</div>
</div>
</body>
<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
</html>