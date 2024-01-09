@extends('layouts.app')

@section('content')
<div class="container">
   
   <div class="row mt-5">
        <div class="col-md-6">
            <div style="width: 500px; height: 500px; overflow: hidden;">
                <img src="{{ $artist->avatar ? asset('avatars/' . $artist->avatar) : asset('default_image/df.webp') }}" alt="{{ $artist->name }}" style="object-fit: cover; width: 100%; height: 100%;">
            </div>
            
        </div>
        <div class="col-md-6">
            <div>
                <h1>{{ $artist->name }}</h1>
                <h3>{{ $artist->headline }}</h3>
                <p>Bio: {{ $artist->bio }}</p>
                <p>Social Links: {{ $artist->social_links }}</p>
                <p>Website: {{ $artist->website }}</p>
            </div>
            <div>
                <a href="#" class="btn btn-primary">Contact</a>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ratingModal">
                    Rate
                </button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
                <!-- Trigger button for the modal -->
                

                <!-- Rating Modal -->
                <div class="modal fade" id="ratingModal" tabindex="-1" aria-labelledby="ratingModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ratingModalLabel">Rate {{ $artist->name}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="rating">
                                    <i class="far fa-star" onclick="setRating(1)"></i>
                                    <i class="far fa-star" onclick="setRating(2)"></i>
                                    <i class="far fa-star" onclick="setRating(3)"></i>
                                    <i class="far fa-star" onclick="setRating(4)"></i>
                                    <i class="far fa-star" onclick="setRating(5)"></i>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" onclick="submitRating()">Rate</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>
<script>
   let currentRating = 0;

   window.onload = function() {

   for (let i = 1; i <= 5; i++) {
       let starElement = document.querySelector(`#ratingModal .fa-star:nth-child(${i})`);
       starElement.addEventListener('mouseover', function() {
           setRating(i);
       });
       starElement.addEventListener('mouseout', function() {
           setRating(currentRating);
       });
   }
   };

   function setRating(rating) {
   
   currentRating = rating;

   
   for (let i = 1; i <= 5; i++) {
       let starElement = document.querySelector(`#ratingModal .fa-star:nth-child(${i})`);
       if (i <= currentRating) {
           starElement.classList.remove("far");
           starElement.classList.add("fas");
       } else {
           starElement.classList.remove("fas");
           starElement.classList.add("far");
       }
   }
   }

   function submitRating() {
    const rating = currentRating;
    const ratedId = {{ $artist->id }};
    
    // Check if the user is authenticated
    @if(Auth::check())
    $.ajax({
        url: '/submit-rating',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            rating: rating,
            rated_id: ratedId
        },
        success: function(data) {
            console.log('Success:', data);
            
            $('#ratingModal').modal('hide');
            
            setRating(0);
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });
    @else
    // Redirect to the login page with a message
    window.location.href = "{{ route('login') }}?redirect={{ url()->current() }}&message=Please login to rate";
    @endif
}
</script>
@endsection