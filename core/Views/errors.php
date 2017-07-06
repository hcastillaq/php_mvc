
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content=ro"ie=edge">
    <title>Error</title>
    <style>
        *{
            font-family: sans-serif, Helvetica;
            padding: 0px;
            margin: 0px;
        }
        header{
            background: #e53935;
            color:white;
            padding: 20px;
            box-shadow: 1px 0px 4px rgba(0,0,0,.3),  1px 0px 10px rgba(0,0,0,.2)
        }

        body{
            background: #fefefe;
        }

        section{
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            Error: <?php echo $error->getMessage();?>
        </h1>
    </header>
    <section>
         <h4>
            <?php echo $error->getFile();?>
        </h4>
        <h4>
            Línia: <?php echo $error->getLine();?>
        </h4>
    </section>
</body>
</html>

