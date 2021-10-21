@extends('forms.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New form</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('forms.index') }}"> Back</a>

        </div>

    </div>

</div>

     

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

     

<form action="{{ route('forms.store') }}" method="POST" enctype="multipart/form-data">

    @csrf

    

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>First Name:</strong>

                <input type="text" name="fname" class="form-control" placeholder="First Name" require>

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Last Name:</strong>

                <input type="text" name="lname" class="form-control" placeholder="Last Name" require>

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Age:</strong>

                <input type="text" name="age" class="form-control" placeholder="Age" require>

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Email:</strong>

                <input type="email" name="email" class="form-control" placeholder="Email" require>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Mobile no:</strong>

                <input type="text" name="mobile" class="form-control" placeholder="Mobile no" require>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                <input type="file" name="image" class="form-control" placeholder="image" require>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary" id="frmsub">Submit</button>

        </div>

    </div>
     

</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js">

</script>
<script>
    jQuery('#frmsub').submit(function(e){
       e.preventDefault();
       alert('test') ;
    });
</script>
@endsection