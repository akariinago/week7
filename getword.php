<?php
	header("Content-Type:text/html; charset=UTF-8");
	echo '<title>getword</title>';	
	
	$verb = array("maintain", "appreciate", "protect", "observe", "build");
	$noun = array("paper", "police", "rock", "wind", "ocean");
	$adjective = array("unique", "mysterious", "beautiful", "brave", "awesome");
	$animal = array("horse", "turtle", "rabbit", "elephant", "tiger");
	$name = array("Tom", "Mary", "I", "You", "Taro");
	$adverb = array("well", "fast", "carefully", "comfortably", "so");
	$exclaimation = array("Oh!", "Whoa!", "Yuck!", "Phew!", "Yeah!");
	$others = array("...", "!!", ":)", "??", ",");
	$total_array = array($verb, $noun, $adjective, $animal, $name, $adverb, $exclaimation, $others);

	    $speech = array('verb', 'noun', 'adjective', 'animal', 'name', 'adverb', 'exclaimation');
	    $flag=0;

         if (isset($_GET['pos']))
        {   

	    for ($num = 0; $num < count($total_array); $num++){
	    	if($_GET['pos']==$speech[$num]){
		pos_rand($total_array[$num]);
		$flag=1;
		break;
            	}
	    }
	    if($flag==0){
		pos_rand($total_array[count($total_array)-1]);
	    }
	 }
  	else
	{
		print "Please input a part of speech";
	}

	function pos_rand($array)
	{
		$str=$array[rand(0, count($array)-1)];
	        print $str;
	  }