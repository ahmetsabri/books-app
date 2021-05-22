@extends('layouts.bootstrap')

@section('content')

<div class="container">
    <div class="row">
<button class="btn btn-success">new book</button>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Author</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Friends</td>
                        <td>Ahmed</td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>

@endsection
