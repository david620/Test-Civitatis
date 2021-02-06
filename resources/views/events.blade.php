<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre Actividad</th>
      <th scope="col">Precio Total</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  	@if(sizeof($events) > 0 )
		@foreach($events as $key => $event)
	    <tr>
	      <td>{{$event->title}}</td>
	      <td>{{$event->totalPrice($event->price, $people) }} €</td>
	      <td>
			<form name="buyForm" id="buyForm" method="POST" action="{{route('booking_store')}}">
			{{ csrf_field() }}
				<input id="eventId" name="eventId" type="hidden" value="{{$event->id}}">
	      		<button class="submit-btn">Comprar</button>
	      	</form>	
	      </td>
	    </tr>
	    @endforeach
	@else
	    <tr>
	      <td>Sin Actividades Disponibles.</td>
	    </tr>
	@endif
  </tbody>
</table>