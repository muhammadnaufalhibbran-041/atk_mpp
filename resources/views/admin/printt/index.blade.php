@extends('layouts.template')

@section('content')

<section class="section">

    <div class="section-body">


      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form action="{{ route('exportt_pdf') }}" method="get">
                @csrf
              <div class="card-header">
                <h4>Print tenan mpp</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <label>Tanggal Awal</label>
                    <input type="date" name="awal" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Akhir</label>
                    <input type="date" name="akhir" class="form-control" required>
                </div>
              </div>
              <div class="card-footer text-left">
                <button type="submit" class="btn btn-primary"><i class="fas fa-print"></i> Print</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </div>
  </section>

@endsection
