@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h2"> Data User</h1>

</div>

<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">ID</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">created_at</th>
              <!-- <th scope="col">action</th> -->
              
            </tr>
          </thead>

          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }} </td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->created_at }}</td>
              
            </tr>
            @endforeach
    
          </tbody>
        </table>
      </div>

@endsection