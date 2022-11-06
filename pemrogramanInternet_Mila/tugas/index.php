<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  	<link rel="icon" href="past here your logo path" type="image/x-icon">
  
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="inputIndex">Masukan Index</label>
        <input type="text" name="InputIndex" id="InputIndex">
        <button type="submit" name="proses" id="proses">Proses</button>
    </form>
    <?php
        if(isset($_POST['proses'])){
            $array = ['U','D','I','N'];
            $InputIndex = $_POST['InputIndex'];

            if(array_key_exists($InputIndex,$array)){
                echo $array[$InputIndex];
            } else{
                echo "index tidak tersedia";
            }
        }
        ?>
</body>
</html>
