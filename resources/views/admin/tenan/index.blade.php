@extends('layouts.template')

@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>tenan</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            <a href="{{ route('tenan.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                              <thead>
                                <tr>
                                  <th class="text-center">
                                    No
                                  </th>
                                  <th>poto</th>
                                  <th>Name tenan</th>
                                  <th>status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($tenan as $index => $x)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td class="img-thumbnail" style="width:200px">{{ $x->file }}</td>
                                    {{-- <td> <img src="{{ $x->file }}" class="img-thumbnail" style="width:200px"></td> --}}
                                    <td>{{ $x->nama_tenan }}</td>
                                    <td>{{ $x->status }}</td>
                                    <td>
                                        <a href="{{ route('tenan.edit', $x->id) }}" class="btn btn-primary" style="color: white">Edit</a>
                                        <form action="{{ route('tenan.destroy', $x->id) }}" method="post">
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
