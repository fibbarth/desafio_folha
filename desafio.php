<?php
	/**
	* @author Felipe Barth <fibbarth@gmail.com>
	* @date 2015-04-11
	* Detalhes do desafio
	* Sabe-se que por trás de cada cometa há um OVNI. Esses OVNIs frequentemente buscam bons desenvolvedores aqui na Terra. Infelizmente só têm espaço para levar um grupo de devs por vez. Para a seleção, há um engenhoso esquema, da associação do nome do cometa ao nome do grupo, que possibilita a cada grupo saber se será levado ou não.
  * Os dois nomes, do grupo e do cometa, são convertidos em um número que representa o produto das letras do nome, onde "A" é 1 e "Z" é 26. Assim, o grupo "LARANJA" seria 12 * 1* 18 * 1 * 14 * 10 * 1 = 30240. Se o resto da divisão do número do grupo por 45 for igual ao resto da divisão do número do cometa por 45, então o grupo será levado.
  * Para os cometas e grupos abaixo, qual grupo NÃO será levado?
  * Cometa 	Grupo
  * Halley 	Amarelo
  * Encke 	Vermelho
  * Wolf 	Preto
  * Kushida 	Azul
	**/
	 
	$cometa = array('HALLEY', 'ENCKE', 'WOLF', 'KUSHIDA');
	$cor = array('AMARELO', 'VERMELHO', 'PRETO','AZUL');
	
	$compare = function($str){
		return (array_product(array_map(function($str){return (ord($str)-64);},str_split($str))) % 45);
	};

	foreach( array_combine($cometa, $cor) as $k => $v ){
		echo ( $compare($k) != $compare($v) ) ? "Grupo: {$k} => {$v} - Não será levado <br />" : '';
	}
		
	
