<body>
    <div class = "bg-light border p-2">
        <div>
            <h1 class = "text-center">Actualización de Estudiantes</h1>
        </div>
    </div>

    <div class = "mt-5 rounded border text-light bg-secondary">

        <div class = "p-3 rounded border border-warning border-3 bg-dark text-light">
            <span>Introduzca los datos del Estudiante y presione "Aceptar"</span>
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

            <div class = "m-3">
                <span>Ingreso: </span>
                <div>
                    <input type="text" class = "form-control bg-light" placeholder = "AAAA-MM-DD">
                </div>
            </div>
        </form>
    </div>

    <button type="submit" class = "btn btn-warning float-end m-3">Aceptar</button>
</body>