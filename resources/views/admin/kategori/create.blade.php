@extends('layouts.template')

@section('content')

<section class="section">

    <div class="section-body">


      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form action="{{ route('kategori.store') }}" method="POST">
                @csrf
              <div class="card-header">
                <h4>Tambah Kategori Barang</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <label>Nama Kategori Barang</label>
                    <input type="text" name="nama_kategori" class="form-control" required>
                  </div>

              </div>
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </div>
  </section>

@endsection
