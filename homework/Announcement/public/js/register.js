$(function(){
    $('.btn_submit').on('click',function(){
        let boolean = true;
        let name = $('input[name=name]').val();
        if(name.length < 1){
            alert('請填入你的名字');
            boolean = false;
        }
        let account_regex = /^[a-zA-Z0-9]{4,50}$/;
        let account = $('input[name=account]').val();
        if(account.match(account_regex) == null){
            alert('帳號必須是4~50碼中英夾雜的字串');
            boolean = false;
        }
        let password = $('input[name=password]').val();
        if(password.length < 4){
            alert('密碼必須4碼以上');
            boolean = false;
        }
        if(boolean){
            $('form').submit();
        }
    })
})