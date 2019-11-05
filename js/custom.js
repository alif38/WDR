$(document).ready(function(){
    $("#show").click(function(){
        $("#hidden_text").toggle();
        $("#show").hide();
    });

    $("#show").click(function(){
        $("#hidden").show();
        $('#hidden').click(function () {

            $("#hidden_text").toggle();
            $("#hidden").hide();
            $("#show").show();
        })
    });
});