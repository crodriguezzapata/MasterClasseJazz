<?php
/*
*       Footer pagina principal
*/
?>


<footer class="footer blog-footer">
    <p><a href="index.php">Master Classe Jazz Blog</a></p>
    <p><a href="#">Back to the top</a></p>
</footer>
    <script src="js/bootstrap.js"></script>
    <!--------Carousel-------------->
    <script>
    $(document).ready(function(){
        // Activate Carousel
        $("#slider").carousel();

        // Enable Carousel Indicators
        $(".item1").click(function(){
            $("#slider").carousel(0);
        });
        $(".item2").click(function(){
            $("#slider").carousel(1);
        });
        $(".item3").click(function(){
            $("#slider").carousel(2);
        });
        $(".item4").click(function(){
            $("#slider").carousel(3);
        });

        // Enable Carousel Controls
        $(".left").click(function(){
            $("#slider").carousel("prev");
        });
        $(".right").click(function(){
            $("#slider").carousel("next");
        });
    });
    </script>
    <!------------------FANCYBOX---------------------->
    <script>
    $(".gallery-image").fancybox({
				openEffect : 'fade', 
		    	closeEffect	: 'fade',
		    	closeBtn: false,
		    	helpers : {
		    		title : {
		    			type : 'over' //'float', 'inside', 'outside' or 'over'
		    		},
		    		thumbs : {
			            width: 50
			        },
			        buttons	: {},
			        overlay : {
			            css : {
			                'background' : 'rgba(0,0,0,0.5)'
			            }
        			}
					
		    	}
		    			    	
			});
    </script>
</body>
</html>