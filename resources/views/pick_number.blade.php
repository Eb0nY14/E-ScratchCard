@extends('layouts.base')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Pick Number for entry</li>
@endsection
@section('body')
    <form method="post" action="{{ url('cart') }}">
        @csrf
        <input type="hidden" name="draw_id" value="{{ $draw->id }}" />
    <div class="lottery-details">
        <div class="container">
            <div class="lottery-details-area">
                <div class="lotto-head">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 baltus">
                            <div class="icon">
                                <img src="{{ asset($draw->lottery->lottery_logo) }}" alt="">
                            </div>
                            <div class="text">
                                <h3>{{ $draw->lottery->lottery_name }}</h3>
                                <span class="amount">${{ $draw->jackpot_amount }}</span>
                                <span class="draw-date">Next Draw : {{ $draw->draw_date }}</span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 d-xl-flex d-lg-flex d-md-flex d-block align-items-center">
                            <div class="control-buttons">
                                <button type="submit" class="quick-play">Quick PIck All</button>
                                <button type="submit" class="circle add"><i class="fas fa-plus"></i></button>
                                <button type="submit" class="circle remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lottery-coupon">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-coupon">
                                <div class="coupon-head">
                                    <h3 class="title">Pick 05 Numbers</h3>
                                    <div class="buttons">
                                        <button class="seed-btn" type="submit" data-lotto="1" value="Generate numbers">Quick
                                            Pick
                                        </button>
                                        <button class="btn-clear">Clear All</button>
                                    </div>
                                </div>
                                <div class="pic-keys">
                                    <div class="pic-num main">
                                        <span data-value="1">1</span>
                                        <span data-value="2">2</span>
                                        <span data-value="3">3</span>
                                        <span data-value="4">4</span>
                                        <span data-value="5">5</span>
                                        <span data-value="6">6</span>

                                        <span data-value="7">7</span>
                                        <span data-value="8">8</span>
                                        <span data-value="9">9</span>
                                        <span data-value="10">10</span>
                                        <span data-value="11">11</span>
                                        <span data-value="12">12</span>

                                        <span data-value="13">13</span>
                                        <span data-value="14">14</span>
                                        <span data-value="15">15</span>
                                        <span data-value="16">16</span>
                                        <span data-value="17">17</span>
                                        <span data-value="18">18</span>


                                        <span data-value="19">19</span>
                                        <span data-value="20">20</span>
                                        <span data-value="21">21</span>
                                        <span data-value="22">22</span>
                                        <span data-value="23">23</span>
                                        <span data-value="24">24</span>

                                        <span data-value="25">25</span>
                                        <span data-value="26">26</span>
                                        <span data-value="27">27</span>
                                        <span data-value="28">28</span>
                                        <span data-value="29">29</span>
                                        <span data-value="30">30</span>

                                        <span data-value="31">31</span>
                                        <span data-value="32">32</span>
                                        <span data-value="33">33</span>
                                        <span data-value="34">34</span>
                                        <span data-value="35">35</span>
                                        <span data-value="36">36</span>


                                        <span data-value="37">37</span>
                                        <span data-value="38">38</span>
                                        <span data-value="39">39</span>
                                        <span data-value="40">40</span>
                                        <span data-value="41">41</span>
                                        <span data-value="42">42</span>

                                        <span data-value="43">43</span>
                                        <span data-value="44">44</span>
                                        <span data-value="45">45</span>
                                        <span data-value="46">46</span>
                                        <span data-value="47">47</span>
                                        <span data-value="48">48</span>

                                        <span data-value="49">49</span>
                                        <span data-value="50">50</span>
                                        <span data-value="51">51</span>
                                        <span data-value="52">52</span>
                                        <span data-value="53">53</span>
                                        <span data-value="54">54</span>
                                    </div>
                                    <div class="pic-num bonus">
                                        <!-- <h4 class="pic-bonus-title">Pick 01 Bonus Numbers</h4> -->
                                        <span data-value="1">1</span>
                                        <span data-value="2">2</span>
                                        <span data-value="3">3</span>
                                        <span data-value="4">4</span>
                                        <span data-value="5">5</span>
                                        <span data-value="6">6</span>

                                        <span data-value="7">7</span>
                                        <span data-value="8">8</span>
                                        <span data-value="9">9</span>
                                        <span data-value="10">10</span>
                                        <span data-value="11">11</span>
                                        <span data-value="12">12</span>
                                    </div>
                                </div>
                                <div class="selected-items">
                                    <span class="title">Selected Numbers:</span>
                                    <span class="rdm-seed-45"></span>
                                    <span class="rdm-seed-20"></span>
                                </div>
                                <div style="text-align: center;">
                                    <input type="checkbox" name="card[]" class="scard" value=""> Select card
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-coupon">
                                <div class="coupon-head">
                                    <h3 class="title">Pick 05 Numbers</h3>
                                    <div class="buttons">
                                        <button class="seed-btn" type="submit" data-lotto="2" value="Generate numbers">Quick
                                            Pick
                                        </button>
                                        <button class="btn-clear">Clear All</button>
                                    </div>
                                </div>
                                <div class="pic-keys">
                                    <div class="pic-num main">
                                        <span data-value="1">1</span>
                                        <span data-value="2">2</span>
                                        <span data-value="3">3</span>
                                        <span data-value="4">4</span>
                                        <span data-value="5">5</span>
                                        <span data-value="6">6</span>

                                        <span data-value="7">7</span>
                                        <span data-value="8">8</span>
                                        <span data-value="9">9</span>
                                        <span data-value="10">10</span>
                                        <span data-value="11">11</span>
                                        <span data-value="12">12</span>

                                        <span data-value="13">13</span>
                                        <span data-value="14">14</span>
                                        <span data-value="15">15</span>
                                        <span data-value="16">16</span>
                                        <span data-value="17">17</span>
                                        <span data-value="18">18</span>


                                        <span data-value="19">19</span>
                                        <span data-value="20">20</span>
                                        <span data-value="21">21</span>
                                        <span data-value="22">22</span>
                                        <span data-value="23">23</span>
                                        <span data-value="24">24</span>

                                        <span data-value="25">25</span>
                                        <span data-value="26">26</span>
                                        <span data-value="27">27</span>
                                        <span data-value="28">28</span>
                                        <span data-value="29">29</span>
                                        <span data-value="30">30</span>

                                        <span data-value="31">31</span>
                                        <span data-value="32">32</span>
                                        <span data-value="33">33</span>
                                        <span data-value="34">34</span>
                                        <span data-value="35">35</span>
                                        <span data-value="36">36</span>


                                        <span data-value="37">37</span>
                                        <span data-value="38">38</span>
                                        <span data-value="39">39</span>
                                        <span data-value="40">40</span>
                                        <span data-value="41">41</span>
                                        <span data-value="42">42</span>

                                        <span data-value="43">43</span>
                                        <span data-value="44">44</span>
                                        <span data-value="45">45</span>
                                        <span data-value="46">46</span>
                                        <span data-value="47">47</span>
                                        <span data-value="48">48</span>

                                        <span data-value="49">49</span>
                                        <span data-value="50">50</span>
                                        <span data-value="51">51</span>
                                        <span data-value="52">52</span>
                                        <span data-value="53">53</span>
                                        <span data-value="54">54</span>
                                    </div>
                                    <div class="pic-num bonus">
                                        <!-- <h4 class="pic-bonus-title">Pick 01 Bonus Numbers</h4> -->
                                        <span data-value="1">1</span>
                                        <span data-value="2">2</span>
                                        <span data-value="3">3</span>
                                        <span data-value="4">4</span>
                                        <span data-value="5">5</span>
                                        <span data-value="6">6</span>

                                        <span data-value="7">7</span>
                                        <span data-value="8">8</span>
                                        <span data-value="9">9</span>
                                        <span data-value="10">10</span>
                                        <span data-value="11">11</span>
                                        <span data-value="12">12</span>
                                    </div>
                                </div>
                                <div class="selected-items">
                                    <span class="title">Selected Numbers:</span>
                                    <span class="rdm-seed-45"></span>
                                    <span class="rdm-seed-20"></span>
                                </div>
                                <div style="text-align: center;">
                                    <input type="checkbox" name="card[]" class="scard" value=""> Select card
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-coupon">
                                <div class="coupon-head">
                                    <h3 class="title">Pick 05 Numbers</h3>
                                    <div class="buttons">
                                        <button class="seed-btn" type="submit" data-lotto="3" value="Generate numbers">Quick
                                            Pick
                                        </button>
                                        <button class="btn-clear">Clear All</button>
                                    </div>
                                </div>
                                <div class="pic-keys">
                                    <div class="pic-num main">
                                        <span data-value="1">1</span>
                                        <span data-value="2">2</span>
                                        <span data-value="3">3</span>
                                        <span data-value="4">4</span>
                                        <span data-value="5">5</span>
                                        <span data-value="6">6</span>

                                        <span data-value="7">7</span>
                                        <span data-value="8">8</span>
                                        <span data-value="9">9</span>
                                        <span data-value="10">10</span>
                                        <span data-value="11">11</span>
                                        <span data-value="12">12</span>

                                        <span data-value="13">13</span>
                                        <span data-value="14">14</span>
                                        <span data-value="15">15</span>
                                        <span data-value="16">16</span>
                                        <span data-value="17">17</span>
                                        <span data-value="18">18</span>


                                        <span data-value="19">19</span>
                                        <span data-value="20">20</span>
                                        <span data-value="21">21</span>
                                        <span data-value="22">22</span>
                                        <span data-value="23">23</span>
                                        <span data-value="24">24</span>

                                        <span data-value="25">25</span>
                                        <span data-value="26">26</span>
                                        <span data-value="27">27</span>
                                        <span data-value="28">28</span>
                                        <span data-value="29">29</span>
                                        <span data-value="30">30</span>

                                        <span data-value="31">31</span>
                                        <span data-value="32">32</span>
                                        <span data-value="33">33</span>
                                        <span data-value="34">34</span>
                                        <span data-value="35">35</span>
                                        <span data-value="36">36</span>


                                        <span data-value="37">37</span>
                                        <span data-value="38">38</span>
                                        <span data-value="39">39</span>
                                        <span data-value="40">40</span>
                                        <span data-value="41">41</span>
                                        <span data-value="42">42</span>

                                        <span data-value="43">43</span>
                                        <span data-value="44">44</span>
                                        <span data-value="45">45</span>
                                        <span data-value="46">46</span>
                                        <span data-value="47">47</span>
                                        <span data-value="48">48</span>

                                        <span data-value="49">49</span>
                                        <span data-value="50">50</span>
                                        <span data-value="51">51</span>
                                        <span data-value="52">52</span>
                                        <span data-value="53">53</span>
                                        <span data-value="54">54</span>
                                    </div>
                                    <div class="pic-num bonus">
                                        <!-- <h4 class="pic-bonus-title">Pick 01 Bonus Numbers</h4> -->
                                        <span data-value="1">1</span>
                                        <span data-value="2">2</span>
                                        <span data-value="3">3</span>
                                        <span data-value="4">4</span>
                                        <span data-value="5">5</span>
                                        <span data-value="6">6</span>

                                        <span data-value="7">7</span>
                                        <span data-value="8">8</span>
                                        <span data-value="9">9</span>
                                        <span data-value="10">10</span>
                                        <span data-value="11">11</span>
                                        <span data-value="12">12</span>
                                    </div>
                                </div>
                                <div class="selected-items">
                                    <span class="title">Selected Numbers:</span>
                                    <span class="rdm-seed-45"></span>
                                    <span class="rdm-seed-20"></span>
                                </div>
                                <div style="text-align: center;">
                                    <input type="checkbox" name="card[]" class="scard" value=""> Select card
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-coupon">
                                <div class="coupon-head">
                                    <h3 class="title">Pick 05 Numbers</h3>
                                    <div class="buttons">
                                        <button class="seed-btn" type="submit" data-lotto="4" value="Generate numbers">Quick
                                            Pick
                                        </button>
                                        <button class="btn-clear">Clear All</button>
                                    </div>
                                </div>
                                <div class="pic-keys">
                                    <div class="pic-num main">
                                        <span data-value="1">1</span>
                                        <span data-value="2">2</span>
                                        <span data-value="3">3</span>
                                        <span data-value="4">4</span>
                                        <span data-value="5">5</span>
                                        <span data-value="6">6</span>

                                        <span data-value="7">7</span>
                                        <span data-value="8">8</span>
                                        <span data-value="9">9</span>
                                        <span data-value="10">10</span>
                                        <span data-value="11">11</span>
                                        <span data-value="12">12</span>

                                        <span data-value="13">13</span>
                                        <span data-value="14">14</span>
                                        <span data-value="15">15</span>
                                        <span data-value="16">16</span>
                                        <span data-value="17">17</span>
                                        <span data-value="18">18</span>


                                        <span data-value="19">19</span>
                                        <span data-value="20">20</span>
                                        <span data-value="21">21</span>
                                        <span data-value="22">22</span>
                                        <span data-value="23">23</span>
                                        <span data-value="24">24</span>

                                        <span data-value="25">25</span>
                                        <span data-value="26">26</span>
                                        <span data-value="27">27</span>
                                        <span data-value="28">28</span>
                                        <span data-value="29">29</span>
                                        <span data-value="30">30</span>

                                        <span data-value="31">31</span>
                                        <span data-value="32">32</span>
                                        <span data-value="33">33</span>
                                        <span data-value="34">34</span>
                                        <span data-value="35">35</span>
                                        <span data-value="36">36</span>


                                        <span data-value="37">37</span>
                                        <span data-value="38">38</span>
                                        <span data-value="39">39</span>
                                        <span data-value="40">40</span>
                                        <span data-value="41">41</span>
                                        <span data-value="42">42</span>

                                        <span data-value="43">43</span>
                                        <span data-value="44">44</span>
                                        <span data-value="45">45</span>
                                        <span data-value="46">46</span>
                                        <span data-value="47">47</span>
                                        <span data-value="48">48</span>

                                        <span data-value="49">49</span>
                                        <span data-value="50">50</span>
                                        <span data-value="51">51</span>
                                        <span data-value="52">52</span>
                                        <span data-value="53">53</span>
                                        <span data-value="54">54</span>
                                    </div>
                                    <div class="pic-num bonus">
                                        <!-- <h4 class="pic-bonus-title">Pick 01 Bonus Numbers</h4> -->
                                        <span data-value="1">1</span>
                                        <span data-value="2">2</span>
                                        <span data-value="3">3</span>
                                        <span data-value="4">4</span>
                                        <span data-value="5">5</span>
                                        <span data-value="6">6</span>

                                        <span data-value="7">7</span>
                                        <span data-value="8">8</span>
                                        <span data-value="9">9</span>
                                        <span data-value="10">10</span>
                                        <span data-value="11">11</span>
                                        <span data-value="12">12</span>
                                    </div>
                                </div>
                                <div class="selected-items">
                                    <span class="title">Selected Numbers:</span>
                                    <span class="rdm-seed-45"></span>
                                    <span class="rdm-seed-20"></span>
                                </div>
                                <div style="text-align: center;">
                                    <input type="checkbox" name="card[]" class="scard" value=""> Select card
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="coupon-panel">
                                <div class="row justify-content-between">
                                    <div class="col-xl-5 col-lg-5 d-xl-flex d-lg-flex d-block align-items-center">
                                        <div class="winning-chance">
                                            <h5 class="title">Winning Chances</h5>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="amount-discuss">
                                            <div class="left">
                                                <ul>
                                                    <li>
                                                        <span class="text">Number of scratchcards :</span>
                                                        <span class="details number_of_cards"> </span>
                                                    </li>
                                                    <li>
                                                        <span class="text">Cost per scratchcard :</span>
                                                        <span class="details unitcost" cost="2.5"> $2.50</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="right">
                                                $<input type="text" placeholder="0.00" name="total" id="total" readonly>
                                                <button type="submit">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- lottery details end -->
    </form>
@endsection

@section('scripts')
    <!-- pick number js -->
    <script src="{{ asset('assets/js/pick-number.js') }}"></script>
    <script type="text/javascript">
        $('.scard').click(function(){
            if($(this).prop("checked") == true){
                //let selected_items = $(this).parent('.single-coupon').css( "background", "yellow" );
                let par = $(this).closest('.single-coupon');
                let marked = $(par).find('.marked');
                let card ="";
                marked.each(function(index, elem){
                    card += elem.innerHTML + ",";
                })
                $(this).val(card);

                console.log("card => "+card);
                countSelectedCards();
                //console.log("Checkbox is checked.");
            }
            else if($(this).prop("checked") == false){
                $(this).val('');
                countSelectedCards();
                //console.log("Checkbox is unchecked.");

            }
        });
        function countSelectedCards(){
            let count = 0;
            $('.scard').each(function(){
                console.log('element value => '+$(this).val());
                if($(this).val() !==''){
                    count++;
                }
            });
            $('.number_of_cards').text(count);
            let unitcost = $('.unitcost').attr('cost');
            let total = parseFloat(unitcost)*count;
            $('#total').val(total);
            $('#total').attr('placeholder','$'+total);
            //console.log('unit cost => '+unitcostel);
        }
    </script>
@endsection
