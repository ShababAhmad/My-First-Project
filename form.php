<!doctype html>
<html>
<head>
    <script src="js/jquery-1.9.0.js"></script>
</head>
    <body>
        <form id="form1">
            <label>Search</label>
            <input name="search" type="text" value="" />
            <br/>

           
        </form>
        <div id="result"></div>
    </body>

    <script>
        $("#form1").submit(function(e){
            e.preventDefault();
            var val = $(this).serialize();
            $.ajax({
                url:"test.php",
                type:"post",
                data:val,
                success : function(response){

                    $("#result").html(response);
                },error : function(jqXHR, textStatus, errorThrown){
                    $("#result").html(errorThrown + textStatus);
                }
            });

        });
    </script>
</html>
