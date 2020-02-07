<div class="sub_main clearfix">
  <div class="lb_main clearfix">
    <h3>Sản phẩm nổi bật</h3>
  </div>
  <div class="cont_main_product clearfix">
    <?php
      $d->reset();
      $sql = "select ten_$lang,id,photo,tenkhongdau,giaban as gia from #_product where type='product' and noibat=1 and hienthi=1 order by stt,ngaytao desc limit 0,16";
      $d->query($sql);
      $product = $d->result_array();
      if(count($product)!=0){?>
      <?php foreach ($product as $key => $value) {?>
      <div class="item_product clearfix">
        <a href="/amp/<?=$value['tenkhongdau']?>" class="img_product">
          <amp-img srcset="/<?=(($value['upload']!="") ? $value['upload'] : _upload_product_l).$value['photo']?>" width="300" height="318" layout="responsive"></amp-img>
        </a>
        <h3 class="label_product"><a href="/amp/<?=$value['tenkhongdau']?>"><?=$value['ten_'.$lang]?></a></h3>
        <p class="price">
          Giá: <?=($value['gia']==0) ? "Liên hệ":number_format($value['gia']).'VND'?>
        </p>
      </div>
      <?php }?>
    <?php } ?>
  </div>
</div>
<div class="sub_main clearfix">
  <div class="lb_main clearfix">
      <h3>Tin tức sự kiện</h3>
  </div>
  <div class="cont_main_product clearfix">
  <?php  
      $d->reset();
      $sql = "select * from #_baiviet where hienthi=1 and noibat=1 and type='tintuc' order by stt,id desc limit 0,4";
      $d->query($sql);
      $arr_tintuc_nb = $d->result_array();
      foreach ($arr_tintuc_nb as $key => $value) { 
  ?>
    <div class="item_post clearfix">
      <a href="/<?=$value["tenkhongdau"]?>" class="img_post">
        <amp-img srcset="/<?=_upload_baiviet_l.$value['photo']?>" width="75" height="75"></amp-img>
      </a>
      <div class="des_post clearfix">
          <a href="/<?=$value["tenkhongdau"]?>" class="label_post transfor"><?=$value['ten_'.$lang]?></a>
          <p><?=_substr($value["mota_".$lang],100)?></p>
          <a href="/<?=$value["tenkhongdau"]?>" class="btn_post">Xem thêm</a>
      </div>
    </div>
  <?php } ?>
  </div>
</div>