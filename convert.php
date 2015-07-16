<?php
	header("Content-Type:text/html; charset=UTF-8");
	echo '<title>convert</title>';	
          if (isset($_GET['message']))
        {
            $str = $_GET['message'];
	    $shuffled1 = strshuffleUtf8($str);
	    $shuffled2 = strshuffleUtf8($shuffled1);
	    print $shuffled2;
        }
  	else
	{
	    print("Please input a word<br>\n");
	}

	function strShuffleUtf8($str) {
   	 $work_array = array();
   	 $work_array = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
   	 shuffle($work_array);
   	 return implode("", $work_array);
	 }

/*	 
	  if (isset($_GET['message']))
        {
            $str = $_GET['message'];
	    $hash = crypt($str);
	    print $hash;
	    }
  	else
	{
	    print("Please input a word<br>\n");
	}*/
?>