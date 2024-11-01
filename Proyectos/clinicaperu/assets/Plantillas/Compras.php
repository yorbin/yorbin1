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

        <input  class="imputb" type="text" id="proveedor" value="Proveedor" readonly />
        <input  class="imputb" type="text" id="tipo-de-proveedor" value="Tipo de proveedor" readonly />
        <input  class="imputb" type="text" id="zona" value="Zona" readonly />
        <input  class="imputb" type="text" id="segmento" value="Segmento" readonly />
        <input  class="imputb" type="text" id="comprador" value="Comprador" readonly />
        <input  class="imputb" type="text" id="almacen" value="Almacen" readonly />
        <input  class="imputb" type="text" id="recepcion" value="Recepción" readonly />
        <input  class="imputb" type="text" id="moneda" value="Moneda" readonly />
        <input  class="imputb" type="text" id="descuento" value="Descuento" readonly />
        <input  class="imputb" type="text" id="devolucion-de-compra" value="Devolución de compra" readonly />


        <div class="sub-bubble" id="proveedor-bubble">
            
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Proveedor</h2>
            </div>
            <br>
            <form method="POST" action="assets/php/Proveedordef.php">
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion" />
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="tipo-de-proveedor-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Tipo de proveedor</h2>
            </div>
            <br>
            <form   method="POST"action="assets/php/Tipoproveedordef.php">
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
            <form method="POST"action="assets/php/Zona2def.php">
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
            <form method="POST"action="assets/php/Segmento2def.php"> 
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="comprador-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Comprador</h2>
            </div>
            <br>
            <form method="POST"action="assets/php/Compradordef.php">
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
            <form method="POST"action="assets/php/Almacendef.php">
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="recepcion-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Recepción</h2>
            </div>
            <br>
            <form method="POST"action="assets/php/Recepciondef.php">
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
            <form method="POST"action="assets/php/Moneda2def.php">
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
            <form method="POST"action="assets/php/Descuento2def.php">
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>

        <div class="sub-bubble" id="devolucion-de-compra-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Devolución de compra</h2>
            </div>
            <br>
            <form method="POST"action="assets/php/Ddcompradef.php">
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

        <input type="text" id="cotizacion-de-proveedores" value="Cotización de proveedores" readonly />
        <input type="text" id="facturas-de-compras" value="Facturas de compras" readonly />
        <input type="text" id="devolucion-de-proveedores" value="Devolución de proveedores" readonly />
        <input type="text" id="notas-de-recepcion" value="Notas de recepción" readonly />
        <input type="text" id="control-de-importacion" value="Control de importación" readonly />
        <input type="text" id="pagos" value="Pagos" readonly />



        <div class="sub-bubble" id="cotizacion-de-proveedores-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Cotización de proveedores</h2>
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


        <div class="sub-bubble" id="facturas-de-compras-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Facturas de compras</h2>
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


        <div class="sub-bubble" id="devolucion-de-proveedores-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Devolución de proveedores</h2>
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

        <div class="sub-bubble" id="notas-de-recepcion-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Notas de recepción</h2>
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

        <div class="sub-bubble" id="control-de-importacion-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Control de importación</h2>
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

        <div class="sub-bubble" id="pagos-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
            <h2>Pagos</h2>
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
            <h2>Compras</h2>
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
