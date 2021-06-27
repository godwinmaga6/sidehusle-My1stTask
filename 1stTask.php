<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1st Task</title>
</head>
<body>
    <?php
        function  myRange($start, $end){
            $nums = [];
            $cnt = $start;
        
            while ($cnt <= $end){
                array_push($nums, $cnt);
                $cnt++;
            }
            return $nums;
        }

        function sum2($nums) {
            $result = 0;
            for($i = 0; $i < count($nums); $i++) {
                $result = $result + $nums[$i];
            }
            return $result;
        }

        echo (sum2(myRange(1,10)));
    ?>
</body>
</html>