<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Add Role Page</title>
  </head>
  <body>


  <div class="container">
  @if(session('message'))
<div class="alert alert-success" id="msg">{{session('message')}}</div>
@endif
  <a href="{{ route('admin') }}"><button type="button" class="btn btn-success float-right mt-2 mb-3 ">Back</button></a>
  <br/>
<form method="post" action="{{ route('addedrole.store') }}">
@csrf
 <div class="form-group">
    <label for="Name">Name</label>
    <input type="text" class="form-control" name="name"  placeholder="Enter Role Name">
    @error('name')
    <label class="text-danger">{{ $message }}</label>
    @enderror
  </div>

  <div class="form-group">
  Add <input type="checkbox" name="rights[]" value="Add">
  Edit <input type="checkbox" name="rights[]" value="Edit">
  View <input type="checkbox" name="rights[]" value="View">
  Delete <input type="checkbox" name="rights[]" value="Delete">
  </div>

  <button type="submit" value="submit" class="btn btn-info">Add Roles</button>

</form>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script>
    $(document).ready(function() {
      // Hide the session message after 5 seconds
      setTimeout(function() {
        $('#msg').fadeOut('slow');
      }, 5000); // 5000 milliseconds = 5 seconds
    });
  </script>
  </body>
</html>




