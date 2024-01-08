@extends('layouts.app')

@section('content')
<div class="container">
   <h1>{{ $artist->name }}</h1>
   <img class="rounded-circle" height="200" src="{{ $artist->avatar ? asset('avatars/' . $artist->avatar) : asset('default_image/df.webp') }}" alt="{{ $artist->name }}">

   

   <a href="#" class="btn btn-primary">Contact</a>
   
   <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
   <!-- Trigger button for the modal -->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ratingModal">
       Rate
   </button>

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
    }
</script>
@endsection