<style>
.red { background: red; }
.blue { background: blue; }
.green { background: green; }
.pink { background: pink; }
</style>
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

echo "<table>";
echo "<tr>
<th class='red'>Name</th>
<th class='blue'>Color</th>
<th class='green'>Element</th>
<th class='pink'>Likes</th>
</tr>";
foreach($data as $single):
	echo "<tr>";
	echo "<td class='red'>" . $single['Name'] . "</td>";
	echo "<td class='blue'>" . $single['Color'] . "</td>";
	echo "<td class='green'>" . $single['Element'] . "</td>";
	echo "<td class='pink'>" . $single['Likes'] . "</td>";
	echo "</tr>";
endforeach;

echo "</table>";
