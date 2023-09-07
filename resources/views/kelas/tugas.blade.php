@extends('template.layout')
@section('content')

      <main>
         <!-- contact area start -->
         <section class="contact__area pt-115 pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-11 col-xl-7 col-lg-6">
                     <div class="contact__wrapper">
                        <div class="section__title-wrapper mb-40">
                           <h2 class="section__title">Buat Kelas<img src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
                        </div>
                        <div class="contact__form">
                           <form action="#">
                              <div class="row">
                                 <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                       <input type="text" placeholder="Your Name">
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                       <input type="email" placeholder="Your Email">
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                       <input type="text" placeholder="Subject">
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                       <textarea placeholder="Enter Your Message"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__form-agree  d-flex align-items-center mb-20">
                                       <input class="e-check-input" type="checkbox" id="e-agree">
                                       <label class="e-check-label" for="e-agree">I agree to the<a href="#">Terms & Conditions</a></label>
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__btn">
                                       <button class="tp-btn">Send your message</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact area end -->
      </main>

        
@endsection