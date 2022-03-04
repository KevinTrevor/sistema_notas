<body>
    <div class = "bg-light border p-2">
        <div>
            <h1 class = "text-center">Actualización de Años Escolares</h1>
        </div>
    </div>

    <div class = "mt-5 rounded border text-light bg-secondary">

        <div class = "p-3 rounded border border-warning border-3 bg-dark text-light">
            <span>Introduzca los datos del Año Escolar y presione "Aceptar"</span>
        </div>

        <form action="" type = "submit">
            <!--
            <div class = "m-3">
                <span>:</span>
                <div>
                    <input type="text" class = "form-control bg-light" placeholder ="2000-2001">
                </div>
                <small>10 caracteres máximo</small>
            </div>
            -->

            <div class = "m-3">
                <span>Año de Inicio: </span>
                <div>
                    <input type="text" class = "form-control bg-light" placeholder = "2001">
                </div>
                <small>4 caracteres máximo</small>
            </div>

            <div class = "m-3">
                <span>Año de Fin: </span>
                <div>
                    <input type="text" class = "form-control bg-light" placeholder = "2002">
                </div>
                <small>4 caracteres máximo</small>
            </div>
        </form>
    </div>

    <button type="submit" class = "btn btn-warning float-end m-3">Aceptar</button>
</body>