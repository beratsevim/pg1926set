<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Para Bozdurma</title>
<style>
</style>
</head>
<?php
if(isset($_POST["add"])){
     $paraUstu = $_POST["para"];
     $paraUstu=$paraUstu*100;
$ParaBirimleri = [1, 5, 10, 25, 50, 100];
$ParaTurkceKarsilik = [" 1 Kuruş ", "5 Kuruş ", "10 Kuruş ", "25 Kuruş ", "50 Kuruş ", "1 TL "];
for ($i = 6 - 1; $i >= 0; $i--) {
$sayac = 0;
while ($paraUstu >= $ParaBirimleri[$i]) {
$sayac++;
$paraUstu = $paraUstu - $ParaBirimleri[$i];
}
if ($sayac > 0) {
echo($sayac." Tane ".$ParaTurkceKarsilik[$i]);
}
}
}
?>
<body>
	<form method="post">
		<label>Para
		<input type="text" name="para">
		<button type="submit" name="add">Bozdur</button>
        </label>
    </form>
</body>
</html>