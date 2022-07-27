<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Weather App</title>
<script src="js/index.js" type="text/javascript"></script>
<!-- CSS only -->
<link rel="icon" type="image/x-icon" href="116.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div id="town" class="element"></div>
        <div id="temp" class="element"></div>

        <div id="condition" class="element"></div>
        <div id="icon" class="element"></div>
    </div>
    <div id="formWrap">
        <form action="models/add.php" method="POST" id="form">
            <input type="hidden" id="hidden_city" name="city">
            <input type="hidden" id="hidden_temp" name="temp">
            <input type="submit" value="Record this data" id="btn" class="btn btn-primary btn-lg">
        </form>
    </div>
</body>
</html>