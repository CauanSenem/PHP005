<?php 
if (isset($_POST['enviar']))
{
    $valormoto = 8654;
    $parcelas = intval($_POST['vezes']);
    if ($parcelas == 24)
    {
        $juros = 8654 * pow(1.02,24);
    }
    if ($parcelas == 36)
    {
        $juros = 8654 * pow(1.023,36);
    }
    if ($parcelas == 48)
    {
        $juros = 8654 * pow(1.026,48);;
    }
    if ($parcelas == 60)
    {
        $juros = 8654 * pow(1.029,60);;
    }
    $resultado = $juros / $parcelas;
    echo $resultado;
}
?>