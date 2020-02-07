$(function(){
    $('#btnSearch').click(function(evt){
        onSearch(evt);
    });
});
function onSearch(evt){
    $('#frm_search').submit(function(){
          var timkiem = $('#search_input').val();
          if(!timkiem){
            alert('Bạn chưa nhập từ khóa .');
            $('#search_input').focus();
          } else {
            window.location.href="http://matna3mchinhhang.com/amp/tim-kiem.html&keywords="+timkiem;
          }
          return false;
    });  
}
function doEnter(evt){
	var key;
	if(evt.keyCode == 13 || evt.which == 13){
	    onSearch(evt);
	}else{
	    return false;   
	}
}