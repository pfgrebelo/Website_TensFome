var username;
function account_edit(){
    document.getElementById('account_btn_edit').style.display='none'
    document.getElementById('account_btn_cancel').style.display='inline'
    document.getElementById('account_btn_save').style.display='inline'
    document.getElementById('account_btn_delete').style.display='inline'

    document.getElementById('form-username').removeAttribute('readonly')
    document.getElementById('form-password').removeAttribute('readonly')
    document.getElementById('form-password').value=''
    document.getElementById('form-name').removeAttribute('readonly')
    document.getElementById('form-email').removeAttribute('readonly')
    document.getElementById('form-address').removeAttribute('readonly')
    document.getElementById('form-contact').removeAttribute('readonly')

    username=document.getElementById('form-username').value
}

function account_cancel(){

    window.location.replace("index.php?p=minha-conta")
}