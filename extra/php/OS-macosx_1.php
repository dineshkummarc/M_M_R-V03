	
	<style>
	html, body, #container {
		overflow: hidden !important;
		cursor:url(OS/../images/blank.gif), -moz-zoom-in;
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
						
			setTimeout("$('#one').show();",0);
			setTimeout("$('#one').hide();",5000);
			
			setTimeout("$('#two').show();",5000);
			setTimeout("$('#two').hide();",15000);
			
			setTimeout("$('#three').show();",15000);
			setTimeout("$('#three').hide();",23000);
			
			setTimeout(function(){play('OS/media/macosx/startup.wav')},8500);
			
			$('body').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});					

		});
	</script>
<body>
	<em class="time" title="23000"></em>

	<iframe id="one" src="OS/macosx_1.html" width="100%" height="100%"></iframe>
	<iframe id="two" src="OS/macosx_2.html" width="100%" height="100%"></iframe>
	<iframe id="three" src="OS/macosx_3.html" width="100%" height="100%"></iframe>
</body>
	