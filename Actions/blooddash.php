<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Assets/css/dash.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
</head>
<body>
    <h1 class = "companyName">Blood Bank Name</h1>
    <div class="search">
            <form action="#">
                <input type="text"
                    placeholder=" Search"
                    name="search">
                <button>
                    <i class="fa fa-search"
                        style="font-size: 18px;">
                    </i>
                </button>
                
            </form>
        </div>
    </div>
    <h2>Available Blood Stocks</h2>
<div class="a">
<div id="a+ve">
        <h3 class="bloodGroup">A +ve</h3>
        <div  class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
<div  id="a-ve">
        <h3 class="bloodGroup">A -ve</h3>
        <div class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
</div>
    <br>
<div class="b">
<div  id="B+ve">
        <h3 class="bloodGroup">B +ve</h3>
        <div class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
<div  id="B-ve">
        <h3 class="bloodGroup">B -ve</h3>
        <div class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
</div>
    <br>
    <div class="o">
    <div  id="o+ve">
        <h3 class="bloodGroup">O +ve</h3>
        <div class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
    <div  id="o-ve">
        <h3 class="bloodGroup">O -ve</h3>
        <div class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
    </div>
    <br>
    <div class="ab">
    <div  id="ab+ve">
        <h3 class="bloodGroup">AB +ve</h3>
        <div class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
    <div  id="ab-ve">
        <h3 class="bloodGroup">AB -ve</h3>
        <div class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
    </div>
   
    <a href="Form.php">
    <button formaction ="Form.php">
                     Order Blood
                </button>
    </a>
<div class="warning">Warning</div>
</body>
</html> -->

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="style.css" />
 <title>7topics - Login Demo</title>
</head>
<body>
<div id="center">
<div id="center-set">
<h1 align='center'>Welcome <?php echo $loggedin_organization_name; ?>,</h1>
You are now logged in. you can logout by clicking on signout link given below.
<div id="contentbox">
<?php
$sql="SELECT * FROM bank_regis where id=$loggedin_id";
$result=mysqli_query($conn,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Reg id:</div> </td>
<td class="tl-4"><?php echo $rows['id']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td class="tl-4"><?php echo $rows['username']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-4"><?php echo $rows['bldbankName']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email id:</div></td>
<td class="tl-4"><?php echo $rows['hospEmail']; ?></td>
</tr>
</table>
<div id="reg-bottom" class="btmrg">Copyright &copy; 2015 7topics.com</div>
</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>
<div id="st"><a href="deleteac.php" id="st-btn">Delete Account</a></div>
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</br>
<div id="footer"><p> Copyright &copy; 2014-2015 7topics.com </p></div>
</body>
</html>