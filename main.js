$(function(){

    $('.ranger').change(function(){
        var value = $(this).val();
        $(this).next().text(value);
    });
});