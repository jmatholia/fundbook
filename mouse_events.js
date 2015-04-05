function haha () {
    var search = document.getElementById('search');
    search.style.color = "#DBB8FF";
}


$(document).ready( function() {
    $('[val]').click( function() {
        var clickBtnValue = $(this).attr('val');
        var ajaxurl = 'ajax_functions.php';
        if (clickBtnValue === "fund") {
            data = {'action': clickBtnValue, 'value': document.getElementById('fund').value};
        } else {
            data = {'action': clickBtnValue};
        }

        $.post(ajaxurl, data, function(data) {})
        	.success (function (data, status) {
                console.log("success, data: ", data);
                var jsonData = $.parseJSON(data);
                console.log(jsonData);
                console.log(status);
                if (jsonData['action'] === 'fund') {
                    document.getElementById('backers').innerHTML = '<i class="fa fa-li fa-check"></i> ' + 
                                                                    jsonData['numBackers'] + " Backers";
                    document.getElementById('raised').innerHTML = '<i class="fa fa-li fa-check"></i> $' + 
                            jsonData['raisedAmt'] + " pledged of " + jsonData['goal'] +" goal ";
                    document.getElementById('warning').innerHTML = 'Successful Fund!';
                }
        	})
            .error(function (data) {
                var error = data['responseText'];
                console.log('error: ', error);
                if (error === 'Bad value') {
                    document.getElementById('warning').innerHTML = 'Please enter a valid numeric value.';
                } else if (error === 'Too high') {
                    document.getElementById('warning').innerHTML = 'Whoa! Try a smaller amount!';
                }
                
            })
    });

});