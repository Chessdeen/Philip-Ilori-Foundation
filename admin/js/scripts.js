 ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
    console.error( error );
    } );


$(document).ready(function(){
    
// EDITOR CKEDITOR
    ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
    console.error( error );
    } );

// REST OF THE CODE
    
    alert('hello');
    
    
    
});




function loadUsersOnline() {
    
    $.get("functions.php?onlineusers=result", function(data){
        $(".usersonline").text(data);
     
    });
   
    
}


setInterval(function(){
    
   loadUsersOnline(); 
  
},500);




