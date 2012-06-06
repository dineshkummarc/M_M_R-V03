
<style>

html, body	{height:100%; width: 100%; margin:0; padding:0;}

html, body, #container {
		overflow: hidden !important;
		cursor:url(OS/../images/blank.gif), -moz-zoom-in;
		}
		
	.os, .set, #restart_detail, #social-home, .go-back { display: none !important;}
	
body {
	vertical-align: text-top;
	background-color: #888888;
	float: left;
	background-image: url(OS/media/macos9/bg_animado.gif);
	background-repeat: repeat;
	position: absolute;
	}

.top {
	background-image: url(OS/media/macos9/splash.gif);
	background-repeat: no-repeat;
	height: 100%;
	width: 100%;
	float: left;
	position:absolute;
	background-position: center center;
}


.bottom {
	height: 42px;
	width: 402px;
	position: absolute;
	left: 0px;
	bottom: 0px;
	background-image: url(OS/media/macos9/icons.gif);
	background-repeat: no-repeat;
	background-position: left bottom;	
	}
</style>

<script>
	$(function(){
		var play= function(file){
			var audio= document.createElement('audio');
			audio.setAttribute('src', file);
			audio.play();
		}
		
		setTimeout(function(){play('OS/media/macos9/startup.wav')},1000);
		
		$('body').mouseover(function()
		{
		$(this).css({cursor: 'none'});
		});
		
	});
</script>
<em class="time" title="45000"></em>

<div class="top"></div>
<div class="bottom"></div>

