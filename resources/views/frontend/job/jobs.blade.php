@extends('frontend.master.master')
@section('title', "Job")

@section('content')
<!-- bradcam_area  -->
<style>
.checklike{
        background: #00D363 !important;
    }
/* .fa-heart{
    color: #EFFDF5
} */
</style>
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>4536+ Jobs Available</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

    <!-- job_listing_area_start  -->
    <div class="job_listing_area plus_padding">
        <div class="container">
            <div class="row">

                    <div class="col-lg-3">
                        <form action="/job" method="get">
                            <div class="job_filter white-bg">
                                <div class="form_inner white-bg">
                                    <h3>Filter</h3>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="single_field">
                                                    <input name="search" type="text" placeholder="Search keyword">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single_field">
                                                    <select name="location"  class="wide">
                                                        <option value="">Location</option>
                                                        <option  value="ha noi">Hà Nội</option>
                                                        <option  value="ho chi minh">HCM </option>
                                                        <option  value="khac">Khác </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single_field">
                                                    <select name="category" class="wide">
                                                        <option value="">Category</option>
                                                        @foreach ($categories as $item)
                                                            <option  value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                        {{--

                                                        <option value="2">Category 2 </option> --}}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single_field">
                                                    <select name="nature"  class="wide">
                                                        <option value="">Job type</option>
                                                        <option value="full time">full time</option>
                                                        <option value="part time">part time </option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>

                                </div>

                                <div class="reset_btn">
                                    <button  class="boxed-btn3 w-100" type="submit">Search</button>
                                </div>
                            </div>
                         </form>
                    </div>





            <div class="col-lg-9">
                <div class="recent_joblist_wrap">
                    <div class="recent_joblist white-bg ">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4>Job Listing</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="serch_cat d-flex justify-content-end">
                                    <select name="sort" class="input_value">
                                        <option data-display="Most Recent">Most Recent</option>
                                        <option value="1">Marketer</option>
                                        <option value="2">Wordpress </option>
                                        <option value="4">Designer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="job_lists m-0">
                    <div class="row">
                        @foreach ($jobs as $item)
                        {{-- {{$item->Like_job->id}} --}}
                            <div class="col-lg-12 col-md-12">
                                <div class="single_jobs white-bg d-flex justify-content-between">
                                    <div class="jobs_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="../backend/img/{{ $item->logo }}" style="width: 48px;height: 48px;" alt="">
                                        </div>
                                        <div class="jobs_conetent">
                                            <a href="/job/detail/{{ $item->id }}">
                                            <h4>{{$item->job_name}}</h4>
                                            </a>
                                            <div class="links_locat d-flex align-items-center">
                                                <div class="location">
                                                <p> <i class="fa fa-map-marker"></i> {{$item->company->address}}</p>
                                                </div>
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>{{$item->nature}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jobs_right">
                                        <div class="apply_now">
                                        <a data-wishlish="{{ $item->isCurrentUserWishList }}" data-user-id="{{Auth::guard('customer_web')->id()}}" data-job-id="{{$item->id}}"
                                            class="heart_mark
                                            {{ $item->isCurrentUserWishList ? "checklike " : " " }}
                                            input-like {{$item->id}}" href="javascript:void(0)"> <i class="fa fa-heart"></i> </a>
                                            <a href="/job/detail/{{ $item->id }}" class="boxed-btn3">Apply Now</a>
                                        </div>
                                        <div class="date">
                                        <p>Date line: {{ Carbon\Carbon::parse($item->updated_at)->format("d-m-y")}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {{$jobs->links()}}
                        </div>
                    </div>
                </div>

            </div>


    </div>
    </div>
</div>
<!-- job_listing_area_end  -->
@endsection

@section('scrip')
<script>
    $(".input-like").on("click", function(e) {
        const self = $(this);
        const user_id = $(this).data('user-id')
        const job_id = $(this).data('job-id')
        $.ajax({
            url: '/job/like',
            method: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                job_id: job_id,
            },
    }).done(data => {

        if (data.isDelete) {
            return self.removeClass("checklike")
        }

        if (!data.isDelete) {
            return self.addClass("checklike")
        }
    })
})
// $(".input-like").on("click", function(e){
//     if ($(".input-like").hasClass("checklike"))
//         $(".input-like").removeClass("checklike");
//     else
//         $(".input-like").addClass("checklike");


//     // $(".input-like").toggleClass("checklike");
// })

</script>
@endsection
