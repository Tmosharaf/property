

<div class="largeSlider">
    @forelse ($media_all as $media)
    <div class="single-item" style="background-image: url('{{  asset('img') .'/'. $media->url }}')"></div>
    <p></p>
    @empty


    @endforelse
</div>
<div class="thumbSlider">
    @forelse ($media_all as $media)
    <div class="single-item" style="background-image: url('{{  asset('img') .'/'. $media->url }}')"></div>
    @empty --}}
    @endforelse
</div>
