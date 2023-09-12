@extends('template.layout')
@section('content')
    <main>


        <!-- profile menu area start -->
        <section class="profile__menu pb-70 grey-bg-2">
            <div class="container pt-5">
                <br>
                <br>
                <div class="row">
                    <div class="col-xxl-12 col-md-12">
                        <div class="profile__menu-right">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-account" role="tabpanel"
                                    aria-labelledby="nav-account-tab">
                                    <div class="profile__info">

                                        <div class="profile__info-top d-flex justify-content-between align-items-center">
                                            <h3 class="profile__info-title">Profile Information</h3>
                                            <button class="profile__info-btn" type="button" data-bs-toggle="modal"
                                                data-bs-target="#profile_edit_modal"><i
                                                    class="fa-regular fa-pen-to-square"></i> Edit Profile</button>
                                        </div>

                                        @if (Auth::user()->hak_akses == 'guru')
                                            <div class="profile__info-wrapper white-bg">
                                                <div class="profile__info-item">
                                                    <p>NIP</p>
                                                    <h4>{{ $guru->nip }}</h4>
                                                </div>
                                                <div class="profile__info-item">
                                                    <p>Nama</p>
                                                    <h4>{{ $guru->nama }}</h4>
                                                </div>
                                                <div class="profile__info-item">
                                                    <p>Username</p>
                                                    <h4>{{ $user->username }}</h4>
                                                </div>
                                            </div>
                                        @endif
                                        @if (Auth::user()->hak_akses == 'siswa')
                                            <div class="profile__info-wrapper white-bg">
                                                <div class="profile__info-item">
                                                    <p>NISN</p>
                                                    <h4>{{ $siswa->nisn }}</h4>
                                                </div>
                                                <div class="profile__info-item">
                                                    <p>Nama</p>
                                                    <h4>{{ $siswa->nama }}</h4>
                                                </div>
                                                <div class="profile__info-item">
                                                    <p>Username</p>
                                                    <h4>{{ $user->username }}</h4>
                                                </div>
                                                <div class="profile__info-item">
                                                    <p>Kelas</p>
                                                    <h4>{{ $siswa->kelas }}</h4>
                                                </div>
                                                <div class="profile__info-item">
                                                    <p>Jurusan</p>
                                                    <h4>{{ $siswa->jurusan }}</h4>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- profile menu area end -->

        <div class="profile__edit-modal">
            <!-- Modal -->
            @if (Auth::user()->hak_akses == 'guru')
                <div class="modal fade" id="profile_edit_modal" tabindex="-1" aria-labelledby="profile_edit_modal"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="profile__edit-wrapper">
                                <div class="profile__edit-close">
                                    <button type="button" class="profile__edit-close-btn" data-bs-toggle="modal"
                                        data-bs-target="#course_enroll_modal"><i class="fa-light fa-xmark"></i></button>
                                </div>
                                <form action="{{ url('/profil') }}" method="post">
                                    @csrf
                                    <input type="text" name="id" value="{{ isset($user['id']) ? $user['id'] : '' }}"
                                        hidden>
                            </div>">
                            <div class="profile__edit-input">
                                <p>NIP</p>
                                <input type="text" placeholder="NIP"
                                    value="{{ isset($guru['nip']) ? $guru['nip'] : '' }}">
                            </div>
                            <div class="profile__edit-input">
                                <p>Nama</p>
                                <input type="text" placeholder="Nama"
                                    value="{{ isset($guru['nama']) ? $guru['nama'] : '' }}">
                            </div>
                            <div class="profile__edit-input">
                                <p>Username</p>
                                <input type="text" placeholder="Username"
                                    value="{{ isset($user['username']) ? $user['username'] : '' }}">
                            </div>
                            <div class="profile__edit-input">
                                <button type="submit" class="tp-btn w-100">Update</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        @endif
        @if (Auth::user()->hak_akses == 'siswa')
            <div class="modal fade" id="profile_edit_modal" tabindex="-1" aria-labelledby="profile_edit_modal"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="profile__edit-wrapper">
                            <div class="profile__edit-close">
                                <button type="button" class="profile__edit-close-btn" data-bs-toggle="modal"
                                    data-bs-target="#course_enroll_modal"><i class="fa-light fa-xmark"></i></button>
                            </div>
                            <form action="{{ url('/profil/' . $user['id']) }}" method="post">
                                @csrf
                                {{-- @method('PUT') --}}
                                {{-- <input type="text" name="id" value="{{ isset($user['id']) ? $user['id'] : '' }}"
                                    hidden> --}}
                                <div class="profile__edit-input">
                                    <p>NISN</p>
                                    <input type="text" placeholder="NISN"
                                        value="{{ isset($siswa['nisn']) ? $siswa['nisn'] : '' }}" name="nisn">
                                </div>
                                <div class="profile__edit-input">
                                    <p>Nama</p>
                                    <input type="text" placeholder="Nama"
                                        value="{{ isset($siswa['nama']) ? $siswa['nama'] : '' }}" name="nama">
                                </div>
                                <div class="profile__edit-input">
                                    <p>Username</p>
                                    <input type="text" placeholder="Username"
                                        value="{{ isset($user['username']) ? $user['username'] : '' }}" name="username">
                                </div>
                                <div class="profile__edit-input">
                                    <p>Kelas</p>
                                    <input type="text" placeholder="Kelas"
                                        value="{{ isset($siswa['kelas']) ? $siswa['kelas'] : '' }}" name="kelas">
                                </div>
                                <div class="profile__edit-input">
                                    <p>Jurusan</p>
                                    <input type="text" placeholder="Jurusan"
                                        value="{{ isset($siswa['jurusan']) ? $siswa['jurusan'] : '' }}" name="jurusan">
                                </div>
                                <div class="profile__edit-input">
                                    <button type="submit" class="tp-btn w-100">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        </div>

    </main>
@endsection
