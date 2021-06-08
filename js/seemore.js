// $(function(){

//     $('#seemore').click(function(){
//         $('#seemore').fadeOut();
//         setTimeout(function(){
//             $('.key-visual__frame__more').fadeIn(1000);
//         },400);
//     })  
// })

$(function(){

    // index.phpのギャラリー
    $('#seemore').click(function(){
        $('#seemore').fadeOut();
        $('.footer').fadeOut();
        $('.btn').fadeOut();
        setTimeout(function(){
            $('.key-visual__frame__more').fadeIn(1000);
            $('.footer_sub').fadeIn(1000);
            $('.btn_sub').fadeIn(1000);
        },400);
    })    
})