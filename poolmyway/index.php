<?php 


	//require_once("models/config.php");
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
<?php // dileep | addiing login box js | Start ?>

$(document).ready(function() {
						   
		$(document).keyup(function(e) {
		
		  if (e.keyCode == 27) {
			  jQuery('#loginbox').hide();
										$('#logintab a').removeClass("logintab_hover");
			  }   // esc
		});

		$('#logintab').click(function(e){
									 
									  $('#loginbox').show();
									  $('#logintab a').addClass("logintab_hover");
									  event.stopPropagation();
								});
								jQuery('html').click(function(event){
										console.log('click - body');
										jQuery('#loginbox').hide();
										$('#logintab a').removeClass("logintab_hover");
		});
});
<?php // dileep | addiing login box js | End ?>

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
<ul>
<li id="logotab">
<img src="layout/pmw_logo.png" width="200" height="119" /></li>
<li id="hometab">
<a href="#">
<img src="layout/home-tab-icon.png"/><br />

<span class="tabtitle">Home</span>

<span class="tabdescription">The Pool</span>
</a>
</li>
<li id="howtab">
<a href="#">
<img src="layout/working-tab-icon.png"/><br />

<span class="tabtitle">Working</span>
<span class="tabdescription">How Does It Work?</span>
</a></li>
<li id="testitab">
<a href="#">
<img src="layout/testi-tab-icon.png"/><br />

<span class="tabtitle">Testimonials</span>

<span class="tabdescription">What People Say?</span>
</a></li>
<li id="registertab">
<a href="#">
<img src="layout/register-tab-icon.png"/><br />

<span class="tabtitle">Register</span>

<span class="tabdescription">Join &amp; Explore</span>
</a></li>
<li id="logintab" style="float:right;">
<a href="#">
<img src="layout/login-tab-icon.png"/><br />

<span class="tabtitle">Login</span>

<span class="tabdescription">Start Pooling</span>
</a>
<div id="loginbox">

<form action="" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><input name="email" type="text" placeholder="Enteryour email id" /></td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><input name="password"  type="password" placeholder="password" /></td>
    </tr>
  <tr>
    <td align="left" style="color:#333; font-size:12px; padding-top:5px;"><label>
      <input type="checkbox" name="remenberme" id="remenberme" />
      Remember Me</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="left"><input name="login" type="submit" value="" /></td>
    <td><a href="">Forgot Password</a><br />
    <a href="">Resend Activation</a></td>
    </tr>
  <tr>
    <td colspan="2"><hr/></td>
  </tr>
  <tr>
    <td colspan="2"><img src="layout/signin-btn-fb.png"/></td>
  </tr>
   <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
   <td colspan="2"><img src="layout/signin-btn-tw.png"/></td>
  </tr>
</table>

</form>

</div>

</li>

</ul>

</div>
</div>
<div id="update-panel">
<div id="update-wrapper">
  <div style="height:130px; width:280px; float:left;">
  <div id="percentage" style="float:right; width:100px; height:50px; margin:25px 30px 0 0; text-align:center; font-size:40px; color:#063; font-style:italic;  font:Georgia, 'Times New Roman', Times, serif;"">0%</div>
  </div>
  <div id="searchbox">

  <form id="searchForm" name="searchForm" method="post" action=""><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="32" align="right">&nbsp;</td>
    <td height="32" align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td width="58%" align="right"><input type="text" name="from" id="from" class="shadow" placeholder="Source" /></td>
    <td width="33%" align="right"><input type="text" name="to" id="to" placeholder="Destination" /></td>
    <td width="9%" align="right"><input name="Search" type="image" src="layout/search-btn.png" value="Search"  /></td>
  </tr>
</table>
      
      

    </form>
  </div>
</div>
</div>
<div style=" width:1004px; margin:0 auto;  height:600px; ">
<div style=" width:580px;; margin:0 auto; height:600px; float:left ">
<table width="580" border="0" align="" cellpadding="0" cellspacing="0">
  <tr>
    <td width="709"><div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car1" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car2" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car3" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car4" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car5" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car6" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car7" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car8" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car9" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car10" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      
      </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car13" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car14" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car15" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car16" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car17" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car18" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car19" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car20" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car21" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car22" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
     
      </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car25" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car26" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car27" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car28" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car29" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car30" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car31" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car32" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car33" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="car34" src="layout/car.gif" alt="" onmouseover="callme(this.id);" /> </div>

     </td>
  </tr>
  <tr>
    <td align="center" valign="middle"><div style="width:500px; height:100px; margin: 0 auto;  ">
      <div id="1" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">T</div>
      <div id="2" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">H</div>
      <div id="3" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">I</div>
      <div id="4" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">N</div>
      <div id="5" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">K</div>
      <div id="0" style="float:left; width:30px; height:90px; font-size:80px; color:#0C3; padding:0px; margin:0px; "> </div>
      <div id="6" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">G</div>
      <div id="7" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">R</div>
      <div id="8" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">E</div>
      <div id="9" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">E</div>
      <div id="10" style="float:left; font-size:80px; color:#039; padding:0px; margin:0px; font:Georgia, 'Times New Roman', Times, serif;">N</div>
    </div></td>
  </tr>
  <tr>
    <td><div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike1" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike2" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike3" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike4" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike5" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike6" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike7" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike8" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike9" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike10" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>

     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike13" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike14" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike15" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike16" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike17" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike18" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike19" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike20" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike21" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike22" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>

     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike25" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike26" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike27" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike28" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike29" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike30" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike31" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike32" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike33" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div>
      <div  style="float:left; padding-right:10px; width:48px; height:40px; "> <img id="bike34" src="layout/byke.png" alt="" onmouseover="callme(this.id);" /> </div></td>
  </tr>
  </table>
</div>


<div style="height:600px; float:right; width:400px; background:">
<div style="height:60px; margin:0px 10px 0px 10px; background:url(layout/title-bg-400.png) no-repeat; "><span style="font-size:24px; color:#FFF; padding:5px 0px 5px  20px; display:block;">Running Pools </span></div>
<div style="height:500px; padding:10px ; background:#fff; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">
  <div class="running-pool-item">
    <div class="user-thumb"><img src="layout/dummyimg.jpg" alt="user" width="80" height="80" /></div>
    <div class="pool-item-desc">
      <div class="pool-item-route"><a href="#"><strong>From</strong> delhi <strong>to</strong> Bombay</a></div>
      <div class="pool-item-time"><strong>Time:</strong> 21-09-12 22:15 hrs</div>
      <div class="pool-item-vacant-seats"><strong>Seats Available: </strong> 02</div>
      <div class="pool-item-join-now"><img src="layout/join-now-btn.png" alt="join now" width="93" height="20" /></div>
    </div>
  </div>
  <div class="running-pool-item">
    <div class="user-thumb"><img src="layout/dummyimg.jpg" alt="user" width="80" height="80" /></div>
    <div class="pool-item-desc">
      <div class="pool-item-route"><a href="#"><strong>From</strong> delhi <strong>to</strong> Bombay</a></div>
      <div class="pool-item-time"><strong>Time:</strong> 21-09-12 22:15 hrs</div>
      <div class="pool-item-vacant-seats"><strong>Seats Available: </strong> 02</div>
      <div class="pool-item-join-now"><img src="layout/join-now-btn.png" alt="join now" width="93" height="20" /></div>
    </div>
  </div>
  <div class="running-pool-item">
    <div class="user-thumb"><img src="layout/dummyimg.jpg" alt="user" width="80" height="80" /></div>
    <div class="pool-item-desc">
      <div class="pool-item-route"><a href="#"><strong>From</strong> delhi <strong>to</strong> Bombay</a></div>
      <div class="pool-item-time"><strong>Time:</strong> 21-09-12 22:15 hrs</div>
      <div class="pool-item-vacant-seats"><strong>Seats Available: </strong> 02</div>
      <div class="pool-item-join-now"><img src="layout/join-now-btn.png" alt="join now" width="93" height="20" /></div>
    </div>
  </div>
  <div class="running-pool-item">
    <div class="user-thumb"><img src="layout/dummyimg.jpg" alt="user" width="80" height="80" /></div>
    <div class="pool-item-desc">
      <div class="pool-item-route"><a href="#"><strong>From</strong> delhi <strong>to</strong> Bombay</a></div>
      <div class="pool-item-time"><strong>Time:</strong> 21-09-12 22:15 hrs</div>
      <div class="pool-item-vacant-seats"><strong>Seats Available: </strong> 02</div>
      <div class="pool-item-join-now"><img src="layout/join-now-btn.png" alt="join now" width="93" height="20" /></div>
    </div>
  </div>
  <div class="running-pool-item">
    <div class="user-thumb"><img src="layout/dummyimg.jpg" alt="user" width="80" height="80" /></div>
    <div class="pool-item-desc">
      <div class="pool-item-route"><a href="#"><strong>From</strong> delhi <strong>to</strong> Bombay</a></div>
      <div class="pool-item-time"><strong>Time:</strong> 21-09-12 22:15 hrs</div>
      <div class="pool-item-vacant-seats"><strong>Seats Available: </strong> 02</div>
      <div class="pool-item-join-now"><img src="layout/join-now-btn.png" alt="join now" width="93" height="20" /></div>
    </div>
  </div>
</div>
</div>
</div>
<div id="footer-wrapper">
<div id="footer-grad">
<div id="footer">
<div id="footer-copy" class="footer-box">
<div style="font-size:100px; margin:0px; padding-top:10px; float:left; width:100px; height:100px;"  >&copy;

</div><div style="font-size:14px; margin:0px; padding-top:50px; float:left; width:170px; height:100px;" > Copyright 2011-12 poolmyway.com<br />
  All rights reserved.
</div>
<div style="font-size:14px; margin:0px; padding-top:20px; float:left; width:270px; height:70px;" ><img src="layout/pmw_logo_footer.png" width="86" height="50" alt="pool my way" /></div>
</div>
<div id="footer-links" class="footer-box">
<div class="footer-title">Quick Links</div>
<ul>
<li>Home</li>
<li>Working</li>
<li>Testimonials</li>
<li>Contact us</li>
<li>About us</li>
<li>Site map</li>
<li>FAQ</li>
</ul>
</div>
<div id="footer-social" class="footer-box">
<div class="footer-title">Follow us on:</div>
<ul>
<li><img src="layout/youtube.png" alt="youtube" width="24" height="24" align="absmiddle" /> Youtube</li>
<li><img src="layout/twitter.png" alt="twitter" width="24" height="24" align="absmiddle" /> Twitter</li>
<li><img src="layout/facebook.png" alt="facebook" width="24" height="24" align="absmiddle" /> Facebook</li>
<li><img src="layout/feed.png" alt="rss" width="24" height="24" align="absmiddle" />  RSS Feed</li>
<li><img src="layout/flickr.png" alt="flickr" width="24" height="24" align="absmiddle" /> Flickr</li>

</ul>


</div>
</div>
</div>
</div>
</body>
</html>


