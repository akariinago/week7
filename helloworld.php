<?php
  header("Content-Type:text/html; charset=UTF-8");
  echo '<title>top</title>';
  echo 'Hello!<br><br>';
  echo '1. '.'<a href="http://united-lane-100211.appspot.com/convert?message=mangopudding">/convert?message=mangopudding</a><br><br>';
  ?>
<form action="convert?" method="get">
 <input type="text" name="message">
 <input type="submit" value = "convert" style="color: #fff;background-color:#00BFFF; -moz-border-radius: 5px; -webkit-border-radius: 5px;border-radius: 5px;
 ">
</form>
<?php
  echo '2. '.'<a href="http://united-lane-100211.appspot.com/show?message=tomatojuice">/show?/message=tomatojuice</a><br><br>';
?>
<form action="show?" method="get">
 <input type="text" name="message">
 <input type="submit" value = "show" style="color: #fff;background-color:#00BFFF; -moz-border-radius: 5px; -webkit-border-radius: 5px;border-radius: 5px;
">
</form>
<?php
  echo '3. '.'<a href="http://united-lane-100211.appspot.com/getword?pos=animal">/getword?pos=animal</a><br><br>';
?>
<form action="getword?" method="get">
  <select name="pos">
    <option value="" selected></option>
    <option value="verb" >verb</option>
    <option value="noun" >noun</option>
    <option value="adjective" >adjective</option>
    <option value="adverb" >adverb</option>
    <option value="animal" >animal</option>
    <option value="name" >name</option>
    <option value="exclaimation">exclaimation</option>
    <input type="submit" value = "getword" style="color: #fff;background-color:#00BFFF; -moz-border-radius: 5px; -webkit-border-radius: 5px;border-radius: 5px;
 ">
  </select>
</form>
<?php
  echo '4. '.'<a href="http://united-lane-100211.appspot.com/madlib">/madlib</a><br><br>';
?>


