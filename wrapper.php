<html>
   <body>
      <ul>
	<li>test2</li>
      </ul>
      <ul class ="foo">
	<li>test</li>	
      </ul>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
      <script type="text/javascript">
      (function($){
          $('ul.foo').click(function(){
	      $('li',this).css('background-color','red');
	  });
	})(jQuery)
      </script>
    </body>
</html>