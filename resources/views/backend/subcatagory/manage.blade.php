@extends('backend.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Sl</th>
                        <th scope="col">Catagory_name</th>
                        <th scope="col">name</th>
                        <th scope="col">price</th>
                        <th scope="col">comment</th>
                        <th scope="col">img</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subcatagories as $row)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $row->catagory->name }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->price }}</td>
                        <td>{{ $row->comment }}</td>
                        <td>
                            <img height="80" class="circle" width="80" src="{{ asset('/subcatagory/'.$row->image) }}" alt="">
                        </td>
                        <td>
                            <a href="{{ url('/subcatagory/edit',$row->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('/subcatagory/delete',$row->id) }}" class="btn btn-danger" onclick="return confirm('Are You Sure ?')">delete</a>
                        </td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $subcatagories->links() }}

</div>

@endsection