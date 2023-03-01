<?php
 $idade = 69;
 $salario = 11269;
 $acumulado = 150069;
 $meta = 150000;
 
  if($idade < 18) {
     echo 'Você não pode entrar aqui!';
  }	else {
	  echo 'Seja bem-vindo'; 
	 }
      
	echo '<hr>';
	  
  if ($salario > 12000) {
	  echo 'Boas apostas!';
  } else { 
     echo 'Você não possue renda o suficinte para esse mundo. Dê o fora, pobre fodido.'; 
  }
		
	 echo'<hr>';
	 
  if ($acumulado > $meta) {
	  echo 'Parabens você passou a sua meta!!';
  }	else {
	  echo 'Você não alcançou a meta. Seu fodido.';
  }
	  ?>