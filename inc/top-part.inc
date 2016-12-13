<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Yukako Ito | <?php echo $pageTitle ?></title>
	<link rel="stylesheet" href="css/main.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

	<script type="text/javascript">
        
      function validate() {
         if(document.myForm.Name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            return false;
         }
         
         if(document.myForm.EMail.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
         
         if(document.myForm.Phone.value == "" ) {
            alert( "Please provide your Phone Number!" );
            document.myForm.Phone.focus() ;
            return false;
         }
         return( true );
      }

      function validateEmail() {
         var emailID = document.myForm.EMail.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email address")
            document.myForm.EMail.focus() ;
            return false;
         }
         return( true );
      }

      </script>
</head>

<body>
<div class="container">

	<header>
		<h1><a href="index.php"><?php echo $pageTitle ?></a></h1>
		<?php include "inc/nav.inc" ?>
	</header>