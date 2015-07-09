	$(document).ready(function() {
		bouton1();
		bouton2();
		bouton3();
		boutonA();
		
		temp();
		tempext();
		
		 $('#bouton1').bind('click',function(){ 
			led1 = $('#formbouton1').find("input[name=LED1]").val();
			$.post("ajax_unique.php",{block: "pr1", LED1: led1},function(data){
				$("#bouton1").html(data);
			});
			return false;
		});
		
		 $('#bouton2').bind('click',function(){ 
			led2 = $('#formbouton2').find("input[name=LED2]").val();
			$.post("ajax_unique.php",{block: "pr2" ,LED2: led2},function(data){
				$("#bouton2").html(data);
			});
			return false;
		});
		
		$('#bouton3').bind('click',function(){ 
			led3 = $('#formbouton3').find("input[name=LED3]").val();
			$.post("ajax_unique.php",{block: "pr3", LED3: led3},function(data){
				$("#bouton3").html(data);
			});
			return false;
		});
		
		$('#boutonA').bind('click',function(){ 
			ledA = $('#formboutonA').find("input[name=LEDA]").val();
			$.post("ajax_unique.php",{block: "prA", LEDA: ledA},function(data){
				$("#boutonA").html(data);
			});
			return false;
		});
	});
	
	function bouton1(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType: "html",
		    data: "block=pr1",
			success: function(code_html, statut){
				$("#bouton1").html(code_html);
			}
		});
	};
	function bouton2(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType : "html",
		    data: "block=pr2",
			success: function(code_html, statut){
				$("#bouton2").html(code_html);
			}
		});
	};
	function bouton3(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType: "html",
		    data: "block=pr3",
			success: function(code_html, statut){
				$("#bouton3").html(code_html);
			}
		});
	};
	function boutonA(){
		$.ajax({
			url : "ajax_unique.php",
			async : false,
			type: "GET",
			dataType : "html",
		    data: "block=prA",
			success : function(code_html, statut){
				$("#boutonA").html(code_html);
			}
		});
	};
	
	var temp_timeout;
	function temp(){
		$.ajax({
			url: "ajax_unique.php",
			sync: false,
			type: "GET",
			dataType: "html",
			data: "block=temp_salon",
			success: function(html){
				$("#temp_salon").html(html);
		}
	});
	temp_timeout = setTimeout("temp()", 300000);
	};
	
	var tempext_timeout;
	function tempext(){
		$.ajax({
			url: "ajax_unique.php",
			sync: false,
			type: "GET",
			dataType : "html",
			data: "block=temp_ext",
			success: function(html){
				$("#temp_ext").html(html);
		}
	});
	tempext_timeout = setTimeout("tempext()", 600000);
	}