<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="UA Special Deal" />
    <title>Urban Athletes - Free Trial</title>
    <link rel="icon" href="{{ URL::asset('image/promo/special-deal/Logo-UA.png') }}">
    <link rel="stylesheet" href="{{ URL::asset('specialdeal/css/bootstrap/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('specialdeal/css/style-form.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('specialdeal/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('specialdeal/font-awesome/all.css') }}">
    <script src="{{ URL::asset('specialdeal/vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <img src="{{ URL::asset('image/promo/special-deal/Logo-UA.png') }}" alt="" class="img-logo">
                        <h1 class="header-1">GET FREE TRIAL!!</h1>
                        <p class="detail-1">
                            Mulailah fitness journey Anda dengan cara klaim voucher Free Trial di Urban Athletes! <br>
                            Nikmati puluhan jenis kelas setiap minggunya dan rasakan pengalaman fitness dengan fasilitas premium. <br>
                            Klaim voucher sekarang!
                        </p>
                    </div>
                    <div class="col-sm-5">
                        <div class="signup-content">

                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                Session::forget('success');
                                @endphp
                            </div>
                            @endif

                            <!-- Way 1: Display All Error Messages -->
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form method="POST" id="signup-form" class="signup-form">
                                {{ csrf_field() }}
                                <h2 class="form-title" style="text-align: left;">NIKMATI FREE TRIAL ANDA SEKARANG JUGA!!!</h2>
                                <div class="form-group">
                                    <label for="full_name" class="normal" style="font-weight: 600;margin-left: 5px;">Nama Lengkap<span style="color:red;"> *</span></label>
                                    <input type="text" class="form-input" name="name" id="name" placeholder="" required />
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email" class="normal" style="font-weight: 600;margin-left: 5px;">Email<span style="color:red;"> *</span></label>
                                    <input type="email" class="form-input" name="email" id="email" placeholder="" required />
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="normal" style="font-weight: 600;margin-left: 5px;">No Handphone<span style="color:red;"> *</span></label>
                                    <input type="text" class="form-input number" name="phone" id="phone" placeholder="" required />
                                    @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="club_id" class="normal" style="font-weight: 600;margin-left: 5px;">Club yang dipilih<span style="color:red;"> *</span></label>
                                    <select class="form-select" id="club_id" name="club_id" data-placeholder="Pilih club">
                                        <?php foreach ($club as $r => $v) { ?>
                                            <option value="{{ $v->id }}" <?= ($v->is_active == 0 ? "disabled" : "") ?>>
                                                {{ $v->name }} <?= ($v->is_active == 0 ? "<p style='text-align:right;font-color:red;font-size:10px;'>(Coming Soon)</p>" : "") ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="time_call" class="normal" style="font-weight: 600;margin-left: 5px;">Pilih waktu untuk dihubungi<span style="color:red;"> *</span></label>
                                    <input style="display:none;" type="text" class="form-input" name="time_call" id="time_call" placeholder="" />
                                    <div class="row">
                                        <div class="col-sm-4" style="text-align: center;">
                                            <button onclick="selectTime(this)" value="pagi" class="btn-time" type="button" style="width:100%;border-radius: 15px;background-color: white;height: 40px;">Pagi</button>
                                        </div>
                                        <div class="col-sm-4" style="text-align: center;">
                                            <button onclick="selectTime(this)" value="siang" class="btn-time" type="button" style="width:100%;border-radius: 15px;background-color: white;height: 40px;">Siang</button>
                                        </div>
                                        <div class="col-sm-4" style="text-align: center;">
                                            <button onclick="selectTime(this)" value="malam" class="btn-time" type="button" style="width:100%;border-radius: 15px;background-color: white;height: 40px;">Malam</button>
                                        </div>
                                    </div>
                                    @if ($errors->has('time_call'))
                                    <span class="text-danger">{{ $errors->first('time_call') }}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="checkbox" name="checkbox" id="agree-term" class="agree-term" />
                                    <label for="agree-term" class="label-agree-term"><span><span></span></span>Saya telah membaca dan menyetujui <a href="#" class="term-service">Syarat Ketentuan</a> Berlaku</label>
                                    <br>
                                    @if ($errors->has('checkbox'))
                                    <span class="text-danger">{{ $errors->first('checkbox') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="button" name="benefit" id="benefit" class="button-benefit" value="Member Benefit" />
                                    <input type="submit" name="submit" id="submit" class="form-submit" value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>

    <script>
        $(".button-benefit").click(function() {
            Swal.fire({
                html: '<p class="header-rule-1">Member Benefit Urban Athletes :</p>' +
                    '<div class="row d-flex justify-content-center">' +
                    ' <div class="col-lg-2 col-md-6"><img src="specialdeal/img/benefit-1.png" class="img-fluid" loading="lazy"><p class="benefit-font">Gratis akses puluhan jenis exersice</p></div>' +
                    ' <div class="col-lg-2 col-md-6"><img src="specialdeal/img/benefit-2.png" class="img-fluid" loading="lazy"><p class="benefit-font">Gratis fasilitas sauna untuk Urban Athletes Lenmarc</p></div>' +
                    ' <div class="col-lg-2 col-md-6"><img src="specialdeal/img/benefit-3.png" class="img-fluid" loading="lazy"><p class="benefit-font">Gratis fasilitas kolam renang untuk Urban Athletes Gunawangsa Merr dan Tidar</p></div>' +
                    ' <div class="col-lg-2 col-md-6"><img src="specialdeal/img/benefit-4.png" class="img-fluid" loading="lazy"><p class="benefit-font">Gratis cek komposisi tubuh dan konsultasi dengan Personal Trainer</p></div>' +
                    ' <div class="col-lg-2 col-md-6"><img src="specialdeal/img/benefit-5.png" class="img-fluid" loading="lazy"><p class="benefit-font">Gratis 1x (satu kali) kelas The Valor</p></div>' +
                    '</div>',
                customClass: 'swal-wide',
                showCloseButton: true,
                showConfirmButton: false,
            })
        });

        $(".term-service").click(function() {
            Swal.fire({
                html: '<p class="header-rule-1">Syarat dan ketentuan Free Trial :</p>' +
                    '<table class="table-responsive table-rule"><tbody> ' +
                    '<tr><td style="vertical-align: top;">1</td><td>Free trial di tujukan untuk non-member yang belum pernah menjadi member dan atau belum pernah melakukan free trial sebelumnya dalam waktu 6 bulan kebelakang.</td></tr>' +
                    '<tr><td style="vertical-align: top;">2</td><td>Wajib membawa ID Card (KTP/Paspor/SIM/Kartu Pelajar/Kartu Keluarga) sebagi tanda pengenal saat akan melakukan aktivasi.</td></tr>' +
                    '<tr><td style="vertical-align: top;">3</td><td>Free trial tidak bisa di uangkan dalam bentuk apapun.</td></tr>' +
                    '<tr><td style="vertical-align: top;">4</td><td>Berlaku untuk usia minimal 18 tahun keatas.</td></tr>' +
                    '<tr><td style="vertical-align: top;">5</td><td>Free trial harus di gunakan secara berturut-turut.</td></tr>' +
                    '<tr><td style="vertical-align: top;">6</td><td>Free trial tidak bisa di pindah tangankan.</td></tr>' +
                    '<tr><td style="vertical-align: top;">7</td><td>Wajib membawa kunci loker dan handuk sendiri serta mengenakan pakaian olahraga lengkap.</td></tr>' +
                    '</tbody></table>',
                showCloseButton: true,
                showConfirmButton: false,
            })
        });

        function selectTime(elem) {
            var value = elem.getAttribute('value');
            $('.btn-time').removeClass("btn-active");
            if ($(elem).hasClass("btn-active")) {
                $(elem).removeClass("btn-active");
            } else {
                $(elem).addClass("btn-active");
                $('#time_call').val(value);
            }
        }

        $(':input[type="submit"]').prop('disabled', true);

        $(".agree-term").change(function() {
            if ($('#agree-term').is(':checked')) {
                $(':input[type="submit"]').prop('disabled', false);
            } else {
                $(':input[type="submit"]').prop('disabled', true);
            }
        });

        (function($) {
            $.fn.inputFilter = function(inputFilter) {
                return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
                    if (inputFilter(this.value)) {
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                        this.value = this.oldValue;
                        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                    } else {
                        this.value = "";
                    }
                });
            };
        }(jQuery));
        $(document).ready(function() {
            $(".number").inputFilter(function(value) {
                return /^\d*$/.test(value); // Allow digits only, using a RegExp
            });
        });
    </script>

    <script src="{{ URL::asset('specialdeal/js/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('specialdeal/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('specialdeal/vendor/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ URL::asset('specialdeal/js/main.js') }}"></script>
    <script src="{{ URL::asset('specialdeal/font-awesome/all.js') }}"></script>
    <script>
        // Page loading animation
        $(window).on('load', function() {
            $('#js-preloader').addClass('loaded');
        });
    </script>
</body>

</html>