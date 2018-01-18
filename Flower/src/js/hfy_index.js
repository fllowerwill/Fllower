

var mo=function(e){e.preventDefault();};

/***禁止滑动***/
function stop(){
    document.body.style.overflow='hidden';
    document.addEventListener("touchmove",mo,false);//禁止页面滑动
}

/***取消滑动限制***/
function move(){
    document.body.style.overflow='';//出现滚动条
    document.removeEventListener("touchmove",mo,false);
}

var swiper = new Swiper('.swiper-container', {
    pagination: {
        el: '.swiper-pagination',
    },
    loop : true,
    autoplay: {
        delay: 2000//1秒切换一次
    }


});

var menubtn=document.querySelector('.menubtn');
var menu=document.querySelector('.menu');
var shade=document.querySelector('.fullshade');
menubtn.onclick=function () {
  menu.style.left=0;
  shade.style.display='block';
  stop();
};
shade.onclick=function () {
    menu.style.left='-70%';
    this.style.display='none';
    move();
};








