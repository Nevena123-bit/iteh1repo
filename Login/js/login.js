$(document).ready(function(){

    $('.loginValidate').submit(function(e){
    
        e.preventDefault();
        const $form = $(this);
        
        const $inputs = $form.find('input, select, button, textarea');
        const serijalizacija = $form.serialize();
        console.log(serijalizacija);
        req=$.ajax({
            url: 'handlers/Login.php',
            type: 'POST',
            data:serijalizacija,
           
        });
      
       req.done(function(res,textStatus,responseXML){
          
        if(res==1){
         window.location.replace("http://localhost/ItehDomaci/e/MainScreen/")

        }
        else{
            alert("Niste registrovani");
        }
          
       });
      
        
    
    
    });
    
    });