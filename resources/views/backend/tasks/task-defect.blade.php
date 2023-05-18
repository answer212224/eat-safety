<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>


    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>




    <div class="row layout-top-spacing">

    </div>

    <div class="row">
        <div class="d-grid  mx-auto">

            @foreach ($defectsGroup as $defects)
                <a class="btn btn-outline-secondary my-1" data-bs-toggle="collapse"
                    href="#collapseExample{{ $defects[0]->id }}" aria-expanded="false">
                    {{ $defects[0]->restaurantWorkspace->area }}
                </a>
                <div class="collapse my-1" id="collapseExample{{ $defects[0]->id }}">
                    @foreach ($defects as $taskHasDefect)
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-12">
                            <div class="card style-2 mb-4">
                                @foreach ($taskHasDefect->images as $image)
                                    <a href="{{ asset('storage/' . $image) }}"><img
                                            src="{{ asset('storage/' . $image) }}" class="card-img-top my-1"
                                            alt="..."></a>
                                @endforeach


                                <div class="card-body px-0 pb-0">
                                    <h5 class="card-title mb-3">{{ $taskHasDefect->defect->group }}</h5>
                                    <h6>{{ $taskHasDefect->defect->title }}</h6>
                                    <p>{{ $taskHasDefect->defect->description }}</p>
                                    <div class="media mt-4 mb-0 pt-1">
                                        {{-- <img src="" class="card-media-image me-3" alt=""> --}}
                                        <div class="media-body">
                                            <h4 class="media-heading mb-1">{{ $taskHasDefect->user->name }}</h4>
                                            <p class="media-text">{{ $taskHasDefect->created_at }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach


        </div>







    </div>

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

        </x-slot>
        <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
