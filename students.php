<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT</title>
    <style>
        table,th,td{
            border:1px solid black;
        }
        </style>
</head>
<body>

    <?php
    $student =array(
        array("st_name"=>"maria","st_grade"=>68,"st_age"=>19),
        array("st_name"=>"sara","st_grade"=>90,"st_age"=>20),
        array("st_name"=>"aysha","st_grade"=>100,"st_age"=>18),
        array("st_name"=>"ahmed","st_grade"=>57,"st_age"=>20),
        array("st_name"=>"ali","st_grade"=>75,"st_age"=>16)
    );
    function calculateStatus($grade){
        $status='';
        if($grade<=100 ||$grade>=0){
            if($grade>=90){
                $status="ممتاز";}
            else if($grade>=80){
                $status="جيد جدا";}
            else if($grade>=70){
                $status="جيد ";}
            else if($grade>=60){
                $status=" مقبول";}
            else{
                $status="راسب";
        }
        }else{
            $status="your grade is invalid";
        }
      return $status;
    }
    function max_grade(){
        $max=0;
        global $student;
        foreach($student as $st){
            if($max<$st['st_grade']){
                $max=$st['st_grade'];
            }
        }
        return $max;
    }
    function min_grade(){
        $min=200;
        global $student;
        foreach($student as $st){
            if($min>$st['st_grade']){
                $min=$st['st_grade'];
            }
        }
        return $min;
    }
        function average(){
        $sum=0;
        $count=0;
        global $student;
        foreach($student as $st){
            $sum+=$st['st_grade'];
            $count++;
        }
        return $sum/$count;
    }
    function pass(){
        $count=0;
        global $student;
        foreach($student as $st){
            if($st['st_grade']>=60){
                $count++;
            }
            
        }
        return $count;
    }
    ?>
    
        <table>
        <tr>
            <th>اسم الطالب</th>
            <th>علامة الطالب</th>
            <th>عمر الطالب</th>
            <th>الحالة</th>
        </tr>
        <?php
        foreach($student as $st){
            ?>
        <tr>
            <td> <?php echo $st["st_name"]?> </td>
            <td> <?php echo $st["st_grade"]?></td>
            <td> <?php echo $st["st_age"]?></td>
            <td> <?php echo calculateStatus( $st["st_grade"]) ?></td>
</tr>


<?php
        }
        ?>
        <table>
            <div class="additional-info">
                <p>اعلى درجة:<?php echo max_grade(); ?></p>
                <p>اقل درجة: <?php echo min_grade(); ?></p>
                <p>المتوسط: <?php echo average(); ?></p>
                <p>الناجحين: <?php echo pass();?></p>
            </div>
</body>
</html>