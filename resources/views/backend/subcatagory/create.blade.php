@extends('backend.master')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Data Target Create</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/subcatagory/store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Catagory_Name</label>
                            <select name="catagory_id" id="" class="form-control">
                                <option value="">choose your option</option>
                                @foreach ($catagories as $row)
                                <option value="{{ $row->id }}">{{ $row->data_target  }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="input your name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="slug" placeholder="input your slug" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">price</label>
                            <input type="number" name="price" placeholder="input your price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">comment</label>
                            <textarea name="comment" id="" cols="5" class="form-control" placeholder="Enter a Message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Subcatagory Create</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection