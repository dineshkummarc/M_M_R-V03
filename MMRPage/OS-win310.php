
	<style type="text/css">
	html, body, #container {
		overflow: hidden !important;
		cursor:url(images/blank.gif), -moz-zoom-in;
		}
		#win_dos { position:absolute;top:0px;left:0px;background:url(images/win310-dos_win31.gif) no-repeat 0 0;height:300px;width:700px; }
		#win_dos_2 { position:absolute;top:0px;left:0px;background:url(images/win310-dos_win31_start2.gif) no-repeat 0 0;height:300px;width:700px;}
		#win_dos_3 { position:absolute;width:355px;height:425px;left:50%;top:50%;margin:-212.5px 0 0 -167.5px;background:url(images/win310-splash_win31.gif) no-repeat 0 0; }
		
		.os, .set, #restart_detail, #social-home, .go-back { display: none !important;}
	</style>
	<script>
		$(function(){
			var play= function(file){
				var audio= document.createElement('audio');
				audio.setAttribute('src', file);
				audio.play();
			}

			$('body').css('background','#000');
			setTimeout("$('#win_dos').hide();",4000);
			setTimeout(function(){play('http://www.therestartpage.com/OS/bios.wav');$('body').prepend('<div id="win_dos_2"></div>');},4000);
			setTimeout("$('#win_dos_2').hide()",15000);
			setTimeout(function(){play('http://www.therestartpage.com/OS/media/win310/login.mp3');$('body').prepend('<div id="win_dos_3"></div>');},15000);
			setTimeout("$('#win_dos_3').hide();",21000);
			
			$('body').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});
		
		});
	</script>

	<em class="time" title="21000"></em>
	<div>
		<div id="win_dos"></div>
	</div>
