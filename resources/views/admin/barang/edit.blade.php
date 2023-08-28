@extends('layouts.template')

@section('content')

<section class="section">

    <div class="section-body">


      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form action="{{ route('barang.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
              <div class="card-header">
                <h4>Edit Barang</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori_id" class="form-control select2" required>
                            <option value="{{ $data->id }}" selected>{{ $data->kategori->nama_kategori }}</option>
                        @foreach ($kategori as $index => $k )
                            <option value={{ $k->id }} >{{ $k->nama_kategori }}</option>
                        @endforeach

                    </select>
                  </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" value="{{ $data->nama_barang }}" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Stock</label>
                  <input type="number" name="stok_barang" value="{{ $data->stok_barang }}" class="form-control" required>
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
