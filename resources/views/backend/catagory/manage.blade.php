@extends('backend.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>catagory manage</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">SL.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">slug</th>
                                    <th scope="col">data-target</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($catagoryes as $row)
                                <tr>
                                    <th scope="row">{{ $loop->index+1 }}</th>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->slug }}</td>
                                    <td>{{ $row->data_target }}</td>
                                    <td>
                                        <a  href="{{ url('/catagory/edit',$row->id) }}" class="btn btn-sm btn-primary">Ddit</a>
                                        <a onclick="return confirm('Are You Sure ?')" href="{{ url('/catagory/delete',$row->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{ $catagoryes->links() }}
    </div>
@endsection