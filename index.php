<?php
$data = array(
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
        ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
        ), 
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink'
        ),
);

echo "+----------+---------+---------+----------+<br />";
echo "| Name     | Color   | Element |  Likes   |<br />";
echo "+----------+---------+---------+----------+<br />";

foreach($data as $single):
	echo "| " . $single['Name'] . "     | " . $single['Color'] . "   | " . $single['Element'] . " |  " . $single['Likes'] . "   |<br />";
endforeach;

echo "+----------+---------+---------+----------+";
