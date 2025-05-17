<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>news List</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <style>
        .card {
            margin-bottom: 1.5rem;
        }
        .badge {
            font-size: 0.9rem;
        }
        .modal-header {
            background-color: #343a40;
            color: white;
        }
        .modal-footer {
            justify-content: flex-start;
        }
    </style>
</head>
<body>
@include('partials.nav') 
<div class="container mt-5">
    <div class="mb-4 text-center">news</div>
    
    @if($newses->isEmpty())
        <div class="alert alert-warning text-center">
            <i class="fas fa-exclamation-circle"></i> No Data Found
        </div>
    @else
   
    @if (session('success'))
        <div class="alert alert-success alert-dismissible m-4 fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible m-4 fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

        <div class="row">
            @foreach ($newses as $news)
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ ucfirst($news->title) }}</h5>
                            <div class="blog-image position-relative overflow-hidden border-radius-6px">
                                <a href="/detailedNews/{{$news->id}}"><img style="height:300px; width:300px" src="images/{{$news->image}}" alt /></a>
                            </div>
                            <p class="card-text"> {{$news->description }}</p>
                            <p class="card-text">{{ $news->author }} </p>
                                                  <div class="d-flex justify-content-center mt-3">
                                <form method="POST" action="{{ route('deleteNews', $news->id) }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm ms-2" onclick="return confirm('Are you sure?');" title="Delete Property">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>


<style>
    .modal-dialog {
        margin: auto; 
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
