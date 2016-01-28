@extends('app')

@section('content')
    <h1>Previous purchases {{$members}}</h1>
    <hr/>
    <table class="table table-striped">
        <tr>
            <th>Clothing Total</th><th>Other Total</th><th>Furniture Total</th><th>Date Of purchase</th>
        </tr>
        @foreach($purchases as $purchase)
            <tr>
                <td>{!! "$ ".number_format(floatval($purchase['ClothingTotal']), 2) !!}</td>
                <td>{!! "$ ".number_format(floatval($purchase['OtherTotal']), 2) !!}</td>
                <td>{!! "$ ".number_format(floatval($purchase['FurnitureTotal']), 2) !!}</td>
                <td>{!! $purchase['DateOfPurchase'] !!}</td>
            </tr>
        @endforeach

    </table>
@endsection
