<html>
    <head>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript">
            function clickHandler(e){
                alert('thank you');
            }
            $(document).bind('ready', function(){
                 $('#click_me').bind('click', clickHandler);
                 $('#remove_event').bind('click', function(e){
                     $('#click_me').unbind('click', clickHandler);
                 });
                 $('#trigger_event').bind('click', function(e){
                     $('#click_me').trigger('click');
                 });
             })
        </script>
    </head>
    <body>
        <input id="click_me" type="button" value="click me" />
        <input id="remove_event" type="button" value="unbind" />
        <input id="trigger_event" type="button" value="trigger" />
    </body>
</html>