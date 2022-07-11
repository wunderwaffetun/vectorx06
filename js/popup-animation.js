const buttons = document.querySelectorAll(".button-popup") // здесь изменение картинок about-us-photo-preview на странице о компании 3 строка
$(document).ready(function(){
    heightAboutItem = getComputedStyle(document.querySelectorAll('.about-us-photo-preview')[0]).width
    console.log(heightAboutItem)
    document.querySelectorAll('.about-us-photo-preview').forEach(img => {
        img.style.height = heightAboutItem
    })
    // $(".window").css({
    //     'left': '-100%',
    //     'top': '100%'
    // })
    
    buttons.forEach(button => {
        button.addEventListener('click', ()=>{
            startPopupAnimation()
        })
    })
});

function startPopupAnimation(){
    console.log('hui')
    var popupFlag = true
    const popup = document.querySelector('.popup-contact')
    popup.style.display = 'block'
    popup.style.opacity = '0';
    document.addEventListener('click', (event)=>{
        console.log(popupFlag)
        if(event.target.closest('.window') === null && !event.target.classList.contains('button-popup') && event.target.classList.contains('popup') && popupFlag){
            popupFlag = false;
            animationPopupClose()
        }//onclick="$('.popup').fadeIn()
        
    })
    $('.window').css({
        'bottom': ''
    })
    $('.popup').animate({
        'opacity': '1'
    }, 800)
    $(".window").animate({
        'left': '50%',
        'top': `90px`,
        'opacity': '1'
    }, 800)
}

function animationPopupClose(){
    $('.popup').animate({
        'opacity': '0'
    }, 800, ()=>{
        $('.popup').css({
            'display': 'none'
        })
    })
    $('.window').css({
        'bottom': '',
    })
    $(".window").animate({
        'top': '-100%',
        'left': '100%',
        
        'opacity': '0'
    }, 800, ()=>{
        $(".window").css({
            'left': '-100%',
            'top': '100%',
            'bottom': ''
        })
        popupFlag = true;
    })
}

