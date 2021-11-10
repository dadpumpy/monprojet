<?php
include("template/head.php");

$phrase = "Bonjour et bienvenue"; 
$phrase2 = "Il était une fois une personne qui voulait manger des bonbons !"; 

?>

		<div class="container">
			<div class="starter-template">
				<h1><?= $phrase ?></h1>
				<p class="lead"><?= $phrase2 ?></p>
			</div>
		</div>
<?php
include("template/footer.php");