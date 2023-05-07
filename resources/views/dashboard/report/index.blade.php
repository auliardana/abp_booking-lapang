@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h2"> Report</h1>

</div>

<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">id_user</th>
              <th scope="col">report</th>
              <th scope="col">created_at</th>
              <th scope="col">action</th>
              
            </tr>
          </thead>

          <tbody>
            @foreach ($reports as $report)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $report->id_user }} </td>
              <td>{{ $report->report }}</td>
              <td>{{ $report->created_at }}</td>
              <td>
                <form action="/dashboard_real/report/ {{ $report->id }} " method="post">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure')"><span data-feather="x-circle"></span></button>

                </form>
              </td>
            </tr>
            @endforeach
    
          </tbody>
        </table>
      </div>

@endsection