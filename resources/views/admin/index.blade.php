@extends('admin.layout')
@section('title','Bosh sahifa')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Bosh sahifa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
          <li class="breadcrumb-item active">Bosh sahifa</li>
        </ol>
      </nav>
    </div>
    <section class="section dashboard">
      <div class="row">
        <div class="col-md-4">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Online kurslar</h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $static['kurslar'] }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title">Tashriflar</span></h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-person"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $static['users'] }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-md-4">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title">Sotilgan kurslar</span></h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $static['sotuv'] }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-12">
          <div class="card recent-sales overflow-auto">
            <div class="card-body">
              <h5 class="card-title">Sotuvlar <span>| Tarixi</span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kurs nomi</th>
                    <th scope="col">Tashri Ism</th>
                    <th scope="col">Telefon raqam</th>
                    <th scope="col">Summa</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($Order as $item)
                  <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $item->cours_name }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                      @if($item->status == 'Kutulmoqda')
                      <span class="badge bg-warning">Kutilmoqda</span>
                      @elseif($item->status == "To'lov qilindi.")
                      <span class="badge bg-success">Sotildi</span>
                      @else
                      <span class="badge bg-danger">Bekor qilindi</span>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

            </div>

          </div>
        </div>
      </div>
    </section>

  </main>
@endsection