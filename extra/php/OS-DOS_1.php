	<!--<script src="../scripts/jquery-1.4.3.min.js"></script>-->
	<style type="text/css">
	html, body, #container {
		overflow: hidden !important;
		cursor:url(OS/../images/blank.gif), -moz-zoom-in;
		}
	
	.os, .set, #restart_detail, #social-home, .go-back { display: none !important;}
	
		/*.w_dos {position:absolute;z-index:999;top:50%;left:50%;margin-left:-512px;margin-top:-384px;width:1024px;height:768px;}*/

		#bios_tl {position:absolute;top:0;left:0;height:400px;width:730px;background:url('OS/media/DOS/bios-start_01.gif') no-repeat 0 0;}
		#bios_tl_2 {position:absolute;display:none;top:0;left:0;height:600px;width:900px;background:url('OS/media/DOS/bios-start_01.gif') no-repeat 0 0;}
		#bios_bl {position:absolute;bottom:10px;left:0px;height:40px;width:730px;background:url('OS/media/DOS/bios-start_01.gif') no-repeat 0 -540px;}
		#bios_tr {position:absolute;top:0px;right:0px;height:180px;width:180px;background:url('OS/media/DOS/bios-start_01.gif') no-repeat -720px 0px;}
		#bios_blink {display:none;position:absolute;top:-3px;left:-12px;height:180px;width:180px;background:url('OS/media/DOS/blinks.gif') no-repeat 0 0;}	
		#dos_blink {display:none;position:absolute;top:0px;left:0px;height:500px;width:800px;background:url('OS/media/DOS/blinks.gif') no-repeat 0 0;}	
		#dos_start { display:none;position:absolute;top:0px;left:0px;height:500px;width:800px;background:url('OS/media/DOS/dos_win_01.gif') no-repeat 0 0; }
	}
	</style>
	<script>
		$(function(){
			$('body').css('background','#000');
			setTimeout("$('#bios_tr,#bios_bl,#bios_tl').hide();$('#bios_tl_2').show();",5800);
			setTimeout("$('#bios_tl_2').hide();",8000);
			setTimeout("$('#bios_blink').show();",8000);
			setTimeout(function(){$("#bios_blink").hide();$("#dos_start").show();},9000);
			
			$('body').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});
		
		});
	</script>
	<em class="time" title="18000"></em>
	<div><!-- OPEN holder -->
		<div id="bios_tl"></div>
		<div id="bios_tl_2"></div>
		<div id="bios_blink"></div>
		<div id="dos_start"></div>
		<div id="bios_bl"></div>
		<div id="bios_tr"></div>
	</div><!-- CLOSE holder -->
