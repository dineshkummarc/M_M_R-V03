	<style type="text/css">
		html, body, #container {
		overflow: hidden !important;
		cursor:url(images/blank.gif), -moz-zoom-in;
		}
		.xp_screen {position:absolute;z-index:999;top:50%;left:50%;margin-left:-512px;margin-top:-384px;width:1024px;height:768px;}
		#xp_2 {display:none; z-index: 9999;}
		#xp_2 img {position:absolute;z-index:9999;}
		#xp_2 .xp_bg_header img.xp_header_position1 { top:0;left:0;float:left; z-index: 9999;}	
		#xp_2 .xp_bg_header img.xp_header_position2 { top:0;right:0;float:right; z-index: 9999;}	
		#xp_3 {background: url(images/xp-windows_xp_start_02.gif) no-repeat 0 0;display:none; z-index: 9999;}
		#xp_4 {display:none; z-index: 9999;}
		#xp_4 .xp_bg_header,#xp_1 .xp_bg_header { display:block;position:absolute;left:0px;top:0px;background:url(images/xp-windows_bg_c.png) repeat-x 0 0;height:200px;width:100%; z-index: 9999;}		
		#xp_4 .xp_bg_footer,#xp_1 .xp_bg_footer { display:block;position:absolute;left:0px;bottom:0;background:url(images/xp-xp_bg_bc.png) repeat-x 0 0;height:99px;width:100%; z-index: 9999;}
		#xp_1 #shut,#xp_4 #wel { display:none;position:absolute;width:273px;height:139px;left:50%;top:50%;margin-top:-99.5px;margin-left:-30px; z-index: 9999;}
		#xp_4 #wel { height:64px;width:220px;margin-top:-110px;margin-left:0px; z-index: 9999;} 
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
			setTimeout(function(){play('wav/windows_xp_error.wav')},0);
			$('body').css('background','#5a7edc');
			setTimeout(function(){play('wav/shutdown.wav')},500);
			setTimeout("$('#shut').fadeIn(110);",500);
			setTimeout("$('#xp_1').hide();",2900);
			setTimeout("$('body').css('background','#000');",2900);
			
			$('body').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});
		
		});
	</script>
	<em class="time" title="4000"></em>
	<div>
		<div id="xp_1">
			<div class="xp_bg_header">
				<img style="float:right;" src="images/xp-windows_bg_tr.png" class = "xp_header_position2" />
				<img src="images/xp-xp_bg_tl.png" class = "xp_header_position1"/>
			</div>
			<img src="images/xp-xp_shut.png" id="shut" />
			<div class="xp_bg_footer">
				<img src="images/xp-xp_bg_bl.png" />
				<img style="float:right;" src="images/xp-xp_bg_br.png" />
			</div>
		</div>
	</div>
