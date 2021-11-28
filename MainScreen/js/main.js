



function DeleteClicked(id) {


}

function UpdateClicked(id,cena,idDrzave,ime){
   

}
$(document).ready(function(){

    getAllData();

    function getAllData(){
      let text="";
        req=$.ajax({
            url: 'Handlers/SearchGrad.php',
            type: 'POST',
            data:{'SearchText':text},
           
        });
        req.done(function(r){
            $('#Content').html(r);
    
        })
    }

  
    
   
  
 

 


 
  
   
});

