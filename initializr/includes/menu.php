<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<ul>
	<li><a href="../initializr/index.php" <?php if ($currentPage == 'index.php') {
echo 'id="here"'; } ?>>Animals</a></li>
	<li><a href="../initializr/index2.php" <?php if ($currentPage == 'index2.php') {
echo 'id="here"'; } ?>>Funny</a></li>
	<li><a href="../initializr/index3.php" <?php if ($currentPage == 'index3.php') {
echo 'id="here"'; } ?>>Food</a></li>
	<li><a href="../initializr/index4.php" <?php if ($currentPage == 'index4.php') {
echo 'id="here"'; } ?>>About</a></li>
</ul>

