<?php

echo "Hoje é dia: ".date('d/m/y')."<br>";
echo "Agora são: ".date('g:i A')."<br>";
echo date('l')."<br>";
echo "Faltam ".(6-date('N'))." dias para o sábado.<br>";
echo "Estanos no mês de ".date('F');