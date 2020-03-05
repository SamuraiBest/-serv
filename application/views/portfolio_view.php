<h1>Портфолио</h1>
<p>
<table>
Список проектов:
<tr><td>Год</td><td>Проект</td><td>Описание</td></tr>
<tr><td>2001</td><td>Полезный</td><td>Помогал</td></tr>
<?php

	foreach($data as $row)
	{
		echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
	}

?>
</table>
</p>
