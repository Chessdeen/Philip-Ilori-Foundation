<footer data-brackets-id='987' data-brackets-id='620' class="text-muted">
  <div data-brackets-id='988' data-brackets-id='621' class="container">
    <p>
    <!-- Link back to AdeBest can't be removed. Template is licensed under CC BY 3.0. -->
    &copy; <script>document.write(new Date().getFullYear());</script> The Philip Ilori Foundation. All rights reserved | This website is made with <i class="fa fa-heart-o"></i> by <a href="https://ade.best" target="_blank" > Ade Best </a>
    <!-- Link back to AdeBest can't be removed. Template is licensed under CC BY 3.0. -->        

    </p>
  </div>
</footer>      

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
   <script src="js/scripts.js"></script>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>

$(document).ready(function(){
    
// REST OF THE CODE
    
$('#selectAllBoxes').click(function(event){

if(this.checked) {

$('.checkBoxes').each(function(){

this.checked = true;


});


} else {

$('.checkBoxes').each(function(){

this.checked = false;


});


}   

});

    
    
var div_box = "<div id='load-screen'><div id='loading'></div></div>";
    
$("body").prepend(div_box);
$('#load-screen').delay(700).fadeOut(600, function(){
    $(this).remove();
});
    
    
    
    
    
    
    
});

function loadUsersOnline() {
    
    $.get("functions.php?onlineusers=result", function(data){
        $(".usersonline").text(data);
     
    });
   
    
}


setInterval(function(){
    
   loadUsersOnline(); 
  
},500);




</script>

</body>

</html>
