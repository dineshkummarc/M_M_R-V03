
	<style type="text/css">
		
		html, body	{
			height:100%;
			width: 100%;
			margin:0;
			padding:0;
			background-color: #000;
		}
		
		.os, .set, #restart_detail, #social-home, .go-back { display: none !important;}
		
		.total {
			left:0;
			top:0;
			padding:0;
			width:100%;
			height:100%;
			
			}
		
		.screen {
			background-image:url(win95_900.gif);
			background-position:center center;
			background-repeat:no-repeat;
			height:675px;
			left:50%;
			margin:-337px -450px auto;
			position:absolute;
			top:50%;
			width:900px;
			}
		
		.bottom {
			width: 100%;
			
			bottom: 0px;
			background-image: url(win95_loading.gif);
			background-repeat: repeat-x;
			background-position: left center;
			bottom:0px;
			float:left;
			height:15px;
			position:absolute;
			width:100%;
		}
		
		.shut {
			width:100%;
			height:100%;
			position:absolute;
			z-index: 4;
			background-image: url(Windows95_shuts_900_animado.gif);
			background-repeat: no-repeat;
			background-position: center center;
			}
			
		.dos {
			width:100%;
			height:100%;
			position:absolute;
			z-index: 3;
			background-image: url(win95_bios-start_02.gif);
			background-repeat: no-repeat;
			background-position: left top;
			}
			
		.blink {
			width:100%;
			height:100%;
			position:absolute;
			z-index: 2;
			background-image: url(blinks_2sec.gif);
			background-repeat: no-repeat;
			background-position: left top;
			}
			
		.bg {
			width:100%;
			height:100%;
			position:absolute;
			z-index: 1;
			background-image: url(bg.gif);
			background-repeat: repeat;
			}
		
	</style>
	
	<script>
	
		$(function(){

			var play= function(file){

				var audio= document.createElement('audio');
				audio.setAttribute('src', file);
				audio.play();
			}
			
			setTimeout(function(){play('logoff.wav')},500);
			
			setTimeout(function(){play('login.wav')},38000);

		});
	
	</script>
	
	<body>
	
	<em class="time" title="46000"></em>
	
		<div class="shut"></div>
		<div class="dos"></div>
		<div class="blink"></div>
		<div class="bg"></div>
		
		<div class="screen">
			<div class="bottom"></div>
		</div>

	</body>