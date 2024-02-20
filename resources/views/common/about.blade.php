@extends('layouts.style_guest')

@section('content')



<div class="container my-5">
    <div class="row">
        <div class="col-md-12 pt-3">
            <div class="sec-title">
                <h1 class="h4 mb-4"> <span style="color:#313961;font-weight: 600; padding-bottom:8px; border-bottom: 4px solid #313961; width: 50%;">About</span> <b style="color: #ff815e;">SciAssetHub</b>
                </h1>
            </div>
            <p style="line-height: 2; text-align: justify;text-justify: inter-word;">

                SciAssetHub is a user-centered platform developed as a web application system for UWC
                postgraduate students and staff members, specifically researchers. The system aims to
                facilitate efficient and sustainable asset management (such as chemicals and equipment)
                within science-related faculties at UWC.
                <br />

                SciAssetHub intends to keep all the registered members (subscribers) informed about existing
                and newly added assets in the system, through a Publish-Subscribe mechanism. Furthermore,
                the system incorporates immersive aspects, utilizing technologies such as 3D and Augmented
                Reality (AR), to provide a more engaging and interactive experience for researchers who will
                be using the intended equipment for the first time. Finally, SciAssetHub allows
                (postgraduate) students to request assets and rent storage space for chemical substances,
                while staff members can also request and add assets and available storage for rent.

            </p>
        </div>

        <br />


        <div class="py-4">
            <div style="background-color: #fff;" class="py-5">
                <div class="container">
                    <div class="row">

                        <!-- <div class="col-lg-1 col-md-1 col-sm-0 pb-5 mb-5">
                        </div> -->
                        <!-- <div class="col-lg-4 col-md-4 col-sm-12 pb-5 mb-5">
                            <center>
                                <div class="panel-heading pb-2 image--cover center my-5">
                                    <div class="item">
                                        <center>
                                            <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1701515313/Sciassethub/img/iixg44luxgdgdbpsolm9.png" alt="" class="image--cover" />
                                        </center>
                                    </div>
                                    <div class="pt-3 mx-0">
                                        <h5>
                                            <b>
                                                <center>
                                                    Ms. Kessel Okinga
                                                </center>
                                            </b>
                                        </h5>
                                        <p>
                                            <center>
                                                <div><small><i>One of the co-founders</i></small></div>

                                                <div>Co-founder and developer</div>
                                            </center>
                                        </p>
                                    </div>
                                </div>
                            </center>
                        </div> -->
                        <div class="col-lg-1 col-md-1 col-sm-0 pb-5 mb-5">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12 align-self-center">
                            <h4>

                            </h4>
                            <p style="line-height: 2;text-align: justify;text-justify: inter-word;">
                            <div><small><i style="line-height: 2; text-align: justify;text-justify: inter-word;">One of the co-founders</i></small></div> SciAssetHub aims to improve sustainability in institutions by revolutionizing manual asset management. The platform enhances asset availability through a publish-subscribe mechanism and offers an innovative feature for viewing assets with AR or 3D models, enhancing user interaction. Users can request assets and receive notifications through asynchronous messaging, while AI integration improves content search-ability, minimizing typographical errors. </p>
                            <p style="line-height: 2; text-align: justify;text-justify: inter-word;">This optimized approach boosts research asset utilization, leading to enhanced academic research output and cost savings by reducing disposal costs for expired chemicals.

                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 pt-3">
        <div class="sec-title">
            <h1 class="h4 mb-4">
                <span style="color:#313961;font-weight: 600; padding-bottom:8px; border-bottom: 4px solid #313961; width: 50%;">Our story</span>
            </h1>
        </div>
        <p style="line-height: 2; text-align: justify;text-justify: inter-word;">
            A preliminary investigation at UWC reveals that researchers face difficulties accessing
            potentially mutual assets, leading to the acquisition of resources from external sources, even
            when they are available within the university. Consequently, this leads to under-utilization of
            assets, reduced throughput rate, and increased costs for the disposal of unused chemicals.
            Hence the motivation for introducing and developing SciAssetHub. The development process
            followed a participatory design approach, involving potential stakeholders (users) in the
            design process to help ensure that the outcome of the developed system meets their needs and
            expectations.
        </p>
    </div>

    <div class="col-md-12 pt-3">
        <div class="sec-title">
            <h1 class="h4 mb-4">
                <span style="color:#313961;font-weight: 600; padding-bottom:8px; border-bottom: 4px solid #313961; width: 50%;">Our Vision and Mission</span>
            </h1>
        </div>
        <p style="line-height: 2; text-align: justify;text-justify: inter-word;">
            Our mission for the SciAssetHub platform is to foster collaborative research excellence at
            UWC through innovative asset sharing and management. Our vision is to elevate asset
            accessibility by promoting awareness of asset availability within UWC departments, and
            providing immersive experiences through the utilization of 3D and AR technologies
            concerning specific equipment, thereby averting potential accidents, mishandling, and damage to
            expensive equipment.
        </p>
    </div>
</div>







@endsection