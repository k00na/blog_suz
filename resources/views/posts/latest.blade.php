@extends('main')

@section('content')
<div class="jumbotron">
  <h1>Dobrodošli na mojem blogu!</h1>
  <p>Sem Suzana, diplomirana antropologija in to je moj pisateljsko ustvarjalni kotiček.</p>
  <p><a class="btn btn-primary btn-lg" href="{{ route('about')}}" role="button">Več o meni</a></p>
</div>
	
@endsection