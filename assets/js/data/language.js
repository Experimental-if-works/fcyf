function getGET()
    {
        var loc = document.location.href;
        if(loc.indexOf('?')>0)
        {
            var getString = loc.split('?')[1];
            var GET = getString.split('&');
            var get = {};
            for(var i = 0, l = GET.length; i < l; i++){
                var tmp = GET[i].split('=');
                get[tmp[0]] = unescape(decodeURI(tmp[1]));
            }
            //return get;
	}
            return get;
    }

	var valores=getGET();
			//console.log("Valores: " + valores);
	for(var index in valores)
            {
//                document.write("<br>clave: "+index+" - valor: "+valores[index]);
            
        if(valores[index]  == "en"){
			var lang = 'en';
		}
		else{
			var lang = 'es';
		}
        if (index = 'event') {
            var event_id = valores[index];
        }
	}	
//var ptitle = "";
