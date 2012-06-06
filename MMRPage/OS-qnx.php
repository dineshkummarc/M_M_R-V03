
<style>

html, body	{height:100%; width: 100%; margin:0; padding:0;}
html, body, #container {
		overflow: hidden !important;
		cursor:url(http://www.therestartpage.com/OS/media/qnx/blank.gif), -moz-zoom-in;
		}
		
	.os, .set, #restart_detail, #social-home, .go-back { display: none !important;}
		
#container {
		margin: 0 auto;
		text-align: left;
	}
	
body {
	vertical-align: text-top;
	background-color: #000;
	float: left;
	background-image: url(images/qnx-qnx-bios-start_01.gif);
	background-position: left top;
	background-repeat: no-repeat;
	position: relative;
	}

.top {
	background-image: url(images/qnx-bios_splash.gif);
	background-repeat: no-repeat;
	height: 500px;
	width: 100%;
	float: left;
	position:relative;
	background-position: center center;
}

.bottom {
	height: 42px;
	width: 100%;
	position: absolute;
	bottom: 20px;
	background-image: url(images/qnx-bios_bottom.gif);
	background-repeat: no-repeat;
	background-position: center 90%;
	}

.bg {
	height: 100%;
	width: 100%;
	position: absolute;
	z-index: -2;
	background-image: url(images/qnx-bg.gif);
	}


</style>

<script>
	$(function(){
		//alert($('body').height(););
		
		setTimeout("$('.top').fadeIn(0);",0);
		setTimeout("$('.top').hide();",16000);
		setTimeout("$('.bottom').fadeIn(0);",13500);
		setTimeout("$('.bottom').hide();",23000);
		setTimeout("$('.bg').fadeIn(0);",0);
		setTimeout("$('.bg').hide();",46000);
		
		$('body').mouseover(function()
		{
		$(this).css({cursor: 'none'});
		});

	});
</script>
</script>

</head>

<body>

<em class="time" title="46000"></em>

	<div class="top"></div>
	<div class="bottom"></div>
	<div class="bg"></div>

</body>
