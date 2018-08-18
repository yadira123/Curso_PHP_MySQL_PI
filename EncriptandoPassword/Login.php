<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        h1{
            text-align: center;
        }
        table{
            width: 25%;
            background: #FFC;
            border: 2px dotted #f00;
            margin: auto;
        }
        .izq{text-align: right;}
        .der{text-align: left;}
        td{
            text-align: center;
            padding: 10px;
        }
        
    </style>
</head>
<body>
    <h1>Introduce tus Datos</h1>
    <form action="comprueba_login.php" method="post">
       <table>
           <tr>
               <td>Usuario:</td>
               <td><input type="text" name="usuario"></td>
           </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>