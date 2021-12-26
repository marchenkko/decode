<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<input type="button" value="View Form" class="classloader">
<div id="contenthere">

</div>

</div>
</body>
<script>
    $('#form_accept').submit(function(){
        var form_data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'add_users.php',
            data: form_data,
            success: function() {
                alert('User add!');
                $('#form_accept')[0].reset();
            }
        });
    });
    $(function(){
        $(".classloader").click(function(){
            $("#contenthere").load("/form.php");
        });
    });
</script>
</html>