@extends('forms.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show forms</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('forms.index') }}"> Back</a>

            </div>

        </div>

    </div>




<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>First Name:</strong>

            {{ $form->fname }}

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Last Name:</strong>

            {{ $form->lname }}

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Age:</strong>

            {{ $form->age }}

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Email:</strong>

            {{ $form->email }}

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Mobile:</strong>

            {{ $form->mobile }}

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Image:</strong>

            <img src="/image/{{ $form->image }}" width="500px">

        </div>

    </div>

</div>

@endsection

