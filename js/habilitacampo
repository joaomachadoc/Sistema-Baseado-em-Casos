  function trim(str)
  {
     return str.replace(/^\s*|\s*$/g,"");
  }

  function desabilita(obj)
  {
         var i;
         var text = document.getElementsByTagName("input");

         for(i = 0; i< text.length; i++)
         {
    if(text[i] != obj && text[i].type == "text")
    {
         text[i].disabled = true;
    }
         }

  }

  function verifica(obj)
  {

         var i;
         var text = document.getElementsByTagName("input");
         
         if(trim(obj.value) == "")
         {

    for(i = 0; i< text.length; i++)
    {
         if(text[i].type == "text")
         {
      text[i].disabled = false;
         }
    }    

         }
  }