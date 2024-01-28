<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #faedcd;
        }
        div{
            width: 100px;
            height: 50px;
            display: flex;
            text-align: center;
           
            
        }
        .botones{
            width: 550px;
            height: 100px;
            margin: 40px;
            font-size: 50px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: 283618;
            background-color: #ccd5ae;
            border-radius: 15px;
            transition: background-color 1s, color 1s;
        }
        h1{
            text-align: center;
            font-size: 30px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        button:hover{
            transition: 1s;
            color: #ccd5ae;
            background-color: #283618;
            
        }
    </style>
</head>
<body>
 <h1>Que informacion desea manipular?</h1>
    <div>
        <a href="proveedores.php">
            <button class="botones">PROVEEDORES</button>
        </a>
        <a href="proveedores.php">
            <button class="botones">PRODUCTOS</button>
        </a>
        <a href="proveedores.php">
            <button class="botones">LOCALIDADES</button>
        </a>
        
        
    </div>
</body>
</html>