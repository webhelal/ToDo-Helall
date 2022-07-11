<?php 
$number=[0 , 3 , -5 , 10 ,2];

foreach($number as $num){
    echo $num;
    if($num >0){
        echo '<span style="color:blue"> positve </span> <br>';
    }else if($num = 0 ){
        echo '<span style="color:green"> zero </span> <br>';
        
    }else {
        echo '<span style="color:red"> nagitive </span> <br>';

    }
}
echo "<hr>";

foreach($number as $num){
    echo $num;
    if($num >0){
        ?>
        <span style="color:blue"> positve </span> <br>
        <?php
    }else if($num = 0 )
    {
    ?>

<span style="color:green"> zero </span> <br>
<?php

}else{ ?>
    <span style="color:red"> nagitive </span> <br>
<?php
    }
}
