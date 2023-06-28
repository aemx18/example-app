<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/profile.css">
    <title>HoMS | Profile</title>
  </head>
  <body>
    @include('navbar', ['activePage' => 'profile'])
    <div class="container">
        <h1> Housemanship Profile </h1>
    </div>
    {{-- <p>Name: {{ $profile->name ?? '' }}</p>
    <p>Email: {{ $profile->email ?? '' }}</p> --}}



  
<section>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
              
                @foreach ($profiles as $profile)
              
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Dr. {{ $profile->name }} </span><span class="text-black-50">{{ $profile->email }}</span><span> </span></div>
             
            </div>
            <div class="col-md-7 border-right">
               @endforeach
                    
                <form action="{{ route('profiles.update', $profile->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Houseman Personal Information</h4>
                    </div>
                   
                   
                        <div class="col-md-12"><label class="labels">Name</label>
                            <input type="text" name="profile" id="profile" class="form-control" value="{{ $profile->name }}"></div>
                        <div class="col-md-12"><label class="labels">Age</label>
                            <input  type="text" name="age" id="age" class="form-control" placeholder="Age" value="{{ $profile->age }}"></div>
                        <div class="col-md-12"><label class="labels">Mobile Number </label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Mobile Number" value="{{ $profile->phone }}"></div>
                        <div class="col-md-12"><label class="labels">IC Number </label>
                            <input type="text" name="ic" id="ic" class="form-control" placeholder="IC Number" value="{{ $profile->ic }}"></div>
                        <div class="col-md-12"><label class="labels">Status</label>
                            <input type="text" name="status" id="status" class="form-control" placeholder="Status" value="{{ $profile->status }}"></div>
                        <div class="col-md-12"><label class="labels">Gender</label>
                            <input type="text" name="gender" id="gender" class="form-control" placeholder="Gender" value="{{ $profile->gender }}"></div>
                        <div class="col-md-12"><label class="labels">Race</label>
                            <input type="text" name="race" id="race" class="form-control" placeholder="Race" value="{{ $profile->race }}"></div>
                        <div class="col-md-12"><label class="labels">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="{{ $profile->email }}"></div>
                
                        <div class="col-md-12"><label class="labels">Address</label> 
                            <textarea class="form-control " name="address" id="address" cols="30" rows="5">{{ $profile->address }}</textarea></div>
                    </div>
         
             
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </div>
                <form>
            </div>

       
          
        </div>
    </div>
    </div>
    </div>
</section>


    <!-- Optional JavaScript -->
  


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>