
	<style type="text/css">
		html, body, #container {
		overflow: hidden !important;
		cursor:url(images/blank.gif), -moz-zoom-in;
		}
		/*.w_dos {position:absolute;z-index:999;top:50%;left:50%;margin-left:-512px;margin-top:-384px;width:1024px;height:768px;}*/
		
		.os, .set, #restart_detail, #social-home, .go-back { display: none !important;}
		
		#win2000_sd {position:absolute;top:50%;left:50%;height:144px;width:417px;margin:-72px 0 0 -208.5px;background:url('images/win2000-shutting_2000.gif') no-repeat 0 0;}
		#bios_tl {position:absolute;top:0;left:0;height:400px;width:730px;background:url('images/win2000-bios-start_01.gif') no-repeat 0 0;}
		#bios_tl_2 {display:none;position:absolute;display:none;top:0;left:0;height:600px;width:900px;background:url('images/win2000-bios-start_01.gif') no-repeat 0 0;}
		#bios_bl {position:absolute;bottom:10px;left:0px;height:40px;width:730px;background:url('images/win2000-bios-start_01.gif') no-repeat 0 -540px;}
		#bios_tr {position:absolute;top:0px;right:0px;height:180px;width:180px;background:url('images/win2000-bios-start_01.gif') no-repeat -720px 0px;}
		#bios_blink {display:none;position:absolute;top:-3px;left:-12px;height:180px;width:180px;background:url('images/win2000-blinks.gif') no-repeat 0 0;}	
		#dos_blink {display:none;position:absolute;top:0px;left:0px;height:500px;width:800px;background:url('images/win2000-blinks.gif') no-repeat 0 0;}	
		#win2000_start { display:none;position:absolute;top:50%;left:50%;height:100%;width:900px;margin:-337.5px 0 0 -450px;background:url('images/win2000-loading_win98.gif') no-repeat 0 0; }
		#win2000_load { position:absolute;bottom:0px;left:50%;height:120px;width:900px;margin:0 0 0 -450px;background:url('images/win2000-win2000_dos_loading.gif') no-repeat 0 0; }
		#win2000_splash {position:absolute;top:50%;left:50%;height:500px;width:900px;margin:-250px 0 0 -450px;background:url(images/win2000-windows2000_splash.gif) no-repeat 0 0; }
		#win2000_bt_splash { position:absolute;padding-top:16px;background:url(images/win2000-windows2000_splash_loading.gif) repeat-x top center #c3c3c3;bottom:0px;left:0px;width:100%;text-align:center;}
		#win2000_loading {position:absolute;top:50%;left:50%;height:144px;width:417px;margin:-72px 0 0 -208.5px;background:url('images/win2000-starting_2000.gif') no-repeat 0 0; }
		
	}
	</style>
	<script type="text/javascript">
		$(function(){
			var play= function(file){
				var audio= document.createElement('audio');
				audio.setAttribute('src', file);
				audio.play();	
			}
			$('body').css('background','#3a6ea5');
			//$('body').css('background','#fff');
			//function(){play('images/win2000/logoff.wav');}
			setTimeout(function(){$('#win2000_sd').hide();$('body').css('background','#000');$('#win_2000_cont_s').prepend('<div id="bios_tr"></div><div id="bios_bl"></div><div id="bios_tl"></div>');},7000);
			setTimeout(function(){$('#bios_tr,#bios_bl,#bios_tl').hide().remove();$('#bios_tl_2').show();play('http://www.therestartpage.com/OS/bios.wav');},12800);
			setTimeout("$('#bios_tl_2').hide().remove();",15000);
			setTimeout("$('#bios_blink').show();",15000);
			
			setTimeout(function(){$('#win_2000_cont_s').append('<div id="win2000_load"></div>');$("#bios_blink").hide();},18000);
			setTimeout(function(){$("#win2000_load").hide().remove();},27000);
			
			/*setTimeout(function(){play('http://www.therestartpage.com/media/win98/login.wav');},13000);
			setTimeout("$('#win98_start').hide();$('body').css('background','#008080');",15000);*/

			setTimeout(function(){$('body').css('background','#fff');$("#win_2000_cont_s").prepend('<div id="win2000_splash"></div><div id="win2000_bt_splash"><img src="images/win2000/windows2000_splash_loading_2.gif"/></div>');},27000);

			setTimeout("$('#win2000_splash').hide().remove();$('#win2000_bt_splash').hide().remove();",35000);
			setTimeout(function(){$('body').css('background','#3a6ea5');},35000);
			setTimeout(function(){$('body').prepend('<div id="win2000_loading"></div>');},39000);
			setTimeout(function(){play('images/win2000/login.wav');},41000);
			setTimeout(function(){$('#win2000_loading').hide();},44000);
			
			$('body').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});
		
		});
	</script>

	<em class="time" title="48000"></em>

		<div id="win2000_sd"></div>
	<div id="win_2000_cont_s"><!-- OPEN holder -->
		<!--<div id="bios_tl_2"></div>-->
		<div id="bios_blink"></div>	
		<!--<div id="win98_start"></div>-->
		<!--<div id="win2000_splash"></div>-->
		
	</div><!-- CLOSE holder -->
