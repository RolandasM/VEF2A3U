<footer>
<p>&copy;
<?php
$startYear = 2016;
$thisYear = date('y');
if ($startYear == $thisYear) {
echo $startYear;
} else {
echo "{$startYear}&ndash;{$thisYear}";
}
?>
 Rolandas Mineika</p>
</footer>