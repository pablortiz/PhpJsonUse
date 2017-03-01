	$(document).ready(function (){		
		$( "#limpia" ).click(function() {  		
  		$("#c").val("");
  		$("#id").val("");
  		$("#tipo").val("");
  		$("#descripcion").val("");
  		$("#stock").val("");  		
		});
	
		$( "#graba" ).click(function() {  		
			$.ajax(
			{
			  url: "./saveDisp.php?c="+$("#c").val()+
			  "&id="+$("#id").val()+
			  "&tipo="+$("#tipo").val()+
			  "&descripcion="+$("#descripcion").val()+
			  "&stock="+$("#stock").val(),			  
			  beforeSend: function( xhr ) {
			    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
			  }
			})
			.done(function( data ) {
			   if ( console && console.log ) {			    				    				      			   	
			    	document.location.reload();
						return;
			    }
			});
		});
		
		$( "#borra" ).click(function() {  		
		

		var r = confirm("Borrar dispositivo !");
		if (r == true) 
			$.ajax(
			{
			  url: './borraDisp.php?c='+$("#c").val(),			  
			  beforeSend: function( xhr ) {
			    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
			  }
			})
			.done(function( data ) {				
			   if ( console && console.log ) {			    				    				      			   	
			    	document.location.reload();
						return;
			      
			    }
			});

		});		

		$( "#procesa" ).click(function() {  		
			$.ajax(
			{
			  url: './procesaDisp.php?c='+$("#c").val(),			  
			  beforeSend: function( xhr ) {
			    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
			  }
			})
			.done(function( data ) {
			   if ( console && console.log )
			   {
			    	alert(data);
						return;
			   }
			});
		});
		
	});

		function ver(c){
			$.ajax(
			{
			  url: './readDisp.php?c='+c,
			  beforeSend: function( xhr ) 
			  {
			    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
			  }
			})
			.done(function( data ) {
			    if ( console && console.log ) 
			    {			    	
			    	data = data.trim();
			    	dat = data.split(";;;");			    	
			    	if(dat.length == 4)
			    	{			    		
			    		$("#id").val(dat[0]) ;
			    		$("#tipo").val(dat[1]) ;
			    		$("#descripcion").val(dat[2]) ;
			    		$("#stock").val(dat[3]) ;			    		
			    		$("#c").val(c) ;			    		
			    	}
			      return;
			    }
			});
		}