<style type="text/css">
			
			body {
		overflow: hidden !important;
		cursor:url(OS/../images/blank.gif), -moz-zoom-in;
		}
			html {
				
				overflow: hidden !important;
				}
		
			body {
				margin: 0;
				text-align: center;
			}
			
			.os, .set, #restart_detail, #social-home, .go-back { display: none !important;}
			
			#container {
				margin: 0 auto;
				text-align: left;
				overflow: hidden !important;
			}
			
			#me_1 {
				width: 100%;
				height: 550px;
				display: none;
				background: url(OS/media/windows-me/windows_me.gif) no-repeat center #FFFFFF;
			}
			
			#me_2 {
				position: absolute:
				bottom: 0px;
				width: 100%;
				height: 16px;
				display: none;
				background: url(OS/media/windows-me/me_loading.gif) repeat;
			}
			
			#me_3, #me_4 {
				width: 100%;
				height: 100%;
				display: none;
				background: #000000;
			}
			
			#bios_tl {position:absolute;top:0;left:0;height:400px;width:730px;background:url('OS/media/DOS/bios-start_01.gif') no-repeat 0 0;}
			#bios_tl_2 {position:absolute;display:none;top:0;left:0;height:600px;width:900px;background:url('OS/OS/media/DOS/bios-start_01.gif') no-repeat 0 0;}
			#bios_bl {position:absolute;bottom:10px;left:0px;height:40px;width:730px;background:url('OS/media/DOS/bios-start_01.gif') no-repeat 0 -540px;}
			#bios_tr {position:absolute;top:0px;right:0px;height:180px;width:180px;background:url('OS/media/DOS/bios-start_01.gif') no-repeat -720px 0px;}
			#bios_blink {display:none;position:absolute;top:-3px;left:-12px;height:180px;width:180px;background:url('OS/media/DOS/blinks.gif') no-repeat 0 0;}	
			#dos_blink {display:none;position:absolute;top:0px;left:0px;height:500px;width:800px;background:url('OS/media/DOS/blinks.gif') no-repeat 0 0;}
		
		}
		</style>
		
		<script>
			$(function(){
				$('body').css('background','#fff');
		var play= function(file){
					var audio= document.createElement('audio');
					audio.setAttribute('src', file);
					audio.play();
				}
		
				
				setTimeout(function(){play('OS/media/windows-me/logoff.wav')},400);
				setTimeout(function(){play('OS/media/windows-me/login.wav')},33000);
					
					setTimeout(function(){play('OS/bios.wav');$('#bios_tr,#bios_bl,#bios_tl').hide();},0);
				
					setTimeout("$('#me_1').fadeIn(0);",0);
					setTimeout("$('#me_1').fadeOut(100);",16000);
					setTimeout("$('#me_2').fadeIn(100);",5000);
					setTimeout("$('#me_2').fadeOut(100);",16000);
					setTimeout("$('#me_3').fadeIn(10);$('body').css('background','#000');",16001);
					setTimeout("$('#me_3').fadeOut(100);",17000);
					setTimeout("$('#me_4').fadeIn(10);",17001);
					setTimeout("$('#me_4').fadeOut(100);",20000);
					
					setTimeout("$('#bios_tr,#bios_bl,#bios_tl').show();",20000);
					setTimeout("$('#bios_tr,#bios_bl,#bios_tl').hide().remove();",26000);
					setTimeout("$('#bios_tr').hide();",23000);
					
					setTimeout("$('#bios_blink').show();",26000);
					setTimeout("$('#bios_blink').hide();",29500);
					
					setTimeout("$('#me_1').fadeIn(0);$('body').css('background','#fff');",29501);
					setTimeout("$('#me_1').fadeOut(100);",41000);
					setTimeout("$('#me_2').fadeIn(100);",29501);
					setTimeout("$('#me_2').fadeOut(100);",41000);
					
					$('body').mouseover(function()
					{
					$(this).css({cursor: 'none'});
					});
		
			});
		</script>
	</head>
	
	<body>
		<em class="time" title="41000"></em>
		<div id="container">
		
			<div id="me_1"></div>
			<div id="me_3"></div>
			<div id="me_4">
				<img src="OS/media/windows-me/underscore.gif">
			</div>
				<div id="bios_tl"></div>
				<div id="bios_tl_2"></div>
				<div id="bios_blink"></div>
				<div id="bios_bl"></div>
				<div id="bios_tr"></div>
		</div>
			
		<div id="me_2"></div>
	</body>

	
	