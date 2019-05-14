@extends('layouts.app')

@section('content')



<div class="container">
	<div class="row mt-5 justify-content-center ">
		<div class="col-md-8">
			<form action="{{route('trains.store')}}" method="Post">
			@csrf
			  <div class="form-group">
			    <label for="name">nama</label>
			    <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="name">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="email">email</label>
			    <input type="email" class="form-control" id="email" placeholder="email">
			  </div>
			  <div class="form-group">
			    <label for="paket">paket</label>
			    <input type="text" class="form-control" id="paket" placeholder="paket">
			  </div>
			  <div class="form-group">
			    <label for="alamat">alamat</label>
			    <input type="text" class="form-control" id="text" placeholder="alamat">
			  </div>
			  <div class="form-group">
			    <label for="pembibing">pembibing</label>
			    <input type="text" class="form-control" id="text" placeholder="pembibing">
			  </div>
			  <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div>
			  <button type="submit" value="POST" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>





@endsection