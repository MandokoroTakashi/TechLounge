'use strict';

{

    //humburger
    const humOpen = document.getElementById('hum-open');
    const humClose = document.getElementById('hum-close');
    const overlay = document.querySelector('.overlay');

    humOpen.addEventListener('click', () => {
        overlay.classList.add('show');
        humOpen.classList.add('hide');
    });

    humClose.addEventListener('click', () => {
        overlay.classList.remove('show');
        humOpen.classList.remove('hide');
    });

    $(".slide-items").slick({
        autoplay: true, // 自動再生
        autoplaySpeed: 4000, // 再生速度（ミリ秒設定） 1000ミリ秒=1秒
        infinite: true, // 無限スライド
      });
}
