 <?php
    //check submit have value or not
    //give condition to check
    //isset we use to check varible have value or nto
    if (isset($_POST['send'])) {
        // declear varible
        $score1 = $_POST['s1'];
        $score2 = $_POST['s2'];
        $score3 = $_POST['s3'];
        $score4 = $_POST['s4'];
        $score5 = $_POST['s5'];
        // echo "Score :$score1";
//total
       $total = $score1 + $score2 + $score3 + $score4 + $score5;
    //    echo "total: $total";
        //avg
        $avg   = $total / 5;
        // echo "Avg:$avg";
        //grade
        if($avg >=90 && $avg<=100){
            $grade = "A";

        }else if($avg>=80 && $avg<90){
            $grade="B";
        }else if($avg>=70 && $avg<80){
            $grade ="C";
        }else if($avg>=60 && $avg<70){
            $grade ="D";
        }else if($avg>=50 && $avg<60){
            $grade="E";
        }else if($avg<50 ){
            $grade ="ធ្លាក់ក្នុងអន្លង់ស្នេហ៍អូន";
        }
       // echo "grade:$grade";
         echo "
                    <tr>
                            <td>$score1</td>
                            <td>$score2</td>
                            <td>$score3</td>
                            <td>$score4</td>
                            <td>$score5</td>
                            <td>$total</td>
                            <td>$avg</td>
                            <td>$grade</td>
                    </tr>";     
    }else{
        echo "can not get  value";
    }

    ?>
