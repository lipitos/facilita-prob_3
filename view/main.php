<div class="container">
    <div class="row align-items-center">
        <div class="col"></div>
        <div class="col"><h2>Matriz Original</h2></div>
        <div class="col"></div>
    </div>
    <table class="table table-borderless">
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
</div>
<div class="container">
    <div class="row align-items-center">
        <div class="col"></div>
        <div class="col"><h2>Matriz Pares</h2></div>
        <div class="col"></div>
    </div>
<table class="table table-borderless">
    <?php
    for($i=0; $i<5; $i++){
        for($j=0; $j<5; $j++){
            if($matrix[$i][$j] % 2 == 0){
                if($j==0){
                    echo "<tr><td>" .$matrix[$i][$j]. "</td>";
                }if($j==4){
                    echo "<td>" .$matrix[$i][$j]. "</td></tr>";            
                }else{
                    echo "<td>" .$matrix[$i][$j]. "</td>"; 
                }
            }
        }
    }
    ?>
</table>
</div>
<div class="container">
    <div class="row align-items-center">
        <div class="col"></div>
        <div class="col"><h2>Matriz Ímpares</h2></div>
        <div class="col"></div>
    </div>
<table class="table table-borderless">
    <?php
    for($i=0; $i<5; $i++){
        for($j=0; $j<5; $j++){
            if($matrix[$i][$j] % 2 <> 0){
                if($j==0){
                    echo "<tr><td>" .$matrix[$i][$j]. "</td>";
                }if($j==4){
                    echo "<td>" .$matrix[$i][$j]. "</td></tr>";            
                }else{
                    echo "<td>" .$matrix[$i][$j]. "</td>"; 
                }
            }
        }
    }
    ?>
</table>
</div>