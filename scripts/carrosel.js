
window.addEventListener('resize', function(){

    var csw = window.innerWidth;

  

    if(csw < 1030){

        document.querySelector('.gallery').setAttribute("class", "hideCarrosel");

    }else{


        document.querySelector('.hideCarrosel').setAttribute("class", "gallery");
    }
});


var wsc = window.innerWidth;

if(wsc< 1030){
    document.querySelector('.gallery').setAttribute("class", "hideCarrosel");

}else{


    document.querySelector('.hideCarrosel').setAttribute("class", "gallery");

}