<body>
    <div class = "bg-light border p-2">
        <div>
            <h1 class = "text-center">Actualización de Asignatura</h1>
        </div>
    </div>

    <div class = "mt-5 rounded border text-light bg-secondary">

        <div class = "p-3 rounded border border-warning border-3 bg-dark text-light">
            <span>Introduzca los datos de la Asignatura y presione "Aceptar"</span>
        </div>

        <form action="" type = "submit">
            <div class = "m-3">
                <span>Código de Año:</span>
                <div>
                    <input type="text" class = "form-control bg-light" placeholder ="2000-2001">
                </div>
                <small>10 caracteres máximo</small>
            </div>

            <div class = "m-3">
                <span>Código de Grado: </span>
                <div>
                    <input type="text" class = "form-control bg-light">
                </div>
                <small>6 caracteres máximo</small>
            </div>

            <div class = "m-3">
                <span>Código de Asignatura: </span>
                <div>
                    <input type="text" class = "form-control bg-light">
                </div>
                <small>6 caracteres máximo</small>
            </div>

            <div class = "m-3">
                <span>Nombre: </span>
                <div>
                    <input type="text" class = "form-control bg-light">
                </div>
            </div>
        </form>
    </div>

    <button type="submit" class = "btn btn-warning float-end m-3">Aceptar</button>
</body>