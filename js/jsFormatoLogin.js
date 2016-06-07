function validarFormato(objeto)
{
    var paswd=objeto.value.toString();
    var formato = '/[*¿!¡;,:\.\?#@()"]/';
    if(paswd.math(formato))
    {
        return false;
    }
}
