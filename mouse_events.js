function haha (){
    var search = document.getElementById('search');
    search.style.color = "#DBB8FF";
}


$(document).ready(function(){
    $('[val]').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = 'ajaxFunctions.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, 
        	function (response) {
            	// Response div goes here.
            	alert("action performed successfully, nothing actually done yet");
        	}
        );
    });

}); 