@extends('layouts.template')

@section('content')

<section class="section">

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Kategori Barang</h4>
            </div>
            <div class="card-body">
                <p>
                    <a href="{{ route('kategori.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                </p>

              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Kategori</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $index => $x)

                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $x->nama_kategori }}</td>
                        <td>
                            <a href="{{ route('kategori.edit', $x->id) }}" class="btn btn-primary" style="color: white">Edit</a>


                            @php
                                $cek = App\Models\Barang::where('kategori_id', $x->id)->count();
                            @endphp

                            @if ($cek > 0)

                            @else
                                <form action="{{ route('kategori.destroy', $x->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Hapus Data ?');" type="submit" class="btn btn-danger">Hapus</button>
                                </form>
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
      </div>

    </div>
  </section>


@endsection
