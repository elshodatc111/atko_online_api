@extends('admin.layout')
@section('title','Murojatlar')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Murojatlar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin')}}">Home</a></li>
          <li class="breadcrumb-item active">Murojatlar</li>
        </ol>
      </nav>
    </div>
    <section class="section dashboard">
      <div class="card recent-sales overflow-auto">
        <div class="card-body">
          <table class="table text-center datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Ism</th>
                <th scope="col">Email</th>
                <th scope="col">Telefon raqam</th>
                <th scope="col">Murojat matni</th>
                <th scope="col">Murojat vaqti</th>
              </tr>
            </thead>
            <tbody>
              @foreach($Contact as $item)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->text }}</td>
                <td>{{ $item->created_at }}</td>
              </tr>
              @endforeach
            </tbody>
          </tabel>
        </div>
      </div>
    </section>
  

  </main>
@endsection