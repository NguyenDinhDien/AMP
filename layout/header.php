<?php
    $d->reset();
    $d->query("select photo_vi as photo from #_photo where type='logo'");
    $logo = $d->fetch_array();

    $d->reset();
    $sql_banner_top= "select thumb_$lang from #_photo where type='banner'";
    $d->query($sql_banner_top);
    $banner_top = $d->fetch_array();
?>
<header itemscope itemtype="https://schema.org/WPHeader">
	<div id="logo" class="clearfix">
		<amp-img src="/<?=_upload_hinhanh_l.$logo["photo"]?>" width="140" height="70"></amp-img>
	</div>
    <div id="banner" class="clearfix"><amp-img src="/<?=_upload_hinhanh_l.$banner_top['thumb_'.$lang]?>" width="580" height="110" layout="responsive"></amp-img></div>

	<div id="header_fix" class="clearfix">
        <div class="header_fix_box clearfix">
            <button class="navmenu_link" title="Thanh điều hướng website" on='tap:sidebar.toggle'><i class="fa fa-bars"></i></button>    
        </div>
        <div class="search_box_hide">
            <form action="/tim-kiem.html" method="GET" name="frm_search" id="frm_search" target="_top">
                <input type="text" id="search_input" name="keywords" placeholder="Nhập từ khóa tìm kiếm..." />
                <input type="submit" class="btn_search" id="btnSearch" value="Tìm kiếm" />
            </form>
        </div>
    </div>
</header> 