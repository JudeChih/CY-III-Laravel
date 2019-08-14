$(function(){
    $('textarea').val($('textarea').data('value'));
    $('#image option').each(function(){
        let val = $('.image').data('image');
        if(val == $(this).val()){
            $(this).prop('selected',true);
        }
    })
    $('.btn_submit').on('click',function(){
        let boolean = true;
        let title = $('input[name=title]').val();
        if(title.length < 1){
            alert('請輸入公告標題');
            boolean = false;
        }
        let content = $('textarea[name=content]').val();
        if(content.length < 1){
            alert('請輸入公告內容');
            boolean = false;
        }
        if(boolean){
            $('form').submit();
        }
    })
})