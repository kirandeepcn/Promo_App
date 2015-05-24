<?php
session_start();

function __autoload($classname) {
    include "include/" . $classname . ".class.php";
}

?>
<html>
<head>
<link rel="stylesheet" href="css/applogo.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
            function validate()
            {
                var userObj = $("#username");
                var passObj = $("#password");
                flag = 1;
                $("#user_error").html("");
                $("#user_pass").html("");
                if(userObj.val() === "") {
                    $("#user_error").html('Please fill this field');
                    flag = 0;
                }
                if(passObj.val() === "") {
                    $("#user_pass").html('Please fill this field');
                    flag = 0 ;
                } 
                
                if(flag == 1){            
                    $.ajax({
                        method: "POST",
                        url: "API/index.php",
                        data: { username: userObj.val(), password: passObj.val(), type:"login" }
                    }).done(function( data ) {
                        var returnedData = JSON.parse(data);
                       // alert(returnedData);
                        if(returnedData.code == 1) {
                            location.href = "admin.php";
                        } else {
                            alert(returnedData.message);
                        }
                      });
                }
                  
                  return false;
            }
            
        </script>
</head>
<body>
<header>
  <div class="wrapper">
    <div class="outer_header">
      <div class="logo head"> <img src="images/logo.jpg" alt="logo"> </div>
      <div class="ryt_admin">
        <div class="inner_admin">
          <div class="droper">
            <div class="dropper_inner">
              <div class="user_name"> Admin <img src="images/arrow.jpg" alt="arrow" id="show"> </div>
              <div class="htab_o">
                <div class="htab hr_l"> Change Password </div>
                <div class="htab"> Logout </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
	</header>