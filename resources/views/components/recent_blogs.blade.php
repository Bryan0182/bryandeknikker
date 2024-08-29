<!-- resources/views/components/recent_blogs.blade.php -->

<div class="recent-blogs">
    <h2>Recente Blogs</h2>
    <div class="row">
        @foreach($recentBlogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="recent-blog-item">
                    @include('blogs.' . pathinfo($blog['path'], PATHINFO_FILENAME))
                </div>
            </div>
        @endforeach
    </div>
</div>
