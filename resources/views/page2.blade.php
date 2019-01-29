@extends('testnav')


@section('titre')

    Accueil

@stop


@section('contenu')


<div class="col-xs-12 col-md-8">
</br>
</br>

	<h3>Recherche d'un document</h3>
	<div>
		
		<form action="{{url('reservation')}}" method="post">
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
					<label>Type de salle</label> <input type="text" name="type"
						class="form-control" size="40" />
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
      <th scope="col">Salle</th>
      <th scope="col">Date</th>
      <th scope="col">Debut Reservation</th>
      <th scope="col">Fin Reservation</th>
      <th scope="col">Etat</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($reservations as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->salle_id}}</td>
      <td>{{$row->date_reservation}}</td>
      <td>{{$row->debut_reservation}}</td>
      <td>{{$row->fin_reservation}}</td>
      <td>Reserve</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

</div>

@stop




