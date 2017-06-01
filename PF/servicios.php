<!DOCTYPE html>


<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
     <script src="jquery-3.2.1.min.js" type="text/javascript"></script> 
      <script src="jquery-ui.js"></script>  
      <script>
      $( function() {
    	    $( "#objeto" ).draggable(
    	    	{
        	    	drag: function(){
    	            var offset = $(this).offset();
    	            var xPos = offset.left;
    	            var yPos = offset.top;
    	            $('#posicionX').text('x: ' + xPos);
    	            $('#posicionY').text('y: ' + yPos);
    	        	}
	        
    	    	}
    	    );
    	  } );
      </script>
      <style type="text/css">
      		
      		#objeto{
      			width:100px;
      			height:100px;
      			background-color:yellow;
      			margin:0 auto;
      		}
      </style>
   </head>
<body style="background-color:#3db9a9;">

<body>
    
           <div id="objeto">            
    </div>    
    <div id="posicionX"></div>
    <div id="posicionY"></div>

     
</body>
</html>