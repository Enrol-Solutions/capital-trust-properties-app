<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Home Banner</title>
    <style>
        .image-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .image-table th, .image-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .image-table th {
            background-color: var(--c-action-primary);
            color: white;
        }

        .image-table img {
            max-width: 100px;
            height: auto;
        }
        *, *:after, *:before {
            box-sizing: border-box;
        }

        :root {
            --c-action-primary: #2e44ff;
            --c-action-primary-accent: #e9e5ff;
            --c-action-secondary: #e5e5e5;
            --c-text-primary: #0d0f21; 
            --c-text-secondary: #6a6b76;
            --c-background-primary: #d0d1de;
        }

        body {
            font-family: "Poppins", sans-serif;
            color: var(--c-text-primary);
            background-color: var(--c-background-primary);    
        }

        input, button, select, textarea {
            font: inherit;
        }

        .modals {
            width: 90%;
            max-width: 500px;
            margin: 10vh auto;
            background-color: #FFF;
            border-radius: .5rem;
            margin-top: 100px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .2); 
        }

        .modal-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            padding: 1.5rem 1.5rem 1rem;
            margin-top: 200px;
        }

        .modal-body {
            padding: 1rem 1.5rem;
        }

        .modal-title {
            font-weight: 700;
        }

        .modal-description {
            color: var(--c-text-secondary);
        }

        .upload-area {
            margin-top: 1.25rem;
            border: none;
            background-color: transparent;
            padding: 3rem;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 2px dashed #ccc;
            transition: background-color 0.3s;
            cursor: pointer;
        } 

        .upload-area:hover {
            background-color: var(--c-action-primary-accent);
        }

        .upload-area-title {
            margin-top: 1rem;
            font-weight: 700;
            color: var(--c-text-primary);
        }

        .upload-area-description {
            color: var(--c-text-secondary);
        }

        .thumbnails {
            display: flex;
            flex-wrap: wrap;
            margin-top: 1rem;
        }

        .thumbnail {
            width: 80px;
            height: 80px;
            margin: 0.5rem;
            border-radius: 4px;
            overflow: hidden;
            position: relative;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .modal-footer {
            padding: 1rem 1.5rem 1.5rem;
            display: flex;
            justify-content: flex-end;
        }

        .btn-secondary, .btn-primary {
            padding: .5rem 1rem;
            font-weight: 500;
            border: 2px solid var(--c-action-secondary);
            border-radius: .25rem;
            background-color: transparent;
        }

        .btn-primary {
            color: #FFF;
            background-color: var(--c-action-primary);
            border-color: var(--c-action-primary);
        }

        .hidden {
            display: none;
        }

      
    </style>
</head>
<body>
    <!-- Navigation bar -->
    @include('partials.nav') 
           <div style="margin-top:100px" class="d-flex align-items-center flex-column"> 
               <h2 class="my-5">Current Banner Icons</h2>
               <div class="d-flex  flex-column flex-md-row">
                @forelse ($banner as $baner)
                <div class="card mx-2" style="width: 18rem;">
                <div class="row mt-3 justify-content-center">

                <img class="card-img-top" style="width:250px;height:250px " src="/images/{{$baner->image}}" alt="Card image cap">
                <div class="card-body">
                <div class="row justify-content-center">

                    <a href="#" onclick="$('#frmt{{$baner->id}}').submit()" class="btn btn-primary">Remove from banner</a>
                    <form method="POST" action="/removeFromBanner/{{$baner->id}}" id="frmt{{$baner->id}}">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>                </div>

                </div>

                </div>   
                @empty
                <p>No Items!</p>
                @endforelse                 
                @if(!empty($banner))
                {{$banner->links('vendor.pagination.bootstrap-4')}}
                @endif
              </div>
              <h2 class="my-5">Available Banner Icons</h2>
               <div class="d-flex  flex-column flex-md-row">
                @forelse ($image as $img)
                <div class="card mx-2" style="width: 18rem;">
                <div class="row mt-3 justify-content-center">

                <img class="card-img-top" style="width:250px;height:250px " src="/images/{{$img->image}}" alt="Card image cap">
                <div class="card-body">
                <div class="row justify-content-center">

                    <a href="#" onclick="$('#frm{{$img->id}}').submit()" class="btn btn-primary">Add to banner</a>
                    <form method="POST" action="/addToBanner/{{$img->id}}" id="frm{{$img->id}}">
                        @csrf
                        @method('PUT')
                    </form>
                </div>                </div>

                </div>

                </div>   
                @empty
                <p>No Items!</p>

                @endforelse                

              </div>
              @if(!empty($image))
                {{$image->links('vendor.pagination.bootstrap-4')}}
                @endif
           </div>   
    
</body>
</html>
