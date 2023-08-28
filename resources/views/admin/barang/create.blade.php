@extends('layouts.template')

@section('content')
<section class="section">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <form action="{{route('barang.store')}}" method="post">
             @csrf
                <div class="card-header">
                  <h4>tambah Barang</h4>
                </div>
                <div class="card-body">
                 <div class="form-group">
                    <label>kategori</label>
                    <select name="kategori_id" class="form-control">
                    @foreach ( $kategori as $index =>$k )
                        <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
                    @endforeach
                    </select>
                <div class="form-group">
                    <label >nama barang</label>
                    <input type="text" name="nama_barang" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>stock barang</label>
                    <input type="number" name="stok_barang" class="form-control" required>
                </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>



</section>
@endsection
