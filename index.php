<h1> Exemplos php </h1>
<?php
if($_GET['name']){
    $nomeUser = $_GET['name'];  
} else {
    $nomeUser ="Estranho";}
try {
    
} catch (\Throwable $th) {
    
}

$listaNumb = [10, "10", 10, "10", "Eduardo", "104394"];

function helloWord (string $nameUser){
    echo "<h1> Olá $nameUser, seja bem vido ao PHP</h1>";
}

function tranformaInt (string $var):int {
        return (int)$var;
}

helloWord("Eduardo");
$retorno = tranformaInt("1000");
echo $retorno;
$listaNumb[] = 100;
$listaNumb[] = 20000;
foreach($listaNumb as $index=>$numb){
?>
    <p>Index: <?=$index?> Value: <?=$numb?></p>

<?php }?>
<form action="" method="get">
    <input type="text" name="name" id="">
    <button>Enviar</button>
</form>
<h1>Tchau <?=$nomeUser?></h1>




