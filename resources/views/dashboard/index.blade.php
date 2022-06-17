@extends('layouts.dashboard')

@section('title')
    Dashboard
@endsection

@section('header')
    Dashboard
@endsection

@section('content')
  <form id="formFilter" action='{{ route('dashboard.index') }}' method='GET' class="mb-3" enctype='multipart/form-data'>
    @csrf
    <div class="form-group">
      <div class="input-group">
        <button type="button" class="btn btn-default float-right mr-2" id="daterange-btn">
          <i class="far fa-calendar-alt"></i> Date range picker
          <i class="fas fa-caret-down"></i>
        </button>
        <input type="hidden" id="start" name="start">
        <input type="hidden" id="end" name="end">

        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-sm">
          <i class="fas fa-print"></i> Export Laporan
        </button>

      </div>
    </div>
  </form>

<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>Rp.{{ number_format($totalTransaksi) }}</h3>

          <p>Total Revenue</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        @if (Request::get('start') && Request::get('end'))
          <a href="" class="small-box-footer">{{ Request::get('start') }} - {{ Request::get('end') }} </a>
        @else  
          <a href="" class="small-box-footer">Total Revenue </a>
        @endif
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $totalOrder }}</h3>

          <p>Total Orders</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="{{ route('dashboard.todoOrderGroup') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box" style="background-color: rgb(247, 128, 18);color:white;">
        <div class="inner">
          <h3>{{ $detailTransaksi }}</h3>
          <p>Item Terjual</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="{{ route('dashboard.todoOrderItem') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>Rp.{{ number_format(round($avgPerPax)) }}</h3>
          <p>AVG/PAX</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        @if (Request::get('start') && Request::get('end'))
          <a href="" class="small-box-footer">{{ Request::get('start') ." - ". Request::get('end')}}</a>
        @else
          <a href="" class="small-box-footer">AVG/PAX (all)</a>
        @endif
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">TOP FOOD</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Menu</th>
                <th>Revenue</th>
                <th style="width: 40px">Qty</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($topFood as $key => $food) 
                <tr>
                  <td>{{$key+1}}.</td>
                  <td>{{ $food->food_item }}</td>
                  <td>
                    {{ number_format($food->revenue) }}
                  </td>
                  <td><span class="badge bg-danger"></span>{{ $food->quantity }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Top Member</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Customer Name</th>
                <th>Bill Amount</th>
                <th style="width: 40px">Qty</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($topMembers as $key => $topMember) 
                <tr>
                  <td>{{ $key+1 }}.</td>
                  <td>{{ $topMember->customer_name }}</td>
                  <td>{{ number_format($topMember->bill_ammount) }}</td>
                  <td>{{ $topMember->transaction_count }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>


  {{-- MODALS EXPORT LAPORAN --}}
  <div class="modal fade" id="modal-sm">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Export Laporan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('dashboard.exportExcel') }}" method="GET" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="form-group">
              <button type="button" class="btn btn-default col-md-12" id="daterangeExport-btn">
                <i class="far fa-calendar-alt"></i> Select By Date
                <i class="fas fa-caret-down"></i>
              </button>
              <input type="hidden" id="startExport" name="start">
              <input type="hidden" id="endExport" name="end">
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <div class="row">
              <button type="submit" class="btn btn-primary mr-2">
                <i class="fas fa-print"></i> Export By Date
              </button>
              <a href="{{ route('dashboard.exportExcel') }}" class="btn btn-danger">
                <i class="fas fa-print"></i> Export All
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <!-- date-range-picker -->
  <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
  <script>
    $(function () {
      $('#daterange-btn').daterangepicker(
        {
          ranges   : {
            'Reset'       : [null, null],
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            // 'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
          $('#start').val(start.format('MM/DD/YYYY'))
          $('#end').val(end.format('MM/DD/YYYY'))
          // alert(start.format('MM/DD/YYYY')+ " - " +end.format('MM/DD/YYYY'))
          $('#formFilter').submit()
        }
      )
      $('#daterangeExport-btn').daterangepicker(
        {
          ranges   : {
            'Reset'       : [null, null],
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            // 'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
          $('#startExport').val(start.format('MM/DD/YYYY'))
          $('#endExport').val(end.format('MM/DD/YYYY'))
        }
      )
    });
  </script>
@endsection