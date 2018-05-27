function mascara(o,f){
v_obj=o
v_fun=f
setTimeout("execmascara()",1)
}

function execmascara(){
v_obj.value=v_fun(v_obj.value)
} 

function mvalor(v){
    v=v.replace(/\D/g,"");//Remove tudo o que não é dígito
    v=v.replace(/(\d)(\d{8})$/,"$1.$2");//coloca o ponto dos milhões
    v=v.replace(/(\d)(\d{5})$/,"$1.$2");//coloca o ponto dos milhares
 
    v=v.replace(/(\d)(\d{2})$/,"$1,$2");//coloca a virgula antes dos 2 últimos dígitos
    return v;
}

function mvalor2(v){
    v=v.replace(/\D/g,"");//Remove tudo o que não é dígito
    v=v.replace(/(\d)(\d{1})$/,"$1,$2");//coloca a virgula antes dos 2 últimos dígitos
    return v;
}