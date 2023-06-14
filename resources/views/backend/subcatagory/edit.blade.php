@extends('backend.master')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Data Target Edit</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/subcatagory/update',$subcatagoryEdit->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Catagory_Name</label>
                            <select name="catagory_id" id="" class="form-control">
                                <option value="">choose your option</option>
                                @foreach ($catagoryEdit as $row)
                                <option value="{{ $row->id }}">{{ $row->data_target }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" value="{{ $subcatagoryEdit->name }}" name="name" placeholder="input your name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="slug" placeholder="input your slug" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset('/subcatagory/'.$subcatagoryEdit->image) }}" height="70" width="70" alt="" class="my-2">
                        </div>
                        <div class="form-group">
                            <label for="">price</label>
                            <input type="number" value="{{ $subcatagoryEdit->price }}" name="price" placeholder="input your price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">comment</label>
                            <textarea name="comment" id="" cols="5" class="form-control" placeholder="Enter a Message" rows="3">{{ $subcatagoryEdit->comment }}</textarea>

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