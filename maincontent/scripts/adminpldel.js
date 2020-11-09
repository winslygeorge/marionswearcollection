

    var buntt = document.querySelectorAll(".del");
    var z = 0;

for(z = 0; z< buntt.length; z++){

    buntt[z].onclick = function(){

        var bunttid = buntt[this.id-1].value;
    
var  xhtp ;

try{
xhtp = new XMLHttpRequest();

}catch(e){

			try{
				xhtp = new ActiveXObject('MSXML.XmlHttp');
			}catch(e){

				xhtp = new ActiveXObject('Microsoft.XmlHttp');
			}throw alert('something is wrong with your browser');

				
			
		}
xhtp.onreadystatechange = function(){

    if(xhtp.readyState == 4 && xhtp.status == 200){

        document.getElementById('contp').innerHTML = this.responseText;
    }
}

xhtp.open('GET', 'admindelpro.php?indexpp='+bunttid, true);
xhtp.send();

    }
}