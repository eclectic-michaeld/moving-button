var a= 0;

function onmouseOver(){
    
    if ((quickValidate())&& a==0){
        console.log();
        moveLeft();
        a=1;
        return false;
    }
    if ((quickValidate())&& a==1){
        moveRight();
        a=0;
        return false;
    }
    if ((quickValidate())&& a==0){
        moveLeft();
        a=1;
        return false;
    }
    else{
        document.getElementById("submit").style.cursor ='pointer';
        return false;
    }
}
function quickValidate(){
    if(document.forms['form'].id == 'signup'){
        const name= document.forms['form']['name'].value;
        const email= document.forms['form']['email'].value;
        const password= document.forms['form']['password'].value;
        const password_confirmation= document.forms['form']['password_confirmation'].value;
        if (name ==''||email ==''||password ==''||password_confirmation ==''){
        return true;
       }
       else{
         return false;
       }
    }
    if(document.forms['form'].id == 'login'){
        const name= document.forms['form']['name'].value;
        const password= document.forms['form']['password'].value;
        if (name ==''||password ==''){
        return true;
       }
       else{
         return false;
       }
    } 
}
function moveLeft(){
    const button= document.getElementById("submit");
    button.style.transform ='translateX(-160%)';
    return false;
}
function moveRight(){
    const button= document.getElementById("submit");
    button.style.transform = 'translateX(0%)';
    return false;
}
function resetBtn(){
    const button= document.getElementById("submit");
    button.style.transform = 'translateX(0%)';
    return false;
}