<?php 
  $d->reset();
  $sql = "select ten_$lang as ten,tenkhongdau from #_product_list where hienthi=1 and type='product' order by stt,id desc";
  $d->query($sql);
  $pro_list = $d->result_array();
?>
<amp-sidebar id='sidebar' layout='nodisplay'>
    <label>Menu</label>
    <ul class="menu_mobile">
      <li><a href="http://matna3mchinhhang.com/amp" title="Trang chủ">Trang chủ</a></li>
      <?php foreach ($pro_list as $key => $value_l) { ?>
        <li><a href="/amp/<?=$value_l["tenkhongdau"]?>"><i class="fa fa-angle-double-right"></i> <?=$value_l["ten"]?></a></li>
      <?php }?>
    </ul>
</amp-sidebar>