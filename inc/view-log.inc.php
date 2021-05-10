<?php
if (is_file('log/'.PATH_LOG)) { // существует ли файл журнала посещений 'path.log' (PATH_LOG = path.log)
	$log = file('log/'.PATH_LOG); // получить все содержимое файла в виде массива строк (можно написать проверку, массив ли там? - if (is_array($log)) )


		echo "<ol>";

		foreach ($log as $line) {
			list($dt, $ref, $page) = explode("|", $line); 
			$dt = date('d:m:Y H:i:s'); 
			echo <<<OUT
			<li>
				&nbsp	[$dt]: $ref --> $page
			</li>
OUT;
		}

		echo "</ol>";

}
?>
