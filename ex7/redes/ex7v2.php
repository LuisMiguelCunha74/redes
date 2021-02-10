<?php
    $nota =12;
    if($nota<10)
    {
        echo 'aluno <span style="color:#ff0000">reprovado</span> com' .$nota.'valores.';
        echo '<br>devera trabalhar mais para alcançar resulatados positivos';
    }
    elseif ($nota>=10 && $nota<=20)
    {
        echo 'aluno <spa style="color:#00ff00">aprovado</span> com' .$nota. 'valores.';
    }
?>