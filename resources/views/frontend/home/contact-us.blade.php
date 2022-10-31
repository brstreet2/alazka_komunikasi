@extends('frontend.layouts.layout')
@section('title')
    Contact Us
@endsection
@section('content')
<!-- Contact Us -->
<div class="contact-us mb-5">
    <div class="maps mt-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d169835.20155771702!2d106.6161184977383!3d-6.151632157333811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f953057c44e1%3A0x77c8aecac8eef22a!2sAlazka%20Komunikasi!5e0!3m2!1sen!2sid!4v1666666725933!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow shadow-sm">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="fa-solid fa-location-dot fa-2xl primary float-start me-3"></i>
                                    <h4 class="fw-bolder">Location</h4>
                                    <p class="ms-5">Ruko Estrella, Blk. B-C No.05, Cipete, Banjar Wijaya, Kota Tangerang, Banten 15142</p>
                                </div>
                                <div class="col-md-4">
                                    <i class="fa-solid fa-envelope fa-2xl primary float-start me-3"></i>
                                    <h4 class="fw-bolder">Email</h4>
                                    <p class="ms-5">customer.service@alazka.com</p>
                                </div>
                                <div class="col-md-4">
                                    <i class="fa-solid fa-phone fa-2xl primary float-start me-3"></i>
                                    <h4 class="fw-bolder">Phone</h4>
                                    <p class="ms-5">021 - 553 - 4467</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <h2 class="text-center fw-bold">CONTACT US!</h2>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <label for="">Your Name: </label>
                                <input type="text" class="form-control" placeholder="ex: John Doe">
                            </div>
                            <div class="col-md-6">
                                <label for="">Your Email: </label>
                                <input type="text" class="form-control" placeholder="ex: john.doe@gmail.com">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <label for="">Subject: </label>
                                <input type="text" class="form-control" placeholder="Subject ...">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <label for="">Message: </label>
                                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Content ..."></textarea>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <button type="submit" class="btn btn-submit btn-success">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Us -->
@endsection
@push('css')
    <!-- Local Animate on Scroll CSS -->
    <link rel="stylesheet" href="assets/vendor/aos-master/dist/aos.css">
    <!-- End Local Animate on Scroll CSS -->  
@endpush
@push('scrips')
    <!-- Local Animate on Scroll JS -->
    <script src="assets/vendor/aos-master/dist/aos.js"></script>
    <!-- End Local Animate on Scroll JS -->
    {{-- Page Script --}}
    <script>
        $(document).ready(function () {
            $('.btn-to-top').on('click', function() {
                $('html', 'body').animate({ 
                    scrollTop: "0",
                }, 1500);
            });
            AOS.init();
        });
</script>
@endpush