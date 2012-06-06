	
<style type="text/css">

	html, body, #container {
		overflow: hidden !important;
		cursor:url(OS/../images/blank.gif), -moz-zoom-in;
		}
	.os, .set, #restart_detail, .go-back, #social-home { display: none !important;}
	
	#container {

	}
	
	#appleii_1 {
		position:absolute;
		top:0;left:0;
		background-color: #0000FF;
		background-image: url(OS/media/bios_apple2.gif);
		background-position: center center;
		background-repeat: no-repeat;
		display: none;
		height: 100%;
		width: 100%;
	}
	
	#appleii_2_top {
			position:absolute;
		top:0;left:0;
		background-color: #0000FF;
		background-image: url(OS/media/bios_top.gif);
		background-position: center center;
		background-repeat: no-repeat;
		display: none;
		height: 50%;
		width: 100%;
	}
	
	#appleii_2_bottom {
			position:absolute;
		top:0;left:0;
		background-color: #0000FF;
		background-image: url(OS/media/bios_bottom.gif);
		background-position: center center;
		background-repeat: no-repeat;
		display: none;
		height: 50%;
		width: 100%;
	}
	
	#appleii_3_bg {

			position:absolute;
		top:0;left:0;
		background-color: #FFFFFF;
		background-image: url(OS/media/bg.gif);
		background-position: center center;
		background-repeat: repeat;
		display: none;
		height: 100%;
		width: 100%;
	}
	
	#appleii_3_loader {
			position:absolute;
		top:0;left:0;
		background-image: url(OS/media/appleii_loading_slow.gif);
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
		$('body').css('background','#0000FF');
		setTimeout("$('#appleii_1').fadeIn(0);",0);
		setTimeout("$('#appleii_1').fadeOut(1);",9000);
		setTimeout("$('#appleii_2_top').fadeIn(0);",9500);
		setTimeout("$('#appleii_2_top').fadeOut(1);",14000);
		setTimeout("$('#appleii_2_bottom').fadeIn(0);",9500);
		setTimeout("$('#appleii_2_bottom').fadeOut(1);",14000);
		setTimeout("$('#appleii_3_bg').fadeIn(0);",14001);
		setTimeout("$('#appleii_3_bg').fadeOut(1);",36600);
		setTimeout("$('#appleii_3_loader').fadeIn(0);",14001);
		setTimeout("$('#appleii_3_loader').fadeOut(1);",36600);
		
		$('body').mouseover(function()
		{
		$(this).css({cursor: 'none'});
		});
		
		$('html').mouseover(function()
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
	<em class="time" title="36600"></em>
	<div id="container">
	
		<div id="appleii_1"></div>
		
		<div id="appleii_2_top"></div>
		<div id="appleii_2_bottom"></div>
		
		<div id="appleii_3_bg">
			<div id="appleii_3_loader"></div>
		</div>
	
	</div>
</body>

	
	