<?php	
	header("Content-Type:text/html; charset=UTF-8");
	echo '<title>show</title>';
	if (isset($_GET['message']))
        {
		$str = $_GET['message'];
		$urls = file('http://step15-krispop.appspot.com/peers');
		$count = count($urls);
		foreach ($urls as $url_num => $url) {
			if($url_num!==$count-1){
				$url = substr($url, 0, -1);//末尾削除
			}
			$line_num= $url_num+1;
			$url_convert=$url.'/convert?message='.$str;
 			echo "<b>{$line_num}</b> : " . htmlspecialchars($url) . " => "."<br />	\n";
			readfile($url_convert);
			print "<br />\n"."<br />\n";
		}
 	}
  	else
	{
		print("Please input a word<br>\n");
	}
?>