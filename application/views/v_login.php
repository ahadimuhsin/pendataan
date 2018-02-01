<?php
//defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <LINK REL="SHORTCUT ICON" href="<?php base_url()?>assets/image/lmd.ico" />
<style>
body {
padding-top: 15px;
padding-left: 0px;
padding-right: 0px;
margin: 0;
font-family: "Helvetica";
font-size: 14px;
line-height: 28px;
color: #000000;
background: #ffff;
}

.box {
width: 30%;
min-width: 300px;
max-width: 300px;
margin-left:auto;
margin-right:auto;
padding-top: 15px;
margin-bottom: 5px;
}

.box > .heading {
height: 48px;
padding-left: 5px;
padding-right: 5px;
border: 1px solid #DBDBDB;
-webkit-border-radius: 7px 7px 0px 0px;
-moz-border-radius: 7px 7px 0px 0px;
-khtml-border-radius: 7px 7px 0px 0px;
border-radius: 7px 7px 0px 0px;
}

.box > .heading h1 {
 margin: auto;
 padding: 11px;
 color: #003A88;
 font-size: 20px;
 float: center;
}

.box > .content {
 padding: 15px;
 border-left: 1px solid #CCCCCC;
 border-right: 1px solid #CCCCCC;
 border-bottom: 1px solid #CCCCCC;
 overflow: auto;
}

.span2 {
text-align: center;
font-size: 18px;
}

</style>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style0.css" />
</head>
<body>

  <div class="container" style="margin-top: 15px">
    <div class="profile">
      <button class="profile__avatar" id="toggleProfile">
       <img src="assets/image/logo.png" />
      </button>
      <div class="profile__form">
        <div class="profile__fields">
          <div class="content">
           <form class="form-horizontal well" method="POST" action="c_login/cek_login">
           <div>
            <label>Username :</label>
            <input placeholder="Insert your Username" required name="username" type="text" class="input" id="input01" >
          </div>
           <div style="margin-top: 10px">
            <label>Password :</label>
            <input placeholder="Type your Password" required name="password" type="password" class="input" id="input01" >
           </div>
           <div class="control-group">
            <div class="controls">
            </br>
            <center><button type="submit" id="submit" name="insert" value="login" class="btn btn-primary button" >Login</button></center>
           </div>
          </div>
         </form>
           </div>
        </div>
       </div>
    </div>
    <div class="span2">
      <p>Lintas Media Danawa</p>
    </div>
  </div>

<script>
document.getElementById('toggleProfile').addEventListener('click', function () {
  [].map.call(document.querySelectorAll('.profile'), function(el) {
    el.classList.toggle('profile--open');
  });
});

</script>


</body>
</html>
