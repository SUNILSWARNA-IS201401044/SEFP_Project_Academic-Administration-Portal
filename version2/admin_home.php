
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Home | Academic Administration Application</title>
	   <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

</head>
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>

<body>
  <?php
if (isset($_SESSION['message']))
{
$var= $_SESSION['message'];
echo "<div id='snackbar'> $var</div>";
}

function myFunction() {
echo"<script>

var x = document.getElementById('snackbar');
x.className = 'show';
setTimeout(function(){ x.className = x.className.replace('show', ''); }, 4500);";
echo "</script>";
unset($_SESSION['message']);
}
if (isset($_SESSION['message']))
{
myFunction();

}
  ?>
  <nav class="container" >
      <div class="">
          <div class="navbar-header">

              <a class="navbar-brand" href="index.php"></a>
          </div>
          <!-- <div class="collapse navbar-collapse" id="navbar1">
              <ul class="nav navbar-nav navbar-right">
                  <?php if (isset($_SESSION['usr_id'])) { ?>
                  <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                  <li><a href="logout.php">Log Out</a></li>

                  <li><a href="login.php"></a></li>
                  <li><a href="register.php"></a></li>
                  <?php } ?>
              </ul>
          </div> -->

            	<a href="index.php"><img src="images/logo3.png" width="200px" height="120px" title="logo" /></a>

              <ul class="nav navbar-nav navbar-right">
                  <?php if (isset($_SESSION['usr_id'])) { ?>
                  <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name'];
                  $u=$_SESSION['usr_id'] ;?></p></li>
                  <li><a href="logout.php">Log Out</a></li>

                  <li><a href="login.php"></a></li>
                  <li><a href="register.php"></a></li>
                  <?php } ?>
              </ul>
          </div>
      </div>
  </nav>
<br>
<br><br>
<br>
<div class = "container">
<div class="content">
 <div class="top-grids">
   <div class="wrap">
     <div class="top-grid">
       <a href="notify.php"><img src="images/an.png" width="80px" height="80px" title="icon-name"></a>
       <h4> Make </h4> <h3>Announcements</h3>
       <!-- <p> Login | Register </p>
       <a class="button" href="Student_Login.php">Click</a> -->
     </div>
     <div class="top-grid">
       <a href="take_attendance.php"><img src="images/addlogo1.png" width="80px" height="80px" title="icon-name"></a>
       <h4>Take</h4><h3>Attendance</h3>
     </div>
     <div class="top-grid last-topgrid">
       <a href="display_attendance.php"><img src="images/show.png" width="80px" height="80px" title="icon-name"></a>
       <h4>Show</h4><h3>Attendance</h3>
       </div>
     <div class="clear"> </div>
   </div>
 </div>
 <br>
 <br>

<div class = "container">
  <div class="content">
   <div class="top-grids">
     <div class="wrap">
       <div class="top-grid">
         <a href="upload_timetable.php"><img src="images/uptt.png" width="80px" height="80px" title="icon-name"></a>
         <h4>Upload</h4><h3>Time Table</h3>
         <!-- <p> Login | Register </p>
         <a class="button" href="Student_Login.php">Click</a> -->
       </div>
       <div class="top-grid">
         <a href="display_timetable.php"><img src="images/tt.svg" width="80px" height="80px" title="icon-name"></a>
         <h4>Show</h4><h3>Time Table</h3>
       </div>

       <div class="clear"> </div>
     </div>
   </div>

<!-- <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Academic Administration Application</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                <li><a href="logout.php">Log Out</a></li>

                <li><a href="login.php"></a></li>
                <li><a href="register.php"></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav> -->


<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
