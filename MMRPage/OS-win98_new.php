	
	<style>
	html, body, #container {
		overflow: hidden !important;
		cursor:url(images/blank.gif), -moz-zoom-in;
		height: 100%;
		}
		
	.os, .set, #restart_detail, #social-home, .go-back { display: none !important;}
	</style>
	
	<script>
		$(function(){
			var play= function(file){
				var audio= document.createElement('audio');
				audio.setAttribute('src', file);
				audio.play();
			}
			setTimeout("$('#two').hide();",0);
			setTimeout("$('#three').hide();",0);
			setTimeout("$('#four').hide();",0);
			setTimeout("$('#five').hide();",0);
			setTimeout("$('#six').hide();",0);
					
			setTimeout("$('#one').show();",0);
			setTimeout("$('#one').hide();",8000);
			
			setTimeout("$('#two').show();",8000);
			setTimeout("$('#two').hide();",21000);
			
			setTimeout("$('#three').show();",21000);
			setTimeout("$('#three').hide();",36000);
			
			setTimeout("$('#four').show();",36000);
			setTimeout("$('#four').hide();",39000);
			
			setTimeout("$('#five').show();",39000);
			setTimeout("$('#five').hide();",45000);
			
			setTimeout("$('#six').show();",45000);
			setTimeout("$('#six').hide();",48000);
			
			setTimeout(function(){play('http://www.therestartpage.com/OS/media/win98/login.wav')},44000);
			setTimeout(function(){play('http://www.therestartpage.com/OS/media/win98/logoff.wav')},0);
			
			$('body').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});					

		});
	</script>
<body>
	<em class="time" title="46000"></em>

	<iframe id="one" src="win98_1.html" width="100%" height="100%"></iframe>
	<iframe id="two" src="win98_bios_start_01.html" width="100%" height="100%"></iframe>
	<iframe id="three" src="win98_1.html" width="100%" height="100%"></iframe>
	<iframe id="four" src="win98_dos_01.html" width="100%" height="100%"></iframe>
	<iframe id="five" src="win98_1.html" width="100%" height="100%"></iframe>
	<iframe id="six" src="win98_2.html" width="100%" height="100%"></iframe>
</body>
