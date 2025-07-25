@extends('layouts.dashboard')

@section('dash-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Blogs</h4>
                        <a href="{{ route('blogs.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Create New Blog
                        </a>
                    </div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if($blogs->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Featured Image</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td>
                                                <img src="{{ $blog->featured_image }}"
                                                     alt="{{ $blog->title }}"
                                                     class="img-thumbnail"
                                                     style="width: 80px; height: 60px; object-fit: cover;">
                                            </td>
                                            <td>
                                                <strong>{{ $blog->title }}</strong>
                                                <br>
                                                <small class="text-muted">
                                                    {{ Str::limit($blog->description, 50) }}
                                                </small>
                                            </td>
                                            <td>
                                                <code>{{ $blog->slug }}</code>
                                            </td>
                                            <td>
                                                @if($blog->published)
                                                    <span class="badge bg-success">Published</span>
                                                @else
                                                    <span class="badge bg-secondary">Draft</span>
                                                @endif
                                            </td>
                                            <td>
                                                <small>{{ $blog->created_at->format('M d, Y') }}</small>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('blogs.show', $blog) }}"
                                                       class="btn btn-sm btn-outline-primary">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('blogs.edit', $blog) }}"
                                                       class="btn btn-sm btn-outline-warning">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form method="POST"
                                                          action="{{ route('blogs.destroy', $blog) }}"
                                                          class="d-inline"
                                                          onsubmit="return confirm('Are you sure you want to delete this blog?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-center">
                                {{ $blogs->links() }}
                            </div>
                        @else
                            <div class="text-center py-5">
                                <i class="fas fa-blog fa-3x text-muted mb-3"></i>
                                <h5 class="text-muted">No blogs found</h5>
                                <p class="text-muted">Get started by creating your first blog post.</p>
                                <a href="{{ route('blogs.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Create Your First Blog
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
