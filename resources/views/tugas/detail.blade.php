@extends('template.layout')
@section('content')

      <main>

         @foreach($tugas as $value)
         <section class="blog__area pt-120 pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12 col-xl-12 col-lg-12">
                     <div class="postbox__wrapper postbox__details pr-20">
                        <div class="postbox__item transition-3 mb-70">
                           <div class="postbox__thumb m-img">
                              <img src="{{ Storage::url($value->binary_data) }}" alt="{{ $value->nama_file }}">
                           </div>
                           <div class="postbox__content">
                              <h3 class="postbox__title">{{ $value->judul }}</h3>
                              <div class="postbox__text mb-40">
                                 <p>{{ $value->deskripsi }}</p>
                              </div>
                              <div class="postbox__quote grey-bg-2 mb-45 p-relative fix">
                                 <img class="quote" src="assets/img/blog/quote-1.png" alt="">
                                 <blockquote>
                                    <p>After I started learning design with Quillow, I realized that I had Improved to very advanced levels.</p>
                                    <h4>Chris Collins</h4>
                                 </blockquote>
                              </div>
                           </div>
                        </div>
                        <div
                            class="event__item white-bg mb-10 transition-3 p-relative d-lg-flex align-items-center justify-content-center">
                            <a href="{{ url('/tugas/siswa') }}" class="tp-btn-5 tp-btn-7">Tambahkan</a>

                        </div>
                        
                     </div>
                  </div>
                  
               </div>
            </div>
         </section>
         @endforeach

      </main>

@endsection