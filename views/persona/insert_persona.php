<body>
    <div class = "bg-light border p-2">
        <div>
            <h1 class = "text-center">Ingreso de Personas</h1>
        </div>
    </div>

    <div class = "mt-5 rounded border text-light bg-secondary">

        <div class = "p-3 rounded border border-success border-3 bg-dark text-light">
            <span>Introduzca los datos de la Persona y presione "Aceptar"</span>
        </div>

        <form action="" type = "submit">
            <div class = "m-3">
                <span>Cédula:</span>
                <div>
                    <input type="text" class = "form-control bg-light" placeholder ="000000000">
                </div>
                <small>9 caracteres máximo</small>
            </div>

            <div class = "m-3">
                <span>Nombres: </span>
                <div>
                    <input type="text" class = "form-control bg-light">
                </div>
                <small>60 caracteres máximo</small>
            </div>

            <div class = "m-3">
                <span>Apellidos: </span>
                <div>
                    <input type="text" class = "form-control bg-light">
                </div>
                <small>60 caracteres máximo</small>
            </div>
        </form>
    </div>

    <button type="submit" class = "btn btn-success float-end m-3">Aceptar</button>
</body>