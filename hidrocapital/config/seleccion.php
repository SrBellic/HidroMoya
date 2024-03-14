<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HidroMoya</title>
        <link rel="stylesheet" href="../css/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/custom/custom.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        <script src="../javascript/mapa.js"></script>
    </head>
    <body class="bg_color-BlueLight" onload="ubicar()">
        <div class="text-center bg-dark text-light mb-5 py-3">
            <h1>Pagos</h1>
        </div>
        <main>
            <div class="container ms-5 px-1 row">
                <div class="col-3 py-3 px-5 ms-5 bg_color-White border border-dark border-3 col-sm-6 col-md-6 col-lg-4 w-25 rounded">
                    <form action="#" method="POST" class="col-10">
                        <label class="form-label mb-2">Municipio</label>
                        <select class="form-select form-select-sm border border-dark mb-2" id="municipioSelect">
                            <option>Baruta</option>
                            <option>Chacao</option>
                            <option>El Hatillo</option>
                            <option>Libertador</option>
                            <option>Sucre</option>
                        </select>
                        <a class="btn btn-primary mb-3 px-4" onclick="ubicar()">UBICAR</a>
                    </form>
                    <form action="#" method="POST" class="col-10">
                        <label class="form-label">Metodo de pago</label>
                        <select class="form-select form-select-sm border border-dark mb-2">
                            <option>Pago movil</option>
                            <option>Transferencia</option>
                            <option>Deposito</option>
                        </select>
                        <a class="btn btn-success px-4">PAGAR</a>
                    </form>
                </div>
                <aside class="col-7 ms-5 px-1 col-md-12 col-sm-12 col-lg-7">
                    <!Columna para api de mapa>
                    <div id="mapid" style="height: 400px;" class="rounded border border-3 border-dark"></div>
                </aside>
            </div>
        </main>
        <footer>
            <hr class="border-2 opacity-100 my-5">
            <p class="text-center fs-4 text-light">©Copyright by: Gobierno Moyibariano</p>
        </footer>
    </body>
</html>