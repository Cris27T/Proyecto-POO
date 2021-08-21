function generarPedidos(){
    for(let i=0; i<3; i++){
        document.getElementById("pedidos").innerHTML +=
        `<tr>
            <td class="informacion-pedido">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, rerum!
            </td>
            <td class="button-pedido">
                <button class="button-aceptar">Aceptar</button>
            </td>
            <td class="button-pedido">
                <button class="button-rechazar">Rechazar</button>
            </td>
        </tr>`
    }
}

generarPedidos();