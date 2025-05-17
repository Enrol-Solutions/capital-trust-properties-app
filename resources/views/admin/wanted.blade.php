<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <title>Wanted Properties</title>
</head>
<body>
    @include('partials.nav') 
    <div class="container mt-4">
        <h1 class="mb-4">Wanted Properties</h1>
        @if($wantedProperties->isEmpty())
            <div class="alert alert-warning" role="alert">
                No data found.
            </div>
        @else
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Purpose</th>
                        <th>Location</th>
                        <th>Title</th>
                        <th>Property Type</th>
                        <th>Dealer Name</th>
                        <th>Dealer Email</th>
                        <th>Dealer Contact</th>
                        <th>Status</th>
                        <th>Requirement</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($wantedProperties as $property) 
                        <tr>
                            <td>{{ $property->id }}</td>
                            <td>{{ $property->is_buy ? 'For Buy' : 'For Rent' }}</td>
                            <td>{{ $property->location }}</td>
                            <td>{{ $property->title }}</td>
                            <td>{{ $property->property_type }}</td>
                            <td>{{ $property->user->name ?? 'N/A' }}</td>
                            <td>{{ $property->user->email ?? 'N/A' }}</td>
                            <td>{{ $property->user->contact ?? 'N/A' }}</td>
                            <td>{{ $property->status =='active'?'active':'not active' }}</td>
                            <td>{{ $property->requirement!=='Requirements'?$property->requirement:'' }}</td>
                            <td>{{ $property->created_at->format('Y-m-d') }}</td>
                            <td>{{ $property->updated_at->format('Y-m-d') }}</td>
                            <td>
                                <a onclick="$('#frmdel').submit()" href="#" class="btn btn-info my-2 btn-sm">
                                    <i class="fas fa-eye"></i> Complete
                                </a>
                                <form id="frmdel" action="{{ route('admin.wanted.complete', $property->id) }}" method="POST" style="display:none;">
                                @csrf
                                @method('PUT')
                                </form>

                                <form action="{{ route('admin.wanted.destroy', $property->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn my-2 btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this property?');">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
