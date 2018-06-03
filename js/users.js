
    <script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/watch.js"></script><script src="./js/jquery-1.11.2.min.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap.min.js"></script>
    
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

<script>
$(function() {
    var accordion = function(){
    var currentPanel = $('#accordion .panel-collapse.in');
    var idCurrentPanel = currentPanel.attr('id');
    var currentHref;
    if (idCurrentPanel) {
      currentHref = '#'+idCurrentPanel;
    }
    
    return function(myHref) {
     var newPanel = $('#accordion ' + myHref);
     var idNewPanel = newPanel.attr('id');
      if(idCurrentPanel!=idNewPanel) {
      if (currentPanel) {
          currentPanel.removeClass('in');
        }
        newPanel.addClass('in');
        currentHref = myHref;
        currentPanel = newPanel;
        idCurrentPanel = idNewPanel;
      }
      else {
        currentPanel.toggleClass('in');
      }
    };
  };
  
  var accrdn = accordion();

  $('#accordion a[data-toggle="collapse"]').click(function(e) {
    e.preventDefault();
    e.stopPropagation();
    accrdn($(this).attr('href'));
  });

});
</script>

<script type="text/javascript" src="share.js" charset="utf-8">
</script>

<script type="text/javascript" src="./js/openapi.js"></script>

<!---тренируем скролл--->
<script src="jquery.endless-scroll-1.3.js"></script>
<script src="ajaxscroll.js"></script>
<script src="hash.js"></script>

<!---totop--->
<script>
$(document).ready(function(){   
			//fade in/out based on scrollTop value
			$(window).scroll(function () {
				if ($(this).scrollTop() > 0) {
					$('#scroller').fadeIn();
				} else {
					$('#scroller').fadeOut();
				}
			});
		 
			// scroll body to 0px on click
			$('#scroller').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 400);
				return false;
			});
		});
</script>

