@extends('layouts.app')

@section('main')
    <div class="width-80-main">
        <div class="single-cover">
            <img src="{{ $single_comic['thumb'] }}" alt="">
            <p>View Gallery</p>
        </div>
    </div>

    <div class="width-80-main d-flex info">
        <div class="left-side col-7">
            <h3>
                {{ $single_comic['title'] }}
            </h3>

            <div class="green-box d-flex justify-content-between">
                <h5>
                    <span class="text-green">U.S. Price:</span> {{ $single_comic['price'] }}
                </h5>
                <div class="d-flex">
                    <h5 class="text-green">AVAILABLE</h5>
                    <div class="linea"></div>
                    <h5 class="b-left">Check Availability</h5>
                </div>

            </div>
            <p class="py-3">
                {{ $single_comic['description'] }}
            </p>
        </div>

        <div class="right-side col-5">
            <div class="text-center">
                <h6>ADVERTISEMENT</h6>
                <img src="{{ asset('images/pubbadv.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="gray-box">
        <div class="container d-flex width-80-main">
            <div class="d-flex flex-column pe-3">
                <div class="border-bottom">
                    <h3 class="mb-4">Talent</h3>
                </div>

                <div class="d-flex flex-column border-bottom">
                    <div class="d-flex py-2">
                        <div class="d-block col-3">Art by:</div>
                        <div class="text-primary font-small">
                            @foreach ($single_comic['artists'] as $element)
                                {{ $element }}
                                @if (!$loop->last)
                                ,
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column border-bottom">
                    <div class="d-flex py-2">
                        <div class="d-block col-3">Written by:</div>
                        <div class="text-primary font-small">
                            @foreach ($single_comic['writers'] as $element)
                                {{ $element }}
                                @if (!$loop->last)
                                ,
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 d-flex flex-column ps-3">
                <div class="border-bottom">
                    <h3 class="mb-4">Specs</h3>
                </div>

                <div class="d-flex py-3 border-bottom">
                    <div class="col-4">Series:</div>
                    <div class="col-4 text-primary">{{ strtoupper($single_comic['series']) }}</div>
                </div>

                <div class="d-flex py-3 border-bottom">
                    <div class="col-4">U.S. Price:</div>
                    <div class="col-4">{{ $single_comic['price'] }}</div>
                </div>

                <div class="d-flex py-3 border-bottom">
                    <div class="col-4">On Sale Date:</div>
                    <div class="col-4">{{ date('M j Y', strtotime($single_comic['sale_date'])) }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
