@extends('layouts.app')
@section('title', $property['name'] )
@section("customcss")
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endsection
@section('section')
<body class="home_page">
    <!----- Room Slider ----->
        <section class="hotel_details_main">
            <!----- Room Images ----->
            <div class="hotel_images">
                @foreach($property['images'] as $key)
                <div class="hotel_img w-25">
                    <img width="330" height="220" src="{{ $key['large'] }}" alt="" class="w-100">
                </div>
                @endforeach
            </div>
            <div class="container">
                <div class="row">
                    <!----- Hotel Details ----->
                    <div class="hotel_details">

                        <div class="left_details">

                            <!----- Hotel Decription ----->
                            <div class="hotel_decription">
                                @if(Session::has('success'))
                                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                                @endif

                                @if(Session::has('error'))
                                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                                @endif

                                <p class="hotel_city">{{ $property['city_name'] }}</p>
                                <h1 class="hotel_name">{{ $property['name'] }}<div class="badroom">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="25" height="25" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512
                                            512" xml:space="preserve"
                                            class="hovered-paths"><g><path
                                                    d="M53.333
                                                    202.667h53.333a10.686 10.686
                                                    0 0
                                                    1-8.405-4.096c-2.027-2.581-2.731-5.952-1.941-9.152l6.635-26.517a31.95
                                                    31.95 0 0 1
                                                    31.04-24.235h68.672c17.643 0
                                                    32 14.357 32 32V192c0
                                                    5.888-4.779 10.667-10.667
                                                    10.667h64c-5.888
                                                    0-10.667-4.779-10.667-10.667v-21.333c0-17.643
                                                    14.357-32 32-32h68.672a31.95
                                                    31.95 0 0 1 31.04
                                                    24.235l6.635 26.517a10.606
                                                    10.606 0 0 1-1.941 9.152
                                                    10.687 10.687 0 0 1-8.405
                                                    4.096h53.333c5.888 0
                                                    10.667-4.779
                                                    10.667-10.667v-64c0-29.397-23.936-53.333-53.333-53.333H96c-29.397
                                                    0-53.333 23.936-53.333
                                                    53.333v64c0 5.888 4.778
                                                    10.667 10.666
                                                    10.667zM458.667
                                                    224H53.333C23.936 224 0
                                                    247.936 0 277.333v149.333c0
                                                    5.888 4.779 10.667 10.667
                                                    10.667s10.667-4.779
                                                    10.667-10.667v-32h469.333v32c0
                                                    5.888 4.779 10.667 10.667
                                                    10.667s10.667-4.779
                                                    10.667-10.667V277.333C512
                                                    247.936 488.064 224 458.667
                                                    224zm32
                                                    149.333H21.333V352h469.333v21.333z"
                                                    fill="#427ae4"
                                                    data-original="#427ae4"
                                                    class="hovered-path"></path></g>
                                                </svg>
                                        {{ $property['total_bedrooms'] }}</div>
                                    <div class="price_book">
                                        <span class="hotel_price">{{ $property['base_night_price']}}£</span>
                                        <button type="btn"
                                            data-bs-toggle="modal"
                                            data-bs-target="#book_now">Book Now</button>
                                    </div>
                                </h1>
                                <div class="hotel_review">
                                    @for($i=0; $i < $property['quality_of_home']; $i++)
                                    <i class="fa-solid fa-star 123"></i>
                                    @endfor
                                    @for($i=0; $i < 5-$property['quality_of_home'] ; $i++)
                                    <i class="fa-solid fa-star light 123"></i>
                                    @endfor

                                </div>
                                <p class="hotel_decri"><b>Description</b>
                                    <br><br>
                                {!! nl2br($property['description']) !!}</p>
                            </div>

                            <!----- Hotel Address ----->
                            <div class="address">
                                <h2>Address</h2>
                                <div class="street_name">
                                    <span class="dtl_heading">Street Name</span>
                                    <span class="dtl_decri">{{ $property['address']['street_name'] }}</span>
                                </div>
                                <div class="city">
                                    <span class="dtl_heading">City</span>
                                    <span class="dtl_decri">{{ $property['address']['city'] }}</span>
                                </div>
                                <div class="neighbourhood">
                                    <span class="dtl_heading">Neighbourhood</span>
                                    <span class="dtl_decri">{{ $property['address']['neighbourhood'] }}</span>
                                </div>
                                <div class="postcode">
                                    <span class="dtl_heading">PostCode</span>
                                    <span class="dtl_decri">{{ $property['address']['postcode'] }}</span>
                                </div>
                                <div class="country">
                                    <span class="dtl_heading">Country</span>
                                    <span class="dtl_decri">{{ $property['address']['country'] }}</span>
                                </div>
                            </div>

                            <!----- Hotel Amenities ----->
                            <div class="amenities">
                                <h2>Amenities</h2>
                                <div class="amenities_name">
                                    @foreach($property['amenities'] as $key)
                                    <p><i class="fa-solid fa-check"></i> {{ $key['name'] }}</p>
                                    @endforeach
                                </div>
                            </div>

                            <!----- Hotel Rules ----->
                            <div class="rules">
                                <h2>Hotel Rules</h2>
                                <div class="rull_list">
                                    <ul>
                                        <li>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs"
                                                width="100" height="100" x="0"
                                                y="0" viewBox="0 0 512 512"
                                                style="enable-background:new 0 0
                                                512 512" xml:space="preserve"
                                                class=""><g><path d="M466.421
                                                        110.111c-3.152-4.535-9.384-5.657-13.919-2.504-4.535
                                                        3.152-5.656 9.383-2.505
                                                        13.918 65.153 93.75
                                                        53.75 220.486-27.115
                                                        301.352-92.016
                                                        92.018-241.739
                                                        92.018-333.756
                                                        0-44.575-44.574-69.123-103.84-69.123-166.878S44.549
                                                        133.695 89.125
                                                        89.12c81.523-81.522
                                                        208.91-92.474
                                                        302.894-26.034 4.511
                                                        3.188 10.75 2.116
                                                        13.938-2.393 3.188-4.51
                                                        2.116-10.75-2.394-13.938C354.863
                                                        12.328 295.117-3.983
                                                        235.348.827c-60.462
                                                        4.866-117.415
                                                        31.2-160.367
                                                        74.151C26.629 123.33.001
                                                        187.618.001
                                                        255.999S26.63 388.666
                                                        74.981 437.02C123.334
                                                        485.372 187.622 512
                                                        256.002
                                                        512s132.668-26.629
                                                        181.021-74.98c42.699-42.7
                                                        69.005-99.307
                                                        74.07-159.391
                                                        5.007-59.372-10.859-118.863-44.672-167.518z"
                                                        fill="#FF0000"
                                                        data-original="#FF0000"
                                                        class=""></path><path
                                                        d="m437.127
                                                        75.081-.189-.19c-3.899-3.91-10.232-3.918-14.142-.018-3.911
                                                        3.9-3.919 10.232-.019
                                                        14.142l.189.19a9.97 9.97
                                                        0 0 0 7.08 2.938c2.555 0
                                                        5.11-.973 7.062-2.92
                                                        3.911-3.899
                                                        3.919-10.231.019-14.142zM376.576
                                                        165.601h-85.081c-9.609
                                                        0-17.428-7.818-17.428-17.428
                                                        0-5.523-4.478-10-10-10s-10
                                                        4.477-10 10c0 20.638
                                                        16.79 37.428 37.428
                                                        37.428h85.081c9.609 0
                                                        17.428 7.818 17.428
                                                        17.428v4.635c0 5.523
                                                        4.477 10 10 10 5.522 0
                                                        10-4.477
                                                        10-10v-4.635c0-20.638-16.79-37.428-37.428-37.428zM385.085
                                                        404.878 107.122
                                                        126.916a10.002 10.002 0
                                                        0 0-14.94.899c-64.785
                                                        82.595-57.588 200.933
                                                        16.741 275.262 40.358
                                                        40.358 93.688 60.924
                                                        147.228 60.924 45.066 0
                                                        90.284-14.574
                                                        128.034-44.183a10 10 0 0
                                                        0
                                                        .9-14.94zm-196.103-156.88h10.938l36
                                                        36h-46.938v-36zm67.161
                                                        196.009c-48.389-.002-96.6-18.593-133.077-55.071-64.492-64.492-73.076-165.631-21.868-239.658l78.721
                                                        78.721h-71.917c-5.522
                                                        0-10 4.477-10 10v56c0
                                                        5.523 4.478 10 10
                                                        10H255.92l106.804
                                                        106.804c-32.156
                                                        22.244-69.42
                                                        33.206-106.581
                                                        33.204zm-87.161-196.008v36h-50.979v-36h50.979zM199.543
                                                        151.457a10.06 10.06 0 0
                                                        0-7.07-2.93c-2.63 0-5.21
                                                        1.07-7.07 2.93-1.859
                                                        1.86-2.93 4.44-2.93
                                                        7.07s1.07 5.21 2.93
                                                        7.07c1.86 1.86 4.44 2.93
                                                        7.07 2.93s5.209-1.069
                                                        7.07-2.93c1.859-1.86
                                                        2.93-4.44
                                                        2.93-7.07s-1.07-5.21-2.93-7.07z"
                                                        fill="#FF0000"
                                                        data-original="#FF0000"
                                                        class=""></path><path
                                                        d="M403.083
                                                        108.92c-74.33-74.33-192.666-81.527-275.262-16.741a10
                                                        10 0 0 0-.9
                                                        14.939l35.104
                                                        35.104c3.906 3.906
                                                        10.236 3.906 14.143 0
                                                        3.905-3.905 3.905-10.237
                                                        0-14.142l-26.886-26.886c74.028-51.208
                                                        175.167-42.624 239.657
                                                        21.868 64.492 64.492
                                                        73.076 165.631 21.868
                                                        239.658l-58.721-58.721h51.917c5.522
                                                        0 10-4.477
                                                        10-10v-56c0-5.523-4.478-10-10-10H276.336c-.08
                                                        0-.158.01-.238.012l-52.678-52.679c-3.904-3.905-10.236-3.905-14.143
                                                        0-3.905 3.905-3.905
                                                        10.237 0 14.142L404.883
                                                        385.08a10 10 0 0 0
                                                        14.941-.899c64.786-82.595
                                                        57.589-200.933-16.741-275.261zm-30.099
                                                        139.079h21.02v36h-21.02v-36zm-76.898
                                                        0h56.897v36h-20.897l-36-36z"
                                                        fill="#FF0000"
                                                        data-original="#FF0000"
                                                        class=""></path></g></svg>
                                            No Smoking</li>
                                        <li>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs"
                                                width="100" height="100" x="0"
                                                y="0" viewBox="0 0 512 512"
                                                style="enable-background:new 0 0
                                                512 512" xml:space="preserve"
                                                class=""><g><path d="M329.65
                                                        174.901a10.098 10.098 0
                                                        0
                                                        0-1.49-3.599c-.37-.55-.79-1.06-1.25-1.521-.46-.46-.97-.88-1.52-1.25-.54-.359-1.12-.659-1.72-.909-.61-.25-1.24-.45-1.87-.58-1.29-.25-2.62-.25-3.91
                                                        0-.64.13-1.27.33-1.87.58-.61.25-1.19.55-1.73.909-.55.37-1.06.79-1.52
                                                        1.25-.46.461-.88.971-1.24
                                                        1.521a10.122 10.122 0 0
                                                        0-1.69 5.549 10.158
                                                        10.158 0 0 0 1.69
                                                        5.548c.36.551.78 1.061
                                                        1.24 1.521a10.08 10.08 0
                                                        0 0 7.07 2.93c.65 0
                                                        1.31-.06
                                                        1.96-.189a10.217 10.217
                                                        0 0 0 3.59-1.5 9.57 9.57
                                                        0 0 0 1.52-1.24 9.896
                                                        9.896 0 0 0 2.17-3.25
                                                        9.84 9.84 0 0 0
                                                        .76-3.82c0-.649-.06-1.31-.19-1.95z"
                                                        fill="#FF0000"
                                                        data-original="#FF0000"
                                                        class=""></path><path
                                                        d="M493.569
                                                        350.146c11.954-30.037
                                                        18.019-61.769
                                                        18.019-94.417
                                                        0-58.185-20.07-115.133-56.52-160.362a259.422
                                                        259.422 0 0
                                                        0-38.795-38.794C371.003
                                                        20.092 314.055 0 255.917
                                                        0 187.628 0 123.424
                                                        26.605 75.13 74.915
                                                        26.841 123.22.248
                                                        187.435.248 255.729c0
                                                        58.186 20.07 115.134
                                                        56.52 160.362a259.422
                                                        259.422 0 0 0 38.795
                                                        38.794c45.222 36.443
                                                        102.17 56.514 160.355
                                                        56.514 32.378 0
                                                        63.868-5.968
                                                        93.694-17.731C366.304
                                                        505.22 386.542 512
                                                        408.337 512c57.023 0
                                                        103.415-46.365
                                                        103.415-103.355
                                                        0-21.697-6.721-41.85-18.183-58.499zM255.917
                                                        491.399c-53.635
                                                        0-106.126-18.498-147.798-52.08a239.368
                                                        239.368 0 0
                                                        1-35.786-35.784c-33.588-41.679-52.086-94.17-52.086-147.806C20.248
                                                        125.748 125.969 20
                                                        255.917 20c53.587 0
                                                        106.079 18.52 147.798
                                                        52.14a239.368 239.368 0
                                                        0 1 35.786 35.784c33.588
                                                        41.68 52.086 94.172
                                                        52.086 147.806 0
                                                        26.52-4.332 52.38-12.895
                                                        77.085-17.038-15.88-38.817-25.469-62.261-27.27l-.207-.017c-.732-.055-1.465-.1-2.2-.14-.156-.009-.312-.02-.468-.027a114.67
                                                        114.67 0 0
                                                        0-2.036-.078c-.197-.006-.393-.016-.59-.021a106.56
                                                        106.56 0 0
                                                        0-2.593-.033c-50.421
                                                        0-92.522 36.273-101.597
                                                        84.093l-40.823-23.428v-55.232l86.045-93.033
                                                        62.874-67.979a10 10 0 0
                                                        0-7.342-16.79H356.06l31.647-31.647c3.905-3.905
                                                        3.905-10.237
                                                        0-14.143-3.905-3.904-10.237-3.904-14.142
                                                        0l-45.79
                                                        45.79H104.34a10.002
                                                        10.002 0 0 0-7.342
                                                        16.79l62.874 67.979
                                                        86.045
                                                        93.033v55.232l-81.79
                                                        46.938a10 10 0 0 0 4.978
                                                        18.673H307.45c3.961
                                                        17.651 12.483 33.891
                                                        24.857 47.239-24.497
                                                        8.404-50.125
                                                        12.655-76.39
                                                        12.655zm26.785-324.549H140.149l-12.939-13.99h257.414l-44.376
                                                        47.979H171.586l-12.94-13.99h124.055c5.523
                                                        0 10-4.478
                                                        10-10s-4.476-9.999-9.999-9.999zm39.049
                                                        53.99-65.833
                                                        71.18-65.833-71.18h131.666zm-16.793
                                                        190.519.001.031.003.116h-98.341l49.296-28.291
                                                        49.041 28.144zM408.337
                                                        492c-43.07
                                                        0-78.617-32.79-82.965-74.698-.023-.224-.037-.448-.059-.672a82.114
                                                        82.114 0 0 1-.296-4.245
                                                        84.359 84.359 0 0
                                                        1-.095-3.74c0-45.995
                                                        37.42-83.415
                                                        83.415-83.415 1.345 0
                                                        2.681.039
                                                        4.011.102.139.007.278.01.416.018a83.29
                                                        83.29 0 0 1
                                                        4.204.326c41.955 4.333
                                                        74.785 39.888 74.785
                                                        82.969-.001 45.961-37.42
                                                        83.355-83.416 83.355z"
                                                        fill="#FF0000"
                                                        data-original="#FF0000"
                                                        class=""></path><path
                                                        d="m422.479 408.645
                                                        29.368-29.368c3.906-3.906
                                                        3.906-10.238.001-14.143-3.905-3.903-10.237-3.904-14.142
                                                        0l-29.369
                                                        29.368-29.369-29.368c-3.905-3.904-10.237-3.904-14.143
                                                        0-3.905 3.905-3.905
                                                        10.237 0 14.143l29.369
                                                        29.368-29.369
                                                        29.368c-3.905
                                                        3.905-3.905 10.237 0
                                                        14.143a9.972 9.972 0 0 0
                                                        7.071 2.929 9.97 9.97 0
                                                        0 0
                                                        7.071-2.929l29.369-29.368
                                                        29.369 29.368c1.953
                                                        1.952 4.512 2.929 7.071
                                                        2.929s5.119-.977
                                                        7.071-2.929c3.905-3.905
                                                        3.905-10.237
                                                        0-14.143l-29.368-29.368z"
                                                        fill="#FF0000"
                                                        data-original="#FF0000"
                                                        class=""></path></g></svg>
                                            No Parties</li>
                                        <li>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs"
                                                width="100" height="100" x="0"
                                                y="0" viewBox="0 0 682.667
                                                682.667"
                                                style="enable-background:new 0 0
                                                512 512" xml:space="preserve"
                                                class=""><g><defs><clipPath
                                                            id="a"
                                                            clipPathUnits="userSpaceOnUse"><path
                                                                d="M0
                                                                512h512V0H0Z"
                                                                fill="#FF0000"
                                                                data-original="#FF0000"></path></clipPath></defs><g
                                                        clip-path="url(#a)"
                                                        transform="matrix(1.33333
                                                        0 0 -1.33333 0
                                                        682.667)"><path d="m0
                                                            0-2.611-6.222c-8.237-19.627-1.461-42.338
                                                            16.183-54.244"
                                                            style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                            transform="translate(91.003
                                                            300.946)"
                                                            fill="none"
                                                            stroke="#FF0000"
                                                            stroke-width="15"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"
                                                            stroke-dasharray="none"
                                                            stroke-opacity=""
                                                            data-original="#FF0000"
                                                            class=""></path><path
                                                            d="m0 0-299.672
                                                            299.672c37.031
                                                            31.289 84.891 50.161
                                                            137.167 50.161
                                                            117.452 0
                                                            212.667-95.213
                                                            212.667-212.666C50.162
                                                            84.891 31.289 37.031
                                                            0 0Zm-375.171
                                                            137.167c0 52.276
                                                            18.873 100.136
                                                            50.161
                                                            137.167L-25.338-25.338C-62.369-56.627-110.229-75.5-162.505-75.5c-117.453
                                                            0-212.666
                                                            95.214-212.666
                                                            212.667z"
                                                            style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                            transform="translate(418.505
                                                            118.833)"
                                                            fill="none"
                                                            stroke="#FF0000"
                                                            stroke-width="15"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"
                                                            stroke-dasharray="none"
                                                            stroke-opacity=""
                                                            data-original="#FF0000"
                                                            class=""></path><path
                                                            d="M0
                                                            0c.05.002.1.008.151.01C1.276.053-.772.041
                                                            0 0Z"
                                                            style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                            transform="translate(145.229
                                                            284.041)"
                                                            fill="none"
                                                            stroke="#FF0000"
                                                            stroke-width="15"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"
                                                            stroke-dasharray="none"
                                                            stroke-opacity=""
                                                            data-original="#FF0000"
                                                            class=""></path><path
                                                            d="M0
                                                            0c0-9.915-9.539-17.953-21.307-17.953-11.767
                                                            0-21.306
                                                            8.038-21.306 17.953
                                                            0 22.775 6.416
                                                            41.174 29.369
                                                            48.712C-2.28 52.313
                                                            0 24.584 0 0Z"
                                                            style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                            transform="translate(329.049
                                                            309.512)"
                                                            fill="none"
                                                            stroke="#FF0000"
                                                            stroke-width="15"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"
                                                            stroke-dasharray="none"
                                                            stroke-opacity=""
                                                            data-original="#FF0000"
                                                            class=""></path><path
                                                            d="M0
                                                            0h-57.248l-.15.007c-23.523-.978-40.654-20.478-40.654-44.045
                                                            0-38.201
                                                            30.144-35.898
                                                            30.144-73.444l-4.982-22.759c-2.134-9.752
                                                            5.291-18.979
                                                            15.274-18.979h24.441a11.612
                                                            11.612 0 0 1 11.584
                                                            10.801l.04.568c.38
                                                            5.43-3.055
                                                            10.412-8.279
                                                            11.944-5.496
                                                            1.613-8.963
                                                            6.988-8.243 12.668
                                                            1.008 7.943 2.402
                                                            16.001 3.995 24.063
                                                            2.162 10.944 12.591
                                                            18.225 23.614
                                                            16.51l77.58-12.064c12.659-1.969
                                                            21.996-12.87
                                                            21.996-25.682v-21.815c0-7.708
                                                            6.249-13.956
                                                            13.957-13.956h29.284c5.993
                                                            0 11.257 4.431
                                                            11.815
                                                            10.398.05.536.051
                                                            1.065.029 1.588"
                                                            style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                            transform="translate(202.627
                                                            284.035)"
                                                            fill="none"
                                                            stroke="#FF0000"
                                                            stroke-width="15"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"
                                                            stroke-dasharray="none"
                                                            stroke-opacity=""
                                                            data-original="#FF0000"
                                                            class=""></path><path
                                                            d="m0
                                                            0-4.961-16.098c-4.013-13.017-15.696-22.055-29.166-22.821"
                                                            style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                            transform="translate(287.356
                                                            323.03)" fill="none"
                                                            stroke="#FF0000"
                                                            stroke-width="15"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"
                                                            stroke-dasharray="none"
                                                            stroke-opacity=""
                                                            data-original="#FF0000"
                                                            class=""></path><path
                                                            d="M0 0c7.812 6.541
                                                            11.03 18.146 11.03
                                                            31.372 0 7.147-5.794
                                                            12.941-12.941
                                                            12.941h-20.648c-4.399
                                                            0-8.408 2.344-10.749
                                                            6.068a46.122 46.122
                                                            0 0 1-39.046
                                                            21.572h-4.522a46.022
                                                            46.022 0 0
                                                            1-17.086-3.288"
                                                            style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                            transform="translate(410.173
                                                            289.66)" fill="none"
                                                            stroke="#FF0000"
                                                            stroke-width="15"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"
                                                            stroke-dasharray="none"
                                                            stroke-opacity=""
                                                            data-original="#FF0000"
                                                            class=""></path><path
                                                            d="M0 0c10.402 9.174
                                                            17.085 22.594 17.085
                                                            37.811v36.404c0
                                                            7.298 5.916 13.213
                                                            13.213 13.213h4.638"
                                                            style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                            transform="translate(340.731
                                                            196.606)"
                                                            fill="none"
                                                            stroke="#FF0000"
                                                            stroke-width="15"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"
                                                            stroke-dasharray="none"
                                                            stroke-opacity=""
                                                            data-original="#FF0000"
                                                            class=""></path><path
                                                            d="M0 0c-43.174
                                                            36.211-98.838
                                                            58.016-159.596
                                                            58.016-137.242
                                                            0-248.5-111.258-248.5-248.5
                                                            0-60.728
                                                            21.784-116.368
                                                            57.962-159.532m24.419-25.286c44.018-39.591
                                                            102.255-63.682
                                                            166.119-63.682
                                                            137.243 0 248.5
                                                            111.257 248.5 248.5
                                                            0 63.864-24.091
                                                            122.101-63.682
                                                            166.119"
                                                            style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                            transform="translate(415.596
                                                            446.484)"
                                                            fill="none"
                                                            stroke="#FF0000"
                                                            stroke-width="15"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"
                                                            stroke-dasharray="none"
                                                            stroke-opacity=""
                                                            data-original="#FF0000"
                                                            class=""></path></g></g></svg>
                                            No Pets</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="right_details">

                            <!----- Hotel Train Station ----->
                            <div class="next_station">
                                <div class="map_img w-100">
                                    <a target="_blank" title="View Image" href="{{ $property['static_map_image'] }}"><img src="{{ $property['static_map_image'] }}" alt=""
                                        class="w-100"></a>
                                </div>
                                <div class="metro_station">
                                    <h4>{{ $property['nearest_metro_station']}}</h4>
                                    <div class="metro_distance">
                                        <p class="distance">Distance</p>
                                        <p class="distance_no">{{ $property['nearest_metro_station_distance']}}</p>
                                    </div>
                                    <div class="metro_time">
                                        <p class="time">Time</p>
                                        <p class="time_no">{{ $property['nearest_metro_station_time']}}</p>
                                    </div>
                                </div>
                                <div class="train_station">
                                    <h4>{{ $property['nearest_train_station']}}</h4>
                                    <div class="metro_distance">
                                        <p class="distance">Distance</p>
                                        <p class="distance_no">{{ $property['nearest_train_station_distance']}}</p>
                                    </div>
                                    <div class="metro_time">
                                        <p class="time">Time</p>
                                        <p class="time_no">{{ $property['nearest_train_station_time']}}</p>
                                    </div>
                                </div>
                            </div>

                            <!----- Hotel Cancellation Policy ----->
                            <div class="cancellation_policy">
                                <h4>Cancellation Policy</h4>
                                <p>{!! $property['cancellation_policy'] !!}</p>
                            </div>

                        </div>

                        <!----- Hotel Room Details ----->
                        <div class="hotel_rooms w-100">
                            <h2>Rooms</h2>
                            <div class="room_details">

                                <div class="bed_room">
                                    <div class="bed_room_img">
                                        @foreach ($property['rooms']['bedrooms'] as $key => $value)
                                            @foreach ($value['images'] as $key )
                                                <div class="room_img">
                                                    <a href="#" type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#bed">
                                                        <img
                                                            src="{{ $key['small'] }}"
                                                            alt=""
                                                            class="w-100">
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    </div>
                                    <h3>Bed Rooms</h3>
                                </div>
                                <div class="outdoor_room">
                                    <div class="outdoor_room_img">
                                        @foreach ($property['rooms']['bathrooms'] as $key => $value)
                                            @foreach ($value['images'] as $key )
                                                <div class="room_img">
                                                    <a href="#" type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#outdoor">
                                                        <img
                                                            src="{{ $key['small'] }}"
                                                            alt=""
                                                            class="w-100">
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    </div>
                                    <h3>Bath Rooms</h3>
                                </div>

                                <div class="living_room">
                                    <div class="living_room_img">
                                        @foreach ($property['rooms']['living_rooms'] as $key => $value)
                                            @foreach ($value['images'] as $key )
                                                <div class="room_img">
                                                    <a href="#" type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#living">
                                                        <img
                                                            src="{{ $key['small'] }}"
                                                            alt=""
                                                            class="w-100">
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    </div>
                                    <h3>Living Rooms</h3>
                                </div>

                                <div class="kitchen_room">
                                    <div class="kitchen_room_img">
                                        @foreach ($property['rooms']['kitchens'] as $key => $value)
                                            @foreach ($value['images'] as $key )
                                                <div class="room_img">
                                                    <a href="#" type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kitchen">
                                                        <img
                                                            src="{{ $key['small'] }}"
                                                            alt=""
                                                            class="w-100">
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    </div>
                                    <h3>Kitchen</h3>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="book_now" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
                        <button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/make_bookings/'.$property['reference']) }}"
                            class="book_now_form" method="post">
                            <div class="date">
                                @csrf
                                <div class="gest_start_date form_common_class">
                                    <label for="">Select Dates</label>
                                    <input required="" type="text" name="daterange" />
                                </div>
                                <div class="gest_end_date form_common_class">
                                    <label for="">Persons</label>
                                    <i class="fa-solid fa-person"></i>
                                    <input required="" type="number" name="persons" 
                                        placeholder="adults"/>
                                </div>
                            </div>
                            <div class="gest_name form_common_class">
                                <label for="">Name</label>
                                <i class="fa-solid fa-user"></i>
                                <input required="" type="text" name="cust_name" placeholder="Your Name">
                            </div>
                            <div class="gest_email form_common_class">
                                <label for="">Email</label>
                                <i class="fa-solid fa-envelope-open"></i>
                                <input required="" type="email" name="cust_email" placeholder="Your Email">
                            </div>
                            <div class="gest_phone form_common_class">
                                <label for="">Phone Number</label>
                                <i class="fa-solid fa-phone-volume"></i>
                                <input required="" type="text" name="cust_phone" placeholder="Your Number">
                            </div>
                            <div class="adults">
                                <div class="gest_adults form_common_class">
                                </div>
                            </div>
                            <div class="submit_btn">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <!-- <div class="modal fade" id="outdoor" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Outdoor
                            Spacae</h5>
                        <button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="outdoor_popup_slider">
                            <div class="room_img">
                                <img src="assets/sample-data/images/outdoors_1.jpg" alt="" class="w-100">
                            </div>
                            <div class="room_img">
                                <img src="assets/sample-data/images/outdoors_2.jpg"
                                    alt=""
                                    class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="modal fade" id="bed" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bed Room
                            Images</h5>
                        <button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="bedroom_popup_slider">
                            <div class="room_img">
                                <img
                                    src="Assets/images/bath-1.jpg"
                                    alt=""
                                    class="w-100">
                            </div>
                            <div class="room_img">
                                <img
                                    src="Assets/images/bath-2.jpg"
                                    alt=""
                                    class="w-100">
                            </div>
                            <div class="room_img">
                                <img
                                    src="Assets/images/bath-4.jpg"
                                    alt=""
                                    class="w-100">
                            </div>
                            <div class="room_img">
                                <img
                                    src="Assets/images/bath-5.jpg"
                                    alt=""
                                    class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="modal fade" id="living" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Living
                            Room Images</h5>
                        <button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="living_popup_slider">
                            <div class="room_img">
                                <img
                                    src="Assets/images/living-1.jpg"
                                    alt=""
                                    class="w-100">
                            </div>
                            <div class="room_img">
                                <img
                                    src="Assets/images/living-2.jpg"
                                    alt=""
                                    class="w-100">
                            </div>
                            <div class="room_img">
                                <img
                                    src="Assets/images/living-3.jpg"
                                    alt=""
                                    class="w-100">
                            </div>
                            <div class="room_img">
                                <img
                                    src="Assets/images/living-4.jpg"
                                    alt=""
                                    class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="modal fade" id="kitchen" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kitchen
                            Images</h5>
                        <button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="kitchen_popup_slider">
                            <div class="room_img">
                                <img
                                    src="Assets/images/kitchen-1.jpg"
                                    alt=""
                                    class="w-100">
                            </div>
                            <div class="room_img">
                                <img
                                    src="Assets/images/kitchen-2.jpg"
                                    alt=""
                                    class="w-100">
                            </div>
                            <div class="room_img">
                                <img
                                    src="Assets/images/kitchen-3.jpg"
                                    alt=""
                                    class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
@section('customscripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
    $(function() {
          $('input[name="daterange"]').daterangepicker({
            opens: 'left',
            minDate:new Date(),
            locale: {
                format: 'YYYY-MM-DD'
            }
          });
    });

    $('.hotel_images').slick({
        nav: false,
        dots: false,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    
    $('.room_details').slick({
        nav: false,
        dots: false,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    
    $('.outdoor_room_img').slick({
        nav: false,
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    
    $('.bed_room_img').slick({
        nav: false,
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    
    $('.living_room_img').slick({
        nav: false,
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    
    $('.kitchen_room_img').slick({
        nav: false,
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    
    $('.outdoor_popup_slider').slick({
        nav: false,
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    
    $('.bedroom_popup_slider').slick({
        nav: false,
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    
    $('.living_popup_slider').slick({
        nav: false,
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    
    $('.kitchen_popup_slider').slick({
        nav: false,
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
    });
</script>
@endsection