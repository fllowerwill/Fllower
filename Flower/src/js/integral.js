/*window.onload=function () {
    var gk=document.getElementsByClassName('intMain-son');
    var gkpic=document.getElementsByClassName('intMain-content');
    console.log(gk,gkpic);
    for(var j=0;j<gkpic.length;j++){
        gk[j].onclick=function(){
            console.log(j);
            for(var i=0;i<gk.length;i++){
                gkpic[i].style.display='none';
                gk[i].className='intMain-son';
            }
            gkpic[j].style.display='block';
            gk[j].className='intMain-son dian';
        }
    }
}*/
$(function () {

    /*$('.intMain-son').hover(function(){
        $('.intMain-son').eq($(this).index()).addClass("dian");
        $('.intMain-content').eq($(this).index()).css({display:'block'});
    },function(){
        $('.intMain-son').eq($(this).index()).removeClass("dian");
        $('.intMain-content').eq($(this).index()).css({display:'none'});
    })

    var tian=Number($('.intZi-bottom span').text());
    console.log(tian+1);
    $('.intSign').click(function () {
        tian++;
        var width=50 * tian;
        console.log(width);
        $('.Sign-center1').animate({
            // $(this).css({"width":width})
            width:width
        },500);
    })
    var width=50 * tian;
    console.log(width);
    $('.Sign-center1').animate({
        // $(this).css({"width":width})
        width:width
    },500);*/


    $('.intMain-son').eq(0).addClass("dian");
    $('.intMain-content').eq(0).css({display:'block'});
    $('.intMain-son').on('click',function(){
        $('.intMain-son').removeClass("dian");
        $('.intMain-content').css({display:'none'});
        $('.intMain-son').eq($(this).index()).addClass("dian");
        $('.intMain-content').eq($(this).index()).css({display:'block'});
    })

    // var tian=1;
    // localStorage.nextt=tian;
    if(!localStorage.tian){
        var tian=0;
        localStorage.tian=tian;
    }
    var tian=Number(localStorage.tian);
    var w=Number($('.Sign-center').width());
    function shijian(tian) {
        var fen=(1 / 7) * tian;
        // console.log(fen);
        var width=w * fen;
        // console.log(width);
        $('.Sign-center1').animate({
            // $(this).css({"width":width})
            width:width
        },500);
        for(var i=0;i<7;i++){
            // console.log(i);
            if(i<tian){
                $(".Sign-yuanson").eq(i).addClass("son1");
            }else {
                $('.Sign-yuanson').eq(i).removeClass("son1");
            }
        }
        $('.intZi-bottom span').text(localStorage.tian);
    }
    shijian(tian);
    $('.intSign').click(function () {
        if(tian>=7){
            tian=1;
            localStorage.tian=tian;
        }else {
            tian++;
            localStorage.tian=tian;
        }
        shijian(tian);
        console.log(localStorage.tian);
        $('.intZi-bottom span').text(localStorage.tian);
        var jifen=Number($('.intZi-top').html());
        var jf=jifen + (tian * 3);
        // console.log(fen);
        $.ajax({
            url:"index.php?a=fen",
            data:{"fen":jf},
            success:function (res) {
                t=setInterval(fu,50);
                function fu(){
                    if(jifen==res){
                        return;
                    }else {
                        jifen++;
                        $('.intZi-top').html(jifen);
                    }
                }
            }
        })
    })

})
