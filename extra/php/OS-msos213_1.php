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

			setTimeout("$('#two').hide();",0);
			setTimeout("$('#three').hide();",0);
			
			
			setTimeout("$('#one').show();",0);
			setTimeout("$('#one').hide();",5000);
			
			setTimeout("$('body').css('background','#000000');",5000);
			
			setTimeout("$('#two').show();",6000);
			setTimeout("$('#two').hide();",17000);
			
			setTimeout("$('#three').show();",17000);
			setTimeout("$('#three').hide();",25000);
			
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
	<em class="time" title="25000"></em>

	<iframe id = "one" src = "OS/msos21301_1.html" width = "100%" height = "100%"></iframe>
	<iframe id = "two" src = "OS/msos21301_2.html" width = "100%" height = "100%"></iframe>
	<iframe id = "three" src = "OS/msos21301_3.html" width = "100%" height = "100%"></iframe>
