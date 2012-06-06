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

			setTimeout("$('#two').hide();",0);
			setTimeout("$('#three').hide();",0);
			
			
			setTimeout("$('#one').show();",0);
			setTimeout("$('#one').hide();",8000);
			
			//setTimeout("$('body').css('background','#000000');",5000);
			
			setTimeout("$('#two').show();",8000);
			setTimeout("$('#two').hide();",24000);
			
			setTimeout("$('#three').show();",24000);
			setTimeout("$('#three').hide();",30000);
			
			$('html').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});
			
			$('body').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});
			
			$('iframe').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});

		});
	</script>
	<em class="time" title="30000"></em>

	<iframe id="one" src="http://www.therestartpage.com/OS/warp_1.html" width="100%" height="100%"></iframe>
	<iframe id="two" src="http://www.therestartpage.com/OS/warp_2.html" width="100%" height="100%"></iframe>
	<iframe id="three" src="http://www.therestartpage.com/OS/warp_3.html" width="100%" height="100%"></iframe>
