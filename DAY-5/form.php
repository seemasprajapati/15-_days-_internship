
<form method="post">
Programming :
C<input type="checkbox" name="cbox[]" value="c">
<br>
C++<input type="checkbox" name="cbox[]" value="html">
<br>
PHP<input type="checkbox" name="cbox[]" value="php">
<br>
<input type="submit">
</form>
<?php
if($_POST)
{
$programming= $_POST['cbox'];
$string = implode(",", $programming);
echo $string;
}
?>
