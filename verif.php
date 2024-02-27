<form action="index.php" method="post">
    год:  <input type="text" name="number" /><br />
    <input type="submit" name="submit" value="Отправь меня!" />
</form>
<?php
	if($_POST['number'] <= 0) echo 'год должно быть больше нуля'.'<br />';
	if($_POST['number'] % 4 ==0) echo 'год високосный';
		else echo 'год не високосный';
		echo '<br />';
?>

<?php
function PIGLATIN($sentence) {
		$words = explode(" ", $sentence);
		$result = array_map(function($word) 
		{
			return mb_substr($word, -1) . mb_substr($word, 1, -1) . mb_substr($word, 0, 1) . 'ay';
		}, $words);
		return implode(" ", $result);
	}
$sentence = "what a beautiful day";
echo PIGLATIN($sentence);














?>