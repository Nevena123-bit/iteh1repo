$(document).ready(function(){

$('.signupValidate').submit(function(e){

    e.preventDefault();
    const $form = $(this);
    
    const $inputs = $form.find('input, select, button, textarea');
    const serijalizacija = $form.serialize();
    console.log(serijalizacija);
    req=$.ajax({
        url: 'handlers/SignUp.php',
        type: 'POST',
        data:serijalizacija,
       
    });
  
   req.done(function(res,textStatus,responseXML){
      
       console.log(res);

      
   });
  
    


});

});