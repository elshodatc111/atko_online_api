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
    <div class="row">
        <section class="section dashboard col-lg-4">
            <div class="card recent-sales overflow-auto" style="height:550px;">
                <div class="card-body pt-3">
                    <style>
                    .main-video{
                        background: #fff;
                        border-radius: 5px;
                        padding: 10px;
                    }
                    .main-video video{
                        width: 100%;
                        border-radius: 5px;
                    }
                  </style>
                    <div class="main-video">
                        <div class="video">
                            <video src="{{ $cours->cours_video }}" id="myvideo" controls muted controlsList="nodownload"></video>
                        </div>
                    </div>
                    <h4 class="w-100 text-center">{{ $cours->cours_name }}</h4>
                    <p class="mt-2">{{ $cours->cours_about }}</p>
                    <p class="w-100"><b>Narxi</b><span style="float: right">{{ $cours->price }}</span></p>
                    <p class="w-100"><b>Davomiyligi</b><span style="float: right">{{ $cours->cours_days }}</span></p>
                    <p class="w-100"><b>Uzunligi</b><span style="float: right">{{ $cours->cours_length }}</span></p>
                    <p class="w-100"><b>Type</b><span style="float: right">{{ $cours->type }}</span></p>
                    <p class="w-100"><b>Kurs yaratildi</b><span style="float: right">{{ $cours->created_at }}</span></p>
                </div>
            </div>
        </section>
        <section class="section dashboard col-lg-4">
            <div class="card recent-sales overflow-auto" style="height:550px;">
                <div class="card-body pt-3">
                    <img src="../{{ $cours->cours_image }}" style="width:80%;margin-left:10%">
                    <form action="{{ route('admin.cours.edit.image', $cours->id ) }}" class="mt-1" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="input-group mb-3">
                            <input type="file" name="cours_image" class="form-control" required>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-primary" type="button">Edit</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="w-100 text-center">
                        <img src="../{{ $cours->techer_image }}" style="width:120px;height:120px;border-radius:50%;">
                        <form action="{{ route('admin.cours.edit.techer', $cours->id ) }}" method="post" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                @csrf
                                @method('put')
                                <input type="file" name="techer_image" class="form-control" required>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-outline-primary" type="button">Edit</button>
                                </div>
                            </div>
                        </form>
                        <h5>{{ $cours->techer }}</h5>
                    </div>
                    <hr>
                </div>
            </div>
        </section>
        <section class="section dashboard col-lg-4">
            <div class="card recent-sales overflow-auto" style="height:550px;">
                <div class="card-body pt-3">
                    <h4 class="w-100 my-3 text-center"><a href="../{{ $cours->book }}">Kurs kitobi</a></h4>
                    <form action="{{ route('admin.cours.edit.book', $cours->id ) }}" method="POST" class="mt-1" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            @csrf
                            @method('put')
                            <input type="file" name="book" class="form-control" required>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-primary" type="button">Edit</button>
                            </div>
                        </div>
                    </form>
                    <h4 class="w-100 my-3 text-center"><a href="../{{ $cours->test }}">Kurs test</a></h4>
                    <form action="{{ route('admin.cours.edit.test', $cours->id ) }}" method="POST" class="mt-1" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            @csrf
                            @method('put')
                            <input type="file" name="test" class="form-control" required>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-primary" type="button">Edit</button>
                            </div>
                        </div>
                    </form>
                    <h4 class="w-100 my-3 text-center"><a href="../{{ $cours->test_javob }}">Test javoblari</a></h4>
                    <form action="{{ route('admin.cours.edit.javob', $cours->id ) }}" method="POST" class="mt-1" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            @csrf
                            @method('put')
                            <input type="file" name="test_javob" class="form-control" required>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-primary" type="button">Edit</button>
                            </div>
                        </div>
                    </form>
                    <h4 class="w-100 my-3 text-center"><a href="../{{ $cours->lugat }}">Kurs lugatlari</a></h4>
                    <form action="{{ route('admin.cours.edit.lugat', $cours->id ) }}" method="POST" class="mt-1" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            @csrf
                            @method('put')
                            <input type="file" name="lugat" class="form-control" required>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-primary" type="button">Edit</button>
                            </div>
                        </div>
                    </form>
                    <div class="w-100 text-center">
                    <a href="{{ route('admin.cours.update', $cours->id ) }}" class="btn btn-warning text-white">Kursni yangilash</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-lg-12">
            <div class="card p-2">
                <div class="row text-center">
                    <div class="col-8">
                        {{ $cours->cours_text }}
                    </div>
                    <div class="col-4 row">
                    <div class="col-lg-12">
                        <h5>Kurs mavzulari</h5>
                        <div class="w-100 text-center">
                            @foreach($Mavzular as $item )
                                <a href="{{ route('show.mavzu',[$cours->cours_id, $item->id] ) }}"><p class="w-100 my-2">
                                    <b style="float: left">{{ $item->mavzu_name }}</b><span style="float: right">{{ $item->mavzu_length }}</span>
                                </p></a>
                                <hr class="w-100">
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-12">
                    </div>
                    <div class="col-lg-12">
                    </div>
                    <div class="col-lg-12">
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-lg-12">
            <div class="card p-2">
                <form action="{{ route('create.mavzu') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $cours->id }}">
                    <div class="row text-center">
                        <div class="col-12">
                            <h5>Yangi mavzu</h5>
                            <label for="mavzu_name">Mavzu nomi</label>
                            <input type="text" name="mavzu_name" class="form-control" required>
                        </div>
                        <div class="col-4 pt-3">
                            <label for="mavzu_video">Mavzu video</label>
                            <input type="text" name="mavzu_video" class="form-control" required>
                        </div>
                        <div class="col-4 pt-3">
                            <label for="mavzu_length">Mavzu Uzunligi (00:00:00)</label>
                            <input type="text" name="mavzu_length" class="form-control" required>
                        </div>
                        <div class="col-4 pt-3">
                            <label for="mavzu_number">Mavzu raqami</label>
                            <input type="number" name="mavzu_number" class="form-control" required>
                        </div>
                        <div class="col-12 text-center pt-3">
                            <label for="mavzu_text">Mavzu haqida</label>
                            <textarea name="mavzu_text" class="form-control" required></textarea>
                            <button type="submit" class="btn btn-success mt-3">Kursni saqlash</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

  </main>
@endsection