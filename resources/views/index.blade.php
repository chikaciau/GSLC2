<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>My Album Picture</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>

    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
                        viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" /></svg>
                    <strong>My Album Picture</strong>
                </a>
            </div>
        </div>
    </header>

    <main>

        <section class="py-2 text-center container">
            <div class="row py-lg-3">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">My Album Picture</h1>
                    <p class="lead text-muted">
                        These are my precious memories that i want to remember and never forget
                    </p>
                    <p>
                        <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal"
                            data-bs-target="#myModal">
                            Insert new Album Picture
                        </button>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($data as $dt)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="{{ asset("storage/$dt->image") }}"
                                width="100%" height="225" role="img" focusable="false"
                                onerror="this.onerror=null;this.src='https://picsum.photos/200';">
                            <div class="card-body">
                                <h5 class="card-title">{{ $dt->title }}</h5>
                                <p class="card-text">{{ $dt->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('delete', ['id'=>$dt->id]) }}"
                                            class="btn btn-sm btn-outline-danger">Delete</a>
                                    </div>
                                    <small class="text-muted">{{ $dt->picture_taken }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-0">Album picture from &copy; Maria Jessica Sutjiadi @2022</p>
        </div>
    </footer>

    {{-- modal --}}

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" required>
                        </div>
                        <div class="mb-2">
                            <label for="desc" class="form-label">description</label>
                            <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"
                                required></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="pic" class="form-label">Picture</label>
                            <input type="file" class="form-control" id="pic" name='pic' accept="image/*" required>
                        </div>
                        <div class="mb-2">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name='date' required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>
