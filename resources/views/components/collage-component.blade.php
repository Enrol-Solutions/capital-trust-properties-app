<div style="max-height: 300px; margin-bottom:200px; margin-top:300px; display:flex; align-items:center;width:100%; justify-content:center">
<div class="collage grid  gap-2">
    @foreach ($images as $image)
        <div class="collage-item">
            <img src="/images/{{ $image->image }}" alt="Collage Image" class="w-full h-auto object-cover rounded">
        </div>
    @endforeach
</div>
</div>
<!-- Styling -->
<style>
    @media (min-width:500px) {
    .collage {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    }
    .collage-item img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
    }
    @media (max-width:500px) {
        .collage {
        display: grid;
        grid-template-rows: repeat(auto-fit, minmax(100px, 1fr));
    }
    .collage-item img {
        height: 100%;
        width: auto;
        object-fit: cover;
    }
    }
</style>

