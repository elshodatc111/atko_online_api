@extends('admin.layout')
@section('title','Tashriflar')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tashriflar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin')}}">Home</a></li>
          <li class="breadcrumb-item active">Tashriflar</li>
        </ol>
      </nav>
    </div>
    
    <section class="section dashboard">
	  <div class="card recent-sales overflow-auto">
		<div class="card-body">
		  <table class="table table-bordered text-center datatable">
			<thead>
			  <tr>
				<th scope="col">#</th>
				<th scope="col">Ism</th>
				<th scope="col">Email</th>
				<th scope="col">Telefon raqam</th>
				<th scope="col">Ro'yhatdan o'tdi</th>
			  </tr>
			</thead>
			<tbody>
          @foreach($users as $user)
              <tr>
                  <th scope="row">{{ $loop->index+1 }}</th>
                  <td><a href="{{ route('person.show', $user->id ) }}">{{ $user->name }}</a></td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone }}</td>
                  <td>{{ $user->created_at }}</td>
              </tr>
          @endforeach
			</tbody>
		  </table>

		</div>

	  </div>
    </section>

  </main>
@endsection