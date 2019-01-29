
@extends('testnav')


@section('titre')

    Reserver

@stop


@section('contenu')


<div class="col-xs-12 col-md-8">
</br>
</br>

	<h3>Fomulaire de reservation</h3>


	<div>
		<form action="{{url('reservation/save')}}" method="post">

			<meta name="csrf-token" content="{{ csrf_token() }}" />
			{{csrf_field()}}


			<fieldset>


				<p class="text-primary">Remplir les champs ci-dessous </p>

				<div class="form-group">
					<label>Numero de la salle</label> <input type="text" name="numero_salle"
						class="form-control" size="40" />
				</div>
				<div class="form-group">
					<label>Date de la reservation ( format aa-mm-jj )</label><input type="text" name="date_reservation"
						class="form-control" size="40" />
				</div>
				<div class="form-group">
					<label>Heure debut reservation ( format hh-mm-ss )</label><input type="text" name="debut_reservation"
						class="form-control" size="40" />
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</div>
				<div class="form-group">
					<label>Heure fin reservation ( format hh-mm-ss )</label><input type="text" name="fin_reservation"
						class="form-control" size="40" />
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</div>				


				<div>
					<button type="submit" class="btn btn-primary ">Valider</button>

					<button type="reset" class="btn btn-secondary ">Annuler</button>

				</div>

			</fieldset>

		</form>
	</div>
</div>
	@stop