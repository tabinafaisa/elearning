@extends('template.layout')
@section('content')
    <main>

        @foreach ($materi as $value)
            <section class="blog__area pt-120 pb-120" style="background-color: aliceblue">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                            <div class="postbox__wrapper postbox__details pr-20">
                                <div class="postbox__item transition-3 mb-70">
                                    <div class="postbox__thumb m-img">
                                        @php
                                            $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];

                                            $explodeImage = explode('.', Storage::url($value->binary_data));
                                            $extension = end($explodeImage);

                                            if (in_array($extension, $imageExtensions)) {
                                                // Is image
                                                $check = 'gambar';
                                            } else {
                                                // Is not image
                                                $check = 'file';
                                            }
                                        @endphp
                                        @if ($check == 'gambar')
                                            <img src="{{ Storage::url($value->binary_data) }}" alt="{{ $value->nama_file }}">
                                        @else
                                            <form action="{{ url('/download') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="path" value="{{ $value->binary_data }}">
                                                <button type="submit" class="btn btn-sm btn-warning">Download File</button>
                                            </form>
                                        @endif
                                    </div>
                                    <div class="postbox__content" style="background-color: white">
                                        <h3 class="postbox__title">{{ $value->judul }}</h3>
                                        <div class="postbox__text mb-40">
                                            <p>{{ $value->deskripsi }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endforeach
    </main>
@endsection
