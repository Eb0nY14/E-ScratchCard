@extends('layouts.base')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
@endsection
@section('body')
    <div class="user-panel-dashboard___">
        <!-- user-statics begin -->
        <div class="player-statics">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="user-panel-title">
                            <h3>User Statics</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @hasrole('admin')
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="single-static">
                            <div class="part-icon">
                                <img src="../assets/img/svg/money1.svg" alt="">
                            </div>
                            <div class="part-text">
                                <span class="number">${{ $customers }}</span>
                                <span class="title">Registered Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="single-static">
                            <div class="part-icon">
                                <img src="../assets/img/svg/money1.svg" alt="">
                            </div>
                            <div class="part-text">
                                <span class="number">${{ $payouts }}</span>
                                <span class="title">Total Payouts</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="single-static">
                            <div class="part-icon">
                                <img src="../assets/img/svg/payment.svg" alt="">
                            </div>
                            <div class="part-text">
                                <span class="number">{{ $winners }}</span>
                                <span class="title">Winners</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="single-static">
                            <div class="part-icon">
                                <img src="../assets/img/svg/money2.svg" alt="">
                            </div>
                            <div class="part-text">
                                <span class="number">{{ $draws }}</span>
                                <span class="title">Draws</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="single-static">
                            <div class="part-icon">
                                <img src="../assets/img/svg/hourglass.svg" alt="">
                            </div>
                            <div class="part-text">
                                <span class="number">{{ $scratch_cards }}</span>
                                <span class="title">Scratch Cards</span>
                            </div>
                        </div>
                    </div>

                    @else
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="single-static">
                                <div class="part-icon">
                                    <img src="../assets/img/svg/money1.svg" alt="">
                                </div>
                                <div class="part-text">
                                    <span class="number">${{ $payments }}</span>
                                    <span class="title">Total Payments made</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="single-static">
                                <div class="part-icon">
                                    <img src="../assets/img/svg/money1.svg" alt="">
                                </div>
                                <div class="part-text">
                                    <span class="number">${{ $winnings }}</span>
                                    <span class="title">Total Winnings</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="single-static">
                                <div class="part-icon">
                                    <img src="../assets/img/svg/payment.svg" alt="">
                                </div>
                                <div class="part-text">
                                    <span class="number">{{ $tickets }}</span>
                                    <span class="title">Tickets</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="single-static">
                                <div class="part-icon">
                                    <img src="../assets/img/svg/money2.svg" alt="">
                                </div>
                                <div class="part-text">
                                    <span class="number">{{ $referrals }}</span>
                                    <span class="title">Referrals</span>
                                </div>
                            </div>
                        </div>
                        @endhasrole
                </div>
            </div>
        </div>
        <!-- user-statics end -->

        <!-- chart begin -->
        <div class="chart-section">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-4 col-lg-4">
                        <div class="user-panel-title">
                            <h3>{{ Auth::user()->username }}</h3>
                        </div>
                        <div class="account-info">
                            <ul>
                                @foreach($logs as $l)
                                <li>
                                    <span class="title">{{ $l->log_type }}</span>
                                    <span class="details"> {{ $l->created_at->format('d M Y H:i:s') }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="user-panel-title">
                            <h3>Transaction & Deposit</h3>
                        </div>
                        <canvas id="chart-0"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- chart end -->

        <!-- payment history begin -->
        <div class="payment-history">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="user-panel-title">
                            <h3>Payment History</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="transaction-area">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Reference</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Transaction Method</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customer_payments as $p)
                                <tr>
                                    <th scope="row" class="d-flex">{{ $p->reference }}</th>
                                    <td>{{ $p->created_at->format('d M Y H:i:s') }}</td>
                                    <td>{{ $p->mode_of_payment }}</td>
                                    <td>{{ $p->amount }}</td>
                                    <td>{{ $p->status }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- payment history end -->
    </div>
@endsection
