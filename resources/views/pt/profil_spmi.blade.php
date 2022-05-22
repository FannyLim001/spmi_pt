@extends('pt_layout.main')

@section('content')
<div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="template/assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        {{ $pt->nama_pt }}
                    </h5>
                    <p class="mb-0 font-weight-normal text-sm">
                        {{ $pt->nm_bp }}
                    </p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="row">
                <div class="col-12 mt-4">
                <div class="tab-content" id="myTabContent">
                        <div class="mb-5 ps-3" class="tab-pane fade show active" id="hasil" role="tabpanel">
                            <h6 class="mb-1">Hasil</h6>
                            <p class="text-sm">Hasil SPMI</p>
                            @foreach ($data as $d )
                            <div class="mb-2 ps-3">
                                <p class="text-justify">
                                    {{ $d->hasil }} 
                                </p>
                            </div>
                            @endforeach
                        </div>
                        <div class="mb-3 ps-3" class="tab-pane fade" id="rekomendasi" role="tabpanel">
                            <h6 class="mb-1">Rekomendasi</h6>
                            <p class="text-sm">Rekomendasi SPMI</p>
                            @foreach ($data as $d )
                            <div class="mb-2 ps-3">
                                <p class="text-justify">
                                    {{ $d->rekomendasi }}
                                </p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- <div class="tab-content" id="myTabContent">
                        <div class="mb-5 ps-3" class="tab-pane fade show active" id="hasil" role="tabpanel">
                            <h6 class="mb-1">Hasil</h6>
                            <p class="text-sm">Hasil SPMI</p>
                            <div class="mb-2 ps-3">
                                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet molestie arcu, vel mattis purus viverra eget. Fusce porttitor ullamcorper erat, vitae lobortis quam facilisis ac. Praesent mollis gravida massa, eu blandit est pretium a. Vestibulum id orci id diam lobortis fermentum vel sit amet tortor. Suspendisse dictum semper ex nec sodales. Donec metus libero, varius et mollis non, dignissim id sem. Maecenas ultricies nunc mollis, tincidunt ex ut, efficitur eros. Donec blandit imperdiet lectus, at ornare turpis blandit sed. Nullam vel placerat velit.
                                    <br><br>
                                    Phasellus tortor augue, dapibus a volutpat sed, sollicitudin at lorem. Donec rhoncus euismod nunc, nec sagittis est iaculis quis. Pellentesque ac felis sit amet ligula finibus convallis non id libero. Aliquam vel dictum massa, vel mollis quam. Fusce facilisis malesuada est vitae rhoncus. Morbi vel facilisis nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut faucibus elit tellus, sit amet mattis enim volutpat a. Integer vitae augue posuere, imperdiet est ac, lobortis turpis. Vivamus rutrum fermentum ex, id dapibus nibh porttitor vel. Cras ac sodales est.
                                </p>
                            </div>
                        </div>
                        <div class="mb-3 ps-3" class="tab-pane fade" id="rekomendasi" role="tabpanel">
                            <h6 class="mb-1">Rekomendasi</h6>
                            <p class="text-sm">Rekomendasi SPMI</p>
                            <div class="mb-2 ps-3">
                                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet molestie arcu, vel mattis purus viverra eget. Fusce porttitor ullamcorper erat, vitae lobortis quam facilisis ac. Praesent mollis gravida massa, eu blandit est pretium a. Vestibulum id orci id diam lobortis fermentum vel sit amet tortor. Suspendisse dictum semper ex nec sodales. Donec metus libero, varius et mollis non, dignissim id sem. Maecenas ultricies nunc mollis, tincidunt ex ut, efficitur eros. Donec blandit imperdiet lectus, at ornare turpis blandit sed. Nullam vel placerat velit.
                                    <br><br>
                                    Phasellus tortor augue, dapibus a volutpat sed, sollicitudin at lorem. Donec rhoncus euismod nunc, nec sagittis est iaculis quis. Pellentesque ac felis sit amet ligula finibus convallis non id libero. Aliquam vel dictum massa, vel mollis quam. Fusce facilisis malesuada est vitae rhoncus. Morbi vel facilisis nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut faucibus elit tellus, sit amet mattis enim volutpat a. Integer vitae augue posuere, imperdiet est ac, lobortis turpis. Vivamus rutrum fermentum ex, id dapibus nibh porttitor vel. Cras ac sodales est.
                                </p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection