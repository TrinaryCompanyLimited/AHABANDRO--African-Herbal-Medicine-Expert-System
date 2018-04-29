<?php
$options ="";
$options = $_POST['options'];
if ($options=="strkdiag") 
{
    require"strokediagnosis.php";
}
else if ($options=="strkprev") 
{
    require"strokeprevention.php";
}
?>