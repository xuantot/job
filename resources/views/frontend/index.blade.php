@extends('frontend.master.master')
@section('title', "Job Board")
@section('content')

<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="slider_text">
                        <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">4536+ Jobs listed</h5>
                        <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Find your Dream Job</h3>
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">We provide online instant cash loans with quick approval that suit your term length</p>
                        <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                            <a href="#" class="boxed-btn3">Upload your Resume</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
        <img src="img/banner/illustration.png" alt="">
    </div>
</div>
<!-- slider_area_end -->

<!-- catagory_area -->
<div class="catagory_area">
    <div class="container">
        <form action="/" method="get">
            <div class="row cat_search ">
                <div class="col-lg-8 col-md-4">
                    <div class="single_input">
                        <input name="name" type="text" placeholder="Search keyword">
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div col-md-12 class="job_btn">
                        <button type="submit" class="boxed-btn3">Find Job</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--/ catagory_area -->

<!-- popular_catagory_area_start  -->
<div class="popular_catagory_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title mb-40">
                    <h3>Popolar Categories</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($categorys as $category)
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a onchange="update_category('{{$category->id}}')"  href="/?category={{$category->id}}"><h4>{{ $category->name }}</h4></a>

                    <p> <span>{{ $category->jobs->count('company_id') }}</span> Available position</p>
                </div>
            </div>
            @endforeach


        </div>
    </div>
                </div>
<!-- popular_catagory_area_end  -->

<!-- job_listing_area_start  -->


<div class="job_listing_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section_title">
                    <h3>Job Listing</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="brouse_job text-right">
                    <a href="/job" class="boxed-btn4">Browse More Job</a>
                </div>
            </div>
        </div>
        <div class="job_lists">
            <div class="row">
                @foreach ($jobs as $job)
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">

                                    <a href="/job/detail/{{ $job->id }}"> <img src="../backend/img/{{ $job->logo }}" alt="" style="width: 48px;height: 48px;"></a>
                                </div>
                                <div class="jobs_conetent">
                                    <a href="/job/detail/{{ $job->id }}"><h4>{{ $job->job_name }}</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> {{ $job->company->address }}</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> {{ $job->nature}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                    <a href="/job/detail/{{ $job->id }}" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Date line: {{ Carbon\Carbon::parse($job->updated_at )->format("d-m-y")}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                   {{$jobs->links()}}
                </div>


            </div>
            <div align='center'>
                <ul class="pagination">
                    {{ $jobs->links() }}
                </ul>
            </div>
        </div>
    </div>

</div>
<div class="top_companies_area">
    <div class="container">
        <div class="row align-items-center mb-40">
            <div class="col-lg-6 col-md-6">
                <div class="section_title">
                    <h3>Top Companies</h3>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="brouse_job text-right">
                    <a href="jobs.html" class="boxed-btn4">Browse More Job</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_company">
                    <div class="thumb">
                        <img src="img/svg_icon/5.svg" alt="">
                    </div>
                    <a href="jobs.html"><h3>Snack Studio</h3></a>
                    <p> <span>50</span> Available position</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_company">
                    <div class="thumb">
                        <img src="img/svg_icon/4.svg" alt="">
                    </div>
                    <a href="jobs.html"><h3>Snack Studio</h3></a>
                    <p> <span>50</span> Available position</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_company">
                    <div class="thumb">
                        <img src="img/svg_icon/3.svg" alt="">
                    </div>
                    <a href="jobs.html"><h3>Snack Studio</h3></a>
                    <p> <span>50</span> Available position</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_company">
                    <div class="thumb">
                        <img src="img/svg_icon/1.svg" alt="">
                    </div>
                    <a href="jobs.html"><h3>Snack Studio</h3></a>
                    <p> <span>50</span> Available position</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonial_area  ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-40">
                    <h3>Testimonial</h3>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    @foreach ($testimonial as $item)
                    <div class="single_carousel">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="single_testmonial d-flex align-items-center">
                                    <div class="thumb">
                                        <img width="100" height="100" src="http://127.0.0.1:8000/dataCustomer/avatarTestimonial/{{$item->avatar}}" alt="">
                                        <div class="quote_icon">
                                            <i class="Flaticon flaticon-quote"></i>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <p>"{{$item->content}}"</p>
                                        <span>- {{$item->name}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /testimonial_area  -->

@endsection
