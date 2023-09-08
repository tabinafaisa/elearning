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
                            <h2 class="section__title">Edit Kelas</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="sign__wrapper white-bg">
                            <div class="sign__form">
                                <form action="{{route('kelas.update', $kelas->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Nama Kelas</h5>
                                        <div class="sign__input">
                                            <input type="text" placeholder="Nama" name="nama"
                                                value="{{ isset($kelas['nama']) ? $kelas['nama'] : '' }}">
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Mata Pelajaran</h5>
                                        <div class="sign__input">
                                            <input type="text" placeholder="Mata Pelajaran" name="mapel"
                                                value="{{ isset($kelas['mapel']) ? $kelas['mapel'] : '' }}">
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Nama Guru</h5>
                                        <div class="col-md-12">
                                            <div class="country-select">
                                                <select style="display: none;" name="guru">
                                                    <option value="">Pilih Guru</option>
                                                    <option value="{{ isset($kelas['guru_id']) ? $kelas['guru_id'] : '' }}">
                                                        {{ isset($kelas['guru_id']) ? $kelas['guru_id'] : '' }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-10">
                                        <h5>Tambahkan Foto</h5>
                                        <input type="file" name="image"
                                            value="{{ isset($kelas['image']) ? $kelas['image'] : '' }}">
                                    </div>
                                    <br>
                                    <div class="row">
                                        <button class="tp-btn" type="submit"> <span></span>Update</button>
                                        <a href="{{ url('/kelas') }}" class="btn btn-success">Kembali</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
