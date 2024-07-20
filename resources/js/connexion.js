let a = document.querySelectorAll('.container');
let index = 0;

function slide(){
    a[index].style.display = 'none';
    index = (index + 1)% a.length;
    a[index].style.display = 'flex';
}

setInterval(slide, 3000);