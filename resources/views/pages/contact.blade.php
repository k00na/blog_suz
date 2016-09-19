@extends('main')

@section('content')
	

<div class="col-md-8 col-md-offset-2">
	<h3>Kontakt:</h3>
	<div class="panel panel-default  ">
		
		<div class="panel-heading">
			<h4>Izpolnite obrazec</h4>
		</div>

		<div class="panel-body">
			{{ Form::open(array('route'=>'contact.send'), array('class'=>'form-control', 'method'=>'POST')) }}

			
			<div class="row">
				<div class="col-md-6">
					{{ Form::label('name', 'Ime')}}
					{{ Form::text('name', null, array('class'=>'form-control')) }}
				</div>
				<div class="col-md-6">
					{{ Form::label('email', 'Email') }}
					{{ Form::email('email', null, array('class'=>'form-control'))}}
				</div>
			</div>

			{{ Form::label('body', 'Sporočilo')}}
			{{ Form::textarea('body', null, array('class'=>'form-control'))}}
			

			


		</div>

		<div class="panel-footer">
			<div class="col-md-offset-11">
				{{ Form::submit('Pošlji', array('class'=>'btn btn-success') )}}
			</div>
			
			{{ Form::close() }}
		</div>


	</div>

</div>
	

@endsection