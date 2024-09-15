<div class="container py-5">
    <div class="row">
        <div class="col-8 mb-4">
            <h1>Dashboard</h1>
        </div>
        <div class="col-4">
            <a href="{{ route('blogs.create') }}" class="btn btn-primary">Nieuwe Blog</a>
            <!-- Formulier voor uitloggen -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-primary">Uitloggen</button>
            </form>
        </div>

        <!-- Jouw bestaande dashboard content -->
        <div class="col-md-4">
            <div class="card dashboard-card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Totaal aantal blogs</h5>
                    <p class="card-text display-4">{{ $totalBlogs }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card dashboard-card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Totaal aantal bezoekers</h5>
                    <p class="card-text display-4">{{ $totalVisitors }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Overzicht van Blogs -->
    <div class="row">
        <div class="col-12">
            <h2 class="pb-3">Overzicht van Blogs</h2>
            <table class="table dashboard-table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Titel</th>
                    <th>Website URL</th>
                    <th>Aangemaakt op</th>
                    <th>Laatst geüpdatet op</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td><a href="{{ $blog->website_url }}" target="_blank">{{ $blog->website_url }}</a></td>
                        <td>{{ $blog->created_at->format('d-m-Y H:i') }}</td>
                        <td>{{ $blog->updated_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Overzicht van Recente Bezoekers -->
    <div class="row">
        <div class="col-12">
            <h2 class="pb-3">Recente Bezoekers</h2>
            <table class="table dashboard-table table-bordered">
                <thead>
                <tr>
                    <th>URL</th>
                    <th>Browser</th>
                    <th>Bezoekdatum</th>
                </tr>
                </thead>
                <tbody>
                @foreach($recentVisitors as $visitor)
                    <tr>
                        <td>{{ $visitor->url }}</td>
                        <td>{{ $visitor->user_agent }}</td>
                        <td>{{ $visitor->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
