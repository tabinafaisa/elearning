@extends('template.layout')
@section('content')
    <main>
        <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay "
            data-background="{{ Storage::url($kelas->image) }}"
            style="background-image: url('{{ Storage::url($kelas->image) }}');">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content text-center p-relative z-index-1">
                            <h3 class="breadcrumb__title">Selamat Datang di <br class="mb-5" />Kelas {{ $kelas->nama }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="search-wrapper p-relative transition-3 d-none">
            <div class="search-form transition-3">
                <form method="get" action="https://weblearnbd.net/wp/eduker/">
                    <input type="search" name="s" value="" placeholder="Enter Your Keyword">
                    <button type="submit" class="search-btn"><i class="far fa-search"></i></button>
                </form>
                <a href="javascript:void(0);" class="search-close"><i class="far fa-times"></i></a>
            </div>
        </div>
        <div
            class="tutor-wrap tutor-full-width-course-top tutor-course-top-info tutor-page-wrap tutor-wrap-parent post-661 courses type-courses status-publish has-post-thumbnail hentry course-category-economics course-tag-big-data course-tag-data-analysis course-tag-data-modeling">
            <div class="tutor-course-details-page tutor-container">

                <header class="tutor-course-details-header tutor-mb-44">
                    <div class="tutor-course-details-ratings">
                        <div class="tutor-ratings tutor-ratings-">
                            <div class="tutor-ratings-stars">
                                <span class="tutor-icon-star-line"></span><span class="tutor-icon-star-line"></span><span
                                    class="tutor-icon-star-line"></span><span class="tutor-icon-star-line"></span><span
                                    class="tutor-icon-star-line"></span>
                            </div>
                        </div>
                    </div>

                    <h1
                        class="tutor-course-details-title tutor-fs-4 tutor-fw-bold tutor-color-black tutor-mt-12 tutor-mb-0">
                        <span>The Challenge Of Global Learning</span>
                    </h1>

                    <div class="tutor-course-details-top tutor-mt-16">
                        <div class="tutor-row">
                            <div class="tutor-col">
                                <div class="tutor-meta tutor-course-details-info">
                                    <div>
                                        <a href="https://weblearnbd.net/wp/eduker/profile/eduker?view=instructor"
                                            class="tutor-d-flex">
                                            <div class="tutor-avatar">
                                                <div class="tutor-ratio tutor-ratio-1x1"><span
                                                        class="tutor-avatar-text">E</span></div>
                                            </div>
                                        </a>
                                    </div>

                                    <div>
                                        <span class="tutor-mr-16">
                                            By <a
                                                href="https://weblearnbd.net/wp/eduker/profile/eduker?view=instructor">eduker</a>
                                        </span>

                                        Categories: <a
                                            href="https://weblearnbd.net/wp/eduker/course-category/economics/?tutor-course-filter-category=33">Economics</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tutor-col-auto">
                                <div class="tutor-course-details-actions tutor-mt-12 tutor-mt-sm-0">
                                    <a href="#"
                                        class="tutor-btn tutor-btn-ghost tutor-course-wishlist-btn tutor-mr-16"
                                        data-course-id="661">
                                        <i class="tutor-icon-bookmark-line tutor-mr-8"></i> Wishlist </a>


                                    <a data-tutor-modal-target="tutor-course-share-opener" href="#"
                                        class="tutor-btn tutor-btn-ghost tutor-course-share-btn">
                                        <span class="tutor-icon-share tutor-mr-8"></span> Share</a>
                                    <div id="tutor-course-share-opener" class="tutor-modal">
                                        <span class="tutor-modal-overlay"></span>
                                        <div class="tutor-modal-window">
                                            <div class="tutor-modal-content tutor-modal-content-white">
                                                <button class="tutor-iconic-btn tutor-modal-close-o"
                                                    data-tutor-modal-close="">
                                                    <span class="tutor-icon-times" area-hidden="true"></span>
                                                </button>
                                                <div class="tutor-modal-body">
                                                    <div class="tutor-fs-5 tutor-fw-medium tutor-color-black tutor-mb-16">
                                                        Share Course </div>
                                                    <div class="tutor-fs-7 tutor-color-secondary tutor-mb-12">
                                                        Page Link </div>
                                                    <div class="tutor-mb-32">
                                                        <input class="tutor-form-control"
                                                            value="https://weblearnbd.net/wp/eduker/courses/the-challenge-of-global-learning/">
                                                    </div>
                                                    <div>
                                                        <div
                                                            class="tutor-color-black tutor-fs-6 tutor-fw-medium tutor-mb-16">
                                                            Share On Social Media </div>
                                                        <div class="tutor-social-share-wrap"
                                                            data-social-share-config="{&quot;title&quot;:&quot;The Challenge Of Global Learning&quot;,&quot;text&quot;:&quot;Only a quid me old mucker squiffy tomfoolery grub cheers ruddy cor blimey guvnor in my flat, up the duff Eaton car boot up the kyver pardon you A bit of how’s your father David skive off sloshed, don’t get shirty with me chip shop vagabond crikey bugger Queen’s English chap. Matie boy nancy boy […]&quot;,&quot;image&quot;:&quot;https:\/\/weblearnbd.net\/wp\/eduker\/wp-content\/uploads\/2022\/04\/course-2.jpg&quot;}">
                                                            <button class="tutor_share s_facebook"
                                                                style="background: #3877EA"
                                                                href="https://www.facebook.com/sharer.php?s=100&amp;p[title]=The%20Challenge%20Of%20Global%20Learning&amp;u=https%3A%2F%2Fweblearnbd.net%2Fwp%2Feduker%2Fcourses%2Fthe-challenge-of-global-learning%2F&amp;t=The%20Challenge%20Of%20Global%20Learning&amp;p[summary]=Only%20a%20quid%20me%20old%20mucker%20squiffy%20tomfoolery%20grub%20cheers%20ruddy%20cor%20blimey%20guvnor%20in%20my%20flat%2C%20up%20the%20duff%20Eaton%20car%20boot%20up%20the%20kyver%20pardon%20you%20A%20bit%20of%20how%E2%80%99s%20your%20father%20David%20skive%20off%20sloshed%2C%20don%E2%80%99t%20get%20shirty%20with%20me%20chip%20shop%20vagabond%20crikey%20bugger%20Queen%E2%80%99s%20English%20chap.%20Matie%20boy%20nancy%20boy%20%5B%E2%80%A6%5D&amp;p[url]=https%3A%2F%2Fweblearnbd.net%2Fwp%2Feduker%2Fcourses%2Fthe-challenge-of-global-learning%2F">
                                                                <i
                                                                    class="tutor-valign-middle tutor-icon-brand-facebook"></i>
                                                                <span>
                                                                    Facebook </span>
                                                            </button>
                                                            <button class="tutor_share s_twitter"
                                                                style="background: #4CA0EB"
                                                                href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fweblearnbd.net%2Fwp%2Feduker%2Fcourses%2Fthe-challenge-of-global-learning%2F&amp;text=Only%20a%20quid%20me%20old%20mucker%20squiffy%20tomfoolery%20grub%20cheers%20ruddy%20cor%20blimey%20guvnor%20in%20my%20flat%2C%20up%20the%20duff%20Eaton%20car%20boot%20up%20the%20kyver%20pardon%20you%20A%20bit%20of%20how%E2%80%99s%20your%20father%20David%20skive%20off%20sloshed%2C%20don%E2%80%99t%20get%20shirty%20with%20me%20chip%20shop%20vagabond%20crikey%20bugger%20Queen%E2%80%99s%20English%20chap.%20Matie%20boy%20nancy%20boy%20%5B%E2%80%A6%5D">
                                                                <i class="tutor-valign-middle tutor-icon-brand-twitter"></i>
                                                                <span>
                                                                    Twitter </span>
                                                            </button>
                                                            <button class="tutor_share s_linkedin"
                                                                style="background: #3967B6"
                                                                href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fweblearnbd.net%2Fwp%2Feduker%2Fcourses%2Fthe-challenge-of-global-learning%2F&amp;title=The%20Challenge%20Of%20Global%20Learning&amp;summary=Only%20a%20quid%20me%20old%20mucker%20squiffy%20tomfoolery%20grub%20cheers%20ruddy%20cor%20blimey%20guvnor%20in%20my%20flat%2C%20up%20the%20duff%20Eaton%20car%20boot%20up%20the%20kyver%20pardon%20you%20A%20bit%20of%20how%E2%80%99s%20your%20father%20David%20skive%20off%20sloshed%2C%20don%E2%80%99t%20get%20shirty%20with%20me%20chip%20shop%20vagabond%20crikey%20bugger%20Queen%E2%80%99s%20English%20chap.%20Matie%20boy%20nancy%20boy%20%5B%E2%80%A6%5D&amp;source=https%3A%2F%2Fweblearnbd.net%2Fwp%2Feduker%2Fcourses%2Fthe-challenge-of-global-learning%2F">
                                                                <i
                                                                    class="tutor-valign-middle tutor-icon-brand-linkedin"></i>
                                                                <span>
                                                                    Linkedin </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="tutor-row tutor-gx-xl-5">
                    <main class="tutor-col-xl-8">

                        <div class="tutor-video-player">

                            <div class="tutor-ratio tutor-ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/YwrHGratByU" frameborder="0" allowfullscreen=""
                                    allowtransparency="" allow="autoplay"></iframe>
                            </div>
                        </div>

                        <div class="tutor-course-details-tab tutor-mt-32">
                            <div class="tutor-is-sticky">
                                <nav class="tutor-nav" tutor-priority-nav="">
                                    <li class="tutor-nav-item">
                                        <a class="tutor-nav-link is-active" href="#"
                                            data-tutor-nav-target="tutor-course-details-tab-info">Course Info</a>
                                    </li>
                                    <li class="tutor-nav-item">
                                        <a class="tutor-nav-link" href="#"
                                            data-tutor-nav-target="tutor-course-details-tab-reviews">Reviews</a>
                                    </li>
                                    <li class="tutor-nav-item tutor-nav-more tutor-d-none">
                                        <a class="tutor-nav-link tutor-nav-more-item" href="#"><span
                                                class="tutor-mr-4">More</span> <span
                                                class="tutor-nav-more-icon tutor-icon-times"></span></a>
                                        <ul class="tutor-nav-more-list tutor-dropdown"></ul>
                                    </li>
                                </nav>
                            </div>
                            <div class="tutor-tab tutor-pt-24">
                                <div id="tutor-course-details-tab-info" class="tutor-tab-item is-active">
                                    <div class="tutor-course-details-content tutor-toggle-more-content tutor-toggle-more-collapsed"
                                        data-tutor-toggle-more-content="" data-toggle-height="200"
                                        style="height: 200px;">
                                        <h2 class="tutor-fs-5 tutor-fw-bold tutor-color-black tutor-mb-12">
                                            About Course </h2>

                                        <div class="tutor-fs-6 tutor-color-secondary">
                                            <p>Only a quid me old mucker squiffy tomfoolery grub cheers ruddy cor blimey
                                                guvnor in my flat, up the duff Eaton car boot up the kyver pardon you A bit
                                                of how’s your father David skive off sloshed, don’t get shirty with me chip
                                                shop vagabond crikey bugger Queen’s English chap. Matie boy nancy boy bite
                                                your arm off up the kyver old no biggie fantastic boot, David have it show
                                                off show off pick your nose and blow off lost the plot porkies bits and bobs
                                                only a quid bugger all mate, absolutely bladdered bamboozled it’s your round
                                                don’t get shirty with me down the pub well. Give us a bell bits and bobs
                                                Charles he lost his bottle super my lady cras starkers bite your arm off
                                                Queen’s English, pardon me horse play Elizabeth a blinding shot chinwag
                                                knees up do one David, blag cup of tea Eaton so I said bleeding haggle James
                                                Bond cup of char. Gosh William ummm I’m telling crikey burke I don’t want no
                                                agro A bit of how’s your father bugger all mate off his nut that, what a
                                                plonker cuppa owt to do with me nancy boy show off show off pick your nose
                                                and blow off spiffing good time lavatory me old mucker, chimney pot what a
                                                load of rubbish boot squiffy lost the plot brolly wellies excuse my french.
                                            </p>
                                        </div>
                                    </div>

                                    <a href="#" class="tutor-btn-show-more tutor-btn tutor-btn-ghost tutor-mt-32"
                                        data-tutor-toggle-more=".tutor-toggle-more-content">
                                        <span class="tutor-toggle-btn-icon tutor-icon tutor-icon-plus tutor-mr-8"
                                            area-hidden="true"></span>
                                        <span class="tutor-toggle-btn-text">Show More</span>
                                    </a>

                                    <div
                                        class="tutor-course-details-widget tutor-course-details-widget-col-2 tutor-mt-lg-50 tutor-mt-32">
                                        <h3
                                            class="tutor-course-details-widget-title tutor-fs-5 tutor-fw-bold tutor-color-black tutor-mb-16">
                                            What Will You Learn? </h3>
                                        <ul
                                            class="tutor-course-details-widget-list tutor-color-black tutor-fs-6 tutor-m-0 tutor-mt-16">
                                            <li class="tutor-d-flex tutor-mb-12">
                                                <span
                                                    class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"></span>
                                                <span>Business's managers, leaders</span>
                                            </li>
                                            <li class="tutor-d-flex tutor-mb-12">
                                                <span
                                                    class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"></span>
                                                <span>Downloadable lectures, code and design assets for all projects</span>
                                            </li>
                                            <li class="tutor-d-flex tutor-mb-12">
                                                <span
                                                    class="tutor-icon-bullet-point tutor-color-muted tutor-mt-2 tutor-mr-8 tutor-fs-8"></span>
                                                <span>Anyone who is finding a chance to get the promotion</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tutor-mt-40">

                                        <h3
                                            class="tutor-fs-5 tutor-fw-bold tutor-color-black tutor-mb-24 tutor-course-content-title">
                                            Course Content </h3>

                                        <div class="tutor-accordion tutor-mt-24">
                                            <div class="tutor-accordion-item">
                                                <h4 class="tutor-accordion-item-header">
                                                    WordPress <div class="tooltip-wrap tooltip-icon">
                                                        <span class="tooltip-txt tooltip-right">Only a quid me old mucker
                                                            squiffy tomfoolery grub cheers ruddy cor blimey guvnor in my
                                                            flat, up the duff Eaton car boot up the kyver pardon you A bit
                                                            of how’s your father David skive off sloshed,</span>
                                                    </div>
                                                </h4>

                                                <div class="tutor-accordion-item-body" style="display: none;">
                                                    <div class="tutor-accordion-item-body-content">
                                                        <ul class="tutor-course-content-list">
                                                            <li class="tutor-course-content-list-item">
                                                                <div class="tutor-d-flex tutor-align-center">
                                                                    <span
                                                                        class="tutor-course-content-list-item-icon tutor-icon-brand-youtube-bold tutor-mr-12"></span>
                                                                    <h5 class="tutor-course-content-list-item-title">
                                                                        Greetings and introduction </h5>
                                                                </div>

                                                                <div>
                                                                    <span
                                                                        class="tutor-course-content-list-item-duration tutor-fs-7 tutor-color-muted">
                                                                        30:12 </span>
                                                                    <span
                                                                        class="tutor-course-content-list-item-status tutor-icon-lock-line tutor-color-muted tutor-ml-20"
                                                                        area-hidden="true"></span>
                                                                </div>
                                                            </li>
                                                            <li class="tutor-course-content-list-item">
                                                                <div class="tutor-d-flex tutor-align-center">
                                                                    <span
                                                                        class="tutor-course-content-list-item-icon tutor-icon-brand-youtube-bold tutor-mr-12"></span>
                                                                    <h5 class="tutor-course-content-list-item-title">
                                                                        WordPress </h5>
                                                                </div>

                                                                <div>
                                                                    <span
                                                                        class="tutor-course-content-list-item-duration tutor-fs-7 tutor-color-muted">
                                                                        20:30 </span>
                                                                    <span
                                                                        class="tutor-course-content-list-item-status tutor-icon-lock-line tutor-color-muted tutor-ml-20"
                                                                        area-hidden="true"></span>
                                                                </div>
                                                            </li>
                                                            <li class="tutor-course-content-list-item">
                                                                <div class="tutor-d-flex tutor-align-center">
                                                                    <span
                                                                        class="tutor-course-content-list-item-icon tutor-icon-brand-youtube-bold tutor-mr-12"></span>
                                                                    <h5 class="tutor-course-content-list-item-title">
                                                                        Web Design </h5>
                                                                </div>

                                                                <div>
                                                                    <span
                                                                        class="tutor-course-content-list-item-duration tutor-fs-7 tutor-color-muted">
                                                                        30:10 </span>
                                                                    <span
                                                                        class="tutor-course-content-list-item-status tutor-icon-lock-line tutor-color-muted tutor-ml-20"
                                                                        area-hidden="true"></span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tutor-accordion-item">
                                                <h4 class="tutor-accordion-item-header">
                                                    Shopify </h4>

                                                <div class="tutor-accordion-item-body" style="display: none;">
                                                    <div class="tutor-accordion-item-body-content">
                                                        <ul class="tutor-course-content-list">
                                                            <li class="tutor-course-content-list-item">
                                                                <div class="tutor-d-flex tutor-align-center">
                                                                    <span
                                                                        class="tutor-course-content-list-item-icon tutor-icon-document-text tutor-mr-12"></span>
                                                                    <h5 class="tutor-course-content-list-item-title">
                                                                        Shopify Install </h5>
                                                                </div>

                                                                <div>
                                                                    <span
                                                                        class="tutor-course-content-list-item-duration tutor-fs-7 tutor-color-muted">
                                                                    </span>
                                                                    <span
                                                                        class="tutor-course-content-list-item-status tutor-icon-lock-line tutor-color-muted tutor-ml-20"
                                                                        area-hidden="true"></span>
                                                                </div>
                                                            </li>
                                                            <li class="tutor-course-content-list-item">
                                                                <div class="tutor-d-flex tutor-align-center">
                                                                    <span
                                                                        class="tutor-course-content-list-item-icon tutor-icon-brand-youtube-bold tutor-mr-12"></span>
                                                                    <h5 class="tutor-course-content-list-item-title">
                                                                        Shopify app </h5>
                                                                </div>

                                                                <div>
                                                                    <span
                                                                        class="tutor-course-content-list-item-duration tutor-fs-7 tutor-color-muted">
                                                                        15:00 </span>
                                                                    <span
                                                                        class="tutor-course-content-list-item-status tutor-icon-lock-line tutor-color-muted tutor-ml-20"
                                                                        area-hidden="true"></span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tutor-accordion-item">
                                                <h4 class="tutor-accordion-item-header">
                                                    Web Design </h4>

                                                <div class="tutor-accordion-item-body" style="display: none;">
                                                    <div class="tutor-accordion-item-body-content">
                                                        <ul class="tutor-course-content-list">
                                                            <li class="tutor-course-content-list-item">
                                                                <div class="tutor-d-flex tutor-align-center">
                                                                    <span
                                                                        class="tutor-course-content-list-item-icon tutor-icon-brand-youtube-bold tutor-mr-12"></span>
                                                                    <h5 class="tutor-course-content-list-item-title">
                                                                        PSD Template </h5>
                                                                </div>

                                                                <div>
                                                                    <span
                                                                        class="tutor-course-content-list-item-duration tutor-fs-7 tutor-color-muted">
                                                                        45:00 </span>
                                                                    <span
                                                                        class="tutor-course-content-list-item-status tutor-icon-lock-line tutor-color-muted tutor-ml-20"
                                                                        area-hidden="true"></span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div id="tutor-course-details-tab-reviews" class="tutor-tab-item">

                                    <div class="tutor-pagination-wrapper-replaceable">
                                        <h3 class="tutor-fs-5 tutor-fw-bold tutor-color-black tutor-mb-24">
                                            Student Ratings &amp; Reviews </h3>

                                        <div class="tutor-empty-state td-empty-state tutor-p-32 tutor-text-center">
                                            <img src="https://weblearnbd.net/wp/eduker/wp-content/plugins/tutor/assets/images/emptystate.svg"
                                                alt="No Review Yet" width="85%">
                                            <div class="tutor-fs-6 tutor-color-secondary tutor-text-center">
                                                No Review Yet </div>
                                        </div>

                                        <div class="tutor-row tutor-mt-40 tutor-mb-20">
                                            <div class="tutor-col">
                                            </div>

                                            <div class="tutor-col-auto">
                                                <nav data-tutor_pagination_ajax="{&quot;action&quot;:&quot;tutor_single_course_reviews_load_more&quot;,&quot;course_id&quot;:661}"
                                                    data-tutor_pagination_layout="{&quot;type&quot;:&quot;load_more&quot;,&quot;load_more_text&quot;:&quot;Load More&quot;}"
                                                    class="is-ajax-pagination-enabled"></nav>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </main>

                    <aside class="tutor-col-xl-4">
                        <div class="tutor-single-course-sidebar tutor-mt-40 tutor-mt-xl-0">

                            <div class="tutor-card tutor-card-md tutor-sidebar-card">
                                <div class="tutor-card-body">
                                    <div>
                                        <div
                                            class="tutor-course-sidebar-card-pricing tutor-d-flex tutor-align-end tutor-justify-between">
                                            <div>
                                                <span class="tutor-fs-4 tutor-fw-bold tutor-color-black">
                                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>45.00</bdi></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="tutor-color-muted">
                                        </div>
                                    </div>
                                    <form
                                        action="https://weblearnbd.net/wp/eduker/courses/the-challenge-of-global-learning/"
                                        method="post" enctype="multipart/form-data">
                                        <button type="submit" name="add-to-cart" value="740"
                                            class="tutor-btn tutor-btn-primary tutor-btn-lg tutor-btn-block tutor-mt-24 tutor-add-to-cart-button tutor-open-login-modal">
                                            <span class="btn-icon tutor-icon-cart-filled"></span>
                                            <span>Add to cart</span>
                                        </button>
                                    </form>
                                </div>
                                <!-- Course Info -->
                                <div class="tutor-card-footer ">
                                    <ul class="tutor-ul">
                                        <li class="tutor-d-flex">
                                            <span class="tutor-icon-level tutor-color-black tutor-mt-4 tutor-mr-12"
                                                aria-labelledby="Level"></span>
                                            <span class="tutor-fs-6 tutor-color-secondary">
                                                Beginner </span>
                                        </li>
                                        <li class="tutor-d-flex tutor-mt-12">
                                            <span class="tutor-icon-mortarboard tutor-color-black tutor-mt-4 tutor-mr-12"
                                                aria-labelledby="Total Enrolled"></span>
                                            <span class="tutor-fs-6 tutor-color-secondary">
                                                0 Total Enrolled </span>
                                        </li>
                                        <li class="tutor-d-flex tutor-mt-12">
                                            <span class="tutor-icon-clock-line tutor-color-black tutor-mt-4 tutor-mr-12"
                                                aria-labelledby="Duration"></span>
                                            <span class="tutor-fs-6 tutor-color-secondary">
                                                <span class="tutor-meta-level"> 1</span><span
                                                    class="tutor-meta-value tutor-color-secondary tutor-mr-4">
                                                    hour</span><span class="tutor-meta-level"> 15</span><span
                                                    class="tutor-meta-value tutor-color-secondary tutor-mr-4">
                                                    minutes</span> Duration </span>
                                        </li>
                                        <li class="tutor-d-flex tutor-mt-12">
                                            <span class="tutor-icon-refresh-o tutor-color-black tutor-mt-4 tutor-mr-12"
                                                aria-labelledby="Last Updated"></span>
                                            <span class="tutor-fs-6 tutor-color-secondary">
                                                May 12, 2022 Last Updated </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tutor-modal tutor-login-modal">
                                <div class="tutor-modal-overlay"></div>
                                <div class="tutor-modal-window tutor-modal-window-sm">
                                    <div class="tutor-modal-content tutor-modal-content-white">
                                        <button class="tutor-iconic-btn tutor-modal-close-o" data-tutor-modal-close="">
                                            <span class="tutor-icon-times" area-hidden="true"></span>
                                        </button>

                                        <div class="tutor-modal-body">
                                            <div class="tutor-py-48">
                                                <div class="tutor-fs-4 tutor-fw-medium tutor-color-black tutor-mb-32">Hi,
                                                    Welcome back!</div>
                                                <form id="tutor-login-form" method="post">
                                                    <input type="hidden" name="tutor_course_enroll_attempt"
                                                        value="661">
                                                    <input type="hidden" id="_tutor_nonce" name="_tutor_nonce"
                                                        value="19d1988b46"><input type="hidden" name="_wp_http_referer"
                                                        value="/wp/eduker/courses/the-challenge-of-global-learning/">
                                                    <input type="hidden" name="tutor_action" value="tutor_user_login">
                                                    <input type="hidden" name="redirect_to"
                                                        value="https://weblearnbd.net/wp/eduker/courses/the-challenge-of-global-learning/">

                                                    <div class="tutor-mb-20">
                                                        <input type="text" class="tutor-form-control"
                                                            placeholder="Username or Email Address" name="log"
                                                            value="" size="20" required="">
                                                    </div>

                                                    <div class="tutor-mb-32">
                                                        <input type="password" class="tutor-form-control"
                                                            placeholder="Password" name="pwd" value=""
                                                            size="20" required="">
                                                    </div>

                                                    <div class="tutor-login-error"></div>
                                                    <div
                                                        class="tutor-d-flex tutor-justify-between tutor-align-center tutor-mb-40">
                                                        <div class="tutor-form-check">
                                                            <input id="tutor-login-agmnt-1" type="checkbox"
                                                                class="tutor-form-check-input tutor-bg-black-40"
                                                                name="rememberme" value="forever">
                                                            <label for="tutor-login-agmnt-1"
                                                                class="tutor-fs-7 tutor-color-muted">
                                                                Keep me signed in </label>
                                                        </div>
                                                        <a href="https://weblearnbd.net/wp/eduker/dashboard/retrieve-password"
                                                            class="tutor-btn tutor-btn-ghost">
                                                            Forgot? </a>
                                                    </div>

                                                    <button type="submit"
                                                        class="tutor-btn tutor-btn-primary tutor-btn-block">
                                                        Sign In </button>

                                                </form>
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                        var {
                                                            __
                                                        } = wp.i18n;
                                                        var loginModal = document.querySelector('.tutor-modal.tutor-login-modal');
                                                        var errors = [];
                                                        if (loginModal && errors.length) {
                                                            loginModal.classList.add('tutor-is-active');
                                                        }
                                                    });
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tutor-course-details-widget">
                                <h3
                                    class="tutor-course-details-widget-title tutor-fs-5 tutor-fw-bold tutor-color-black tutor-mb-16">
                                    Tags </h3>
                                <div class="tutor-course-details-widget-tags">
                                    <ul class="tutor-tag-list">
                                        <li><a href=" https://weblearnbd.net/wp/eduker/course-tag/big-data/ "> Big data
                                            </a></li>
                                        <li><a href=" https://weblearnbd.net/wp/eduker/course-tag/data-analysis/ "> Data
                                                analysis </a></li>
                                        <li><a href=" https://weblearnbd.net/wp/eduker/course-tag/data-modeling/ "> Data
                                                modeling </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <!-- contact area start -->
        <!-- <section class="contact__area pt-115 pb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-11 col-xl-7 col-lg-6">
                                <div class="contact__wrapper">
                                    <div class="section__title-wrapper mb-40">
                                        <h2 class="section__title">Mata Pelajaran {{ $kelas->mapel }}<img
                                                src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
        <!-- contact area end -->
    </main>
@endsection
