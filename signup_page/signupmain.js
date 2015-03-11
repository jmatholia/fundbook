function checkMatch() {
    var x, y, text;

    x = document.getElementById("pword").value;
    y = document.getElementById("pword2").value;

    if (x != y) {
        text = "-- WARNING: PASSWORDS DONT MATCH --";
    } else {
        text = "-- PASSWORDS MATCH --";
    }
    document.getElementById("confirm_match").innerHTML = text;
}
/*
$(".name").focus(function(){
  $(".name-help").slideDown(500);
}).blur(function(){
  $(".name-help").slideUp(500);
});

$(".email").focus(function(){
  $(".email-help").slideDown(500);
}).blur(function(){
  $(".email-help").slideUp(500);
});

$(".password1").focus(function(){
  $(".password1-help").slideDown(500);
}).blur(function(){
  $(".password1-help").slideUp(500);
});

$(".password2").focus(function(){
  $(".password2-help").slideDown(500);
}).blur(function(){
  $(".password2-help").slideUp(500);
});
*/