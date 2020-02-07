<div class="sub_main clearfix">
  <div class="lb_main clearfix">
    <h3><?=$title_detail?></h3>
  </div>
  <div class="cont_main_product clearfix">
    <?php if(count($product)!=0){?>
      <?php foreach ($product as $key => $value) {?>
      <div class="item_product clearfix">
        <a href="/amp/san-pham/<?=$value['tenkhongdau']?>-<?=$value['id']?>.html" class="img_product">
          <amp-img srcset="/<?=(($value['upload']!="") ? $value['upload'] : _upload_product_l).$value['photo']?>" width="300" height="318" layout="responsive"></amp-img>
        </a>
        <h3 class="label_product"><a href="/amp/san-pham/<?=$value['tenkhongdau']?>-<?=$value['id']?>.html"><?=$value['ten_'.$lang]?></a></h3>
        <p class="price">
          Giá: <?=($value['gia']==0) ? "Liên hệ":number_format($value['gia']).'VND'?>
        </p>
      </div>
      <?php }?>
    <?php }else{?>
      <p><?=_dangcapnhat?></p>
    <?php }?>
  </div>
	<?php if($paging!=""){?>
	<div class="wrap_paging">
		<div class="paging clearfix"><?=$paging?></div>
	</div>
	<?php }?>
</div>
