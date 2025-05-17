<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Properties List</title>
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
    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

<link rel="stylesheet" href="/css/vendors.min.css" />
<link rel="stylesheet" href="/css/icon.min.css" />
<link rel="stylesheet" href="/css/style.min.css" />
<link rel="stylesheet" href="/css/responsive.min.css" />
<link rel="stylesheet" href="/css/customs.css" />
</head>
<body>
@include('partials.nav') 
<div class="container mt-7">
    
    @if($properties->isEmpty())
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

        <div class="row justify-content-center h-full" style="min-height:80vh" >
            @foreach ($properties as $property)
                <div class="col-md-10 h-100" >
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center">
                            
                            <h5 class="card-title">{{ ucfirst($property->property_type) }}</h5>
                            <p class="card-text">Deal Type: 
                                <span class="badge 
                                    @php
                                        echo match($property->deal_type) {
                                            'forBuy' => 'bg-success',
                                            'forRent' => 'bg-primary',
                                            'Lease' => 'bg-warning'
                                        };
                                    @endphp">{{ ucfirst($property->deal_type) }}</span>
                            </p>
                            <div  style="padding-left: 12%;" class="row ">
                            <p style="text-align: left;" class="card-text col-md-4">Price: Rs. {{ number_format($property->asking_price, 2) }}</p>
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><i class="fas fa-bed"></i> {{ $property->bed_rooms }} bed rooms</p>
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><i class="fas fa-bath"></i> {{ $property->bath_rooms }} bath rooms</p>
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><i class="fas fa-expand-arrows-alt"></i> {{ number_format($property->square_feet) }} sq.ft</p>
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><i class="fas fa-map-marker-alt"></i> {{ $property->location }}</p>
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><i class="fas fa-car"></i> {{$property->parking}} Parking Slots</p>
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><i class="fas fa-landmark"></i> {{$property->square_feet}} Sq.Ft Area</p>
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><i class="fas fa-landmark"></i> {{$property->province}} Province</p>
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><i class="fas fa-landmark"></i> {{$property->district}} District</p>
                            @if($property->furnished)
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><i class="fas fa-landmark"></i>  Furnished</p>
                            @else
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><i class="fas fa-landmark"></i>  Unfurnished</p>

                            @endif
                            <p style="text-align: left;" class="card-text col-md-12 mt-2 col-sm-12 text-lg"><b>DEALER DETAILS</b></p>
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><b>NAME :</b> {{$user->find($property->users_id)->name}} </p>
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><b>CONTACT:</b> {{$user->find($property->users_id)->contact}} </p>
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><b>MAIl:</b> {{$user->find($property->users_id)->email}} </p>
                            @if($property->posted_by=='broker')
                            <p style="text-align: left;" class="card-text col-md-12 mt-2 col-sm-12 text-lg"><b>OWNER DETAILS</b></p>
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><b>NAME :</b> {{$owner->where('properties_id',$property->id)->first()->name}} </p>
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><b>CONTACT:</b> {{$owner->where('properties_id',$property->id)->first()->contact}} </p>
                            <p style="text-align: left;" class="card-text col-md-4 col-sm-12"><b>MAIl:</b> {{$owner->where('properties_id',$property->id)->first()->mail}} </p>
                            @endif

                             @if($property->description!=='Requirements')
                            <p class="card-text col-12 "> {{$property->description}}</p>
                            @endif
                            @php
                            $pagin=  $property->images()->paginate(3,['*'],'images')
                            @endphp
                          <div style="padding-right:12%;" class="d-flex flex-column flex-md-row justify-content-center">  
                            @foreach ($pagin as $img)
                         <!-- <div  style="padding-right:12%;" class="w-100 mb-3 d-flex justify-content-center">   
                          <div class="col-12"> -->
                            <img  class="object-fit-fill m-4" style="height:210px;width:210px"  src="/images/{{$img->image}}"/>
                          <!-- </div>
                         </div> -->
                            @endforeach
                          </div>
                            @if(!empty($pagin))
                            {{$pagin->links('vendor.pagination.bootstrap-4')}}
                            @endif
                            </div>
                            @if($property->status == 'active')
                        <form method="POST" action="{{ route('properties.updateStatus', $property->id) }}" class="d-inline">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success btn-sm" style="margin-right: 10px;" title="Complete">
                                <i class="fas fa-check"></i> Complete
                            </button>
                        </form>
                        
                        @elseif ($property->status=='to_active')
                        <form method="POST" action="{{ route('properties.approve', $property->id) }}" class="d-inline">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success btn-sm" style="margin-right: 10px;" title="Complete">
                                <i class="fas fa-check"></i> Approve
                            </button>
                        </form>
                        @endif  
  
                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editPropertyModal" 
                                   data-id="{{ $property->id }}" 
                                   data-property_type="{{ ucfirst($property->property_type) }}" 
                                   data-deal_type="{{ ucfirst($property->deal_type) }}" 
                                   data-bed_rooms="{{ $property->bed_rooms }}" 
                                   data-bath_rooms="{{ $property->bath_rooms }}" 
                                   data-square_feet="{{ $property->square_feet }}" 
                                   data-price="{{ $property->asking_price }}" 
                                   data-location="{{ $property->location }}" 
                                   title="Edit Property">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="POST" action="{{ route('properties.destroy', $property->id) }}" class="d-inline">
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
            <div class="mt-5 xs-mt-10 d-flex justify-content-center" data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

            @endforeach
            @if(!empty($properties))
            {{$properties->links('vendor.pagination.bootstrap-4')}}
            @endif
            </div>

     </div>
    @endif
</div>

<!-- Modal Structure -->
<div class="modal fade" id="editPropertyModal" tabindex="-1" aria-labelledby="editPropertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered"> <!-- Added modal-dialog-centered -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPropertyModalLabel">Update Property</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="updatePropertyForm" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="propertyId" name="property_id">

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="property_type" class="form-label"><i class="fas fa-home"></i> Property Type</label>
                            <input type="text" class="form-control"  id="property_type" name="property_type" required>
                        </div>
                        <div class="col-md-6">
                            <label for="deal_type" class="form-label"><i class="fas fa-hand-holding-usd"></i> Deal Type</label>
                            <select class="form-select" id="deal_type" name="deal_type" required>
                                <option value="forBuy">For Buy</option>
                                <option value="forRent">For Rent</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="bed_rooms" class="form-label"><i class="fas fa-bed"></i> Bedrooms</label>
                            <input type="number" class="form-control" id="bed_rooms" name="bed_rooms" required>
                        </div>
                        <div class="col-md-6">
                            <label for="bath_rooms" class="form-label"><i class="fas fa-bath"></i> Bathrooms</label>
                            <input type="number" class="form-control" id="bath_rooms" name="bath_rooms" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="square_feet" class="form-label"><i class="fas fa-expand-arrows-alt"></i> Square Feet</label>
                            <input type="number" class="form-control" id="square_feet" name="square_feet" required>
                        </div>
                        <div class="col-md-6">
                            <label for="asking_price" class="form-label"><i class="fas fa-dollar-sign"></i> Price</label>
                            <input type="number" class="form-control" id="asking_price" name="asking_price" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label"><i class="fas fa-map-marker-alt"></i> Location</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="parking" class="form-label"><i class="fas fa-car"></i> Parking</label>
                            <input type="number" class="form-control" id="parking" name="parking" required>
                        </div>
                        <div class="col-md-6">
                            <label for="furnished" class="form-label"><i class="fas fa-hand-holding-usd"></i> Furnished/Unfurnished</label>
                            <select class="form-select" id="deal_type" name="furnished" required>
                                <option value="1">Furnished</option>
                                <option value="0">Unfurnished</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Property</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .modal-dialog {
        margin: auto; 
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Populate modal with property data
    document.addEventListener('DOMContentLoaded', function () {
        const editPropertyModal = document.getElementById('editPropertyModal');
        editPropertyModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const propertyId = button.getAttribute('data-id');
            const property_type = button.getAttribute('data-property_type');
            const deal_type = button.getAttribute('data-deal_type');
            const bed_rooms = button.getAttribute('data-bed_rooms');
            const bath_rooms = button.getAttribute('data-bath_rooms');
            const square_feet = button.getAttribute('data-square_feet');
            const asking_price = button.getAttribute('data-asking_price');
            const location = button.getAttribute('data-location');
            const parking = button.getAttribute('parking');
            const furnished = button.getAttribute('furnished');

            // Update the modal's content
            document.getElementById('updatePropertyForm').action = `updateProperty/${propertyId}`;
            document.getElementById('propertyId').value = propertyId;
            document.getElementById('property_type').value = property_type;
            document.getElementById('deal_type').value = deal_type;
            document.getElementById('bed_rooms').value = bed_rooms;
            document.getElementById('bath_rooms').value = bath_rooms;
            document.getElementById('square_feet').value = square_feet;
            document.getElementById('asking_price').value = asking_price;
            document.getElementById('location').value = location;
            document.getElementById('parking').value = parking;
            document.getElementById('furnished').value = furnished;
        });
    });
</script>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/vendors.min.js"></script>
    <script type="text/javascript" src="/js/customFunctions.js"></script>

    <script type="text/javascript" src="/js/main.js"></script>
</body>
</html>
