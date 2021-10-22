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

     

<form  id="myForm" action="{{ route('forms.store') }}" method="POST" enctype="multipart/form-data">

    @csrf

    

    <div class="row" id="loaddata">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>First Name:</strong>

                <input type="text" name="fname" class="form-control" placeholder="First Name" required data-parsley-pattern="[a-zA-z]+$+\s\" data-parsley-trigger="keyup">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Last Name:</strong>

                <input type="text" name="lname" class="form-control" placeholder="Last Name" required data-parsley-pattern="[a-zA-z]+$+\s\" data-parsley-trigger="keyup">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Age:</strong>

                <input type="text" name="age" class="form-control" placeholder="Age" data-parsley-length="[1-200]" required data-parsley-pattern="/^([0-9\s\-\+\(\)]*)$/|" data-parsley-trigger="keyup">


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Email:</strong>

                <input type="email" name="email" class="form-control" placeholder="Email" required data-parsley-type ="email" data-parsley-trigger="keyup">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Mobile no:</strong>

                <input type="text" name="mobile" class="form-control" placeholder="Mobile no" required data-parsley-pattern="[0-9]+$" data-parsley-length="[10,13]" data-parsley-trigger="keyup">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                <input type="file" name="image" class="form-control" placeholder="image" data-parsley-fileextension="image">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary" id="frmsub">Submit</button>

        </div>

    </div>
     

</form>

 
</script>


@endsection