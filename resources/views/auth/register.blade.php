@extends('layouts.base')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Register To Play</li>
@endsection
@section('body')
    <!-- register begin-->
    <div class="form style-2">
        <div class="container">
            <!--<div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="section-title text-center">
                        <h2>Register To Play</h2>
                    </div>
                </div>
            </div>-->
            @if ($errors->any())
                <ul style="color:red;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <form method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="InputFirstname">First Name<span class="required">*</span></label>
                                    <input type="text" name="first_name" class="form-control" id="InputFirstname" placeholder="Enter Your First Name"
                                           required value="{{ old('first_name') }}">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="InputLastname">Last Name<span class="required">*</span></label>
                                    <input type="text" name="last_name" class="form-control" id="InputLastname" placeholder="Enter Your Last Name"
                                           required value="{{ old('last_name') }}">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="InputMail">E-mail<span class="required">*</span></label>
                                    <input type="email" name="email" class="form-control" id="InputMail" placeholder="Enter Your E-mail"
                                           required value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="InputUsername">User Name<span class="required">*</span></label>
                                    <input type="text" name="username" class="form-control" id="InputUsername" placeholder="Enter Your Username"
                                           required value="{{ old('username') }}">
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="InputPassword">Password<span class="required">*</span></label>
                                    <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Enter Your Password"
                                           required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="InputRetypepassword">Re-type Password<span class="required">*</span></label>
                                    <input type="password" name="password_confirmation" class="form-control" id="InputRetypepassword" placeholder="Re-type Password"
                                           required>
                                </div>
                            </div>

                            <!--<div class="col-xl-12 col-lg-12">
                                <fieldset class="form-group fieldset">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                                           value="option1" checked>
                                                    <label class="form-check-label" for="gridRadios1">
                                                        Bitcoin
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                                           value="option2">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Perfect Money
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                                           value="option3">
                                                    <label class="form-check-label" for="gridRadios3">
                                                        Payoneer
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4"
                                                           value="option3">
                                                    <label class="form-check-label" for="gridRadios4">
                                                        Paypal
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios5"
                                                           value="option3">
                                                    <label class="form-check-label" for="gridRadios5">
                                                        Payza
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios6"
                                                           value="option3">
                                                    <label class="form-check-label" for="gridRadios6">
                                                        Others
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="InputAccount">Enter Account<span class="required">*</span></label>
                                    <input type="text" class="form-control" id="InputAccount" placeholder="Enter Your Account"
                                           required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="InputAccount">Select<span class="required">*</span></label>
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>Select</option>
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="InputSecurity">Security Answer<span class="required">*</span></label>
                                    <input type="text" class="form-control" id="InputSecurity" placeholder="Enter Your Account"
                                           required>
                                </div>
                            </div>-->
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="InputAddress1">Address Line 1<span class="required">*</span></label>
                                    <input type="text" name="address_line1" class="form-control" id="InputAddress1" placeholder="Enter Your Address"
                                           required value="{{ old('address_line1') }}" >
                                    @error('address_line1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="InputAddress2">Address Line 2</label>
                                    <input type="text" name="address_line2" class="form-control" id="InputAddress2" placeholder="Enter Your Address Line 2" value="{{ old('address_line2') }}">
                                    @error('address_line2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="InputPassword">Date of Birth<span class="required">*</span></label>
                                    <input type="date" name="date_of_birth" class="form-control" id="InputPassword" placeholder="Enter Your Date of Birth"
                                           required value="{{ old('date_of_birth') }}" >
                                    @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="InputPhoneNumber">Phone Number<span class="required">*</span></label>
                                    <input type="text" name="phone_number" class="form-control" id="InputPhoneNumber" placeholder="Enter Your Phone Number"
                                           required value="{{ old('phone_number') }}">
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group mb-0 checkbox">
                                    <div class="form-check pl-0">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1" required>
                                        <label class="form-check-label" for="gridCheck1">
                                            I agree the terms & conditions
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <button type="submit" class="submit-button">Register</button>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <a class="forgetting-password" href="{{ url('login') }}">Already registered? Click to Login</a>
                                    </div>
                                </div>
                                <!--<button type="submit" class="submit-button">Submit Now</button>
                                <span class="forgetting-password">Already registered? <a href="{{ url('login') }}">Click to Login</a></span>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- register end -->
@endsection
