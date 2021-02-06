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

        <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

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
                                    <select class="form-control" type="text" placeholder="Seleccione una Actividad" onchange="changeQuestions(this.value)">
                                        <option>Seleccione una Actividad</option>
                                        @foreach($events as $key => $event)
                                            <option value="{{$event->id}}">{{$event->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-sm-7 dates">
                                        <div class="form-group">
                                            <span class="form-label">Fechas</span>
                                            <input class="form-control" type="date" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <span class="form-label">Personas</span>
                                            <select class="form-control" disabled>
                                                <option>Seleccionar</option>
                                                <!--Se coloca un limite de 25 personas por evento para poblar el select-->
                                                @for($i=1; $i <=25; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
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

    <script type="text/javascript">
        function changeQuestions(el){
            var element = el;
            let $field = $('.dates');
                $.ajax({
                    url:'{{route('ajax_dates')}}',
                    dataType: 'json',
                    data:{event:element},
                    statusCode: {
                        200: function(data) {
                            if(data === null){
                                $field.html('');
                            }else{
                                $field.html(data.responseText);
                            }
                        }
                    }
                });
            }            
        </script>
    </body>
</html>