


function DeleteClicked(id) {

    req=$.ajax({
        url: 'Handlers/DeleteFilm.php',
        type: 'POST',
        data:{'id':id},
       
    });
    req.done(function(r){
        $('#Content').html(r);
    })
}

function UpdateClicked(id,DatumPrikazivanja,ReziserID,ImeFilma){
   
    console.log(id);
    console.log(DatumPrikazivanja);
    console.log(ReziserID);
    console.log(ImeFilma);
   
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

