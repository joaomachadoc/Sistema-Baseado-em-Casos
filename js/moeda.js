function mascara(o,f){
v_obj=o
v_fun=f
setTimeout("execmascara()",1)
}

function execmascara(){
v_obj.value=v_fun(v_obj.value)
} 

function mvalor(v){
    v=v.replace(/\D/g,"");//Remove tudo o que n�o � d�gito
    v=v.replace(/(\d)(\d{8})$/,"$1.$2");//coloca o ponto dos milh�es
    v=v.replace(/(\d)(\d{5})$/,"$1.$2");//coloca o ponto dos milhares
 
    v=v.replace(/(\d)(\d{2})$/,"$1,$2");//coloca a virgula antes dos 2 �ltimos d�gitos
    return v;
}

function mvalor2(v){
    v=v.replace(/\D/g,"");//Remove tudo o que n�o � d�gito
    v=v.replace(/(\d)(\d{1})$/,"$1,$2");//coloca a virgula antes dos 2 �ltimos d�gitos
    return v;
}