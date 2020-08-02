@extends('frontend.master.master')
@section('title', "Job")

@section('content')

<!-- bradcam_area  -->
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
                                                        <option >Location</option>
                                                        <option  value="ha noi">Hà Nội</option>
                                                        <option  value="ho chi minh">HCM </option>
                                                        <option  value="khac">Khác </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single_field">
                                                    <select name="category" class="wide">
                                                        <option >Category</option>
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
                                                    <select  class="wide">
                                                        <option data-display="Job type">Job type</option>
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
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="wide">
                                            <option data-display="Gender">Gender</option>
                                            <option value="1">male</option>
                                            <option value="2">female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="range_wrap">
                        <label for="amount">Price range:</label>
                        <div id="slider-range"></div>
                        <p>
                            <input type="text" id="amount" readonly
                                style="border:0; color:#7A838B; font-size: 14px; font-weight:400;">
                        </p>
                    </div>
                    <div class="reset_btn">
                        <button class="btnsearch boxed-btn3 w-100" type="submit">Search</button>
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
                                    <select>
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
                        <div class="col-lg-12 col-md-12">
                            <div class="single_jobs white-bg d-flex justify-content-between">
                                <div class="jobs_left d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="img/svg_icon/1.svg" alt="">
                                    </div>
                                    <div class="jobs_conetent">
                                        <a href="/job/detail">
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
                                        <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                        <a href="/job/detail" class="boxed-btn3">Apply Now</a>
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
    // $(function () {
    //     $("#slider-range").slider({
    //         range: true,
    //         min: 0,
    //         max: 24600,
    //         values: [750, 24600],
    //         slide: function (event, ui) {
    //             $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1] + "/ Year");
    //         }
    //     });
    //     $("#amount").val("$" + $("#slider-range").slider("values", 0) +
    //         " - $" + $("#slider-range").slider("values", 1) + "/ Year");
    // });

    $('#search').on('keyup',function(){
        $value = $(this).val();
        $.ajax({
            _token: "{{ csrf_token() }}",
            type:'get',
            url:'{{URL::to('job/search')}}',
            data:{
                'search':$value
            },
            success:function(data){
                $('#data-search').html(data);
            }
        });
    })

</script>
@endsection
