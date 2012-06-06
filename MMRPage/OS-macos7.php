

<style type="text/css">
	
	html, body, #container {
		overflow: hidden !important;
		cursor:url(images/blank.gif), -moz-zoom-in;
		}
	
	.os, .set, #restart_detail, #social-home, .go-back { display: none !important;}
	
	#os7_bootup_1 {
			vertical-align: text-top;
			background-color: #000;
			width: 100%;
			height:100%;
			background: url(images/macos7-bg.gif) repeat;
			top:0;
			left:0;
			position: absolute;
	}
	
	#os7_bootup_2 {
			vertical-align: text-top;
			background-color: #f2f2f2;
			float: left;
			background-image: url(images/macos7-bg1.gif);
			background-repeat: repeat;
			top:0;
			left:0;
			width:100%;
			height:100%;
			display:none;
			position: absolute;
	}
	
	#os7_bootup_3 {
			vertical-align: text-top;
			background-color: #f2f2f2;
			float: left;
			background-image: url(images/macos7-bg1.gif);
			background-repeat: repeat;
			top:0;
			left:0;
			width:100%;
			height:100%;
			display:none;
			position: absolute;
	}
	
	#os7_bootup_4 {
			vertical-align: text-top;
			background-color: #f2f2f2;
			float: left;
			background-image: url(images/macos7-bg1.gif);
			background-repeat: repeat;
			top:0;
			left:0;
			width:100%;
			height:100%;
			display:none;
			position: absolute;
	}
	
	.top {
			background-image: url(images/macos7-loading.gif);
			background-repeat: no-repeat;
			height: 100%;
			width: 100%;
			float: left;
			position:relative;
			background-position: center center;
	}
	
	.weemac {
			background-image: url(images/macos7-icon_loading.gif);
			background-repeat: no-repeat;
			height: 100%;
			width: 100%;
			float: left;
			position:relative;
			background-position: center center;
	}
	
	.loading {
		background-image: url(images/macos7-splash_loading.gif);
		background-repeat: no-repeat;
		z-index: 10;
		height: 100%;
		width: 100%;
		background-position: center center;
		}
		
	.icons {
		background-image: url(images/macos7-icons.gif);
		background-repeat: no-repeat;
		height: 42px;
		width: 402px;
		position: absolute;
		left: 20px;
		bottom: 20px;
		}
	
	</style>
	
	<script>
		$(function(){
			$('body').css('background', '#000');
			var play= function(file){
				var audio= document.createElement('audio');
				audio.setAttribute('src', file);
				audio.play();
			}
			
			setTimeout("$('#os7_bootup_1').show();",1000);
					
			setTimeout("$('#os7_bootup_1').hide();",9000);
			
			setTimeout("$('#os7_bootup_2').show();$('body').css('background', '#f2f2f2');",9000);
			setTimeout("$('#os7_bootup_2').hide();",12000);
			
			setTimeout("$('#os7_bootup_3').show();$('body').css('background', '#f2f2f2');",12000);
			setTimeout("$('#os7_bootup_3').hide();",17001);
			
			setTimeout("$('#os7_bootup_4').show();$('body').css('background', '#008080');",17000);
			setTimeout("$('#os7_bootup_4').hide();",40000);
			
			setTimeout("$('.loading').show();$('body').css('background', '#008080');",17000);
			setTimeout("$('.loading').hide();",40000);
			
			setTimeout("$('.icons').show();$('body').css('background', '#008080');",17000);
			setTimeout("$('.icons').hide();",40000);
			
			
			//setTimeout(function(){play('http://www.therestartpage.com/OS/media/win95/login.wav')},41000);					

			setTimeout("$('body').css('background','#000000');",40000);
			//setTimeout("$('#bootup').hide();",51000);
			
			$('body').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});

		});
	</script>

	<em class="time" title="40000"></em>

	<div id = "os7_bootup_1"></div>
	
	<div id = "os7_bootup_2">
		<div class="weemac"></div>
	</div>
	
	<div id = "os7_bootup_3">
		<div class = "top"></div>
	</div>
	
	<div id = "os7_bootup_4">
		<div class="loading">
			<div class="icons"></div>
		</div>
	</div>

