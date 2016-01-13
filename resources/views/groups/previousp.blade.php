@extends('app')

@section('content')
    @include('/partials/searchuser')
    <h1>Previous purchases "Family"</h1>
    <hr/>
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Change User
    </button>
    <table class="table table-striped">
        <tr>
            <th>Category</th><th>Total</th><th>Date Of purchase</th><th>Employee Processed</th>
        </tr>
        <tr>
            <td>Clothing</td>
            <td>195</td>
            <td>20 sept 1993</td>
            <td>Jacline</td>
        </tr>
        <tr>
            <td>Furniture</td>
            <td>15</td>
            <td>20 sept 1993</td>
            <td>Jacline</td>
        </tr>
    </table>
@endsection
@section('footer')
    <script>
        $('#myModal').modal()
    </script>
@endsection