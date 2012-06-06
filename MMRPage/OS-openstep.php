<style type="text/css">
	
	html, body, #container {
		overflow: hidden !important;
		cursor:url(images/blank.gif), -moz-zoom-in;
		}
		
	.os, .set, #restart_detail, #social-home, .go-back { display: none !important;}

	#container {
		margin: 0 auto;
		text-align: left;
	}
	
	#openstep_1 {
		position:absolute;top:0;left:0;
		background-color: #555555;
		background-image: url(http://www.therestartpage.com/OS/media/shutting.gif);
		background-position: center center;
		background-repeat: no-repeat;
		display: none;
		height: 100%;
		width: 100%;
	}
	
	#openstep_2 {
		position:absolute;top:0;left:0;
		background-color: #000000;
		display: none;
		height: 100%;
		width: 100%;
	}
	
	#openstep_3 {
		position:absolute;top:0;left:0;
		background-color: #000000;
		background-image: url(http://www.therestartpage.com/OS/media/bios_splash.gif);
		background-position: center center;
		background-repeat: no-repeat;
		display: none;
		height: 100%;
		width: 100%;
	}
	
	#openstep_4 {
		position:absolute;top:0;left:0; 
		background-color: #555555;
		background-image: url(http://www.therestartpage.com/OS/media/loading.gif);
		background-position: center center;
		background-repeat: no-repeat;
		display: none;
		height: 100%;
		width: 100%;
	}
	
</style>

<script>
	$(function(){
		//alert($('body').height(););
		
		setTimeout("$('#openstep_1').fadeIn(0);",0);
		setTimeout("$('#openstep_1').fadeOut(1);",5000);
		setTimeout("$('#openstep_2').fadeIn(0);",5001);
		setTimeout("$('#openstep_2').fadeOut(1);",7000);
		setTimeout("$('#openstep_3').fadeIn(0);",7001);
		setTimeout("$('#openstep_3').fadeOut(1);",18000);
		setTimeout("$('#openstep_4').fadeIn(0);",18001);
		setTimeout("$('#openstep_4').fadeOut(1);",29000);
		
		$('html').mouseover(function()
		{
		$(this).css({cursor: 'none'});
		});
		
		$('body').mouseover(function()
		{
		$(this).css({cursor: 'none'});
		});
		
		$('#container').mouseover(function()
		{
		$(this).css({cursor: 'none'});
		});

	});
</script>

<body>
<div id="container">
	<em class="time" title="31000"></em>
	<div id="container">
	
		<div id="openstep_1"></div>
		
		<div id="openstep_2"></div>
		
		<div id="openstep_3"></div>
		
		<div id="openstep_4"></div>
	
	</div>
</div>

</body>
	
	