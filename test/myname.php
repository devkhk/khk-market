<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
</head>
<body>
    <p>안녕하세요 제 이름은 <span id="name"></span> 입니다!
    </p>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script>
        $.ajax({
            url: "prac_ajax.php",
            type: "get",
        }).done(function(data){
            $("#name").text(data);
            console.log("zzz");
        });
    </script>
</body>
</html>