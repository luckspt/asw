<html>
<body>
    <h1>II - Criar página web com um pequeno script PHP</h1>
    <h2>2)</h2>
    <?php echo "<p> Alo Mundo! </p>"; ?>

    <h2>3)</h2>
    <?php
    $age = array("Francisco"=>"1935", "Ghandi"=>"1898", "Maria"=>"1970");

    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    ?>

    <h2>4)</h2>
    <form action="pdata.php" method="get">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="number" name="idade"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit">
    </form>
  
  
</body>
</html>