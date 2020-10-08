<div class="d-test-drive">

    <div class="d-test-drive-section">

        <div class="d-test-drive-form-content">
            <h3 class="d-test-drive-form-header">{!! trans('index_lang.test_drive_title') !!}</h3>

            <form method="POST" action="{{route('submit-test-drive-email', app()->getLocale())}}" class="needs-validation w-100" novalidate>
                @csrf
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01"><span style="font-family: phetsarath_ot;">ຊື່ </span> <span style="font-family: Arial;">(Name)</span> <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Enter Name" required>
                        <div class="valid-feedback">
                            <span style="font-family: Arial;">Looks good!</span>
                        </div>
                        <div class="invalid-feedback">
                            <span style="font-family: Arial;">This field is required.</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02"><span style="font-family: phetsarath_ot;">ນາມສະກຸນ</span> <span style="font-family: Arial;">(Surname)</span> <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="validationCustom02" name="surname" placeholder="Enter Surname" required>
                        <div class="valid-feedback">
                            <span style="font-family: Arial;">Looks good!</span>
                        </div>
                        <div class="invalid-feedback">
                            <span style="font-family: Arial;">This field is required.</span>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03"><span style="font-family: phetsarath_ot;">ເບີໂທ</span> <span style="font-family: Arial;">(Tel)</span> <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" id="validationCustom03" name="tel" placeholder="091 234 567" required>
                        <div class="valid-feedback">
                            <span style="font-family: Arial;">Looks good!</span>
                        </div>
                        <div class="invalid-feedback">
                            <span style="font-family: Arial;">This field is required.</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom04"><span style="font-family: phetsarath_ot;">ອີເມວ</span> <span style="font-family: Arial;">(E-Mail)</span> <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="email" id="validationCustom04" required>
                        <div class="valid-feedback">
                            <span style="font-family: Arial;">Looks good!</span>
                        </div>
                        <div class="invalid-feedback">
                            <span style="font-family: Arial;">This field is required.</span>
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label for="validationCustom05"><span style="font-family: phetsarath_ot;">ລົດທີ່ຕ້ອງການທົດລອງຂັບ</span> <span style="font-family: Arial;">(Cars that want to test drive)</span> <span class="text-danger">*</span></label>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="dcheckbox1[]" checked value="ລຸ້ນໃໝ່ ອີຊູຊຸດີແມັກ (All-New ISUZU D-MAX)" id="checkbox_one" required>
                                <label class="form-check-label" for="checkbox_one">
                                    <span style="font-family: phetsarath_ot;">ລຸ້ນໃໝ່ ອີຊູຊຸດີແມັກ</span> <span style="font-family: Arial;">(All-New ISUZU D-MAX)</span>
                                </label>
                                <div class="invalid-feedback">
                                    <span style="font-family: Arial;">You must select one of the options!</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="dcheckbox1[]" value="ອີຊຸຊຸ ມິວເອັກ ບລູພາວເວີ (ISUZU MU-X BLUE POWER)" id="checkbox_two" required>
                                <label class="form-check-label" for="checkbox_two">
                                    <span style="font-family: phetsarath_ot;">ອີຊຸຊຸ ມິວເອັກ ບລູພາວເວີ </span> <span style="font-family: Arial;">(ISUZU MU-X BLUE POWER)</span>
                                </label>
                                <div class="invalid-feedback">
                                    <span style="font-family: Arial;">You must select one of the options!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="validationCustom05"><span style="font-family: phetsarath_ot;">ໂຊຣູມອີຊູຊຸທີ່ທ່ານສະດວກທົດລອງຂັບ</span> <span style="font-family: Arial;">(Any Isuzu showrooms at your convenience)</span> <span class="text-danger">*</span></label>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dradio" checked value="ສຳນັກງານໃຫຍ່ນະຄອນຫຼວງວຽງຈັນ ຫຼັກ 8 ຖະໜົນຫຼວງພະບາງ (13 ເໜືອ), ບ້ານ ນາເລົ່າ (ເຂດທົ່ງປົ່ງ), ເມືອງ ສີໂຄດຕະບອງ, ນະຄອນຫຼວງວຽງຈັນ (8 km Luangprabang Rd (13N), Ban Nalao (Thong Pong Area), Sikhottabong District, Vientiane Capital)" id="radio_one" required>
                                <label class="form-check-label" for="radio_one">
                                    <span style="font-family: phetsarath_ot;">ສຳນັກງານໃຫຍ່ນະຄອນຫຼວງວຽງຈັນ ຫຼັກ 8 ຖະໜົນຫຼວງພະບາງ (13 ເໜືອ), ບ້ານ ນາເລົ່າ (ເຂດທົ່ງປົ່ງ), ເມືອງ ສີໂຄດຕະບອງ, ນະຄອນຫຼວງວຽງຈັນ</span> <span style="font-family: Arial;">(8 km Luangprabang Rd (13N), Ban Nalao (Thong Pong Area), Sikhottabong District, Vientiane Capital)</span>
                                </label>
                                <div class="invalid-feedback">
                                    <span style="font-family: Arial;">You must select one of the options!</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dradio" value="ສຳນັກງານໃຫ່ຍນະຄອນຫຼວງວຽງຈັນ 307 ຖະໜົນອາຊຽນ (ເຕ 2), ບ້ານໜອງດ້ວງເໜືອ, ເມືອງສີໂຄດຕະບອງ, ນະຄອນຫຼວງວຽງຈັນ (VIENTIANE CAPITAL: 307 Asean (T2) Road, Ban Nongduang Neua, Sikhottabong, Vientiane Capital)" id="radio_two" required>
                                <label class="form-check-label" for="radio_two">
                                    <span style="font-family: phetsarath_ot;">ສຳນັກງານໃຫ່ຍນະຄອນຫຼວງວຽງຈັນ 307 ຖະໜົນອາຊຽນ (ເຕ 2), ບ້ານໜອງດ້ວງເໜືອ, ເມືອງສີໂຄດຕະບອງ, ນະຄອນຫຼວງວຽງຈັນ</span> <span style="font-family: Arial;">(VIENTIANE CAPITAL: 307 Asean (T2) Road, Ban Nongduang Neua, Sikhottabong, Vientiane Capital)</span>
                                </label>
                                <div class="invalid-feedback">
                                    <span style="font-family: Arial;">You must select one of the options!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dradio" value="ສາຂາແຂວງຈຳປາສັກ ຫຼັກ 2 ຂ້າງສະໜາມກິລາ ຖະໜົນ 13 ໃຕ້, ບ້ານ ແກ້ວສຳພັນ, ເມືອງ ປາກເຊ, ແຂວງ ຈຳປາສັກ (2 km Near Nation Stadium Rd (13S), Ban Keosamphan, Pakse District, Champasack Province)" id="radio_three" required>
                                <label class="form-check-label" for="radio_three">
                                    <span style="font-family: phetsarath_ot;">ສາຂາແຂວງຈຳປາສັກ ຫຼັກ 2 ຂ້າງສະໜາມກິລາ ຖະໜົນ 13 ໃຕ້, ບ້ານ ແກ້ວສຳພັນ, ເມືອງ ປາກເຊ, ແຂວງ ຈຳປາສັກ</span> <span style="font-family: Arial;">(2 km Near Nation Stadium Rd (13S), Ban Keosamphan, Pakse District, Champasack Province)</span>
                                </label>
                                <div class="invalid-feedback">
                                    <span style="font-family: Arial;">You must select one of the options!</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dradio" value="ສາຂາແຂວງຈຳປາສັກ ຖະໜົນ 13 ໃຕ້ ບ້ານໂຊກອຳນວຍ, ເມືອງປາກເຊ, ແຂວງຈຳປາສັກ (CHAMPASACK BRANCH: No.13S Road, Ban Chokaumnoi, Pakse District, Champasak Province)" id="radio_four" required>
                                <label class="form-check-label" for="radio_four">
                                    <span style="font-family: phetsarath_ot;">ສາຂາແຂວງຈຳປາສັກ ຖະໜົນ 13 ໃຕ້ ບ້ານໂຊກອຳນວຍ, ເມືອງປາກເຊ, ແຂວງຈຳປາສັກ</span> <span style="font-family: Arial;">(CHAMPASACK BRANCH: No.13S Road, Ban Chokaumnoi, Pakse District, Champasak Province)</span>
                                </label>
                                <div class="invalid-feedback">
                                    <span style="font-family: Arial;">You must select one of the options!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button id="btn-submit" class="contact-btn btn btn-primary w-100" style="background-color: #FF0000" type="submit"><span style="font-family: phetsarath_ot;">ສົ່ງ</span> <span style="font-family: Arial;">(Submit)</span></button>
                <button id="btn-loading" class="contact-btn btn btn-primary w-100 d-none" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span style="font-family: Arial;">Sending...</span>
                </button>
            </form>

            @include('sweetalert::alert')

            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');

                        var checkboxes = $("input[type='checkbox']")

                        checkboxes.click(function() {
                            console.log("hello")
                        });

                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {

                                if ($('input[type=checkbox]:checked').length > 0) {  // the "> 0" part is unnecessary, actually
                                    $('input[type=checkbox]').prop('required', false);
                                } else {
                                    $('input[type=checkbox]').prop('required', true);
                                }

                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                else{
                                    //show loading button
                                    document.getElementById('btn-submit').classList.add('d-none');
                                    document.getElementById('btn-loading').classList.remove('d-none');
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
            </script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        </div>
    </div>
</div>










<style>
    .d-test-drive-section{
        width: 100%;
        background-color: #F4F4F4;
    }
    .d-test-drive-form-content{
        width: 70%;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 30px;
        padding: 100px 0;
    }
    .d-test-drive-form-header{
        font-size: 30px;
        color: red;
    }
    @media only screen and (max-width: 600px) {
        .d-test-drive-form-content{
            width: 100%;
            gap: 30px;
            padding: 20px 10px 50px 10px;
        }
    }
</style>
