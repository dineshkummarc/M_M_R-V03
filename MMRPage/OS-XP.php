	<style type="text/css">
		html, body, #container {
		overflow: hidden !important;
		cursor:url(images/blank.gif), -moz-zoom-in;
		}
		body { /*background:#000;*/ background:#5a7edc; z-index: 9999;}
		#xp_3 {background: url(images/xp-windows_xp_start_02.gif) no-repeat 0 0;display:none; z-index: 9999;}
		#xp_4 {display:none; z-index: 9999;}
		/*#xp_3 {background: url(images/xp-windows_xp_start_03.png) no-repeat 0 0;display:none;}*/
		#xp_4 .xp_bg_header,#xp_1 .xp_bg_header { display:block;position:absolute;left:0px;top:0px;background:url(images/xp-windows_bg_c.png) repeat-x 0 0;height:200px;width:100%;  z-index: 9999;}		
		#xp_4 .xp_bg_footer,#xp_1 .xp_bg_footer { display:block;position:absolute;left:0px;bottom:0;background:url(images/xp-xp_bg_bc.png) repeat-x 0 0;height:99px;width:100%;  z-index: 9999;}
		#xp_1 #shut,#xp_4 #wel { display:none;position:absolute;width:273px;height:139px;left:50%;top:50%;margin-top:-99.5px;margin-left:-30px; z-index: 9999;}
		#xp_4 #wel { height:64px;width:220px;margin-top:-110px;margin-left:0px;  z-index: 9999;}

		#bios_tl {position:absolute;top:0;left:0;height:400px;width:730px;background:url('images/xp-bios-start_01.gif') no-repeat 0 0; z-index: 9999;}
		#bios_tl_2 {position:absolute;display:none;top:0;left:0;height:600px;width:900px;background:url('images/xp-bios-start_01.gif') no-repeat 0 0; z-index: 9999;}
		#bios_bl {position:absolute;bottom:10px;left:0px;height:40px;width:730px;background:url('images/xp-bios-start_01.gif') no-repeat 0 -540px; z-index: 9999;}
		#bios_tr {position:absolute;top:0px;right:0px;height:180px;width:180px;background:url('images/xp-bios-start_01.gif') no-repeat -720px 0px; z-index: 9999;}
		#bios_blink {display:none;position:absolute;top:-3px;left:-12px;height:180px;width:180px;background:url('images/xp-blinks.gif') no-repeat 0 0; z-index: 9999;}	
		#dos_blink {display:none;position:absolute;top:0px;left:0px;height:500px;width:800px;background:url('images/xp-blinks.gif') no-repeat 0 0; z-index: 9999;}	

		.xp_screen {position:absolute;z-index:999;top:50%;left:50%;margin-left:-512px;margin-top:-384px;width:1024px;height:768px; z-index: 9999;}
		#xp_2 {display:none;}
		#xp_2 img {position:absolute;}
		#xp_2 img.scene1 { top:0;left:0;float:left;	}	
		#xp_2 img.scene2 { top:0;right:0;float:right;}	
 		#xp_2 img.scene3 { bottom:0;left:0;float:left;}	
 		
 		.os, .set, #restart_detail, .go-back, #social-home { display: none !important;}
	}
	</style>
	<script>
		$(function(){

			var play= function(file){

				var audio= document.createElement('audio');
				audio.setAttribute('src', file);
				audio.play();
			}
			$('body').css('background','#5a7edc');
			setTimeout(function(){play('wav/windows_xp_error.wav')},0);
			
			setTimeout(function(){play('wav/shutdown.wav')},500);

			setTimeout("$('#shut').fadeIn(110);",500);
			$('#xp_1').delay(8000).fadeOut(1);
			setTimeout("$('body').css('background','#000');",8100);			
			setTimeout(function(){$('#xp_2').show();play('OS/bios.wav');},8100);
			setTimeout("$('#bios_tr,#bios_bl,#bios_tl').hide().remove();$('#bios_tl_2').show();",8100);
			setTimeout("$('#bios_tl_2').hide().remove();",10300);
			setTimeout("$('#bios_blink').show();",103000);
			setTimeout(function(){$("#bios_blink").hide();},11300);
			$('#xp_2').delay(12300).hide();
			
			$('#xp_3').delay(13300).fadeIn(1800).delay(8000).fadeOut(1);
			
			setTimeout(function(){play('wav/startup.wav')}	,23900);			

			setTimeout("$('#xp_4').show();$('body').css('background','#5a7edc');",23900);
			setTimeout("$('#wel').fadeIn(100)",25400);
			
			$('body').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});

		});
	</script>
	<em class="time" title="28000"></em>
		
	<div>
		<div id="xp_1">
			<div class="xp_bg_header">
				<img style="float:right;" src="images/xp-windows_bg_tr.png" />
				<img src="images/xp-xp_bg_tl.png" />
			</div>
			<img src="images/xp-xp_shut.png" id="shut" />
			<div class="xp_bg_footer">
				<img src="images/xp-xp_bg_bl.png" />
				<img style="float:right;" src="images/xp-xp_bg_br.png" />
			</div>
		</div>
		<div id="xp_2">
			<!--<img src="images/xp-xp_boot_tl.png" class = "scene1"/>
			<img src="images/xp-xp_boot_tr.png" class = "scene2"/>
			<img src="images/xp-xp_boot_bl.png" class = "scene3"/>-->
			<div id="bios_tl"></div>
		<div id="bios_tl_2"></div>
		<div id="bios_blink"></div>
		<div id="bios_bl"></div>
		<div id="bios_tr"></div>
		</div>		
		<div class="xp_screen" id="xp_3"></div>
		<div id="xp_4">
			<div class="xp_bg_header">
				<img style="float:right;" src="images/xp-windows_bg_tr.png" />
				<img src="images/xp-xp_bg_tl.png" />
			</div>

			<img src="images/xp-xp_welcome.png" id="wel" />
			<div class="xp_bg_footer">
				<img style="float:right;" src="images/xp-xp_bg_br.png" />
				<img src="images/xp-xp_bg_bl.png" />
			</div>
		</div>
	</div>
