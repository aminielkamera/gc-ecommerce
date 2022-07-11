@extends('layouts.shop_main')

@section('content')

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Contact-Us</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="row mb-10">
            <div class="col-md-8 col-xl-9">
                <div class="mr-xl-6">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title mb-0 pb-2 font-size-25">Leave us a Message</h3>
                    </div>
                    <p class="max-width-830-xl text-gray-90">Maecenas dolor elit, semper a sem sed, pulvinar molestie lacus. Aliquam dignissim, elit non mattis ultrices, neque odio ultricies tellus, eu porttitor nisl ipsum eu massa.</p>
                    <form class="js-validate" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        First name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="firstName" placeholder="" aria-label="" required="" data-msg="Please enter your frist name." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Last name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="lastName" placeholder="" aria-label="" required="" data-msg="Please enter your last name." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-12">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Subject
                                    </label>
                                    <input type="text" class="form-control" name="Subject" placeholder="" aria-label="" data-msg="Please enter subject." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>
                            <div class="col-md-12">
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Your Message
                                    </label>

                                    <div class="input-group">
                                        <textarea class="form-control p-5" rows="4" name="text" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary-dark-w px-5">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-xl-3">
                <div class="border-bottom border-color-1 mb-5">
                    <h3 class="section-title mb-0 pb-2 font-size-25">Our Store</h3>
                </div>
                <div class="mr-xl-6">
                    <address class="mb-6">
                        121 King Street, <br>
                        Melbourne VIC 3000, <br>
                        Australia
                    </address>
                    <h5 class="font-size-14 font-weight-bold mb-3">Hours of Operation</h5>
                    <ul class="list-unstyled mb-6">
                        <li class="flex-center-between mb-1"><span class="">Monday:</span><span class="">12-6 PM</span></li>
                        <li class="flex-center-between mb-1"><span class="">Tuesday:</span><span class="">12-6 PM</span></li>
                        <li class="flex-center-between mb-1"><span class="">Wednesday:</span><span class="">12-6 PM</span></li>
                        <li class="flex-center-between mb-1"><span class="">Thursday:</span><span class="">12-6 PM</span></li>
                        <li class="flex-center-between mb-1"><span class="">Friday:</span><span class="">12-6 PM</span></li>
                        <li class="flex-center-between mb-1"><span class="">Saturday:</span><span class="">12-6 PM</span></li>
                        <li class="flex-center-between"><span class="">Sunday</span><span class="">Closed</span></li>
                    </ul>
                    <h5 class="font-size-14 font-weight-bold mb-3">Careers</h5>
                    <p class="text-gray-90">If you’re interested in employment opportunities at Electro, please email us: <a class="text-blue text-decoration-on" href="mailto:contact@yourstore.com">contact@yourstore.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5580204774515!2d39.27041091477238!3d-6.823483295068453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4bae9ff68b35%3A0x44526e65b1a8ee0d!2sLikoma%20%26%20Aggrey%20Street%2C%20Dar%20es%20Salaam!5e0!3m2!1sen!2stz!4v1657570356337!5m2!1sen!2stz" width="100%" height="500" style="border:0;" allowfullscreen=""></iframe>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->

@endsection
