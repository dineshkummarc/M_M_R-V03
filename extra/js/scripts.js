/*
	Preloader (from load.min.js)
*/
	
	var QueryLoader = {

	
	overlay: "",
	loadBar: "",
	preloader: "",
	items: new Array(),
	doneStatus: 0,
	doneNow: 0,
	selectorPreload: ".containter",
	ieLoadFixTime: 2000,
	ieTimeout: "",
		
	init: function() {
		if (navigator.userAgent.match(/MSIE (\d+(?:\.\d+)+(?:b\d*)?)/) == "MSIE 6.0,6.0") {
			//break if IE6			
			return false;
		}
		
		//$('body,html').css('overflow','hidden');
		$.support.touch = typeof Touch === 'object';
	    if ($.support.touch) {
	        $('#restart_detail,.os').remove();
			$('#loading_m').css({'color':'#000','width':'500px'}).text('Email form here').show();
			$('body').css('background','#fff');
	    }else{

			if (QueryLoader.selectorPreload == "body") {
				QueryLoader.spawnLoader();
				QueryLoader.getImages(QueryLoader.selectorPreload);
				QueryLoader.createPreloading();
			} else {
				$(document).ready(function() {
					QueryLoader.spawnLoader();
					QueryLoader.getImages(QueryLoader.selectorPreload);
					QueryLoader.createPreloading();
				});
			}
		
		QueryLoader.ieTimeout = setTimeout("QueryLoader.ieLoadFix()", QueryLoader.ieLoadFixTime);
		}
	},
	
	ieLoadFix: function() {
		var ie = navigator.userAgent.match(/MSIE (\d+(?:\.\d+)+(?:b\d*)?)/);
		/*if (ie[0].match("MSIE")) {
			while ((100 / QueryLoader.doneStatus) * QueryLoader.doneNow < 100) {
				QueryLoader.imgCallback();
			}
		}*/
	},
	
	imgCallback: function() {
		QueryLoader.doneNow ++;
		QueryLoader.animateLoader();
	},
	
	getImages: function(selector) {
		var everything = $(selector).find("*:not(script)").each(function() {
			var url = "";
			
			if ($(this).css("background-image") != "none") {
				var url = $(this).css("background-image");
			} 
			
			/* Removed 060112 J
			else if (typeof($(this).attr("src")) != "undefined" && $(this).attr("tagName").toLowerCase() == "img") {
				var url = $(this).attr("src");
			}
			*/
			
			url = url.replace("url(\"", "");
			url = url.replace("url(", "");
			url = url.replace("\")", "");
			url = url.replace(")", "");
			
			if (url.length > 0) {
				QueryLoader.items.push(url);
			}
		});
	},
	
	createPreloading: function() {
		QueryLoader.preloader = $("<div></div>").appendTo(QueryLoader.selectorPreload);
		$(QueryLoader.preloader).css({
			height: 	"0px",
			width:		"0px",
			overflow:	"hidden"
		});
		
		var length = QueryLoader.items.length; 
		QueryLoader.doneStatus = length;
		
		for (var i = 0; i < length; i++) {
			var imgLoad = $("<img></img>");
			$(imgLoad).attr("src", QueryLoader.items[i]);
			$(imgLoad).unbind("load");
			$(imgLoad).bind("load", function() {
				QueryLoader.imgCallback();
			});
			$(imgLoad).appendTo($(QueryLoader.preloader));
		}
	},

	spawnLoader: function() {
		if (QueryLoader.selectorPreload == "body") {
			var height = $(window).height();
			var width = $(window).width();
			var position = "fixed";
		} else {
			var height = $(QueryLoader.selectorPreload).outerHeight();
			var width = $(QueryLoader.selectorPreload).outerWidth();
			var position = "absolute";
		}
		var left = $('body').offset()['left'];
		var top = $('body').offset()['top'];
		
		QueryLoader.overlay = $("<div></div>").appendTo($(QueryLoader.selectorPreload));
		$(QueryLoader.overlay).addClass("QOverlay");
		$(QueryLoader.overlay).css({
			position: position,
			top: top,
			left: left,
			width: width + "px",
			height: height + "px"
		});
		QueryLoader.loadBar = $("<div></div>").appendTo($(QueryLoader.overlay));
		$(QueryLoader.loadBar).addClass("QLoader");
		
		$(QueryLoader.loadBar).css({
			position: "relative",
			top: "50%",
			width: "0%"
		});
	},
	
	animateLoader: function() {
		var perc = (100 / QueryLoader.doneStatus) * QueryLoader.doneNow;

		//$('#loading_m span').text(perc.toFixed(0) + '%');
		
		if (perc > 98) {
			
			$('.w-100,.inner').stop().animate({'width':perc+'%'}, 500, "linear", function() { 
				QueryLoader.doneLoad();
			});
		} 
		
		else {
			$(QueryLoader.loadBar).stop().animate({
				width: perc + "%"
			}, 500, "linear", function() { });

			$('.inner').animate({'width':'798px'},1800);
			$('.inner2').animate({'width':'796px'},1800);		

			$('.w-100,.inner').stop().animate({'width':perc+'%'}, 500, "linear", function() { });


			//$('.inner').stop().animate({'width':perc+'%'}, 500, "linear", function() { });

		}
	},
	
	doneLoad: function() {
		clearTimeout(QueryLoader.ieTimeout);
		
		
		if (QueryLoader.selectorPreload == "body") {
			var height = $(window).height();
		} else {
			var height = $(QueryLoader.selectorPreload).outerHeight();
		}
		$('#m-loading, #main-loader').hide().remove();
		$('.os,#restart_detail,#social-home').delay(20).fadeIn();
		$(QueryLoader.overlay).remove();
		$(QueryLoader.preloader).remove();
	}
}

/*
	Main scripts 
*/

$(function(){

	// Hide all windows until loaded
	$('.os, #restart_detail, #social-home').hide();
	
	// Temp loading message
	$('body').prepend('<div id="m-loading"></div>');
	$('#m-loading').load('loader/test.php');
	
	// Preload the Jazz
	QueryLoader.selectorPreload = "body";
	QueryLoader.init();
	
	
	// Draggable OS windows
	$( ".os" ).draggable({ stack: ".os" });
	$("img").mousedown(function(){
    		$('.os').draggable("disable");
  		});
  		$("*").mouseup(function(){
    		$('.os').draggable("enable");
  		});
	// Windows ME custom select
	$('ul#windows95_selection').data('sel','win95_sh');
	$('ul#windows_98_checkboxes').data('sel','win98_re');
	$('ul#q_selection').data('sel','qnx-end'); 
	var duration,reset = function(){
		setTimeout("$('#result').remove();$('.os,#restart_detail,#home-social').show();$('body').css('background','#333');",duration);
	}
	var stage = function(url){
		$('body').prepend('<div id="result"></div>');
		$('.os,#restart_detail,#home-social').hide();
		$('#result').load(url,function(){
			duration = $('#result em.time').attr('title');
			reset();
		});
	}
	var msg_count = function(){
		return $('.m-active').size();
	}

	var revert_msg = function(){
		$('#bluescreen').hide();
		$('body').css('background','#333');
		$('section,#show_details').show();
		$('.msg-box').addClass('m-active').show();
	}

	var deathscreen = function(){
		$('.os,.m-active,#restart_detail,#home-social').hide();
		$('html').css('background','#00C').show();
		$('#bluescreen').show();
		$(document).keyup(function(e) {
			if (e.keyCode) { revert_msg(); }
			$('html').css('background','#333').show();
			   
		});
	}
	$('.os_m_restart').mouseup(function(){
		stage('OS/XP.php');
	});
	
	$('#rhapsody_restart').mouseup(function(){
		stage('OS/rhapsody.php');
	});
	
	$('#macos9_restart').mouseup(function(){
		stage('OS/macos9.php');
	});
	
	$('#ms13_restart').mouseup(function(){
		stage('OS/msos213.php');
	});
		
	$('input[name="win_95_op"]').change(function(){
		$('#windows95_selection label').css('border','1px solid #c0c0c0');
	    $(this).next('label').css('border','1px dotted #000');
	});
	$('.win101_ok').click(function(){
		stage('OS/win101.php');
	});

	$('.msg-box-oc').click(function(){
		$(this).parent('li').parent('ul').parent('section').hide().removeClass('m-active');
		if(msg_count()===0){
			setTimeout(deathscreen,500);
		}
	});
	$('.xp_shutdown_b').mouseup(function(e){
		e.preventDefault();
		stage('OS/XP_sh.php');
	});
	$('.xp_standby_b').mouseup(function(e){
		e.preventDefault();
		var bx = '<div id="xp_greyscale" style="position:absolute;z-index:9999;top:0;left:0;height:100%;width:100%;background:#222;opacity:0.8;"></div>';
		$('body').append(bx);
		var play= function(file){

			var audio= document.createElement('audio');
			audio.setAttribute('src', file);
			audio.play();
		}
		setTimeout(function(){play('http://localhost:8888/OS/media/xp/windows_xp_error.wav')},0);
		setTimeout("$('#xp_greyscale').hide().remove();$('section,#more_details').hide();$('body').css('background','#000');",2000);
		setTimeout("$('section,#more_details').show();$('body').css('background','#333');",4000);
	});
	$('.msg-box-li').click(function(){
		$(this).parent('ul').parent('section').hide();
		if(msg_count()===0){
			setTimeout(deathscreen,500);
		}
	})
	$('.msg-box,.windows95_x').click(function(){
		$(this).parent('section').fadeOut(1).removeClass('m-active');
		if(msg_count()===0){
			setTimeout(deathscreen,500);
		}
	});
	$('.win_me_ok').click(function(){
		stage('OS/windows-me.php');
	});
	$('.win95-radio').click(function(){
		var acc = 'win95-radio-accept';
		var racc = 'radio-label-curr';
		if( $(this).hasClass(acc) ) {
			$(this).removeClass(acc);
			$('#windows95_selection .radio-label').removeClass(racc);
			$('ul#windows95_selection').removeData('sel');
		} else {
			$('ul#windows95_selection').data('sel',$(this).attr('id'));
			$('.win95-radio').removeClass(acc);
			$('ul#windows95_selection li .radio-label').removeClass(racc);
			$(this).addClass(acc).next('.radio-label').addClass(racc);
		}
	});		
	$('ul#windows_98_checkboxes li .radio-label').click(function(){
		var acc = 'win98-radio-accept';
		var racc = 'radio-label-curr';
		if( $(this).hasClass(racc) ) {
			$(this).removeClass(racc);
			$('ul#windows_98_checkboxes').removeData('sel');
		} else {
			$('.win98-radio').removeClass(acc);
			$('ul#windows_98_checkboxes').data('sel',$(this).prev('.win98-radio').attr('id'));
			$('ul#windows_98_checkboxes li .radio-label').removeClass(racc);
			$(this).addClass(racc).prev('.win98-radio').addClass(acc);
		}
	});
	$('.win98-radio').click(function(){
		var acc = 'win98-radio-accept';
		var racc = 'radio-label-curr';
		if( $(this).hasClass(acc) ) {
			$(this).removeClass(acc);
			$('#windows_98_checkboxes .radio-label').removeClass(racc);
			$('ul#windows_98_checkboxes').removeData('sel');
		} else {
			$('ul#windows_98_checkboxes').data('sel',$(this).attr('id'));
			$('.win98-radio').removeClass(acc);
			$('ul#windows_98_checkboxes li .radio-label').removeClass(racc);
			$(this).addClass(acc).next('.radio-label').addClass(racc);
		}
	});
	$('.windows98_yes_active').click(function(){
		var op = $('ul#windows_98_checkboxes').data('sel');
		if(op == "win98_re_dos"){
			stage('OS/DOS.php');
		}
		if(op == "win98_sh"){
			//stage('OS/win98_shutdown.php');
			alert('Need to make shutdown win98');
		}
		if(op == "win98_re"){
			stage('OS/win98_new.php');
		}
		if(op == "win98_sb"){
			alert('standby');
			var bx = '<div id="xp_greyscale" style="position:absolute;z-index:9999;top:0;left:0;height:100%;width:100%;background:#222;opacity:0.8;"></div>';
			$('body').append(bx);
			setTimeout("$('#xp_greyscale').hide().remove();$('section,#more_details').hide();$('body').css('background','#000');",2000);
			setTimeout("$('section,#more_details').show();$('body').css('background','#333');",4000);
		}
	});
	$('ul#windows95_selection li .radio-label').click(function(){
		var acc = 'win95-radio-accept';
		var racc = 'radio-label-curr';
		if( $(this).hasClass(racc) ) {
			$(this).removeClass(racc);
			$('ul#windows95_selection').removeData('sel');
		} else {
			$('.win95-radio').removeClass(acc);
			$('ul#windows95_selection').data('sel',$(this).prev('.win95-radio').attr('id'));
			$('ul#windows95_selection li .radio-label').removeClass(racc);
			$(this).addClass(racc).prev('.win95-radio').addClass(acc);
		}
	});
	$('.yes-button-95').click(function(){
		var op = $('ul#windows95_selection').data('sel');
		if(op == "win95_re_dos"){
			stage('OS/DOS.php');
		}
		if(op == "win95_sh"){
			stage('OS/win95_shutdown.php');
		}
		if(op == "win95_re"){
			stage('OS/windows95.php');
		}
		if(op == "win95_cl"){
			$(this).parent('li').parent('ul').parent('section').hide().removeClass('m-active');
			if(msg_count()===0){
				setTimeout(deathscreen,500);
			}
		}
	});
	$('.apple2-radio').click(function(){
		var acc = 'apple2-radio-accept';
		var racc = 'radio-label-curr';
		if( $(this).hasClass(acc) ) {
			$(this).removeClass(acc);
			$('#apple_ii_checkboxes .radio-label').removeClass(racc);
			$('ul#apple_ii_checkboxes').removeData('sel');
		} else {
			$('ul#apple_ii_checkboxes').data('sel',$(this).attr('id'));
			$('.apple2-radio').removeClass(acc);
			$('ul#apple_ii_checkboxes li .radio-label').removeClass(racc);
			$(this).addClass(acc).next('.radio-label').addClass(racc);
		}
	});		
	
	$('.qnx-radio').click(function(){
		var acc = 'qnx-radio-accept';
		var racc = 'radio-label-curr';
		if( $(this).hasClass(acc) ) {
			$(this).removeClass(acc);
			$('#q_selection .radio-label').removeClass(racc);
			$('ul#q_selection').removeData('sel');
		} else {
			$('ul#q_selection').data('sel',$(this).attr('id'));
			$('.qnx-radio').removeClass(acc);
			$('ul#q_selection li .radio-label').removeClass(racc);
			$(this).addClass(acc).next('.radio-label').addClass(racc);
		}
	});
	
	//$('.ok-button-apple_ii').click(function(){
	//	var op = $('ul#apple_ii_checkboxes').data('sel');
	//	if(op == "apple2_sh" || op == "apple2_re"){
	//		stage('OS/apple-ii.php');
	//	}
	//	if(op == "apple2_ret"){
	//		$(this).parent('li').parent('ul').parent('section').hide().removeClass('m-active');
	//		if(msg_count()===0){
	//			setTimeout(deathscreen,500);
	//		}
	//	}
	//});
	
	$('.ok-button-apple_ii').click(function(){
		stage('OS/apple-ii.php');
	});
	
	$('.win301_ok').click(function(){
		stage('OS/win310.php');
	});
	$('#windows95_help_active,.straight_death').mouseup(function(){
		deathscreen();
	});
	$('#os2_warp_ok').click(function(){
		stage('OS/ibmwarp.php');
	});
	$('#workbench_ok').click(function(){
		stage('OS/workbench.php');
	});
	$('.os7-restart-button').click(function(){
		stage('OS/macos7.php');
	});
	$('.os9-restart-button').click(function(){stage('OS/macos9.php');});
	$('.osx-restart-button').click(function(){stage('OS/macosx.php');});
	$('.ms13_restart_go').click(function(){stage('OS/msos213.php');});
	$('.rhapsody_restart').click(function(){stage('OS/rhapsody.php');});
	$('#openstep_ok').click(function(){
		stage('OS/openstep.php');
	});
	$('#mac_osx_restart').click(function(){
		stage('OS/macosx.php');
	});
	
	//$('#qnx_ok').click(function(){
	//	var op = $('ul#q_selection').data('sel');
	//	if(op == 'qnx-re'){
	//		stage('OS/qnx.php');
	//	}
	//	if(op == 'qnx-end'){
	//		$(this).parent('li').parent('ul').parent('section').hide().removeClass('m-active');
	//		if(msg_count()===0){
	//			setTimeout(deathscreen,500);
	//		}
	//	}
	//});
	
	$('#qnx_ok').click(function(){
		stage('OS/qnx.php');
	});
	
	$(".dropdown dt a").click(function() {
               $(".dropdown dd ul").toggle();
           });

           $(".dropdown dd ul li a").click(function() {
               var text = $(this).html();
               $(".dropdown dt a span").html(text);
               $(".dropdown dd ul").hide();
           });
           
        $(".dropdown2000 dt a").click(function() {
               $(".dropdown2000 dd ul").toggle();
           });

           $(".dropdown2000 dd ul li a").click(function() {
               var text = $(this).html();
               $(".dropdown2000 dt a span").html(text);
               $(".dropdown2000 dd ul").hide();
           });

        function getSelectedValue(id) {
       	return $("#" + id).find("dt a span.value").html();
        }

        $(document).bind('click', function(e) {
               var $clicked = $(e.target);
               if (! $clicked.parents().hasClass("dropdown"))
                   $(".dropdown dd ul").hide();
        });
        $('.win2000_ok_b').click(function(){
        	stage('OS/win2000.php');
        });
});

// Switch Image for XP Downstates 

function changeIt(objName)
{
	var obj = document.getElementById(objName);
	var objId = new Array();

	objId[0] = "windows_xp_standby_active";
	objId[1] = "windows_xp_turnoff_active";
	objId[2] = "windows_xp_restart_active";

	var i;
	var tempObj;

	for(i=0;i<objId.length;i++)
	{
		if(objName == objId[i])
		{
			obj.style.display = "block";
		}
		else
		{
			tempObj = document.getElementById(objId[i]);
			tempObj.style.display = "none";	
		}
	}
	return;	
}


//Switch Image for Windows 95 Downstates 

function changeIt95(objName)
{
	var obj = document.getElementById(objName);
	var objId = new Array();

	objId[0] = "windows95_yes_active";
	objId[1] = "windows95_no_active";
	objId[2] = "windows95_help_active";

	var i;
	var tempObj;

	for(i=0;i<objId.length;i++)
	{
		if(objName == objId[i])
		{
			obj.style.display = "block";
		}
		else
		{
			tempObj = document.getElementById(objId[i]);
			tempObj.style.display = "none";	
		}
	}
	return;	
}




	// register onLoad event with anonymous function
	window.onload = function (e) {
	    var evt = e || window.event,// define event (cross browser)
	        imgs,                   // images collection
	        i;                      // used in local loop
	    // if preventDefault exists, then define onmousedown event handlers
	    if (evt.preventDefault) {
	        // collect all images on the page
	        imgs = document.getElementsByTagName('img');
	        // loop through fetched images
	        for (i = 0; i < imgs.length; i++) {
	            // and define onmousedown event handler
	            imgs[i].onmousedown = disableDragging;
	        }
	    }
	};
	
	// disable image dragging
	function disableDragging(e) {
	    e.preventDefault();
	}
	
	
$(document).ready(function(){
	$('#overlay').hide();
	$('#more_info_overlay').hide();
	$('.go-back').hide();
	
	$('.more-info-button').click(function(){
		var overlay = jQuery('<div id="overlay"> </div>');
		overlay.appendTo(document.body);	
		$('#more_info_overlay').fadeIn();
		$('.go-back').show();
		$('#overlay').fadeIn();
		$('body').css('overflow', 'hidden');
		$(".more-info-button").css("display","none");
	});
	
	$('.go-back').click(function(){
		$('#more_info_overlay').fadeOut();
		$('#overlay').fadeOut();
		$('body').fadeIn().css('overflow', 'auto');
		$(".more-info-button").css({
			'display': 'block',
			'background': 'url(images/more-info.png)',
			'background-position': 'bottom'
		});
	});
});

	
/*
	Buttons downstates (from button-down-states.js)
*/
	
$(document).ready(
	function() {
	$('.button').mouseup(
	  function(){
	    $(this).removeClass('active');
	  })
	.mouseout(
		function(){
		$(this).removeClass('active');
		})
	.mousedown(
	    function(){
	      $(this).addClass('active');
	    });
	}
);


/*
	Workbench clock
*/

$(document).ready(function() {
 
	setInterval( function() {
	var seconds = new Date().getSeconds();
	var sdegree = seconds * 6;
	var srotate = "rotate(" + sdegree + "deg)";

	$("#sec").css({"-moz-transform" : srotate, "-webkit-transform" : srotate});
    
	}, 1000 );


	setInterval( function() {
	var hours = new Date().getHours();
	var mins = new Date().getMinutes();
	var hdegree = hours * 30 + (mins / 2);
	var hrotate = "rotate(" + hdegree + "deg)";

	$("#hour").css({"-moz-transform" : hrotate, "-webkit-transform" : hrotate});
    
	}, 1000 );


	setInterval( function() {
	var mins = new Date().getMinutes();
	var mdegree = mins * 6;
	var mrotate = "rotate(" + mdegree + "deg)";

	$("#min").css({"-moz-transform" : mrotate, "-webkit-transform" : mrotate});
    
	}, 1000 );
 
}); 


/*
	Switch between Workbench clock and menu
*/

$(document).ready(function() {
	$('#amiga-clock').hide();
	
	$("#workbench-swap").click(function(){
		$("#workbench").hide();
		$("#amiga-clock").show();
	});
	
	$("#workbench-clock-swap").click(function(){
		$("#amiga-clock").hide();
		$("#workbench").show();
	});
	
	$(".workbench-clock-close").click(function(){
		$("#amiga-clock").hide();
		//$("#workbench").show();
	});
});
