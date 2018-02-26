$(document).ready(function(){
    $("#demo3").toggle();
});

$(document).ready(function(){
    $(".onetwo").click(function(){
        $("#demo3").hide();
        $("#demo4").hide();
    });
});

$(document).ready(function(){
    $(".three").click(function(){
        $("#demo3").toggle();
        $("#demo4").hide();
    });
}); 

$(document).ready(function(){
    $(".four").click(function(){
         $("#demo4").toggle();
         $("#demo3").hide();
    });
});