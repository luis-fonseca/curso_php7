<?php

// callbacks são úteis quando se é necessário executar uma ação (processos lentos), mas não se sabe quando ela irá terminar. Ao terminar a ação, por exemplo, chamar o shell essa função $callback seria chamada
function test($callback) {
	// processo lento
	$callback();

}

test(function() {
	echo 'Terminou!';
})
