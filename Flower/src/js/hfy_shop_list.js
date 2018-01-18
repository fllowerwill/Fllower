$(function () {
    $('.colDao-son').each(function (index) {
        $(this).on('touchstart',function () {
            $(this).addClass('son1').siblings().removeClass('son1');
            if(index==0){

                $('.collect_article').show();
                $('.collect_image').hide();

            }
            if(index==1){
                $('.collect_article').hide();
                $('.collect_image').show();

            }
        })
    })
})