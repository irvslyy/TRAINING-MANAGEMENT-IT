@extends('layouts.app')

@section('content')



<div class="container">
	<div class="row mt-5 justify-content-center text-center">

		<div class="col-md-12">
			<div class="card">

		<a href="{{route('trains.create')}}" class="btn btn-primary pull-left">tambah data</a>
				<div class="card-header"></div>
				<div class="card-body">
					<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">id</th>
			      <th scope="col">nama</th>
			      <th scope="col">email</th>
			      <th scope="col">paket</th>
			      <th scope="col">alamat</th>
			      <th scope="col">handle</th>
			    </tr>
			  </thead>
			  @foreach($blogs as $train)
			  <tbody>
			  	<tr>
			  	  <th scope="col">{{$train->id}}</th>
			      <th scope="col">{{$train->nama}}</th>
			      <th scope="col">{{$train->email}}</th>
			      <th scope="col">{{$train->paket}}</th>
			      <th scope="col">{{$train->alamat}}</th>
			      <th scope="col"><a href="{{route('apus',$train->id)}}" class="btn btn-danger">delete</a>
			      	<a href="{{route('edit')}}" class="btn btn-primary">edit</a>
			      </th>
			      
			  	</tr>
			  </tbody>
			  @endforeach
			</table>
				</div>
			</div>
		</div>
	</div>
</div>





@endsection