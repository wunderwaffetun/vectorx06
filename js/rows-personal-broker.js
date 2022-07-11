function animationRows(){
    for(let i = 1; i<=10; i++){
        setTimeout(()=>{ArrayOfRows[i-1].classList.add('arr-active')}, i * 200)
    }
}
const observingFunction = function(observeParams, observer){
    observeParams.forEach(param => {
        ArrayOfRows = document.querySelectorAll('.arr-about-us');
        if(document.querySelector('#client-start-block-id-row').getBoundingClientRect().top - document.documentElement.clientHeight < 0 && flag == 0){
            animationRows();
        } else if(flag == 1){
            animationRows();
        }
        flag += 1;
    });
}
var flag = 0
document.addEventListener('DOMContentLoaded', ()=>{
    const options = {
        root: null, 
        rootMargin: '0px', 
        threshold: 0
    }
    rowsBlock = document.querySelector('#client-start-block-id-row'); // не забыть добавить, помимо вставки блока в html 
    const observer = new IntersectionObserver(observingFunction, options)
    observer.observe(rowsBlock)
})