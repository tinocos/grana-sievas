$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
        var self = $(this), form = self.parents('form:eq(0)'), focusable, next;
        focusable = form.find('input').filter(':visible');
        next = focusable.eq(focusable.index(this)+1);
        if (next.length) {
            next.focus();
        }
        return false;
    }
  });

  
});


// JavaScript Document// JavaScript Document

function checkbox(field) {

	var checked = document.getElementById(""+ field +"").value;

	if (checked == 0) {
		document.getElementById(""+ field +"").checked = true;
		document.getElementById(""+ field +"").value = 1;
	} else if (checked == 1) {
		document.getElementById(""+ field +"").checked = false;
		document.getElementById(""+ field +"").value = 0;
	}

}

function show_menu() {
	$("#downMenu").slideToggle("fast");
};

function loading() {
	$("#loading").fadeIn("fast");
};

function closeLoading() {
	$("#loading").fadeOut("fast");
};

function loadingOut() {
	$("#loading").fadeOut("fast");
};

function unloading() {
	$("#loading").fadeOut("fast");
};

function showAlert(message) {
	alert(message);
}

function goto(url) {
	window.location = ''+url+'';
};

function gotoDelete(url,id) {
	window.location = ''+url+''+id+'';
};

function remove_item(item) {
	$("#" + item + "").html("");
}

function closeAlert() {
	$("#alert").slideUp("fast");
};

function openMessage(box,message) {

	$(".box_messages").addClass("hide");
	$("#"+box+"").html("");
	$("#"+box+"").html(""+message+"");
	$("#"+box+"").removeClass("hide");
};

function closeMessage(box) {
	$("#"+box+"").slideUp("fast");
};

function openBox(opens) {
	$(".hides").addClass("hide");
	$(".hides").addClass("hidden");
	$("#"+opens+"").removeClass("hide");
	$("#"+opens+"").removeClass("hidden");
	$("#"+opens+"").focus();
	ascroll(""+opens+"");
}

function openBullet(opens) {
	$(".hides").addClass("hide");
	$(".hides").addClass("hidden");
	$("#"+opens+"").removeClass("hide");
	$("#"+opens+"").removeClass("hidden");
	$("#"+opens+"").focus();
}

function slideToggle(opens){
	$(".hides").addClass("hide");
	$("#"+opens+"").removeClass("hide");
	$("#"+opens+"").slideDown(500);
	$("#"+opens+"").focus();
}

function loadContents(page,box) {
	$("#"+box+"").html("");
	$("#"+box+"").load(""+page+"");
	$(".unloadContent").html("");
};

function getPage(page,box,value) {

	$(".hides").addClass("hidden");
	$("#"+box+"").html("");

	dataString = "v="+ value;

	$.ajax ({
		data: dataString,
		type: "POST",
		url: ""+page+"",
		cache: false,
		success: function(html)
		{
			$("#"+box+"").html(html);
			$("#"+box+"").removeClass("hidden");
			$("#"+box+"").removeClass("hide");
			ascroll(''+box+'');
		}
	});
};

function focusField(field) {
	$("#"+field+"").focus();
}

function hideBox(ides,clases) {
	$("#"+ides+"").addClass("hidden");
	$("."+clases+"").addClass("hidden");
}

function addClass(box,clase) {
	$(".addClass").removeClass(""+ clase +"");
	$("#"+box+"").addClass(""+ clase +"");
}

function showSearch() {
	$("#boxSearch").removeClass("hide");
	document.formSearch.search.focus();
}
function show_downMenu() {
	$("#downMenu").slideToggle("fast");
}

function loadHelp(id,content) {
	$("#help_"+id+"").fadeIn("fast");
	$("#help_"+id+"").html("<i class='fa fa-times-circle float-right loadHelpIcon' onClick='closeHelp()'></i>"+content+"");
}

function closeHelp() {
	$(".loadHelp").css("display","none");
}

function load_preview(file,file_preview) {

	dataString = "fl="+ file;

	$.ajax ({
		data: dataString,
		type: "POST",
		url: "load_preview.php",
		cache: false,
		success: function(html)
		{
			$('#' + file_preview + '').html(html);
			ascroll('' + file_preview + '');
		}
	});

}
/*
function print(){
window.print();
}*/

function session_check() {

	$.ajax ({
		type: "GET",
		url: "load_session.php",
		cache: false,
		success: function(html)
		{
			$("#load_session").html(html);
			var session = ""+session_loader+"";

			if (session == 0) {
				goto('logout');
			}
		}
	});
};

function loadBox(page,target,method) {

	$(""+target+"").html('<div class="load"></div>');

	$.ajax ({
		type: ""+method+"",
		url: ""+page+"",
		cache: false,
		success: function(html)
		{
			$(""+target+"").html(html);
		}
	});
};

function changeFunction(target,funcion) {
	$(""+target+"").attr("onClick",""+funcion+"");
};

function ascroll(id) {
	$('#'+id+'').animatescroll({padding:140});
}
//setInterval(session_check, 30000);

// <a class="btn btn-xs btn-primary" href="openPopup('launch?CC=<?php echo safeEncrypt($curso_id);?>&AC=<?php echo safeEncrypt($row_rsModulos['ACT_ID']);?>','Course','directories=0,titlebar=0,toolbar=0,location=0,status=0,menubar=0,scrollbars=no,resizable=no,width=1040px,height=695px');"><i class="fas fa-external-link-alt" aria-hidden="true"></i> Abrir</a>
function openPopup(theURL, winName, features) { //v2.0
	window.open(theURL, winName, features);
}
