
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
  display: flex;
  justify-content: space-between;
  align-items: center;

}

.button-group {
  margin-right: 5px;
}

.button-group button {
  padding: 5px 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  margin-left: 5px;
}

.button-group button:hover {
  background-color: #3e8e41;
}

#eliminar-btn{
  background-color: #b12a2a;
}

#eliminar-btn:hover {
  background-color: #d63232;
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
        .sub-bubble form input[type="text"],
        .sub-bubble form input[type="number"] {
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

        #search-input {
    margin-bottom: 10px;
    padding: 5px;
    width: 100%;
    box-sizing: border-box;
}

#linea-table {
    width: 100%;
    border-collapse: collapse;
}

#linea-table th, #linea-table td {
    border: 1px solid #ddd;
    padding: 8px;
}

#linea-table th {
    background-color: #f2f2f2;
    text-align: left;
}

#linea-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

#linea-table tr:hover {
    background-color: #ddd;
}

.edit-btn i {
    color: green;
    font-size: 18px;
    margin-right: 10px;
}

.delete-btn i {
    color: red;
    font-size: 18px;
}

.action-buttons {
    text-align: center;
}

#ver-registro-btn i {
    margin-right: 5px;
}

.bcaction {
  text-align: center;
}

    </style>

    <div class="button-containerdef">
        <button class="button-def" id="def-button">Definiciones</button>
        <button class="button-def" id="pro-button">Procesos</button>
    </div>

    <div class="bubble" id="def-bubble">
        <h2>Definiciones</h2>

        <input  class="imputb" type="text" id="linea" value="Linea" readonly />
        <input class="imputb" type="text" id="sub-linea" value="Sub-linea" readonly />
        <input class="imputb" type="text" id="categoria" value="Categoria" readonly />
        <input class="imputb" type="text" id="procedencia" value="Procedencia" readonly />
        <input class="imputb" type="text" id="colores" value="Colores" readonly />
        <input class="imputb" type="text" id="unidades" value="Unidades" readonly />
        <input class="imputb" type="text" id="almacenes" value="Almacenes" readonly />
        <input class="imputb" type="text" id="tipo-de-ajustes" value="Tipo de ajustes" readonly />
        <div class="sub-bubble" id="linea-bubble">
    <span class="close-sub-bubble">&times;</span>
    <br>
    <div class="bubble-encabezado">
        <h2>Linea</h2>
        <div class="button-group">
            <button type="button" id="ver-registro-btn"><i class="fas fa-eye"></i> Ver Registro</button>
        </div>
    </div>
    <br>
    <div id="linea-table-container" style="display: none;">
    <input type="text" id="search-input" placeholder="Buscar en la tabla...">
        <?php
        // Include the Lineadef.php file to display the table
        include '../php/Lineadef.php';
        ?>
    </div>
    <br>
    <form method="POST" action="assets/php/Lineadef.php">
        <label>SKU:</label>
        <input type="text" id="sku" name="sku"/>
        <br />
        <label>Descripción:</label>
        <input type="text" id="descripcion" name="descripcion"/>
        <br />
        <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
    </form>
</div>

        <div class="sub-bubble" id="sub-linea-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
                <h2>Sub-linea</h2>
                <div class="button-group">
      <button type="button" id="buscar-btn"><i class="fas fa-search"></i></button>
      <button type="button" id="editar-btn"><i class="fas fa-edit"></i></button>
      <button type="button" id="eliminar-btn"><i class="fas fa-trash-alt"></i></button>
    </div>
            </div>
            <br>
            <form method="POST" action="assets/php/Sublineadef.php">  
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>
        <div class="sub-bubble" id="categoria-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
                <h2>Categoria</h2>
                <div class="button-group">
      <button type="button" id="buscar-btn"><i class="fas fa-search"></i></button>
      <button type="button" id="editar-btn"><i class="fas fa-edit"></i></button>
      <button type="button" id="eliminar-btn"><i class="fas fa-trash-alt"></i></button>
    </div>
            </div>
            <br>
            <form method="POST" action="assets/php/Categoriadef.php">
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>
        <div class="sub-bubble" id="procedencia-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
                <h2>Procedencia</h2>
                <div class="button-group">
      <button type="button" id="buscar-btn"><i class="fas fa-search"></i></button>
      <button type="button" id="editar-btn"><i class="fas fa-edit"></i></button>
      <button type="button" id="eliminar-btn"><i class="fas fa-trash-alt"></i></button>
    </div>
            </div>
            <br>
            <form method="POST" action="assets/php/Procedenciadef.php">
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>
        <div class="sub-bubble" id="colores-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
                <h2>Colores</h2>
                <div class="button-group">
      <button type="button" id="buscar-btn"><i class="fas fa-search"></i></button>
      <button type="button" id="editar-btn"><i class="fas fa-edit"></i></button>
      <button type="button" id="eliminar-btn"><i class="fas fa-trash-alt"></i></button>
    </div>
            </div>
            <br>
            <form method="POST" action="assets/php/Coloresdef.php"> 
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>
        <div class="sub-bubble" id="unidades-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
                <h2>Unidades</h2>
                <div class="button-group">
      <button type="button" id="buscar-btn"><i class="fas fa-search"></i></button>
      <button type="button" id="editar-btn"><i class="fas fa-edit"></i></button>
      <button type="button" id="eliminar-btn"><i class="fas fa-trash-alt"></i></button>
    </div>
            </div>
            <br>
            <form method="POST" action="assets/php/Unidadesdef.php" >
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>
        <div class="sub-bubble" id="almacenes-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
                <h2>Almacenes</h2>
                <div class="button-group">
      <button type="button" id="buscar-btn"><i class="fas fa-search"></i></button>
      <button type="button" id="editar-btn"><i class="fas fa-edit"></i></button>
      <button type="button" id="eliminar-btn"><i class="fas fa-trash-alt"></i></button>
    </div>
            </div>
            <br>
            <form method="POST" action="assets/php/Almacenesdef.php" >
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Descripción:</label>
                <input type="text" id="descripcion" name="descripcion"/>
                <br />
                <input type="submit" id="button-contacto" value="ENVIAR" class="button-contacto">
            </form>
        </div>
        <div class="sub-bubble" id="tipo-de-ajustes-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
                <h2>Tipo de ajustes</h2>
                <div class="button-group">
      <button type="button" id="buscar-btn"><i class="fas fa-search"></i></button>
      <button type="button" id="editar-btn"><i class="fas fa-edit"></i></button>
      <button type="button" id="eliminar-btn"><i class="fas fa-trash-alt"></i></button>
    </div>
            </div>
            <br>
            <form method="POST" action="assets/php/Tdajustedef.php"> 
                <label>SKU:</label>
                <input type="text" id="sku" name="sku"/>
                <br />
                <label>Tipo:</label>
                <input type="number" id="tipo" name="tipo"/>
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

        <input type="text" id="crear-articulo" value="Crear Articulo" readonly />
        <input type="text" id="ajustes-entrada" value="Ajustes de entrada" readonly />
        <input type="text" id="ajustes-salida" value="Ajustes de salida" readonly />
        <input type="text" id="traslado-de-almacenes" value="Traslado de almacenes" readonly />
        <input type="text" id="cerrar-inventario" value="Cerrar inventario" readonly />


        <div class="sub-bubble" id="crear-articulo-bubble">
        <span class="close-sub-bubble">&times;</span>
        <br>
        <div class="bubble-encabezado">
            <h2>Crear Articulo</h2>
            <div class="button-group">
      <button type="button" id="buscar-btn"><i class="fas fa-search"></i></button>
      <button type="button" id="editar-btn"><i class="fas fa-edit"></i></button>
      <button type="button" id="eliminar-btn"><i class="fas fa-trash-alt"></i></button>
    </div>
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

      

        <div class="sub-bubble" id="ajustes-entrada-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
                <h2>Ajustes de entrada</h2>
                <div class="button-group">
      <button type="button" id="buscar-btn"><i class="fas fa-search"></i></button>
      <button type="button" id="editar-btn"><i class="fas fa-edit"></i></button>
      <button type="button" id="eliminar-btn"><i class="fas fa-trash-alt"></i></button>
    </div>
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
        <div class="sub-bubble" id="ajustes-salida-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
                <h2>Ajustes de salida</h2>
                <div class="button-group">
      <button type="button" id="buscar-btn"><i class="fas fa-search"></i></button>
      <button type="button" id="editar-btn"><i class="fas fa-edit"></i></button>
      <button type="button" id="eliminar-btn"><i class="fas fa-trash-alt"></i></button>
    </div>
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
        <div class="sub-bubble" id="traslado-de-almacenes-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
                <h2>Traslado de almacenes</h2>
                <div class="button-group">
      <button type="button" id="buscar-btn"><i class="fas fa-search"></i></button>
      <button type="button" id="editar-btn"><i class="fas fa-edit"></i></button>
      <button type="button" id="eliminar-btn"><i class="fas fa-trash-alt"></i></button>
    </div>
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
        <div class="sub-bubble" id="cerrar-inventario-bubble">
            <span class="close-sub-bubble">&times;</span>
            <br>
            <div class="bubble-encabezado">
                <h2>Cerrar inventario</h2>
                <div class="button-group">
      <button type="button" id="buscar-btn"><i class="fas fa-search"></i></button>
      <button type="button" id="editar-btn"><i class="fas fa-edit"></i></button>
      <button type="button" id="eliminar-btn"><i class="fas fa-trash-alt"></i></button>
    </div>
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
            <h2>Inventario</h2>
        </div>
    </section>
    <script>
document.getElementById('ver-registro-btn').addEventListener('click', function() {
    var tableContainer = document.getElementById('linea-table-container');
    if (tableContainer.style.display === 'none') {
        tableContainer.style.display = 'block';
    } else {
        tableContainer.style.display = 'none';
    }
});

document.getElementById('search-input').addEventListener('keyup', function() {
    var input = document.getElementById('search-input');
    var filter = input.value.toLowerCase();
    var table = document.getElementById('linea-table');
    var tr = table.getElementsByTagName('tr');

    for (var i = 1; i < tr.length; i++) {
        var td = tr[i].getElementsByTagName('td');
        var found = false;
        for (var j = 0; j < td.length; j++) {
            if (td[j]) {
                if (td[j].innerHTML.toLowerCase().indexOf(filter) > -1) {
                    found = true;
                    break;
                }
            }
        }
        if (found) {
            tr[i].style.display = '';
        } else {
            tr[i].style.display = 'none';
        }
    }
});
</script>
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
