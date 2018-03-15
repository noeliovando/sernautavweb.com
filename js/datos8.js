

    $(document).on('ready',function(){

      $('#bt').click(function(){
        var url = "modelo/cupon.php";

        $.ajax({                        
           type: "POST",                 
           url: url,                    
           data: $("#fo").serialize(),
           success: function(data)            
           {
             $('#re').html(data);           
           }
         });
      });
    });

