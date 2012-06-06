<!doctype html>
<head>
<script type="text/javascript" src="http://restart.dev.rehabstudio.com/scripts/jquery-1.4.3.min.js"></script>
	<style type="text/css">
		html, body, #container {
		overflow: hidden !important;
		cursor:url(blank.gif), -moz-zoom-in;
		}
		#win_dos { position:absolute;top:0px;left:0px;background:url(a_blink.gif) no-repeat 0 0;height:300px;width:700px;s }
		#win_dos_2 { position:absolute;top:0px;left:0px;background:url(dos_win_01.gif) no-repeat 0 0;height:300px;width:700px;}
		#win_dos_2_2 { position:absolute;top:0px;left:0px;background:url(bios-start_02.gif) no-repeat 0 0;height:600px;width:900px;}
		#win_dos_3 { position:absolute;width:640px;height:400px;left:50%;top:50%;margin:-200px 0 0 -320px;background:url(splash_Windows-1.gif) no-repeat 0 0; }
		
		.os, .set, #restart_detail, #social-home, .go-back { display: none !important;}
	</style>
	<script type="text/javascript">
		$(function(){
						var play= function(file){
				var audio= document.createElement('audio');
				audio.setAttribute('src', file);
				audio.play();
			}
			$('body').css('background','#000');
			play('bios.wav');
			setTimeout("$('#win_dos').hide();",2000);
			setTimeout(function(){$('body').prepend('<div id="win_dos_2_2"></div>');},4000);
			setTimeout("$('#win_dos_2_2').hide()",16000);
			setTimeout(function(){$('body').prepend('<div id="win_dos_2"></div>');},16000); 
			setTimeout("$('#win_dos_2').hide()",25000);
			setTimeout(function(){$('body').css('background','#000082').prepend('<div id="win_dos_3"></div>');},25000); 
			setTimeout("$('#win_dos_3').hide();$('body').css('background','#000');",33000);
			
			$('body').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});
		
			});
	</script>
	</head>
	<body>
	<em class="time" title="33000"></em>
	<div>
		<div id="win_dos"></div>
		
	</div>
	</body>
</html>
