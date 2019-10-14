<?php 
   session_start();
   echo '<h3>minishop</h3>';
   echo '<div class="box">';
   echo '<div class="table">';
   echo '<table><br/>';

   $count = 0;
   $total = 0;
   $element = array(
       log => in,
       man => yam
   );
   echo var_dump($element);
   foreach($element as $elem)
   {
        echo '<tr>';
        echo '<td style="color: red;">'.$elem.'</td>';
        echo '<td style="color: cyan;">'.$elem.'</td>';
        echo '<td><input type="submit" name="submit" style="color: green; border: 2px solid green;"></td></tr>';
        $i++;
        $total = $total + $i;
   }
   echo '</table>';
   echo '</div>';
   echo '</div>';
   
?>