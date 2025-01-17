<div>
    <div class="template-detail">
        <h1>{{ $template->name }}</h1>
        <img src="{{ asset('storage/' . $template->thumbnail) }}" alt="{{ $template->name }}" class="img-fluid mb-4">

        <div class="price">
            <span class="text-muted"><del>{{ number_format($template->price_original) }} VND</del></span>
            <strong>{{ number_format($template->price_discount) }} VND</strong>
        </div>

        <p>{{ $template->description }}</p>

        <div class="tags mb-3">
            <strong>Tags:</strong>
            @foreach($template->tags as $tag)
                <span class="badge bg-secondary">{{ $tag->name }}</span>
            @endforeach
        </div>

        <a href="{{ $template->demo_url }}" target="_blank" class="btn btn-info">Xem Demo</a>
    </div>
</div>
