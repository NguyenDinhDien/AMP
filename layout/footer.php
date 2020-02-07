<?php
	$d->query("select noidung_$lang as noidung from #_company where type='footer'");
	$footer = $d->fetch_array();
	//
	
?>
<footer id="wrap_footer" class="clearfix">
	<div class="noidung_ft clearfix">
		<div id="content_footer">
			<?=ampify($footer["noidung"])?>
		</div>
	</div>
	<div class="cont_copyright">
		<span>&copy; Copyright 2018 Anh Tuan Safety, All Rights Reserved. Design by Nina.vn</span>
	</div>
</footer>