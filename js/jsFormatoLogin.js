/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function validarFormato(objeto)
{
    var paswd=objeto.value.toString();
    var formato = '/[*¿!¡;,:\.\?#@()"]/';
    if(paswd.math(formato))
    {
        return false;
    }
}

