<?php
	header("Content-Type:text/html; charset=UTF-8");
	echo '<title>madlib</title>';
	$lines = file('http://step15-krispop.appspot.com/peers?endpoint=getword');
	$count_lines = count($lines);
	$array_num = 0;

	foreach ($lines as $line_num => $line) {
	if($line_num!==$count_lines-1){
		$line = substr($line, 0, -1);//末尾削除
	}
 	   $url[$array_num]=$line.'/getword?pos=';
	   $array_num = $array_num+1;
	}

	print "It was a ";
	readfile($url[rand_num($count_lines)].'adjective');
	print " day, so ";
	readfile($url[rand_num($count_lines)].'name');
	print " went for a walk ";
	readfile($url[rand_num($count_lines)].'adverb');	
	print " in the park. Suddenly, a ";
	readfile($url[rand_num($count_lines)].'animal');	
	print " appeared and ";
	readfile($url[rand_num($count_lines)].'verb');
	print ". ";
	readfile($url[rand_num($count_lines)].'exclaimation');

	function rand_num($num){
	srand();
	$rand = rand(0, $num-1);
  	return $rand;
	  }
?>