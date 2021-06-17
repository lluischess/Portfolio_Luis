<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="archivo.txt" download="archivo.txt">Descargar txt</a>
<?php
    $pregunta1 = $_POST["1Question"];
    $respuesta1_1 = $_POST["1Answer1"];
    $respuesta1_2 = $_POST["1Answer2"];
    $respuesta1_3 = $_POST["1Answer3"];
    $respuesta1_4 = $_POST["1Answer4"];

    $pregunta2 = $_POST["2Question"];
    $respuesta2_1 = $_POST["2Answer1"];
    $respuesta2_2 = $_POST["2Answer2"];
    $respuesta2_3 = $_POST["2Answer3"];
    $respuesta2_4 = $_POST["2Answer4"];

    $pregunta3 = $_POST["3Question"];
    $respuesta3_1 = $_POST["3Answer1"];
    $respuesta3_2 = $_POST["3Answer2"];
    $respuesta3_3 = $_POST["3Answer3"];
    $respuesta3_4 = $_POST["3Answer4"];

    $pregunta4 = $_POST["4Question"];
    $respuesta4_1 = $_POST["4Answer1"];
    $respuesta4_2 = $_POST["4Answer2"];
    $respuesta4_3 = $_POST["4Answer3"];
    $respuesta4_4 = $_POST["4Answer4"];

    $pregunta5 = $_POST["5Question"];
    $respuesta5_1 = $_POST["5Answer1"];
    $respuesta5_2 = $_POST["5Answer2"];
    $respuesta5_3 = $_POST["5Answer3"];
    $respuesta5_4 = $_POST["5Answer4"];

    $pregunta6 = $_POST["6Question"];
    $respuesta6_1 = $_POST["6Answer1"];
    $respuesta6_2 = $_POST["6Answer2"];
    $respuesta6_3 = $_POST["6Answer3"];
    $respuesta6_4 = $_POST["6Answer4"];

    $pregunta7 = $_POST["7Question"];
    $respuesta7_1 = $_POST["7Answer1"];
    $respuesta7_2 = $_POST["7Answer2"];
    $respuesta7_3 = $_POST["7Answer3"];
    $respuesta7_4 = $_POST["7Answer4"];

    $pregunta8 = $_POST["8Question"];
    $respuesta8_1 = $_POST["8Answer1"];
    $respuesta8_2 = $_POST["8Answer2"];
    $respuesta8_3 = $_POST["8Answer3"];
    $respuesta8_4 = $_POST["8Answer4"];

    $pregunta9 = $_POST["9Question"];
    $respuesta9_1 = $_POST["9Answer1"];
    $respuesta9_2 = $_POST["9Answer2"];
    $respuesta9_3 = $_POST["9Answer3"];
    $respuesta9_4 = $_POST["9Answer4"];

    $pregunta10 = $_POST["10Question"];
    $respuesta10_1 = $_POST["10Answer1"];
    $respuesta10_2 = $_POST["10Answer2"];
    $respuesta10_3 = $_POST["10Answer3"];
    $respuesta10_4 = $_POST["10Answer4"];

    $pregunta11 = $_POST["11Question"];
    $respuesta11_1 = $_POST["11Answer1"];
    $respuesta11_2 = $_POST["11Answer2"];
    $respuesta11_3 = $_POST["11Answer3"];
    $respuesta11_4 = $_POST["11Answer4"];

    $pregunta12 = $_POST["12Question"];
    $respuesta12_1 = $_POST["12Answer1"];
    $respuesta12_2 = $_POST["12Answer2"];
    $respuesta12_3 = $_POST["12Answer3"];
    $respuesta12_4 = $_POST["12Answer4"];

    $pregunta13 = $_POST["13Question"];
    $respuesta13_1 = $_POST["13Answer1"];
    $respuesta13_2 = $_POST["13Answer2"];
    $respuesta13_3 = $_POST["13Answer3"];
    $respuesta13_4 = $_POST["13Answer4"];

    $pregunta14 = $_POST["14Question"];
    $respuesta14_1 = $_POST["14Answer1"];
    $respuesta14_2 = $_POST["14Answer2"];
    $respuesta14_3 = $_POST["14Answer3"];
    $respuesta14_4 = $_POST["14Answer4"];

    $pregunta15 = $_POST["15Question"];
    $respuesta15_1 = $_POST["15Answer1"];
    $respuesta15_2 = $_POST["15Answer2"];
    $respuesta15_3 = $_POST["15Answer3"];
    $respuesta15_4 = $_POST["15Answer4"];

    $file = fopen("archivo.txt", "w");
    if (!empty($_POST["1Question"])) {
        fwrite($file, $pregunta1 . PHP_EOL);
        fwrite($file, "{" . PHP_EOL);

        if (!isset($_POST["1checkboxes1"])) {
            fwrite($file,"~" . $respuesta1_1 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta1_1 . PHP_EOL);
        }

        if (!isset($_POST["1checkboxes2"])) {
            fwrite($file,"~" . $respuesta1_2 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta1_2 . PHP_EOL);
        }
            
        if (!isset($_POST["1checkboxes3"])) {
            fwrite($file,"~" . $respuesta1_3 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta1_3 . PHP_EOL);
        }

        if (!isset($_POST["1checkboxes4"])) {
            fwrite($file,"~" . $respuesta1_4 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta1_4 . PHP_EOL);
        }
        fwrite($file, "}" . PHP_EOL);
        fwrite($file, "" . PHP_EOL);
    }

    if (!empty($_POST["2Question"])) {
        fwrite($file, $pregunta2 . PHP_EOL);
        fwrite($file, "{" . PHP_EOL);

        if (!isset($_POST["2checkboxes1"])) {
            fwrite($file,"~" . $respuesta2_1 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta2_1 . PHP_EOL);
        }

        if (!isset($_POST["2checkboxes2"])) {
            fwrite($file,"~" . $respuesta2_2 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta2_2 . PHP_EOL);
        }
            
        if (!isset($_POST["2checkboxes3"])) {
            fwrite($file,"~" . $respuesta2_3 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta2_3 . PHP_EOL);
        }

        if (!isset($_POST["2checkboxes4"])) {
            fwrite($file,"~" . $respuesta2_4 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta2_4 . PHP_EOL);
        }
        fwrite($file, "}" . PHP_EOL);
        fwrite($file, "" . PHP_EOL);
    }


    if (!empty($_POST["3Question"])) {
        fwrite($file, $pregunta3 . PHP_EOL);
        fwrite($file, "{" . PHP_EOL);

        if (!isset($_POST["3checkboxes1"])) {
            fwrite($file,"~" . $respuesta3_1 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta3_1 . PHP_EOL);
        }

        if (!isset($_POST["3checkboxes2"])) {
            fwrite($file,"~" . $respuesta3_2 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta3_2 . PHP_EOL);
        }
            
        if (!isset($_POST["3checkboxes3"])) {
            fwrite($file,"~" . $respuesta3_3 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta3_3 . PHP_EOL);
        }

        if (!isset($_POST["3checkboxes4"])) {
            fwrite($file,"~" . $respuesta3_4 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta3_4 . PHP_EOL);
        }
        fwrite($file, "}" . PHP_EOL);
        fwrite($file, "" . PHP_EOL);
    }

    if (!empty($_POST["4Question"])) {
        fwrite($file, $pregunta4 . PHP_EOL);
        fwrite($file, "{" . PHP_EOL);

        if (!isset($_POST["4checkboxes1"])) {
            fwrite($file,"~" . $respuesta4_1 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta4_1 . PHP_EOL);
        }

        if (!isset($_POST["4checkboxes2"])) {
            fwrite($file,"~" . $respuesta4_2 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta4_2 . PHP_EOL);
        }
            
        if (!isset($_POST["4checkboxes3"])) {
            fwrite($file,"~" . $respuesta4_3 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta4_3 . PHP_EOL);
        }

        if (!isset($_POST["4checkboxes4"])) {
            fwrite($file,"~" . $respuesta4_4 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta4_4 . PHP_EOL);
        }
        fwrite($file, "}" . PHP_EOL);
        fwrite($file, "" . PHP_EOL);
    }

    if (!empty($_POST["5Question"])) {
        fwrite($file, $pregunta5 . PHP_EOL);
        fwrite($file, "{" . PHP_EOL);

        if (!isset($_POST["5checkboxes1"])) {
            fwrite($file,"~" . $respuesta5_1 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta5_1 . PHP_EOL);
        }

        if (!isset($_POST["5checkboxes2"])) {
            fwrite($file,"~" . $respuesta5_2 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta5_2 . PHP_EOL);
        }
            
        if (!isset($_POST["5checkboxes3"])) {
            fwrite($file,"~" . $respuesta5_3 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta5_3 . PHP_EOL);
        }

        if (!isset($_POST["5checkboxes4"])) {
            fwrite($file,"~" . $respuesta5_4 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta5_4 . PHP_EOL);
        }
        fwrite($file, "}" . PHP_EOL);
        fwrite($file, "" . PHP_EOL);
    }

    if (!empty($_POST["6Question"])) {
        fwrite($file, $pregunta6 . PHP_EOL);
        fwrite($file, "{" . PHP_EOL);

        if (!isset($_POST["6checkboxes1"])) {
            fwrite($file,"~" . $respuesta6_1 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta6_1 . PHP_EOL);
        }

        if (!isset($_POST["6checkboxes2"])) {
            fwrite($file,"~" . $respuesta6_2 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta6_2 . PHP_EOL);
        }
            
        if (!isset($_POST["6checkboxes3"])) {
            fwrite($file,"~" . $respuesta6_3 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta6_3 . PHP_EOL);
        }

        if (!isset($_POST["6checkboxes4"])) {
            fwrite($file,"~" . $respuesta6_4 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta6_4 . PHP_EOL);
        }
        fwrite($file, "}" . PHP_EOL);
        fwrite($file, "" . PHP_EOL);
    }

    if (!empty($_POST["7Question"])) {
        fwrite($file, $pregunta7 . PHP_EOL);
        fwrite($file, "{" . PHP_EOL);

        if (!isset($_POST["7checkboxes1"])) {
            fwrite($file,"~" . $respuesta7_1 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta7_1 . PHP_EOL);
        }

        if (!isset($_POST["7checkboxes2"])) {
            fwrite($file,"~" . $respuesta7_2 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta7_2 . PHP_EOL);
        }
            
        if (!isset($_POST["7checkboxes3"])) {
            fwrite($file,"~" . $respuesta7_3 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta7_3 . PHP_EOL);
        }

        if (!isset($_POST["7checkboxes4"])) {
            fwrite($file,"~" . $respuesta7_4 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta7_4 . PHP_EOL);
        }
        fwrite($file, "}" . PHP_EOL);
        fwrite($file, "" . PHP_EOL);
    }

    if (!empty($_POST["8Question"])) {
        fwrite($file, $pregunta8 . PHP_EOL);
        fwrite($file, "{" . PHP_EOL);

        if (!isset($_POST["8checkboxes1"])) {
            fwrite($file,"~" . $respuesta8_1 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta8_1 . PHP_EOL);
        }

        if (!isset($_POST["8checkboxes2"])) {
            fwrite($file,"~" . $respuesta8_2 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta8_2 . PHP_EOL);
        }
            
        if (!isset($_POST["8checkboxes3"])) {
            fwrite($file,"~" . $respuesta8_3 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta8_3 . PHP_EOL);
        }

        if (!isset($_POST["8checkboxes4"])) {
            fwrite($file,"~" . $respuesta8_4 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta8_4 . PHP_EOL);
        }
        fwrite($file, "}" . PHP_EOL);
        fwrite($file, "" . PHP_EOL);
    }

    if (!empty($_POST["9Question"])) {
        fwrite($file, $pregunta9 . PHP_EOL);
        fwrite($file, "{" . PHP_EOL);

        if (!isset($_POST["9checkboxes1"])) {
            fwrite($file,"~" . $respuesta9_1 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta9_1 . PHP_EOL);
        }

        if (!isset($_POST["9checkboxes2"])) {
            fwrite($file,"~" . $respuesta9_2 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta9_2 . PHP_EOL);
        }
            
        if (!isset($_POST["9checkboxes3"])) {
            fwrite($file,"~" . $respuesta9_3 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta9_3 . PHP_EOL);
        }

        if (!isset($_POST["9checkboxes4"])) {
            fwrite($file,"~" . $respuesta9_4 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta9_4 . PHP_EOL);
        }
        fwrite($file, "}" . PHP_EOL);
        fwrite($file, "" . PHP_EOL);
    }

    if (!empty($_POST["10Question"])) {
        fwrite($file, $pregunta10 . PHP_EOL);
        fwrite($file, "{" . PHP_EOL);

        if (!isset($_POST["10checkboxes1"])) {
            fwrite($file,"~" . $respuesta10_1 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta10_1 . PHP_EOL);
        }

        if (!isset($_POST["10checkboxes2"])) {
            fwrite($file,"~" . $respuesta10_2 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta10_2 . PHP_EOL);
        }
            
        if (!isset($_POST["10checkboxes3"])) {
            fwrite($file,"~" . $respuesta10_3 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta10_3 . PHP_EOL);
        }

        if (!isset($_POST["10checkboxes4"])) {
            fwrite($file,"~" . $respuesta10_4 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta10_4 . PHP_EOL);
        }
        fwrite($file, "}" . PHP_EOL);
        fwrite($file, "" . PHP_EOL);
    }

    if (!empty($_POST["11Question"])) {
        fwrite($file, $pregunta11 . PHP_EOL);
        fwrite($file, "{" . PHP_EOL);

        if (!isset($_POST["11checkboxes1"])) {
            fwrite($file,"~" . $respuesta11_1 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta11_1 . PHP_EOL);
        }

        if (!isset($_POST["11checkboxes2"])) {
            fwrite($file,"~" . $respuesta11_2 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta11_2 . PHP_EOL);
        }
            
        if (!isset($_POST["11checkboxes3"])) {
            fwrite($file,"~" . $respuesta11_3 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta11_3 . PHP_EOL);
        }

        if (!isset($_POST["11checkboxes4"])) {
            fwrite($file,"~" . $respuesta11_4 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta11_4 . PHP_EOL);
        }
        fwrite($file, "}" . PHP_EOL);
        fwrite($file, "" . PHP_EOL);
    }

    if (!empty($_POST["12Question"])) {
        fwrite($file, $pregunta12 . PHP_EOL);
        fwrite($file, "{" . PHP_EOL);

        if (!isset($_POST["12checkboxes1"])) {
            fwrite($file,"~" . $respuesta12_1 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta12_1 . PHP_EOL);
        }

        if (!isset($_POST["12checkboxes2"])) {
            fwrite($file,"~" . $respuesta12_2 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta12_2 . PHP_EOL);
        }
            
        if (!isset($_POST["12checkboxes3"])) {
            fwrite($file,"~" . $respuesta12_3 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta12_3 . PHP_EOL);
        }

        if (!isset($_POST["12checkboxes4"])) {
            fwrite($file,"~" . $respuesta12_4 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta12_4 . PHP_EOL);
        }
        fwrite($file, "}" . PHP_EOL);
        fwrite($file, "" . PHP_EOL);
    }

    if (!empty($_POST["13Question"])) {
        fwrite($file, $pregunta13 . PHP_EOL);
        fwrite($file, "{" . PHP_EOL);

        if (!isset($_POST["13checkboxes1"])) {
            fwrite($file,"~" . $respuesta13_1 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta13_1 . PHP_EOL);
        }

        if (!isset($_POST["13checkboxes2"])) {
            fwrite($file,"~" . $respuesta13_2 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta13_2 . PHP_EOL);
        }
            
        if (!isset($_POST["13checkboxes3"])) {
            fwrite($file,"~" . $respuesta13_3 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta13_3 . PHP_EOL);
        }

        if (!isset($_POST["13checkboxes4"])) {
            fwrite($file,"~" . $respuesta13_4 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta13_4 . PHP_EOL);
        }
        fwrite($file, "}" . PHP_EOL);
        fwrite($file, "" . PHP_EOL);
    }

    if (!empty($_POST["14Question"])) {
        fwrite($file, $pregunta14 . PHP_EOL);
        fwrite($file, "{" . PHP_EOL);

        if (!isset($_POST["14checkboxes1"])) {
            fwrite($file,"~" . $respuesta14_1 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta14_1 . PHP_EOL);
        }

        if (!isset($_POST["14checkboxes2"])) {
            fwrite($file,"~" . $respuesta14_2 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta14_2 . PHP_EOL);
        }
            
        if (!isset($_POST["14checkboxes3"])) {
            fwrite($file,"~" . $respuesta14_3 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta14_3 . PHP_EOL);
        }

        if (!isset($_POST["14checkboxes4"])) {
            fwrite($file,"~" . $respuesta14_4 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta14_4 . PHP_EOL);
        }
        fwrite($file, "}" . PHP_EOL);
        fwrite($file, "" . PHP_EOL);
    }

    if (!empty($_POST["15Question"])) {
        fwrite($file, $pregunta15 . PHP_EOL);
        fwrite($file, "{" . PHP_EOL);

        if (!isset($_POST["15checkboxes1"])) {
            fwrite($file,"~" . $respuesta15_1 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta15_1 . PHP_EOL);
        }

        if (!isset($_POST["15checkboxes2"])) {
            fwrite($file,"~" . $respuesta15_2 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta15_2 . PHP_EOL);
        }
            
        if (!isset($_POST["15checkboxes3"])) {
            fwrite($file,"~" . $respuesta15_3 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta15_3 . PHP_EOL);
        }

        if (!isset($_POST["15checkboxes4"])) {
            fwrite($file,"~" . $respuesta15_4 . PHP_EOL);
        }else{
            fwrite($file,"=" . $respuesta15_4 . PHP_EOL);
        }
        fwrite($file, "}" . PHP_EOL);
        fwrite($file, "" . PHP_EOL);
    }


?>
</body>
</html>
