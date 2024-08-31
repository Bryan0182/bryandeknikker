<!-- resources/views/components/recent-blogs.blade.php -->
<section class="recent-blogs py-5">
    <div class="container">
        <h1 class="mb-4 text-center">Recente blogs</h1>

        @if ($recentBlogs->isEmpty())
            <p>Er zijn momenteel geen recente blogs beschikbaar.</p>
        @else
            <div class="row justify-content-between">
                @foreach ($recentBlogs as $index => $blog)
                    <div class="col-md-4 mb-4 d-flex">
                        <div class="card mx-auto @if($index == 1) centered-card @endif">
                            @if ($blog->logo_image)
                                <img src="{{ Storage::url($blog->logo_image) }}" alt="{{ $blog->title }}" class="card-img-top" width="350" height="200"/>
                            @endif
                            <div class="card-body">
                                <h4 class="card-title">{{ $blog->title }}</h4>
                                <p class="card-text">{{ $blog->intro_text }}</p>
                                <a href="{{ route('blogs.show', ['slug' => $blog->slug]) }}" class="btn btn-primary align-items-center d-flex justify-content-center read-more-recent-blogs-button">Lees meer</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
