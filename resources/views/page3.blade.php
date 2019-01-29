@extends('view')


@section('titre')

    Recherche

@stop


@section('contenu')


<div class="col-xs-12 col-md-8">
</br>
</br>

	<h3>Recherche d'un document</h3>
	<div>
		<form action="{{url('reservation')}}" method="post">

			<meta name="csrf-token" content="{{ csrf_token() }}" />
			{{csrf_field()}}


			<fieldset>


				<p class="text-primary">Remplir un ou plusieurs critères de
					recherche</p>

				<div class="form-group">
					<label>Numero de la salle</label> <input type="text" name="numero"
						class="form-control" size="40" />
				</div>
				<div class="form-group">
					<label>Nombre de places</label><input type="text" name="nbr_places"
						class="form-control" size="40" />
				</div>
				<div class="form-group">
					<label>Type de salle</label><input type="text" name="type"
						class="form-control" size="40" />
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</div>


				<div>
					<button type="submit" class="btn btn-primary ">Rechercher</button>

					<button type="reset" class="btn btn-secondary ">Annuler</button>

				</div>

			</fieldset>

		</form>
	</div>
</br>
</br>
    <!-- class="row" -->
<div >
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Numero</th>
      <th scope="col">Nombre de places</th>
      <th scope="col">Nombre de datashow</th>
      <th scope="col">Type de Salle</th>
      <th scope="col">Numero bloc</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  	@foreach($salles as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->numero}}</td>
      <td>{{$row->nbr_places}}</td>
      <td>{{$row->datashow}}</td>
      <td>{{$row->type_salle}}</td>
      <td>{{$row->numero_bloc}}</td>
      <td><a href="{{url('doReservation')}}">Reserver</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

</div>

@stop


