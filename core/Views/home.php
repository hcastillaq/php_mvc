<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>

    <style>
        *{
            margin:0px;
            padding:0px;
            font-family: sans-serif;
        }

        section{
            width: 100%;
            height: 100vh;
            background: #eeeeee;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #212121;
            font-size: 2em;
            font-style: italic;
        }
    </style>
</head>
<body>
    <section>
        <span><?php echo $message; ?></span>
    </section>
</body>
</html>