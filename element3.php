<!-- http://api.jquery.com/wrap/ -->
<!DOCTYPE html>
<html>
    <head>
        <style>
            div {
                border:2px blue solid;
                margin:2px;
                padding:2px;
            }
            p {
                background:yellow;
                margin:2px;
                padding:2px;
            }
            strong {
                color:red;
            }
        </style>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body>
        <span>Span Text</span>
        <strong>What about me?</strong>
        <span>Another One</span>
        <script>$("span").wrap("<div><div><p><em><b></b></em></p></div></div>");</script>
    </body>
</html>
