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
                            <h2 class="section__title">Buat Kelas</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="sign__wrapper white-bg">
                            <div class="sign__form">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                                @if (Session::has('notif'))
                                    <div class="alert alert-danger">{{ Session::get('notif')['msg'] }}</div>
                                @endif
                                <form action="{{ route('kelas.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="guru_id" value="{{ $guru->id }}">
                                    <div class="profile__edit-input">
                                        <h5>Nama Kelas</h5>
                                        <div class="sign__input">
                                            <input type="text" placeholder="Nama" name="nama">
                                        </div>
                                    </div>
                                    <div class="profile__edit-input">
                                        <h5>Mata Pelajaran</h5>
                                        <div class="sign__input">
                                            <input type="text" placeholder="Mata Pelajaran" name="mapel">
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-10">
                                        <h5>Tambahkan Foto</h5>
                                        <input type="file" name="image">
                                    </div>
                                    <br>
                                    <button class="tp-btn  w-100"> <span></span>Buat Kelas</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
