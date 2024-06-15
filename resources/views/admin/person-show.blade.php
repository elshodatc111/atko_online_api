@extends('admin.layout')
@section('title','Tashrif haqida')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tashrif haqida</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin')}}">Home</a></li>
          <li class="breadcrumb-item active">Tashrif haqida</li>
        </ol>
      </nav>
    </div>
    
    <section class="section dashboard">
	  <div class="card recent-sales overflow-auto">
		<div class="card-body">
            <div class="row py-3 text-center">
                <div class="col-lg-3">
                    <h5><b>Name: </b>{{ $user->name }}</h5>
                </div>
                <div class="col-lg-3">
                    <h5><b>Email: </b>{{ $user->email }}</h5>
                </div>
                <div class="col-lg-3">
                    <h5><b>Telefon raqam: </b>{{ $user->phone }}</h5>
                </div>
                <div class="col-lg-3">
                    <h5><b>Ro'yhatdan o'tdi: </b>{{ $user->created_at }}</h5>
                </div>
            </div>
            <form action="{{ route('admin.oerson.cours.plus') }}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="row">
                <div class="col-lg-4">
                    <select name="cours_id" class="form-control" required>
                        <option value="">Tanlang...</control>
                        @foreach($courses as $item)
                            <option value="{{ $item->cours_id }}">{{ $item->cours_name }}</control>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4">
                    <input type="date" name="end" class="form-control" required>
                </div>
                <div class="col-lg-4">
                    <button class="btn btn-primary w-100">Kursga qo'shish</button>
                </div>
                </div>
            </form>
            <hr>
            <h4>Mavjud kurslari</h4>
		  <table class="table table-bordered text-center">
			<thead>
			  <tr>
				<th scope="col">#</th>
				<th scope="col">Kurs nomi</th>
				<th scope="col">Kursqa qo'shildi</th>
				<th scope="col">Kurs muddati</th>
			  </tr>
			</thead>
			<tbody>
                @foreach($cours as $item)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $item->cours_name }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->end }}</td>
                    </tr>
                @endforeach
			</tbody>
		  </table>

		</div>

	  </div>
    </section>

  </main>
@endsection