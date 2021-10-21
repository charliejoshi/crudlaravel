@extends('forms.layout')

     

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>crup app</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('forms.create') }}">Add detail</a>

            </div>

        </div>

    </div>

    

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

     

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Image</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Mobile</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($forms as $form)

        <tr>

            <td>{{ ++$i }}</td>

            <td><img src="/image/{{ $form->image }}" width="100px"></td>

            <td>{{ $form->fname }}</td>
            <td>{{ $form->lname }}</td>
            <td>{{ $form->age }}</td>
            <td>{{ $form->email }}</td>
            <td>{{ $form->mobile }}</td>


            <td>

                <form action="{{ route('forms.destroy',$form->id) }}" method="POST">

     

                    <a class="btn btn-info" href="{{ route('forms.show',$form->id) }}">Show</a>

      

                    <a class="btn btn-primary" href="{{ route('forms.edit',$form->id) }}">Edit</a>

     

                    @csrf

                    @method('DELETE')

        

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

    

    {!! $forms->links() !!}

        

@endsection