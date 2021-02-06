<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Civitatis Test</title>
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />

    </head>
    <body>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-push-5">
                        <div class="booking-cta">
                            <h1>Reserva tu Actividad</h1>
                            <p> 
                                Reserva tu actividad, seleccionando una de nuestras actividades disponibles, todo esto posible gracias a nuestro motor de reservas.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-pull-7">
                        <div class="booking-form">
                            <form>
                                <div class="form-group">
                                    <span class="form-label">Actividades</span>
                                    <select class="form-control" type="text" placeholder="Seleccione una Actividad">
                                        <option>Seleccione una Actividad</option>
                                        @foreach($events as $key => $event)
                                            <option value="{{$key}}">{{$event->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Fechas</span>
                                            <input class="form-control" type="date" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Personas</span>
                                            <select class="form-control">
                                                <option>Seleccionar</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-btn">
                                    <button class="submit-btn">Buscar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    </body>
</html>
