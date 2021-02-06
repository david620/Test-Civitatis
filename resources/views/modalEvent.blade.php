<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <div class="popupMessageContainer">

    <div class="row">
        <div class="col-sm-12">                                
            <div class="form-group">                                    
                <span class="form-label">Nombre Actividad: </span>                        
                <p class="form-control">{{$event->title}}</p>                            
                <span class="form-label">Descripción: </span>                        
                <textarea class="form-control" readonly>{{$event->description}}</textarea>                         
                <span class="form-label">Fecha: </span>                        
                <p class="form-control">{{$date}}</p>       
                <span class="form-label">Nº de Personas: </span>                        
                <p class="form-control">{{$people}}</p>       
                <span class="form-label">Precio Total a Abonar: </span>                        
                <p class="form-control">{{$event->totalPrice($event->price, $people) }}€</p>       
                <span class="form-label">Eventos Relacionados: </span>
                    @foreach($event->relatedEvents($date) as $title)
                        <li> 
                            {{$title}}
                        </li>  
                    @endforeach
                <form name="buyFormModal" id="buyFormModal" method="POST" action="{{route('booking_store')}}">
                {{ csrf_field() }}
                    <input id="eventId" name="eventId" type="hidden" value="{{$event->id}}">
                    <input id="totalPrice" name="totalPrice" type="hidden" value="{{$event->totalPrice($event->price, $people) }}">
                    <input id="people" name="people" type="hidden" value="{{$people}}">
                    <input id="eventDate" name="eventDate" type="hidden" value="{{$date}}">
                    <button class="submit-btn">Comprar</button>
                </form> 

            </div>
        </div>
    </div>

    </div>  
</div>