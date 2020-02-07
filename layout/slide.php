<?php 
	$d->reset();
	$sql= "select link,photo_vi as photo from #_photo where hienthi=1 and type='slider' order by stt,id desc ";
	$d->query($sql);
	$slide_show = $d->result_array();
?>
<amp-carousel width="750" height="270" layout="responsive" delay="3000" autoplay type="slides">
	<?php foreach ($slide_show as $key => $value) {?>
		<amp-img srcset="/<?=_upload_hinhanh_l.'750x270/1/'.$value['photo']?>" width="750" height="270" layout="responsive"></amp-img>
	<?php }?>
</amp-carousel>

