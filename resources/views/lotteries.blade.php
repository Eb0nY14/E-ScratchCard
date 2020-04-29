<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: lotteries.blade.php
DATE: 06 APRIL 2020

PURPOSE: THE PURPOSE OF THIS PHP CODE IS TO CREATE A "LOTTERIES" FORM SCREEN THAT WILL ALLOW THE USER (ADMIN) TO CREATE/ADD A NEW LOTTERY OR DRAW. IT USES
THE LARAVEL IN-BUILT TEMPLATE WHOSE CODE CAN BE FOUND IN THE FOLDERS qlotto > resources > views > layouts > base.blade.php and I EXTENDED THE CODE IN THIS
FILE WITH ADDITIONAL CODES WRITTEN BY ME. THE FIRST LINE OF CODE ON LINE 14 REFERS TO THE LARAVEL LAYOUT TEMPLATE USED AND NOTIFIES LARAVEL THAT THIS TEMPLATE
CODE SHOULD BE INCLUDED WITH THE lotteries.blade.php CODE, ALL OTHER LINES OF CODE IN THIS FILE WERE WRITTEN BY ME.

 -->


@extends('layouts.base')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Lotteries</li>
@endsection
@section('body')
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".create-lottery-modal">
            Add Lottery
        </button>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Lottery Name</th>
                <th scope="col">Lottery Logo</th>
                <th scope="col">Date Created</th>
                <th scope="col">Latest Draw Date</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($lotteries as $l)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $l->lottery_name }}</td>
                    <td><img src="{{ asset($l->lottery_logo) }}" class="img-rounded" width="50" height="50"/></td>
                    <td>{{ $l->created_at->format('d/m/Y h:i:s') }}</td>
                    <td>{{ ($l->latestDraw)?$l->latestDraw->draw_date->format('d/m/Y H:i:s'):'' }}</td>
                    <td>
                        @if(($l->latestDraw) && \Carbon\Carbon::now() < $l->latestDraw->draw_date )
                            @if($l->latestDraw->status =='open')
                                <a href="{{ url('drawWinningNumber/'.$l->latestDraw->id) }}" class="btn btn-danger"
                                   lottery_name="{{ $l->lottery_name }}" lottery_id="{{ $l->id }}">Finalize Draw</a>
                            @else
                                <button class="btn btn-success addDraw" lottery_name="{{ $l->lottery_name }}"
                                        lottery_id="{{ $l->id }}">Add Draw
                                </button>
                            @endif
                        @else
                            <button class="btn btn-success addDraw" lottery_name="{{ $l->lottery_name }}"
                                    lottery_id="{{ $l->id }}">Add Draw
                            </button>
                        @endif
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

    <form method="post" enctype="multipart/form-data" action="{{ url('addLottery') }}">
        @csrf
        <div class="modal fade create-lottery-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Add new Lottery</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="name" class="font-weight-medium">Lottery Name</label>
                            <input class="form-control" type="text" name="lottery_name" id="name" required="required"
                                   placeholder="Enter Lottery Name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="lottery_logo" class="font-weight-medium">Lottery Logo</label>
                            <input class="form-control" name="lottery_logo" type="file" required="required"
                                   id="lottery_logo"
                                   placeholder="Select Lottery Logo">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="cancel" class="btn btn-primary float-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" action="{{ url('addLotteryDraw') }}">
        <input type="hidden" name="lottery_id" id="lottery_id"/>
        @csrf
        <div class="modal fade add-draw-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Add new Lottery for <span
                                id="lotteryNameDraw"></span></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="draw_date" class="font-weight-medium">Draw Date</label>
                            <input class="form-control" type="date" name="draw_date" id="draw_date" required="required"
                                   placeholder="Enter Draw Date">
                        </div>
                        <div class="form-group mb-3">
                            <label for="jackpot_amount" class="font-weight-medium">Jackpot Amount</label>
                            <input class="form-control" name="jackpot_amount" type="number" step="0.00"
                                   required="required"
                                   id="jackpot_amount"
                                   placeholder="Enter Jackpot Amount">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="cancel" class="btn btn-primary float-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

@section('styles')
    <style type="text/css">
        img.img-rounded {
            border-radius: 6px;
        }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('.addDraw').click(function () {
            let lottery_id = $(this).attr('lottery_id');
            let lottery_name = $(this).attr('lottery_name');
            $('#lottery_id').val(lottery_id);
            $('#lotteryNameDraw').text(lottery_name);
            $('.add-draw-modal').modal('show');
        });

    </script>
@endsection
