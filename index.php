<?php 


	require_once("models/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pool My Way</title>
<link rel="icon" href="layout/pmw_logo.png" type="layout/png">
<link href="cakestyle.css" rel="stylesheet" type="text/css" />
<link href="layout/main.css" rel="stylesheet" type="text/css" />
<script src="layout/js/jquery.js" language="javascript" ></script>
<script language="javascript" type="text/javascript">
$(document).ready(function() {

 
});

var count = 0;
  function callme(hover_id)
						   {
							  // alert('dsd');			
							   
							     ++count;								
							   $('#'+hover_id).hide('slow');			  
								  
							   $("#percentage").fadeOut(150,function () {
                                 $("#percentage").empty().fadeIn(150).append(count+'%');
                               });
							   if(count==7 ){								    
								    $("#1").css("color","green")		

							   }
							   if(count==15 ){
								    $("#2").css("color","green")
									//$("#fuel_text").append("fddfdffd");
							   }
							   if(count==23 ){
								    $("#3").css("color","green")
							   }
							   if(count==30){
								    $("#4").css("color","green")
							   }
							   if(count==37 ){
								    $("#5").css("color","green")
							   }
							   if(count==45 ){
								    $("#6").css("color","green")
							   }
							   if(count==52 ){
								    $("#7").css("color","green")
							   }
							   if(count==60 ){
								    $("#8").css("color","green")
							   }
							    if(count==66){
								    $("#9").css("color","green")
							   }
							    if(count==72 ){
								    $("#10").css("color","green")
							   }
							   
							   
						   }
						   
						   function calulateReducedPercentage(){alert('ff');							   
						   }
							   
</script>
</head>
<body>
<div id="headerwrapper"> 

<div id="header_main">
<div id="pmw_logo"></div>
<div style="height:100px; width:700px; float:right;">
<div class="login_wrapper">
<form action="mainlogin" method="post">
<table width="100%" border="0">
  <tr>
    <td align="right"><input name="user_id" type="text" placeholder="Your Email ID" /></td>
    <td align="right"><input name="password" type="password"  placeholder="Your Password"/></td>
    <td align="right"><input name="login" type="image"  src="layout/login_btn_top.png" value="Login"  />
</td>
  </tr>
</table>
</form>

</div>

</div>


</div>

</div>

<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="300">&nbsp;</td>
    <td width="709">&nbsp;</td>
  </tr>
  <tr>
    <td width="300">&nbsp;</td>
    <td>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car1" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car2" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car3" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car4" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car5" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car6" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car7" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car8" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car9" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car10" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car11" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car12" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>   
  
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="300">&nbsp;</td>
    <td>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car13" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car14" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car15" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car16" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car17" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car18" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car19" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car20" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car21" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car22" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car23" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car24" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>   
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car25" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car26" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car27" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car28" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car29" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car30" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car31" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car32" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car33" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car34" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car35" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="car36" src="layout/car.gif" alt="" onmouseover="callme(this.id);"></img>
	</div>   
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td rowspan="2" align="center" valign="middle">
    <div style="width:580px; height:100px; margin: 0 auto; ">
<div id="1" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">T</div>
<div id="2" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">H</div>
<div id="3" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">I</div>
<div id="4" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">N</div>
<div id="5" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">K</div>
<div id="0" style="float:left; width:30px; height:90px; font-size:80px; color:#0C3; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;"> </div>
<div id="6" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">G</div>
<div id="7" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">R</div>
<div id="8" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">E</div>
<div id="9" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">E</div>
<div id="10" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">N</div>
</div> 
    
  </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>    
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike1" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike2" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike3" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike4" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike5" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike6" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div>  
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike7" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike8" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike9" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike10" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div>  
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike11" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div>  
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike12" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div>  
    
   
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
   <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike13" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike14" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike15" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike16" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike17" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike18" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div>  
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike19" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike20" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike21" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike22" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div>  
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike23" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div>  
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike24" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div>  
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike25" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike26" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike27" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike28" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike29" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike30" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div>  
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike31" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike32" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike33" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div> 
     <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike34" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div>  
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike35" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div>  
    <div  style="float:left; padding-right:10px; width:48px; height:40px; ">
				<img id="bike36" src="layout/byke.png" alt="" onmouseover="callme(this.id);"></img>
	</div>  
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>      
    <td align="right" style=" font-size:30px; color:#0C3; font-style:italic; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">
    <div style="width:580px; height:100px; margin: 0 auto; ">
    <div id="fuel_text" >and reduce fuel expenses upto </div>
   <div id="percentage"> zero </div>
    </div>
  

    
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<!--<div id="wrapper">
<div id="content">
    
        <div id="left-nav">
        <?php include("layout_inc/left-nav.php"); ?>
            <div class="clear"></div>
        </div>
        
        <div id="main">
            <h1>Welcome</h1>
            
            <p>Thank you for downloading UserCake. 100% Free and Opensource.</p>
            
            <p>Copyright (c) 2009-2010 <a href="http://adamdavis.co.uk">Adam Davis</a></p>
            
            <p>Permission is hereby granted, free of charge, to any person obtaining a copy
            of this software and associated documentation files (the "Software"), to deal
            in the Software without restriction, including without limitation the rights
            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
            copies of the Software, and to permit persons to whom the Software is
            furnished to do so, subject to the following conditions:</p>
            
            <p>The above copyright notice and this permission notice shall be included in
            all copies or substantial portions of the Software.</p>
            
            <p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
            THE SOFTWARE.</p>
            
            <div class="clear"></div>
        </div>

  </div>
</div>-->
</body>
</html>


