<?php declare( strict_types = 1 );

require_once 'common.php';

?><!DOCTYPE html>
<html>
<body>


<ul>
	<?php foreach(scandir($dir, SCANDIR_SORT_DESCENDING) as $filename) { ?>
		<?php if(in_array($filename, ['.', '..', '.keep'])) continue; ?>
		<li><a href="<?=$dir_name . '/' . $filename?>"><?=$filename?></a></li>
	<?php } ?>
</ul>

</body>
</html>
