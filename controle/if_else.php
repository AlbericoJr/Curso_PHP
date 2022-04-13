<div class="titulo">If Else</div>

<?php

if(true){
    echo "Serei impresso? <br>";
    echo "Serei impresso novamente?<br>";
}

if(false){
    echo"Verdadeiro - Parte A<br>";
    echo"Verdadeiro - Parte B<br>";
}else{
    echo"Falso - Parte A<br>";
    echo"Falso - Parte B<br>";
}

if(false){
    echo"Passo A <br>";
}else if(false){
    echo"Passo B<br>";
}elseif(false){
    echo"Passo C<br>";
}else if(false){
    echo"Passo D<br>";
}else if(true){
    echo"Passo E<br>";
}else{
    echo"último Passo<br>";
}


echo"Fim<br>";