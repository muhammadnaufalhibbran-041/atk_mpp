@extends('layouts.template')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <form action="{{route('tenan.store')}}" method="post" enctype="multipart/form-data">
                 @csrf
                <div class="card-header">
                    <h4>tambah tenan</h4>
                </div>
                <div class="form-group col-5">
                    <b></b>
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="form-group">
                    <label>nama tenan</label>
                    <input type="text" name="nama_tenan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>status</label>
                    <input type="text" name="status" class="form-control" required>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
                </form>
        </div>
    </div>
</section>
@endsection
