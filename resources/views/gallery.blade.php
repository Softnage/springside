@extends('layouts.web')

@section('page_head')
    {!! seo([
        'title' => 'Gallery | ' . content('app.name'),
        'description' =>
            'Spring Side Academy is a school within the Kumasi catchment area, specifically at Atasemanso. Our thriving school community includes Nursery and Primary classes.',
    ]) !!}

    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('page_content')
    <div class="hero-page">
        <h1>Gallery</h1>
    </div>
    <div class="photo-gallery-heading"></div>
    <div class="v-heading">
        <h1>Photo Gallery</h1>
    </div>
    <div class="photo-grid">
        <div class="photo">
            <a href="{{ asset('images/downsized/1.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery" download>
                <img src="{{ asset('images/downsized/1.jpg') }}" alt="" />
            </a>
        </div>

        <div class="photo">
            <a href="{{ asset('images/downsized/2.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery" download>
                <img src="{{ asset('images/downsized/2.jpg') }}" alt="" />
            </a>
        </div>

        <div class="photo">
            <a href="{{ asset('images/downsized/3.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery" download>
                <img src="{{ asset('images/downsized/3.jpg') }}" alt="" />
            </a>
        </div>

        <div class="photo">
            <a href="{{ asset('images/downsized/4.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery" download>
                <img src="{{ asset('images/downsized/4.jpg') }}" alt="" />
            </a>
        </div>

        <div class="photo">
            <a href="{{ asset('images/downsized/5.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery" download>
                <img src="{{ asset('images/downsized/5.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/6.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery" download>
                <img src="{{ asset('images/downsized/6.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/7.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery" download>
                <img src="{{ asset('images/downsized/7.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/8.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery" download>
                <img src="{{ asset('images/downsized/8.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/9.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery" download>
                <img src="{{ asset('images/downsized/9.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/10.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery" download>
                <img src="{{ asset('images/downsized/10.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/11.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery" download>
                <img src="{{ asset('images/downsized/11.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/12.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery" download>
                <img src="{{ asset('images/downsized/12.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/13.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery" download>
                <img src="{{ asset('images/downsized/13.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/14.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery" download>
                <img src="{{ asset('images/downsized/14.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/15.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery" download>
                <img src="{{ asset('images/downsized/15.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/16.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/16.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/17.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/17.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/18.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/18.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/19.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/19.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/20.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/20.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/21.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/21.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/22.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/22.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/23.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/23.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/24.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/24.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/25.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/25.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/26.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/26.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/27.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/27.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/28.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/28.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/29.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/29.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/30.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/30.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/31.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/31.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/32.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/32.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/33.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/33.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/34.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/34.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/35.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/35.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/36.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/36.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/37.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/37.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/38.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/38.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/39.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/39.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/40.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/40.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/41.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/41.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/42.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/42.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/43.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/43.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/44.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/44.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/45.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/45.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/46.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/46.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/47.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/47.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/48.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/48.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/49.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/49.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/50.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/50.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/51.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/51.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/52.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/52.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/53.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/53.jpg') }}" alt="" />
            </a>
        </div>
        <div class="photo">
            <a href="{{ asset('images/downsized/54.jpg') }}" data-lightbox="gallery" data-title=" Photo Gallery"
                download>
                <img src="{{ asset('images/downsized/54.jpg') }}" alt="" />
            </a>
        </div>
    </div>
    <section>
        <div class="v-heading">
            <h1>Video Gallery</h1>
        </div>
        <div class="video-grid">
            <div class="video">
                <video controls>
                    <source src="your-video.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="video">
                <video controls>
                    <source src="your-video.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>
@endsection
