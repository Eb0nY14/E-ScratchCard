@extends('layouts.base')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Lottery Draw - {{ $draw->lottery->lottery_name }} with {{ '$'.$draw->jackpot_amount }} Jackpot Amount</li>
@endsection
@section('body')

    <div class="card">
        <div class="card-body" style="width:100%; text-align: center;">
            <h1>Winning Code-> {{ $winning_number }}</h1>
        </div>
        <div class="card-footer">
            <a href="{{ url('drawWinningNumber/'.$draw_id) }}" class="float-left btn btn-danger">Redraw</a>
            <form method="post" action="{{ url('approveWinnings') }}">
                @csrf
                <input type="hidden" name="winning_number" value="{{ $winning_number }}">
                <input type="hidden" name="draw_id" value="{{ $draw_id }}">
                <button type="submit" class="float-right btn btn-secondary">Approve Draw</button>
            </form>
        </div>
    </div>
    <p>&nbsp;</p>
    <div class="card">
        <div class="card-header">Winning Scratch card analysis</div>
        <div class="card-body" style="width:100%; text-align: center;">
            <table class="table table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Scratchcard Id</th>
                    <th>Number 1</th>
                    <th>Number 2</th>
                    <th>Number 3</th>
                    <th>Number 4</th>
                    <th>Number 5</th>
                    <th>Number 6</th>
                    <th>Winning Numbers in Card</th>
                </tr>
                @if(count($results))
                    @foreach($results as $r)
                        <tr>
                            <td>{{ $r['id'] }}</td>
                            <td>{{ $r['n1'] }}</td>
                            <td>{{ $r['n2'] }}</td>
                            <td>{{ $r['n3'] }}</td>
                            <td>{{ $r['n4'] }}</td>
                            <td>{{ $r['n5'] }}</td>
                            <td>{{ $r['n6'] }}</td>
                            <td>{{ $r['nos'] }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="8">No entries with min 3 winning numbers found!</td>
                    </tr>
                @endif
                </thead>
            </table>
        </div>
    </div>
@endsection
