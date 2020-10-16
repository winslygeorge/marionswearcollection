

var hc = document.getElementById('cart');

document.getElementById('pcart').addEventListener('click', function(){

var pxh;
try{

    pxh = new XMLHttpRequest();

}catch(e){

			try{
				pxh = new ActiveXObject('MSXML.XmlHttp');
			}catch(e){

				pxh = new ActiveXObject('Microsoft.XmlHttp');
			}throw alert('something is wrong with your browser');

				
			
		}

pxh.onreadystatechange = function(){

    if(this.readyState == 4 && this.status == 200){

        document.getElementById('cart').innerHTML = this.responseText;

    }
}
pxh.open('GET', '../cart', true);
pxh.send();

});

function showcp(){

    if(document.getElementById("cart").getAttribute("class") == "hidecp"){

        document.getElementById("cart").removeAttribute("class");

    }

  


}

function hidecp(){




if(document.getElementById("cart").getAttribute("class") == null){

    document.getElementById("cart").setAttribute("class", "hidecp");

}

}

//checkout products to selected to be bought

 function checkouts(){

if(confirm('You are about to order your Cart Products.\n please confirm') == true){


    var xpp;

    try{
        xpp = new XMLHttpRequest();
    }catch(e){

        try{
            xpp = new ActiveXObject('MSXML.XmlHttp');
        }catch(e){

            xpp = new ActiveXObject('Microsoft.XmlHttp');
        }throw alert('something is wrong with your browser');

            
        
    }

    xpp.onreadystatechange = function(){
    
        if(xpp.readyState == 4 && xpp.status == 200 ){
    
            alert('successfully sent to the database');

            document.getElementById("cart").innerHTML = this.responseText;
        }
    }
    
    xpp.open('GET', '../cart/checkout.php', true);
    xpp.send();

}


}
