@extends('template.layout')
@section('content')
    <main>
        <!-- sign up area start -->
        <section class="signup__area p-relative z-index-1 pt-100 pb-145">
            <div class="sign__shape">
                <img class="man-1" src="assets/img/icon/sign/man-1.png" alt="">
                <img class="man-2" src="assets/img/icon/sign/man-2.png" alt="">
                <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
                <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
                <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
                <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                        <div class="section__title-wrapper text-center mb-55">
                            <h2 class="section__title">Tambah tugas {{$kelas->nama}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="sign__wrapper white-bg">
                            <div class="sign__form">
                                <form action="{{ url('/tugas') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="kelas_id" value="{{ $kelas->id }}">
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Judul</h5>
                                        <div class="checkout-form-list">
                                            <input type="text" name="judul">
                                        </div>
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Deskripsi</h5>
                                        <div class="contact__form-input">
                                            <textarea name="deskripsi"></textarea>
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>File</h5>
                                        <div class="checkout-form-list">
                                            <input type="file" name="file_tugas">
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Deadline</h5>
                                        <div class="checkout-form-list">
                                            <input type="datetime-local" name="deadline">
                                        </div>
                                    </div>
                                    <br>
                                    <button class="tp-btn  w-100"> <span></span>Tambahkan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
