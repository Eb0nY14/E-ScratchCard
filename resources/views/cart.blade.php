@extends('layouts.base')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">My Cart</li>
@endsection
@section('body')
    <div class="row">
        <div class="col-sm-3">
            <h3>{{ $draw->lottery->lottery_name }}</h3>
            <img src="{{ $draw->lottery->lottery_logo }}" style="width:40%"/>
        </div>
        <div class="col-sm-5">
            <table class="table table-bordered ">
                <tr>
                    <td>S/N</td>
                    <td>Card Entry/ Number Selections</td>
                </tr>
                @foreach($cards as $c)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $c }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-sm-4">
            <h4>Cart Amount: <span style="font-weight: bolder">${{ $amount }}</span></h4>
            <div>
                <form method="post" action="{{ url('processCartPaypal') }}">
                    @csrf
                    @foreach($cards as $c)
                        <input type="hidden" name="card[]" value="{{ $c }}"/>
                    @endforeach
                    <input type="hidden" name="amount" value="{{ $amount }}"/>
                    <input type="hidden" name="draw_id" value="{{ $draw->id }}"/>
                    <button type="submit">Pay with Paypal <i class="fa fa-paypal"></i></button>
                </form>
            </div>
        </div>
    </div>
@endsection
