var ex1 = document.getElementById("ex1");


var x = 0 ;
var y = 225;
var size = 100;

function move(){
var slide = setInterval(slide, 10);
function slide(){
    if(x < 225){
    x++;
    y++;
    size = size - 0.1;
    ex1.style.left = x + 'px';
    ex1.style.bottom = y + 'px';
    ex1.style.zIndex = '0';
        ex1.style.height = size + 'px';
        ex1.style.width = size + 'px';
    }
    else{
    clearInterval(slide);
        move1();
    }
  }
}


function move1(){
var slide1 = setInterval(slide1 ,10);

function slide1(){
    if(x < 450){
        x++;
        y--;
        size = size + 0.1;
        ex1.style.left = x + 'px';
        ex1.style.bottom = y + 'px';
        ex1.style.zIndex = '0';
        ex1.style.height = size + 'px';
        ex1.style.width = size + 'px';
    }
        else{
            clearInterval(slide1);
            move2();
    }
  }
}

function move2(){
var slide2 = setInterval(slide2 ,10);

function slide2(){
    if(x > 225){
        x--;
        y--;
        size = size + 0.1;
        ex1.style.left = x + 'px';
        ex1.style.bottom = y + 'px';
        ex1.style.zIndex = '2';
        ex1.style.height = size + 'px';
        ex1.style.width = size + 'px';
    }
        else{
            clearInterval(slide2);
            move3();
    }
  }
}

function move3(){
var slide3 = setInterval(slide3 ,10);

function slide3(){
    if(x > 0){
        x--;
        y++;
        size = size - 0.1;
        ex1.style.left = x + 'px';
        ex1.style.bottom = y + 'px';
        ex1.style.zIndex = '2';
        ex1.style.height = size + 'px';
        ex1.style.width = size + 'px';
    }
        else{
            clearInterval(slide3);
            move();
    }
  }
}

move();