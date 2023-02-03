<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body><br><br>
    <h1 style="text-align: center;">ExerciceXP-Gold 1 Display Average Temperature</h1>
    <div class="container">
        <br>
            <?php
                $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
                        68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
                        $temp_array = explode(',', $month_temp);
                        $tot_temp = 0;
                        $temp_array_length = count($temp_array);
                        foreach($temp_array as $temp)
                        {
                        $tot_temp += $temp;
                        }
                        $avg_high_temp = $tot_temp/$temp_array_length;
                        echo "La température moyenne est de : ".$avg_high_temp."
                        "; 
                        sort($temp_array);
                        echo " <br>Liste des cinq températures les plus basses :";
                        for ($i=0; $i< 5; $i++)
                        { 
                        echo $temp_array[$i].", ";
                        }
                        echo "<br>Liste des cinq températures les plus élevées :";
                        for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
                        {
                        echo $temp_array[$i].", ";
                        }
            ?>
    </div>
</body>
</html>