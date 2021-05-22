@extends('layouts.bootstrap')

@section('content')

    <div class="container">
        <div class="row">
            <form action="#" method="post">
                <div class="form-group">
                    <label>Book name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                <label>Author</label>
                    <select name="author" class="form-control">
                        <option value="Author">Name</option>
                        <option value="Author">Name</option>
                        <option value="Author">Name</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" value="Add" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

@endsection
