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

    $('.intMain-son').hover(function(){
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
    },500);

})
