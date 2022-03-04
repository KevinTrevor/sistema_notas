<body>
    <div class = "bg-light border p-2">
        <div>
            <h1 class = "text-center">Actualización de Planteles</h1>
        </div>
    </div>

    <div class = "mt-5 rounded border text-light bg-secondary">

        <div class = "p-3 rounded border border-warning border-3 bg-dark text-light">
            <span>Introduzca los datos del Plantel y presione "Aceptar"</span>
        </div>

        <form action="" type = "submit">
            <div class = "m-3">
                <!--
                <span>Código:</span>
                <div>
                    <input type="text" class = "form-control bg-light" placeholder ="000000000">
                </div>
                -->
            </div>

            <div class = "m-3">
                <span>Nombre: </span>
                <div>
                    <input type="text" class = "form-control bg-light">
                </div>
                <small>60 caracteres máximo</small>
            </div>

            <div class = "m-3">
                <span>Dirección: </span>
                <div>
                    <input type="text" class = "form-control bg-light">
                </div>
                <small>60 caracteres máximo</small>
            </div>

            <div class = "m-3">
                <span>Nivel Educativo: </span>
                <div>
                    <input type="text" class = "form-control bg-light" placeholder = "Primaria/Secundaria">
                </div>
                <small>Solo esas dos entradas de ejemplo</small>
            </div>
        </form>
    </div>

    <button type="submit" class = "btn btn-warning float-end m-3">Aceptar</button>
</body>