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
                    <form action="{{ url('/catagory/store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Catagory Name</label>
                            <input type="text" name="name" placeholder="input your name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="slug class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">data-target</label>
                            <input type="text" name="data_target" placeholder="input your data_target" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Create</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

@endsection