@extends('admin.layout')
@section('title','Mavzu')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Mavzu</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin')}}">Home</a></li>
          <li class="breadcrumb-item active">Mavzu</li>
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
                            <video src="{{ $Mavzu->mavzu_video }}" id="myvideo" controls muted controlsList="nodownload"></video>
                        </div>
                    </div>
                    <h4 class="w-100 text-center">{{ $Mavzu->mavzu_name }}</h4>
                    <p class="w-100"><b>Uzunligi</b><span style="float: right">{{ $Mavzu->mavzu_length }}</span></p>
                    <p class="w-100"><b>Mavzu tartib raqami</b><span style="float: right">{{ $Mavzu->mavzu_number }}</span></p>
                    <p class="w-100"><b>Kurs: </b><span style="float: right">{{ $Cours->Cours_Name }}</span></p>
                    <p class="mt-2">{{ $Mavzu->mavzu_text }}</p>
                    <form action="{{ route('mavzu.delete', $Mavzu->id ) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Mavzuni o'chirish</button>
                    </form>
                    
                </div>
            </div>
        </section>
        
        <section class="section dashboard col-lg-4">
            <div class="card recent-sales overflow-auto" style="height:550px;">
                <div class="card-body pt-3">
                    <h4 class="text-center">Kursni yangilash</h4>
                    <form action="{{ route('create.mavzu.edit', $Mavzu->id ) }}" method="POST">
                        @csrf
                        @method('put')
                        <input type="hidden" name="cours_id" value="{{ $Mavzu->cours_id }}">
                        <label for="mavzu_name" class="mb-3">Mavzu nomi</label>
                        <input type="text" name="mavzu_name" value="{{ $Mavzu->mavzu_name }}" class="form-control" required>
                        <label for="mavzu_video" class="mb-3">Mavzu video</label>
                        <input type="text" name="mavzu_video" value="{{ $Mavzu->mavzu_video }}" class="form-control" required>
                        <label for="mavzu_length" class="mb-3">Mavzu Uzunligi (00:00:00)</label>
                        <input type="text" name="mavzu_length" value="{{ $Mavzu->mavzu_length }}" class="form-control" required>
                        <label for="mavzu_number" class="mb-3">Mavzu raqami</label>
                        <input type="number" name="mavzu_number" value="{{ $Mavzu->mavzu_number	 }}" class="form-control" required>
                        <label for="mavzu_text" class="mb-3">Mavzu haqida</label>
                        <textarea name="mavzu_text" class="form-control" required>{{ $Mavzu->mavzu_text }}</textarea>
                        <button type="submit" class="btn btn-success mt-3">Kursni yangilash</button>
                    </form>
                </div>
            </div>
        </section>
        <section class="section dashboard col-lg-4">
            <div class="card recent-sales overflow-auto" style="height:550px;">
                <div class="card-body pt-3">
                    <h4 class="text-center">Kurs mavzulari</h4>
                    <div class="w-100 text-center">
                        @foreach($Mavzular as $item )
                            <a href="{{ route('show.mavzu',[$Cours->cours_id, $item->id] ) }}"><p class="w-100 my-2">
                                <b style="float: left">{{ $item->mavzu_name }}</b><span style="float: right">{{ $item->mavzu_length }}</span>
                            </p></a>
                            <hr class="w-100">
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        
        
    </div>

  </main>
@endsection