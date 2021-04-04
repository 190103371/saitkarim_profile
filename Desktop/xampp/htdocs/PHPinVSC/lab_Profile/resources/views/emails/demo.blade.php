<!DOCTYPE html>
<html lang="kz">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">

Hello <i>{{ $demo->receiver }}</i>,
<p>This is a demo email for lab work. Also, it is the HTML version</p>

<p><u>Demo object values</u></p>

<div>
    <p><b>Demo one: </b>&nbsp;{{ $demo->demo_one }}</p>
    <p><b>Demo two: </b>&nbsp;{{ $demo->demo_two }}</p>
</div>

<p><u>Values passed by with method:</u></p>

<div>
    <p><b>testVarOne: </b>&nbsp;{{ $testVarOne }}</p>
    <p><b>testVarTwo: </b>&nbsp;{{ $testVarTwo }}</p>
</div>

Thank You,
<br/>
<i>{{ $demo->sender }}</i>

</body>
</html>
