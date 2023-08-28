@extends('layouts.template')

@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-6 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('tenan.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                      <div class="card-header">
                        <h4>Edit tenan</h4>
                      </div>
                      <div class="form-group col-5">
                        <b></b>
                        <input type="file" name="file" class="form-control" value="{{$data->file}}">
                    </div>
                      <div class="form-group">
                        <label>Nama tenan</label>
                        <input type="text" name="nama_tenan" value="{{ $data->nama_tenan }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>status</label>
                        <input type="text" name="status" value="{{ $data->nama_tenan }}" class="form-control" required>
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
