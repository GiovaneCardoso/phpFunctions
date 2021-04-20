
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST"> 
        <label>Texto</label>
        <input type="text" name="text" id="text" />

        <select id="strvalue" name="strvalue" id="strvalue">
            <option value="strupper">STRTOUPPER</option>
            <option value="strlower">STRTOLOWER</option>
            <option value="strlen">STRLEN</option>
            <option value="strrepeat">STRREPEAT</option>
            <option value="substr">SUBSTR</option>
            <option value="strpos">STRPOS</option>
            <option value="strpad">STRPAD</option>


        </select>
        <p>Caso selecionou substr, preencha esses campos:</p>
        <label>Inicio<label>
        <input type="text" name="start" id="start">
        <label>Comprimento</label>
        <input type="text" name="length" id="length">

        <p>Caso selecionou repeat, preencha esse campo:</p>
        <input type="text" name="strrepeat" id="strrepeat">
        <p>Caso selecionou strpos, preencha esse campo:</p>
        <label>Termo a ser buscado</label>
        <input type="text" name="search" id="search"></input>
        <p>Caso selecionou strpad, preencha esses campos:</p>
        <label>Tamanho a ser preenchido<label>
        <input type="text" name="tamanho" id="tamanho"></input>
        <label>Caracter</label>
        <input type="text" name="caracter" id="caracter"></input><br/>  


        <input type="submit" value="Submeter"></input>
    </form>
    <?php
    $valor = "";
    $result = "";
    if (isset($_POST["text"]) && isset($_POST["strvalue"])) {
        $valor = $_POST["text"];
        $strvalue = $_POST["strvalue"];
        switch($strvalue) {
            case "strupper":
                $result = strtoupper($valor);
                break;
            case "strlower":
                $result = strtolower($valor);
                break;
            case "strlen":
                $result = strlen($valor);
                break;
            case "strrepeat":
                $quant = $_POST["strrepeat"];
                $result = str_repeat($valor, $quant);
                break;
            case "substr":
                $inicio = $_POST["start"];
                $comprimento = $_POST["length"];
                $result = substr($valor,$inicio, $comprimento);
                break;
            case "strpos":
                $termo = $_POST["search"];
                $result = strpos($valor,$termo);
                break;
            case "strpad":
                $tamanho = $_POST["tamanho"];
                $caracter = $_POST["caracter"];
                $result = str_pad($valor, $tamanho, $caracter, 1);
                break;

        }
        echo "<h1>$result</h1>";

        // if ($strvalue == "strupper") {
        //     $result = strtoupper($valor);
        // }
        // if ($strvalue == "strlower") {
        //     $result = strtolower($valor);
        // }
        // if ($strvalue == "strlen") {
        //     $result = strlen($valor);
        // }
        // if ($strvalue == "strrepeat") {
        //     $quant = $_POST["strrepeat"];
        //     $result = str_repeat($valor, $quant);
        // }
        // if ($strvalue == "substr") {
        //     $inicio = $_POST["start"];
        //     $comprimento = $_POST["length"];
        //     $result = substr($valor,$inicio, $comprimento);
            
        // }
        // if ($strvalue == "strpos") {
        //     $termo = $_POST["search"];
        //     $result = strpos($valor,$termo);
        // }
        // if ($strvalue == "strpad") {
        //     $tamanho = $_POST["tamanho"];
        //     $caracter = $_POST["caracter"];
        //     $result = str_pad($valor, $tamanho, $caracter, 1);
        // }
    }
?>
</body>
</html>
