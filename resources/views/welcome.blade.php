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

        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    </head>
    <body>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-push-5">
                        <div class="booking-cta" id="welcomeMsg">
                            <h1>Reserva tu Actividad</h1>
                            <p> 
                                Reserva tu actividad, seleccionando una de nuestras actividades disponibles, todo esto posible gracias a nuestro motor de reservas.
                            </p>
                        </div>
                        <div class="booking-form eventsList" id="eventsList" style="display: none;">

                        </div>
                    </div>
                    <div class="col-md-4 col-md-pull-7">
                        <div class="booking-form">
                            <form name="searchForm" id="searchForm">
                                <div class="form-group">
                                    <div class="form-group">
                                        <span class="form-label">Fecha: </span>
                                        <input class="form-control" type="date" id="dates" required="required">
                                    </div>
                                </div>

                                <div class="form-group">

                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <span class="form-label">Nº Personas: </span>
                                            <select id="people" class="form-control" required="required">
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
    @include('modals')
    <script type="text/javascript">
        $('#searchForm').submit(function(e){
            e.preventDefault();
            var people = $('#people').val();  
            var dates = $('#dates').val();  
            var datess = JSON.stringify(dates);
            var list = document.getElementById("eventsList");
            var message = document.getElementById("welcomeMsg");
            let $field = $('.eventsList');
                $.ajax({
                    type: 'post',
                    url:'{{route('ajax_events')}}?' + $('#searchForm').serialize(),
                    data:{people, datess, _token: '{{ csrf_token() }}'},
                    statusCode: {
                        200: function(data) {
                            list.style.display = "block";
                            message.style.display = "none";
                            if(data === null){
                                $field.html('');
                            }else{
                                $field.html(data);
                            }
                        }
                    }
                });
        });


        $(document).on('click', '#getMessage', function(e){
            e.preventDefault();
            var people = $('#people').val();  
            var dates = $('#dates').val();
            var datess = JSON.stringify(dates);
            var url = $(this).data('url');
            $('.message-modal').html(''); 
            $('#modal-loader').show();     
            $.ajax({
                url: url,
                data:{people, datess},
                type: 'GET',
                dataType: 'html'
            })
            .done(function(data){
                $('.message-modal').html('');    
                $('.message-modal').html(data); // load response 
                $('#modal-loader').hide();        // hide ajax loader   
            })
            .fail(function(){
                $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Algo ha ocurrido, intente de nuevo...');
                $('#modal-loader').hide();
            });
        });


    </script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    @if(Session::get('success') || Session::get('error'))
        <script>
          $('#Modal').modal('show');
        </script>
    @endif


</body>
</html>