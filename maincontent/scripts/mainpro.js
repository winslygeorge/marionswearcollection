//header definition for size of screen
var wsw = window.innerWidth;



if(wsw < 1085){

    document.getElementById('logimg').removeAttribute("src");
}

window.addEventListener('resize', function(){

    var sws = window.innerWidth;



    if(sws <=1085){

        document.getElementById('logimg').setAttribute("class", "hidelogo");
    }else{

        document.getElementById('logimg').setAttribute("class", "img");
    }
});
