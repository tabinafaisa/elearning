@extends('template.layout')
@section('content')
    <main>
        {{-- @dd($dtugas) --}}
        @foreach ($dtugas as $value)
            <section class="teacher__area pt-120 pb-110">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                            <div class="teacher__wrapper">
                                <div class="teacher__top d-md-flex align-items-end justify-content-between">

                                    <div class="teacher__info">
                                        <h4>{{ $value->nama }}</h4>
                                    </div>
                                    <div class="teacher__follow mb-5">
                                        <form action="{{ url('/nilai') }}" method="POST">
                                            @csrf
                                            <h5>Nilai:</h5>
                                            <div class="course__rating-inner d-flex align-items-center">
                                                <input type="hidden" name="id" value="{{ $value->id }}">
                                                <input type="hidden" name="siswa_id" value="{{ $value->siswa_id }}">
                                                <input type="hidden" name="kelas_id" value="{{ $value->kelas_id }}">
                                                {{-- @if ($nilai)
                                                 <input type="number" max="100" min="0"
                                                        class="input-group-text" style="width: 70%" name="skor">
                                                <button type="submit" class="btn btn-outline-success" value="{{ $nilai->skor }}">a</button>
                                                @else --}}
                                                @if (!empty($value->skor))
                                                    <input type="text" class="input-group-text" style="width: 50%"
                                                        name="skor" value="{{ $value->skor }}">
                                                @else
                                                    <input type="number" max="100" min="0"
                                                        class="input-group-text" style="width: 70%" name="skor" required>
                                                    <button type="submit" class="btn btn-outline-success"><ion-icon
                                                            name="checkmark"></ion-icon></button>
                                                @endif
                                                {{-- @endif --}}
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (date('Y-m-d H:i', strtotime($value->created_at)) > date('Y-m-d H:i', strtotime($value->deadline)))
                            <div class="alert alert-danger">pengumpulan melewati batas waktu</div>
                        @endif
                        <div class="teacher__bio">
                            <p>{{ $value->deskripsi }}</p>
                        </div>
                        <div class="teacher__follow mt-3">
                            <form action="#fileModal">
                                @csrf
                                <button type="button" class="teacher__follow-btn" data-toggle="modal"
                                    data-target="#fileModal">
                                    Open File</button>
                            </form>
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
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ Storage::url($value->binary_data) }}" alt="File"
                                    style="width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </main>
@endsection
