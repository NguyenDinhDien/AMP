<div class="sub_main textWhite clearfix">
    <div class="lb_main clearfix">
        <h3><?=$row_detail["ten_$lang"]?></h3>
    </div>
    <div class="cont_main clearfix">
        <amp-carousel width="512" height="384" layout="responsive" type="slides">
            <amp-img src="/<?=_upload_product_l.$row_detail["photo"]?>" width="628" height="380" layout="responsive"></amp-img>
            <?php for ($i=0,$countha=count($hinhanh); $i < $countha; $i++) {?>
            <amp-img src="/<?=_upload_product_l.$hinhanh[$i]['photo']?>" width="628" height="380" layout="responsive"></amp-img>
            <?php }?>
        </amp-carousel>
        <div class="rightProdetail clearfix">
            <div class="price_box clearfix">
                Mã SP: <?=$row_detail['masp']?>
            </div>
            <div class="price_box clearfix">
                Giá bán :
                <strong class="price_detail">
                    <b><?=$row_detail["giaban"]==0 ? "Liên hệ" : number_format($row_detail["giaban"],0,',','.')."vnd"?></b> 
                </strong>
            </div>
        </div>
        <div class="fullProdetail clearfix">
            <amp-accordion>
                <?php if($row_detail["mota_".$lang]!=''){?>
                <section>
                    <h4>Mô tả</h4>
                    <div><?=ampify($row_detail["mota_".$lang])?></div>
                </section>
                <?php }?>
                <?php if($row_detail["noidung_".$lang]!=''){?>
                <section>
                    <h4>Thông tin chi tiết</h4>
                    <div><?=ampify($row_detail["noidung_".$lang])?></div>
                </section>
                <?php }?>
            </amp-accordion>

        </div>
        <div id="social">
            <amp-social-share type="twitter" width="30" height="22"></amp-social-share>
            <amp-social-share type="facebook" width="30" height="22" data-attribution=254325784911610></amp-social-share>
            <amp-social-share type="gplus" width="30" height="22"></amp-social-share>
            <amp-social-share type="email" width="30" height="22"></amp-social-share>
        </div>
    </div>
</div>
<?php if(count($product)!=0){?>
<div class="sub_main clearfix">
    <div class="lb_main clearfix">
        <h3>Sản phẩm khác</h3>
    </div>
    <div class="cont_main_product clearfix">
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
    </div>
</div>
<?php }?>
