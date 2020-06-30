		 function decidir( edad ){
			if( edad < 18) document.write ("NO PUEDES VOTAR");
			else document.write ("SI PUEDES VOTAR");
		}
	
		 function principal(){
			document.write("....");
			var edad;
			//			edad = prompt("Cuantos años tienes");
			//			decidir(edad);		
			var resp;
			resp = confirm("El foco estara apagado, o deseas que este encencido");
			if(resp)
				document.write('<img src="pic_bulboff.gif">');
			else
				document.write('<img src="pic_bulbon.gif">');

			}
			function presione(){
				var resp;
				resp = confirm("ingles");
				if(resp){
					$("#foco").prop( "src","../imagenes/pic_bulboff.gif" );			
	  		}else{
					$("#foco").prop( "src","../imagenes/pic_bulbon.gif" );			
			  }
			}
