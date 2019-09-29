<table class="table table-striped">
    <?php
    for($i=0; $i<5; $i++){
        for($j=0; $j<5; $j++){
            if($j==0){
                echo "<tr><td>" .$matrix[$i][$j]. "</td>";
            }if($j==4){
                echo "<td>" .$matrix[$i][$j]. "</td></tr>";            
            }else{
                echo "<td>" .$matrix[$i][$j]. "</td>"; 
            }
        }
    }
    ?>
</table>