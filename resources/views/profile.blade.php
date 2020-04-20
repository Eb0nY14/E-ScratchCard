@extends('layouts.base')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">{{ Auth::user()->name }} Profile</li>
@endsection
@section('body')
    <div class="row justify-content-center profile">
        <div class="col-xl-3 col-lg-3">
            <div class="accont-tab">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active show" id="personal-info-tab" data-toggle="pill" href="#personal-info"
                       role="tab" aria-selected="true"><i class="far fa-user"></i> Personal Info</a>
                    <a class="nav-link" id="payment-info-tab" data-toggle="pill" href="#payment-info" role="tab"
                       aria-selected="false"><i class="fas fa-credit-card"></i> Payment Info</a>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8">
            <div class="tab-content" id="v-pills-tabContent">

                <div class="tab-pane fade active show" id="personal-info" role="tabpanel"
                     aria-labelledby="personal-info-tab">
                    <form method="post" action="{{ url('editProfile') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="user-panel-title">
                            <h3>{{ Auth::user()->name }}'s Profile</h3>
                        </div>

                        <div class="player-profile">
                            <div class="row no-gutters">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="player-card">
                                        <div class="part-pic">
                                            @if(Auth::user()->profile->image_url)
                                                <img src="{{ Auth::user()->profile->image_url }}" alt="">
                                            @else
                                                <img src="{{ asset('assets/img/avatar.jpg') }}" alt="">
                                            @endif
                                        </div>
                                        <div class="social-link">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-facebook-messenger"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-youtube"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-6">
                                    <div class="part-info">
                                                <span class="player-name">
                                                    {{ Auth::user()->name }}
                                                    @if(Auth::user()->profile->image_url)
                                                        <img src="{{ asset('assets/img/avatar.jpg') }}" alt="">
                                                    @else
                                                        <img src="{{ Auth::user()->profile->image_url }}" alt="">
                                                    @endif
                                                </span>
                                        <ul>
                                            <li>
                                                <span class="property"><i
                                                        class="fas fa-info-circle"></i> First Name :</span>
                                                <input type="text" class="value" name="first_name"
                                                       value="{{ Auth::user()->profile->first_name  }}"/>
                                            </li>
                                            <li>
                                                <span class="property"><i
                                                        class="fas fa-info-circle"></i> Last Name :</span>
                                                <input type="text" class="value" name="last_name"
                                                       value="{{ Auth::user()->profile->last_name  }}"/>
                                            </li>
                                            <li>
                                                <span class="property"><i
                                                        class="fas fa-info-circle"></i> New Password:</span>
                                                <input type="text" class="value" name="password" placeholder="Enter to change password"/>
                                            </li>
                                            <li>
                                                <span class="property"><i class="fas fa-info-circle"></i> Email Address :</span>
                                                <input type="text" class="value" name="email"
                                                       value="{{ Auth::user()->email }}"/>
                                            </li>
                                            <li>
                                                <span class="property"><i class="fas fa-info-circle"></i> Phone Numbers :</span>
                                                <input type="text" class="value" name="phone_number"
                                                       value="{{ Auth::user()->profile->phone_number }}"/>
                                            </li>
                                            <li>
                                                <span class="property"><i class="fas fa-info-circle"></i> Address Line1 :</span>
                                                <input type="text" class="value" name="address_line1" required
                                                       value="{{ Auth::user()->profile->address_line1 }}"/>
                                            </li>
                                            <li>
                                                <span class="property"><i class="fas fa-info-circle"></i> Address Line2 :</span>
                                                <input type="text" class="value" name="address_line2" required
                                                       value="{{ Auth::user()->profile->address_line2 }}"/>
                                            </li>
                                            <li>
                                                <span class="property"><i class="fas fa-info-circle"></i> Upload Image :</span>
                                                <input type="file" class="value" name="image"/>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="edit-profile text-center">
                            <button type="submit" class="edit-button">Edit Profile</button>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="payment-info" role="tabpanel" aria-labelledby="payment-info-tab">
                    <form method="post" action="{{ url('editPaymentProfile') }}">
                        @csrf
                        <div class="user-panel-title">
                            <h3>Payment Info</h3>
                        </div>

                        <div class="payment-info">
                            <div class="responsive border" style="padding:10px">
                                <div class="form-group row">
                                    <label for="bankName" class="col-sm-4 col-form-label">Preferred Bank Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" required class="form-control" id="bankName" placeholder="Bank Name" name="preferred_bank_name" value="{{ (Auth::user()->paymentProfile)?Crypt::decrypt(Auth::user()->paymentProfile->preferred_bank_name):'' }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="accountName" class="col-sm-4 col-form-label">Preferred Bank Account Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly required class="form-control-plaintext" id="accountName" placeholder="Bank Account Name" name="preferred_bank_account_name" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="accountNumber" class="col-sm-4 col-form-label">Preferred Bank Account Number</label>
                                    <div class="col-sm-8">
                                        <input type="number" required class="form-control" id="accountNumber" name="preferred_bank_account_number"
                                               placeholder="Bank Account Number" value="{{ (Auth::user()->paymentProfile)?Crypt::decrypt(Auth::user()->paymentProfile->preferred_bank_account_number):'' }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="meansOfIdentification" class="col-sm-4 col-form-label">Means of Identification</label>
                                    <div class="col-sm-8">
                                        <select name="means_of_identification" id="meansOfIdentification" required class="form-control">
                                            <option>Select One</option>
                                            <option {{ (Auth::user()->paymentProfile && Auth::user()->paymentProfile->means_of_identification=='Driving License')?'selected':'' }}>Driving License</option>
                                            <option {{ (Auth::user()->paymentProfile && Auth::user()->paymentProfile->means_of_identification=='International Passport')?'selected':'' }}>International Passport</option>
                                            <option {{ (Auth::user()->paymentProfile && Auth::user()->paymentProfile->means_of_identification=='National Id')?'selected':'' }}>National Id</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="idCardNumber" class="col-sm-4 col-form-label">ID Card Number</label>
                                    <div class="col-sm-8">
                                        <input type="text" required class="form-control" id="idCardNumber" name="id_card_number"
                                               placeholder="ID Card Number" value="{{ (Auth::user()->paymentProfile)?Crypt::decrypt(Auth::user()->paymentProfile->id_card_number):'' }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="expiryDate" class="col-sm-4 col-form-label">ID Expiry Date</label>
                                    <div class="col-sm-8">
                                        <input type="date" required class="form-control" id="expiryDate" name="id_expiry_date"
                                               placeholder="ID Expiry Date" value="{{ (Auth::user()->paymentProfile)?Crypt::decrypt(Auth::user()->paymentProfile->id_expiry_date):'' }}" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4">&nbsp;</label>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection


@section('styles')
    <style type="text/css">

    </style>
@endsection

@section('scripts')

@endsection
