<style type="text/css">
	html, body, #container {
		overflow: hidden !important;
		cursor:url(images/blank.gif), -moz-zoom-in;
		}
 body,html {height:100%;padding:0;margin:0;background-position: left bottom;
	background-repeat: repeat-x;
	background-attachment: fixed;
	background:#008080;
}

.os, .set, #restart_detail, #social-home, .go-back { display: none !important;}
	
	.container {
		width:auto;
		height:auto;
		margin:0 auto 0 auto;
	}
	
	#shutdown {
		text-align:center;
	}
	
	.shutdown {
		height:100%;
	}
	</style>
	<script>
		$(function(){
			var play= function(file){
				var audio= document.createElement('audio');
				audio.setAttribute('src', file);
				audio.play();
			}
			
			setTimeout("$('body').css('background','#000000');",2000);
			setTimeout(function(){play('logoff.wav')},700);					
			
			setTimeout("$('#shutdown1').hide();",0);
			setTimeout("$('#shutdown2').hide()",0);
	
			setTimeout("$('#shutdown1').show();",3000);
			setTimeout("$('#shutdown1').hide();",11000);
			
			setTimeout("$('#shutdown2').show()",11000);
			setTimeout("$('#shutdown2').hide()",20000);
			
			$('body').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});

		});
	</script>
<body>
	<em class="time" title="20000"></em>
	<div class = "container">
		<div id = "shutdown">
			<p>
			<img src = "images/shutdown_1.gif" id = "shutdown1" class = "shutdown"/>
			<img src = "images/shutdown_2.jpg" id = "shutdown2" class = "shutdown"/>
			</p>
		</div> <!-- Bios Ends-->
	</div> <!-- Class Ends -->
</body>