	$(document).ready(function() {
		bouton1();
		bouton2();
		bouton3();
		bouton6();
		boutonA();
			
		auto_bouton1();
		auto_bouton2();
		
		volet_lucie_haut();
		volet_lucie_bas();
		volet_lucie_stop();
		
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
		
		$('#bouton6').bind('click',function(){ 
			led6 = $('#formbouton6').find("input[name=LED6]").val();
			$.post("ajax_unique.php",{block: "pr6", LED6: led6},function(data){
				$("#bouton6").html(data);
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
		
		$('#auto_bouton1').bind('click',function(){ 
			auto_led1 = $('#auto_formbouton1').find("input[name=auto_LED1]").val();
			$.post("ajax_unique.php",{block: "auto_pr1", auto_LED1: auto_led1},function(data){
				$("#auto_bouton1").html(data);
			});
			return false;
		});
		
		$('#auto_bouton2').bind('click',function(){ 
			auto_led2 = $('#auto_formbouton2').find("input[name=auto_LED2]").val();
			$.post("ajax_unique.php",{block: "auto_pr2", auto_LED2: auto_led2},function(data){
				$("#auto_bouton2").html(data);
			});
			return false;
		});
		
		$('#volet_lucie_haut').bind('click',function(){ 
			voletlum = $('#formvolet_lucie_haut').find("input[name=VOLETLUM]").val();
			$.post("ajax_unique.php",{block: "volet_lucie_haut", VOLETLUM: voletlum},function(data){
				$("#volet_lucie_haut").html(data);
			});
			return false;
		});
		
		$('#volet_lucie_stop').bind('click',function(){ 
			voletlus = $('#formvolet_lucie_stop').find("input[name=VOLETLUS]").val();
			$.post("ajax_unique.php",{block: "volet_lucie_stop", VOLETLUS: voletlus},function(data){
				$("#volet_lucie_stop").html(data);
			});
			return false;
		});
		
		$('#volet_lucie_bas').bind('click',function(){ 
			voletlud = $('#formvolet_lucie_bas').find("input[name=VOLETLUD]").val();
			$.post("ajax_unique.php",{block: "volet_lucie_bas", VOLETLUD: voletlud},function(data){
				$("#volet_lucie_bas").html(data);
			});
			return false;
		});
	});
	
	var temp_bouton1;
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
		temp_bouton1 = setTimeout("bouton1()", 5000);
	};
	
	var temp_auto_bouton1;
	function auto_bouton1(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType : "html",
		    data: "block=auto_pr1",
			success: function(code_html, statut){
				$("#auto_bouton1").html(code_html);
			}
		});
		temp_auto_bouton1 = setTimeout("auto_bouton1()", 5000);
	};
	
	var temp_bouton2;
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
		temp_bouton2 = setTimeout("bouton2()", 5000);
	};
	
	var temp_auto_bouton2;
	function auto_bouton2(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType : "html",
		    data: "block=auto_pr2",
			success: function(code_html, statut){
				$("#auto_bouton2").html(code_html);
			}
		});
		temp_auto_bouton2 = setTimeout("auto_bouton2()", 5000);
	};
	
	var temp_bouton3;
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
		temp_bouton3 = setTimeout("bouton3()", 5000);
	};
	
	var temp_bouton6;
	function bouton6(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType: "html",
		    data: "block=pr6",
			success: function(code_html, statut){
				$("#bouton6").html(code_html);
			}
		});
		temp_bouton3 = setTimeout("bouton6()", 5000);
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
	
	
	function volet_lucie_haut(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType: "html",
		    data: "block=volet_lucie_haut",
			success: function(code_html, statut){
				$("#volet_lucie_haut").html(code_html);
			}
		});
	};
	
	function volet_lucie_stop(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType: "html",
		    data: "block=volet_lucie_stop",
			success: function(code_html, statut){
				$("#volet_lucie_stop").html(code_html);
			}
		});
	};
	
	function volet_lucie_bas(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType: "html",
		    data: "block=volet_lucie_bas",
			success: function(code_html, statut){
				$("#volet_lucie_bas").html(code_html);
			}
		});
	};
	
