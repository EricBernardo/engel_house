@if($setting && $setting['google_maps'])
    <section>
        <div class="map" id="map" data-src="{{ $setting['google_maps'] }}"></div>
    </section>
@endif
