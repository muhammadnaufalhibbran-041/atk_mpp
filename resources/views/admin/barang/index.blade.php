@extends('layouts.template')

@section('content')

<section class="section">

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Barang</h4>
            </div>
            <div class="card-body">
                <p>
                    <a href="{{ route('barang.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                </p>

              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        No
                      </th>
                      <th>Kategori</th>
                      <th>Name Barang</th>
                      <th>Stok Barang</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $index => $x)

                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $x->kategori->nama_kategori}}</td>
                        <td>{{ $x->nama_barang }}</td>
                        <td>{{ $x->stok_barang }}</td>
                        <td>
                            <a href="{{ route('barang.edit', $x->id) }}" class="btn btn-primary" style="color: white">Edit</a>
                            <form action="{{ route('barang.destroy', $x->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Hapus Data ?');" type="submit" class="btn btn-danger">Hapus</button>
                            </form>

                        </td>
                    </tr>

                    @endforeach


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>


@endsection
