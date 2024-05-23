@extends('layouts.app')

@section('content')
    @include('hotsite.sections.hero-section')

    <main id="main">
        @include('hotsite.sections.about-section')
        <!-- include('hotsite.sections.counts-section') -->
        <!-- include('hotsite.sections.details-section')-->
        @include('hotsite.sections.testimonials-section')
        @include('hotsite.sections.gallery-section')
        @include('hotsite.sections.FAQ-section')
        @include('hotsite.sections.contact-section')

    </main>
    <!-- End #main -->
    
    <div class="whatsapp-link">
        <a href="#zap">
            <i class="fa fa-whatsapp"></i>
            Zap do Linard
        </a>
    </div>
@endsection
