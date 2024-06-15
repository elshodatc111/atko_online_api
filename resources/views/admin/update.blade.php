@extends('admin.layout')
@section('title','Kursni yangilash')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Kursni yangilash</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin')}}">Home</a></li>
          <li class="breadcrumb-item active">Kursni yangilash</li>
        </ol>
      </nav>
    </div>
    
    @if(session()->has('tashsuccess'))
      <div class="alert alert-danger">
        {{ session()->get('tashsuccess') }}
      </div>
    @endif
    <section class="section dashboard">

    <section class="section dashboard">
      <div class="card recent-sales overflow-auto">
        <div class="card-body pt-3">
          <h4>Yangi kurs</h4>
          @if(session()->has('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}
            </div>
          @endif
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ route('admin.cours.edit', $cours->id ) }}" method="post" class="row" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="col-lg-6">
              <label for="cours_name">Kurs Nomi</label>
              <input type="text" name="cours_name" class="form-control mb-2" value="{{ $cours->cours_name }}" required>
              <label for="price">Kurs Narxi</label>
              <input type="number" name="price" class="form-control mb-2" value="{{ $cours->price }}" required>
              <label for="cours_video">Kurs video(link)</label>
              <input type="text" name="cours_video" class="form-control mb-2" value="{{ $cours->cours_video }}" required>
              <label for="cours_about">Kurs Haqida</label>
              <textarea name="cours_about" class="form-control mb-2" required>{{ $cours->cours_about }}</textarea>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6 mb-2">
                        <label for="cours_length">Kurs Uzunligi (00:00:00)</label>
                        <input type="text" name="cours_length" class="form-control" value="{{ $cours->cours_length }}" required>
                    </div>
                    <div class="col-6">
                        <label for="cours_days">Kurs Davomiyligi(kun)</label>
                        <input type="number" name="cours_days" class="form-control" value="{{ $cours->cours_days }}" required>
                    </div>
                </div>
              <label for="type">Kurs Type</label>
              <select name="type" class="form-control mb-2" required>
                <option value="">Tanlang</option>
                <option value="hangil">Hangil</option>
                <option value="imtihon">Imtihon</option>
                <option value="markaz">Markaz</option>
                <option value="topik">Topik II</option>
              </select>
              <label for="techer">Kurs O'qituvchi</label>
              <input type="text" name="techer" value="{{ $cours->techer }}" class="form-control mb-2">
              <label for="cours_text">Kurs text</label>
              <textarea name="cours_text" class="form-control mb-2" required>{{ $cours->cours_text }}</textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-success">Kursni yangilash</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
@endsection