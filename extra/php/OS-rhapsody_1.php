
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

			setTimeout("$('#one').hide();",0);

			setTimeout("$('body').css('background','#000000');",0);
			
			setTimeout("$('#one').show();",1000);
			setTimeout("$('#one').hide();",95000);
			
			$('html').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});
			
			$('iframe').mouseover(function()
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
	<em class="time" title="95000"></em>

	<iframe id = "one" src = "OS/rhapsody_1.html" width = "100%" height = "100%"></iframe>
