<style>
        .bubble {
            display: none;
            position: absolute;
            flex-direction: column;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 10px;
            width: 90%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        
        
        .sub-bubble {
  display: none;
  position: fixed;
  background-color: #fff;
  border: 1px solid #ddd;
  padding: 10px;
  width: 30%;
  max-height:320px;
  overflow-y: auto;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  left: 50%; /* Centra horizontalmente */
  top: 50%; /* Centra verticalmente */
  transform: translate(-50%, -50%);
  cursor: move; /* Agregar cursor para indicar que se puede mover */
}

.bubble-encabezado{
  background-color: #1a0522;
  width: 98%;
  padding:1px;
  border: 3px solid #351981;
}

@media (max-width: 768px){
    .sub-bubble {

  width: 89%;

}
}

.sub-bubble h2 {
  text-align: left-center;
  padding-left: 5%;
  color:white;
  cursor: move; /* Agregar cursor para indicar que se puede mover */
}
        .sub-bubble form {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0px;
        }
        .sub-bubble form label {
            margin-bottom: 0px;
        }
        .sub-bubble form input {
          width: 70%;
        }
        .sub-bubble form input[type="text"] {
            padding: 3px;
            margin-bottom: 3px;
            border: 1px solid #ccc;
        }
        .sub-bubble form button[type="button"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .sub-bubble form button[type="button"]:hover {
            background-color: #3e8e41;
        }
        .close-sub-bubble {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 18px;
            cursor: pointer;
        }
        .bubble input{
          border:none;
          font-size: 18px;
        }
        
        .button-contacto{
          background-color: #351981;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    font-family: Arial, sans-serif;         
        }
    </style>

    <div class="button-containerdef">
        <button class="button-def" id="def-button">Definiciones</button>
        <button class="button-def" id="pro-button">Procesos</button>
    </div>

    <div class="bubble" id="def-bubble">
        <h2>Definiciones</h2>

        <input  class="imputb" type="text" id="cliente" value="Cliente" readonly />
        <input  class="imputb" type="text" id="tipo-de-cliente" value="Tipo de cliente" readonly />
        <input  class="imputb" type="text" id="zona" value="Zona" readonly />
        <input  class="imputb" type="text" id="segmento" value="Segmento" readonly />
        <input  class="imputb" type="text" id="vendedor" value="Vendedor" readonly />
        <input  class="imputb" type="text" id="almacen" value="Almacen" readonly />
        <input  class="imputb" type="text" id="entrega" value="Entrega" readonly />
        <input  class="imputb" type="text" id="moneda" value="Moneda" readonly />
        <input  class="imputb" type="text" id="descuento" value="Descuento" readonly />
        <input  class="imputb" type="text" id="comiciones" value="Comiciones" readonly />


        <div class="sub-bubble" id="cliente-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Cliente</h2>
            </div>
            <br>
            <form method="POST" action="assets/php/Clientedef.php">
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="tipo-de-cliente-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Tipo de cliente</h2>
            </div>
            <br>
            <form method="POST" action="assets/php/Tdclientedef.php">
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="zona-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Zona</h2>
            </div>
            <br>
            <form method="POST" action="assets/php/Zonadef.php">
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="segmento-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Segmento</h2>
            </div>
            <br>
            <form method="POST" action="assets/php/Segmentodef.php"> 
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="vendedor-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Vendedor</h2>
            </div>
            <br>
            <form method="POST" action="assets/php/Vendedordef.php">
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="almacen-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Almacen</h2>
            </div>
            <br>
            <form method="POST" action="assets/php/Almacenes2def.php">
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="entrega-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Entrega</h2>
            </div>
            <br>
            <form method="POST" action="assets/php/Entregadef.php">
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="moneda-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Moneda</h2>
            </div>
            <br>
            <form method="POST" action="assets/php/Monedadef.php">
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="descuento-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Descuento</h2>
            </div>
            <br>
            <form method="POST" action="assets/php/Descuentodef.php">
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="comiciones-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Comiciones</h2>
            </div>
            <br>
            <form method="POST" action="assets/php/Comicionesdef.php">
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

       
    </div>


    <div class="bubble" id="pro-bubble">

        <h2>Procesos</h2>

        <input type="text" id="factura" value="Factura" readonly />
        <input type="text" id="pedido" value="Pedido" readonly />
        <input type="text" id="cotizacion" value="Cotización" readonly />
        <input type="text" id="devoluciones" value="Devoluciones" readonly />
        <input type="text" id="nota-de-entrega" value="Nota de entrega" readonly />



        <div class="sub-bubble" id="factura-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Factura</h2>
            </div>
            <br>
            <form>
                <label>SKU:</label>
                <input type="text" id="sku" />
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" />
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="pedido-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Pedido</h2>
            </div>
            <br>
            <form>
                <label>SKU:</label>
                <input type="text" id="sku" />
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" />
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="cotizacion-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Cotización</h2>
            </div>
            <br>
            <form>
                <label>SKU:</label>
                <input type="text" id="sku" />
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" />
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="devoluciones-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Devoluciones</h2>
            </div>
            <br>
            <form>
                <label>SKU:</label>
                <input type="text" id="sku" />
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" />
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="nota-de-entrega-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Nota de entrega</h2>
            </div>
            <br>
            <form>
                <label>SKU:</label>
                <input type="text" id="sku" />
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" />
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>
      

    </div>

    <section id="servicios">
        <div class="pag5">
            <h2>Ventas</h2>
        </div>
    </section>

    <script>
const subBubbles = document.querySelectorAll('.sub-bubble');

subBubbles.forEach(subBubble => {
  let isDown = false;
  let offset = [0, 0];

  subBubble.addEventListener('mousedown', (e) => {
    if (e.target.tagName === 'H2') {
      isDown = true;
      offset = [
        subBubble.offsetLeft - e.clientX,
        subBubble.offsetTop - e.clientY
      ];
    }
  });

  document.addEventListener('mouseup', () => {
    isDown = false;
  });

  document.addEventListener('mousemove', (e) => {
    if (isDown) {
      subBubble.style.top = `${e.clientY + offset[1]}px`;
      subBubble.style.left = `${e.clientX + offset[0]}px`;
    }
  });
});

const defButton = document.getElementById('def-button');
const proButton = document.getElementById('pro-button');
const defBubble = document.getElementById('def-bubble');
const proBubble = document.getElementById('pro-bubble');

defButton.addEventListener('click', () => {
  if (proBubble.style.display === 'flex') {
    proBubble.style.display = 'none';
  }
  defBubble.style.display = defBubble.style.display === 'flex' ? 'none' : 'flex';
});

proButton.addEventListener('click', () => {
  if (defBubble.style.display === 'flex') {
    defBubble.style.display = 'none';
  }
  proBubble.style.display = proBubble.style.display === 'flex' ? 'none' : 'flex';
});

// Agregar event listeners a los inputs dentro de los bubbles
const defBubbleInputs = defBubble.querySelectorAll('input');
const proBubbleInputs = proBubble.querySelectorAll('input');

defBubbleInputs.forEach(input => {
  input.addEventListener('click', (e) => {
    e.stopPropagation();
    const subBubble = document.getElementById(`${input.id}-bubble`);
    if (subBubble.style.display === 'block') {
      // Si ya está visible, no hagas nada
      return;
    }
    subBubble.style.display = 'block';
    

    // Agregar evento para cerrar el sub-bubble cuando se haga clic en la "X"
    const closeSubBubble = subBubble.querySelector('.close-sub-bubble');
    closeSubBubble.addEventListener('click', () => {
      subBubble.style.display = 'none';
      // Limpiar los inputs del formulario
      const form = subBubble.querySelector('form');
      form.reset();
    });
  });
});

proBubbleInputs.forEach(input => {
  input.addEventListener('click', (e) => {
    e.stopPropagation();
    const subBubble = document.getElementById(`${input.id}-bubble`);
    if (subBubble.style.display === 'block') {
      // Si ya está visible, no hagas nada
      return;
    }
    subBubble.style.display = 'block';


    // Agregar evento para cerrar el sub-bubble cuando se haga clic en la "X"
    const closeSubBubble = subBubble.querySelector('.close-sub-bubble');
    closeSubBubble.addEventListener('click', () => {
      subBubble.style.display = 'none';
      // Limpiar los inputs del formulario
      const form = subBubble.querySelector('form');
      form.reset();
    });
  });
});

// Agregar evento para cerrar el sub-bubble cuando se haga clic fuera del sub-bubble
document.addEventListener('click', (e) => {
  const openSubBubbles = document.querySelectorAll('.sub-bubble[style*="block"]');
  openSubBubbles.forEach(openSubBubble => {
    if (!openSubBubble.contains(e.target)) {
      openSubBubble.style.display = 'none';
      const form = openSubBubble.querySelector('form');
      form.reset();
    }
  });
});
</script>
