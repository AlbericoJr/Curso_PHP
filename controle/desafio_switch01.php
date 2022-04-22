<div class="titulo">Desafio Switch #01</div>

<form action="#" method="POST">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha - km</option>
        <option value="metro-km">Metros - km</option>
        <option value="km-metro">km > Metros</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    from > &{
        font-size: 1.8rem;
    }
</style>

<?php
echo $_POST['param'] ; '<br>';
echo_$_POST['conversao']