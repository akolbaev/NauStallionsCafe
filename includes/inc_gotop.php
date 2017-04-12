<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#mycarousel").carousel( { interval: 2000 } );
                          $("#carousel-pause").click(function(){
                $("#mycarousel").carousel('pause');
            });
                        $("#carousel-play").click(function(){
                $("#mycarousel").carousel('cycle');
            });
        });
    </script>


    <a href="index.html" class="back-to-top" style="display: inline;">
        <i class="fa fa-chevron-circle-up"></i>
    </a>
    <a class="back-to-top" style="display: inline;" href="index.html"></a>

<script>

$('.back-to-top').css({"display": "none"})


jQuery(document).ready(function() {
var offset = 250;
var duration = 300;
jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > offset) {
jQuery('.back-to-top').fadeIn(duration);
} else {
jQuery('.back-to-top').fadeOut(duration);
}
});
 
jQuery('.back-to-top').click(function(event) {
event.preventDefault();
jQuery('html, body').animate({scrollTop: 0}, duration);
return false;
})
});
 

</script>
       
</body>
</html>