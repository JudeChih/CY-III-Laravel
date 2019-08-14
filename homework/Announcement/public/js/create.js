$(function(){
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