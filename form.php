<!DOCTYPE html>
<html>
    <head>
        <style>
            span {
            }
        </style>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body>
        <p>
            <input type="text" />
            <span></span>
        </p>
        <script>
            $("input").focus( function () {
                $(this).next("span").html('focus');
            }).blur( function() {
                $(this).next("span").html('blur');
            }).change(function(e){
                alert('change!! '+$(e.target).val());
            }).select(function(){
                $(this).next('span').html('select');
            });
        </script>
    </body>
</html>