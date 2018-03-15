
    $(document).on('ready',function(){

      $('#btn-ingresa').click(function(){
        var url = "../modelo/envio.php";

        $.ajax({                        
           type: "POST",                 
           url: url,                    
           data: $("#formulari").serialize(),
           success: function(data)            
           {
             $('#res').html(data);           
           }
         });
      });
    });