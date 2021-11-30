
var idPromene=0;

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
   
    
    $("#FilmIme").val(ImeFilma);
    $("#DatumPrikazivanja").val(DatumPrikazivanja);
    console.log(DatumPrikazivanja);
    $("#Reziser").get(0).selectedIndex=ReziserID-1;
    
    $(".save").addClass("UpdateMe");
    idPromene=id;
    showDialog();
}

function Resolve(){
  
    
    if ($(".save").hasClass("UpdateMe")) {
        UpdateItem();
      }
      else{
          AddItem();
      }
}
function UpdateItem(){
    console.log("Update");
   // const $form = $("#form");
    
    //const $inputs = $form.find('input, select, button, textarea');
    //const serijalizacija = $form.serialize() + "&id="+idPromene ;
    //ovo je dialog save dugme on radi add ali hocemo da namestimo da radi add ili update
 
   // req=$.ajax({
    //    url: 'UpdateGrad.php',
    //    type: 'POST',
    //    data:serijalizacija,
       
   // });
}
function AddItem(){
   // const $form = $("#form");
    
    //const $inputs = $form.find('input, select, button, textarea');
   // const serijalizacija = $form.serialize();
    
    
   // req=$.ajax({
    //    url: 'SaveGrad.php',
    //    type: 'POST',
     //   data:serijalizacija,
       
    //});
   // req.done(function(r){
    //    $('#Content').html(r);
   //     CloseDialog();
   // })
   
    
    
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
  
    
   
  
 
    $('.SearchText').on('input',function(e){
        let text=$('.SearchText').val();
        req=$.ajax({
            url: 'Handlers/SearchData.php',
            type: 'POST',
            data:{'SearchText':text},
           
        });
        req.done(function(r){
            $('#Content').html(r);
    
        })
        });
        $(".addDugme").click(function(){
           
          
           
           console.log("cao");
           // $(".save").addClass("AddMe");
            showDialog();
           
        });
 
     

        $(".close").click(function(){ 
     

            CloseDialog();
        });
  
   
});
function showDialog(){
       
    $(".Dialog").addClass("active");
  $(".bcg").addClass("active");
 }
 function CloseDialog(){
     console.log("close");
    $("#FilmIme").val("");
  var date=  $("#DatumPrikazivanja").val();
    $("#Reziser").get(0).selectedIndex = 0;  
    $("#Container").removeClass("active");
  $(".bcg").removeClass("active");
  $(".save").removeClass("UpdateMe");
  $(".save").removeClass("UpdateMe");
  $(".Dialog").removeClass("active");

 }

