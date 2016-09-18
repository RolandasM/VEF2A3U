<?php
$images = [
['file' => 'pic1',
'caption' => 'Mr.Bean fishing for jokes'],
['file' => 'pic2',
'caption' => 'Some bug thing, probably a bee'],
['file' => 'pic3',
'caption' => 'A total wreck, drive safe kids'],
['file' => 'pic4',
'caption' => 'Cute little kitten in its natural habitat'],
['file' => 'pic5',
'caption' => 'Some sweet flowers Yo'],
['file' => 'pic6',
'caption' => 'Swan in a pond, so majestic'],
['file' => 'pic7',
'caption' => 'Sick waves at the beach'],
['file' => 'pic8',
'caption' => 'A tiger about to casually eat your face']
];
//Tried to make something but it seems like it doenst work :(
static $lastImage;
if(is_null($lastImage))
{
	$i = rand(0, count($images)-1);
	$lastImage = $i;
}
else
{
		$i = rand(0, count($images)-1);
	while($i == $lastImage)
	{
		$i = rand(0, count($images)-1);
	}
}
//end of my failed non-repeat for images 

$selectedImage = "img/Random/{$images[$i]['file']}.jpg";
$caption = $images[$i]['caption'];
if (file_exists($selectedImage) && is_readable($selectedImage)) {
$imageSize = getimagesize($selectedImage);
}