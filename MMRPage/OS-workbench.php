	
<style type="text/css">

	html {
		overflow: hidden !important;
		cursor:url(images/blank.gif), -moz-zoom-in;
		}
		
	.os, .set, #restart_detail, .go-back, #social-home { display: none !important;}
	
	#container {
		margin: 0 auto;
		text-align: left;
	}
	
	#workbench_1 {
				position:absolute;
		top:0;left:0;
		background-color: #0050A0;
		background-image: url(images/off.gif);
		background-position: center center;
		background-repeat: no-repeat;
		display: none;
		height: 100%;
		width: 100%;
	}
	
	#workbench_2 {
				position:absolute;
		top:0;left:0;
		background-image: url(images/bg_loading.gif);
		background-position: center center;
		background-repeat: repeat;
		display: none;
		height: 100%;
		width: 100%;
		z-index: 1;
	}
	
	#workbench_2_hand {
				position:absolute;
				background:#fff;
		top:0;left:0;
		background-image: url(images/splash.gif);
		background-position: center center;
		background-repeat: no-repeat;
		display: none;
		height: 100%;
		width: 100%;
		z-index: 20;
	}
	
	#workbench_3 {
				position:absolute;
		top:0;left:0;
		background-color: #0050A0;
		background-image: url(images/amigados.gif);
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
		
		var play= function(file){
			var audio= document.createElement('audio');
			audio.setAttribute('src', file);
			audio.play();
		}

		
		setTimeout(function(){play('http://www.therestartpage.com/OS/media/splash.wav')},7000);
		setTimeout(function(){play('http://www.therestartpage.com/OS/media/amigados.wav')},12001);
		
		setTimeout("$('#workbench_1').fadeIn(0);",0);
		setTimeout("$('#workbench_1').hide();",5000);
		setTimeout("$('#workbench_2').show();$(body).css('background','#fff');",5000);
		setTimeout("$('#workbench_2').fadeOut(1);",12000);
		setTimeout("$('#workbench_2_hand').show();",5001);
		setTimeout("$('#workbench_2_hand').fadeOut(1);",12000);
		setTimeout("$('#workbench_3').fadeIn(0);",12001);
		setTimeout("$('#workbench_3').fadeOut(1);",24000);
		
		$('body').mouseover(function()
		{
		$(this).css({cursor: 'none'});
		});
		
		$('body').mouseover(function()
		{
		$(this).css({cursor: 'none'});
		});

	});
</script>

<body>
<em class="time" title="26000"></em>
<div id="container">

	<div id="workbench_1"></div>
	<div id="workbench_2">
		<div id="workbench_2_hand"></div>
	</div>
	<div id="workbench_3">

</div>

</body>
	
	