<div id="home" class="page">

	<div id="colors">
		<div class="color c1"></div>
		<div class="color c2"></div>
		<div class="color c3"></div>
		<div class="color c4"></div>
		<div class="color c5"></div>
	</div>
	
	<div class="home_logo">
		<img src="images/logo.png" alt="The Odd Duck">

		<div class="text">The <span class="white">Odd</span> Duck</div>
	</div>
	
	<script type="text/javascript">     
        $(function() {
            $(window).resize(function() {
                var win = $("#home");
                var area = $('.home_logo');
                $('#signuparea').css({
                    position: 'absolute',                       
                    left: (win.width() - area.outerWidth()) / 2,
                    top: (win.height() - area.outerHeight()) / 2
                });

                //$('body').append('<div>l=' + ((win.width() - area.outerWidth()) / 2) + '</div>');                     
                //$('body').append('<div>w=' + area.outerWidth() + '</div>');
                //$('body').append('<div>h=' + area.outerHeight() + '</div>');
            });

            $(window).resize();
        });
    </script>
</div>