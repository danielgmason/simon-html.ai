<?php  
include("../php/config.php");  
?>  

<html>  
<head>  
<title>Simple Reader</title>  
<style type='text/css'>  
body {  
 margin:0px;  
 padding:0px;  
 font-family:Arial, serif;  
 font-size:14px;  
}  
a {outline:none;}  
#header {  
 background:url("images/logo.png") no-repeat center left;  
 height:10%;  
 overflow:hidden;  
}  
  
#loader {  
 background:#f9dd7d;  
 width:75px;  
 margin:auto;  
 display:block;  
 padding:6px;  
 font-weight:bold;  
 display:none;  
}  
  
#wrapper {  
 height:90%;  
 margin:0px;  
 padding:0px;  
}  
</style>  
<script type='text/javascript' src='../assets/js/jquery.pack.js'></script>  
<script type='text/javascript' src='../assets/js/jquery.layout.js'></script>  

<script type='text/javascript'>  
$(document).ready(function () {  
 var my_layout = $('#wrapper').layout({applyDefaultStyles:true});  
 });  
</script>  
</head>  
<body>  
 <div id='header'>  
  <div id='loader'>Loading...</div>  
 </div>  
 <div id='wrapper'> 

<div class='ui-layout-west' id='sidebar'></div>  
  
<div class='ui-layout-center' id='view-area'></div>  

</div>  
</body>  
</html>  