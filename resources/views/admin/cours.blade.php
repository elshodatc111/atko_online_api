@extends('admin.layout')
@section('title','Kurslar')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Kurslar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin')}}">Home</a></li>
          <li class="breadcrumb-item active">Kurslar</li>
        </ol>
      </nav>
    </div>
    
    @if(session()->has('tashsuccess'))
      <div class="alert alert-danger">
        {{ session()->get('tashsuccess') }}
      </div>
    @endif
    
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
    <section class="section dashboard">
      <div class="card recent-sales overflow-auto">
        <div class="card-body pt-3">
          <table class="table table-bordered datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kurs ID</th>
                <th scope="col">Kurs Name</th>
                <th scope="col">Kurs haqida</th>
                <th scope="col">Summa</th>
                <th scope="col">Talabalar(activ)</th>
                <th scope="col">Type</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($Cours as $item )
              <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{ $item->cours_id }}</td>
                <td>{{ $item->cours_name }}</td>
                <td>{{ $item->cours_about }}</td>
                <td>{{ $item->price }}</td>
                <td>0</td>
                <td>{{ $item->type }}</td>
                <td>
                  <form action="{{ route('admin.cours.delete', $item->id ) }}" method="post" style="display:flex">
                      @csrf
                      @method('DELETE')
                      
                    <a href="{{ route('admin.cours.show', $item->id ) }}" class="btn btn-primary p-0 px-1"><i class="bi bi-eye"></i></a>
                    <a href="{{ route('admin.cours.update', $item->id ) }}" class="btn btn-info p-0 px-1 mx-2"><i class="bi bi-pencil"></i></a>
                      <button type="submit" class="btn btn-outline-danger p-0 px-1" style="display:flex"><i class="bi bi-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section class="section dashboard">
      <div class="card recent-sales overflow-auto">
        <div class="card-body pt-3">
          <h4>Yangi kurs</h4>
          <form action="{{ route('admin.cours.create') }}" method="post" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-6">
              <label for="cours_name">Kurs Nomi</label>
              <input type="text" name="cours_name" class="form-control mb-2" value="{{ old('cours_name') }}" required>
              <label for="price">Kurs Narxi</label>
              <input type="number" name="price" class="form-control mb-2" value="{{ old('price') }}" required>
              <label for="cours_image">Kurs Rasm (jpg,jpeg)</label>
              <input type="file" name="cours_image" class="form-control mb-2" value="{{ old('cours_image') }}" required>
              <label for="cours_video">Kurs video(link)</label>
              <input type="text" name="cours_video" class="form-control mb-2" value="{{ old('cours_video') }}" required>
              <label for="cours_length">Kurs Uzunligi (00:00:00)</label>
              <input type="text" name="cours_length" class="form-control mb-2" value="{{ old('cours_length') }}" required>
              <label for="cours_days">Kurs Davomiyligi(kun)</label>
              <input type="number" name="cours_days" class="form-control mb-2" value="{{ old('cours_days') }}" required>
              <label for="cours_about">Kurs Haqida</label>
              <textarea name="cours_about" class="form-control mb-2" required>{{ old('cours_about') }}</textarea>
            </div>
            <div class="col-lg-6">
              <label for="type">Kurs Type</label>
              <select name="type" class="form-control mb-2" required>
                <option value="">Tanlang</option>
                <option value="hangil">Hangil</option>
                <option value="imtihon">Imtihon</option>
                <option value="markaz">Markaz</option>
                <option value="topik">Topik II</option>
              </select>
              <label for="techer">Kurs O'qituvchi</label>
              <input type="text" name="techer" value="{{ old('techer') }}" class="form-control mb-2">
              <label for="techer_image">Kurs O'qituvchi rasmi(jpg,jpeg)</label>
              <input type="file" name="techer_image" class="form-control mb-2">
              <div class="col-12 row">
                <div class="col-lg-6">
                  <label for="book">Kurs kitob(pdf)</label>
                  <input type="file" name="book" class="form-control mb-2">
                </div>
                <div class="col-lg-6">
                  <label for="test">Kurs Testlar(pdf)</label>
                  <input type="file" name="test" class="form-control mb-2">
                </div>
              </div>
              <label for="test_javob">Kurs test javob(pdf)</label>
              <input type="file" name="test_javob" class="form-control mb-2">
              <label for="lugat">Kurs lugat(pdf)</label>
              <input type="file" name="lugat" class="form-control mb-2">
              <label for="cours_text">Kurs text</label>
              <textarea name="cours_text" class="form-control mb-2" required>{{ old('cours_text') }}</textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-success">Kursni saqlash</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
@endsection