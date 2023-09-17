@extends('template.layout')
@section('content')
    <main>
        {{-- @foreach ($tugassiswa as $value) --}}
            {{-- @dd($siswa) --}}
            <section class="teacher__area pt-120 pb-110">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                            <div class="teacher__wrapper">
                                <div class="teacher__top d-md-flex align-items-end justify-content-between">
                                    <div class="teacher__info">
                                        <h4>{{ $siswa->nama_siswa }}</h4>
                                    </div>
                                    <div class="teacher__follow mb-5">
                                        <form action="#fileModal">
                                            @csrf
                                            <button type="button" class="teacher__follow-btn" data-toggle="modal"
                                            data-target="#fileModal">
                                            Open File</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="teacher__bio">
                                <p>{{ $tugassiswa->deskripsi }}</p>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
                <div class="modal fade" id="fileModal" tabindex="-1" aria-labelledby="modal-dialog modal-dialog-centered"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ Storage::url($tugassiswa->binary_data) }}" alt="File"
                                    style="width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        {{-- @endforeach --}}
    </main>
@endsection
