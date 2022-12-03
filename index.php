<?php session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="SHORTCUT ICON" href="images/fibble.png" type="image/x-icon" />
    <link rel="ICON" href="images/fibble.png" type="image/ico" />

    <title>Fruito Supply chain</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

  </head>
  <body class="violetgradient">
  <?php
  if( !isset($_SESSION['role']) ){
  ?>
  <center>
      <div class="customalert">
          <div class="alertcontent">
              <div id="alertText"> &nbsp </div>
              <img id="qrious">
              <div id="bottomText" style="margin-top: 10px; margin-bottom: 15px;"> &nbsp </div>
              <button id="closebutton" class="formbtn"> OK </button>
          </div>
      </div>
  </center>
  <div style="width: 100% " ;>
      <center>
      <div style="width: 50%">
      
        <!-- <br> <br> <br> <br> <br><br> <br>  -->
      <div class="loginformcard" id="card1">
      <br> <br> <br> <br> <br> <br>
                <div class="cardbtnarea">
                    <button class="btn btn-info" id="login">Login</button>
                    <button class="btn btn-info" id="signup">Signup</button>
                </div>
      </div>

      
<section class="vh-100 bg-image" id="maincard3">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="card" style="border-radius: 20px; width: 400px;height: 600px;">
          <!-- <div class="col-7 col-md-5 col-lg-5 col-xl-5"> --> 
          <div class="card" style="border-radius: 20px; width: 400px;height: 600px;">
            <div class="card-body p-8">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
            <form style="margin-top: 0px; margin-bottom: 0px;" action="registration.php" method="POST" onsubmit="return checkSecondForm(this);">

            <label type="text" class="formlabel"> Email </label>
            <input type="text" class="forminput" name="email" id="email" onkeypress="isNotChar(event)" required>
            
            <label type="text" class="formlabel" style="margin-top: 10px;"> Userame </label>
            <input type="text" class="forminput" name="username" id="username" onkeypress="blockSpaces(event)" required>

            <label type="text" class="formlabel" style="margin-top: 10px;"> Password </label>
            <input type="password" class="forminput" name="pw" id="pw" onkeypress="isNotChar(event)" required>

            <label type="text" class="formlabel" style="margin-top: 10px;"> Confirm Password </label>
            <input type="password" class="forminput" name-"cpw" id="cpw" onkeypress="isNotChar(event)" required>

            <label type="text" class="formlabel" style="margin-top: 10px;"> Select Your Role </label>
            <select class="formselect" name="role">
              <option value="2">Nhà bán lẻ</option>
              <option value="1">Nhà cung cấp</option>
              <option value="3">Nhà sản xuất</option>
              <option value="0">Vận chuyển</option>
              <option value="4">Khách hàng</option>
            </select>
             <br>
             <br>
            <button class="btn btn-info btn-sm" name="loginsubmit" value="submitted!" type="submit">Register</button>

            <br>
            <a href="#" id="gotologin"> Đăng nhập </a>
            </form>
      </div>
  </div>
  </div>
  </div>
  </section>
      <div class="vh-100 bg-image" id="maincard2">
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-120">
      <div class="row d-flex justify-content-center align-items-center h-80">
        <!-- <div class="col-7 col-md-5 col-lg-5 col-xl-5"> -->
          <div class="card" style="border-radius: 20px; width: 360px;height: 400px;">
            <div class="card-body p-8">
              <h2 class="text-uppercase text-center mb-5">ĐĂNG NHẬP</h2>
            <form style="margin-top: 30px; margin-bottom: 30px;" action="login.php" method="POST" onsubmit="return checkFirstForm(this);">

            <label type="text" class="formlabel"> Email </label>
            <input type="text" class="forminput" name="email" id="email" onkeypress="isNotChar(event)" required>

            <label type="text" class="formlabel" style="margin-top: 10px;"> Mật khẩu </label>
            <input type="password" class="forminput" name="pw" id="pw" onkeypress="isNotChar(event)" required>
            <br>
             <br>
            <button class="btn btn-info btn-sm" name="loginsubmit" type="submit">Login</button>

            <br>
            <a href="#" id="gotosignup"> Đăng ký </a>
            </form>
                
      </div>
      </center>
    </div>
    <?php
    }else{
      include 'redirection.php';
      redirect('checkproduct.php');
    }
    ?>
    
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Material Design Bootstrap-->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
  
    function isInputNumber(evt){
      var ch = String.fromCharCode(evt.which);
      if(!(/[0-9]/.test(ch))){
          evt.preventDefault();
      }
    }
    function isNotChar(evt){
      var ch = String.fromCharCode(evt.which);
      if(ch=="'"){
        evt.preventDefault();
      }
    }

    function blockSpaces(evt){
      var ch = String.fromCharCode(evt.which);
      if(ch=="'" || ch==" "){
        evt.preventDefault();
      }
    }

    function blockSpecialChar(e){
      var k;
      document.all ? k = e.keyCode : k = e.which;
      return ((k >= 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 46|| k == 42|| k == 33 || k == 32 || (k >= 48 && k <= 57));
    }

    $("#login").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard3").hide("fast","linear");
      $("#maincard2").show("fast","linear");
    });

    $("#gotologin").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard3").hide("fast","linear");
      $("#maincard2").show("fast","linear");
    });

    $("#openlogin").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard3").hide("fast","linear");
      $("#maincard2").show("fast","linear");
    });

    $("#signup").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard2").hide("fast","linear");
      $("#maincard3").show("fast","linear");
    });

    $("#gotosignup").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard2").hide("fast","linear");
      $("#maincard3").show("fast","linear");
    });

    $("#opensignup").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard2").hide("fast","linear");
      $("#maincard3").show("fast","linear");
    });

    $("#closebutton").on("click", function(){
        $(".customalert").hide("fast","linear");
    });

    function checkSecondForm(theform){
      var email = theform.email.value;
      var pw = theform.pw.value;
      var cpw = theform.cpw.value;

      if (!validateEmail(email)) {
        showAlert("Email không đúng");
        return false;
      }

      if (pw!=cpw) {
        showAlert("Mật khẩu sai");
        return false;
      } 
      return true;
    }

    function checkFirstForm(theform){
      var email = theform.email.value;

      if (!validateEmail(email)) {
        showAlert("Sai email");
        return false;
      }
      return true;
    }

    function showAlert(message){
      $("#alertText").html(message);
      $("#qrious").hide();
      $("#bottomText").hide();
      $(".customalert").show("fast","linear");
    }

    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    
    </script>
  </body>
</html>