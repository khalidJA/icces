@extends('layouts.control')

@section('content')
    <div class="container">
     
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <a href="{{ route('register.create') }}" class="btn btn-success btn-sm" title="Add New register">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>


                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Name</th><th>Email</th><th>Country</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($register as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td><td>{{ $item->email }}</td><td>{{ $item->country }}</td>
                                        <td>
                                       
                                       
                                            <a href="{{ route('register.edit' ,$item->id ) }}" title="Edit register">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ route('.destroy' , $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete register" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
            
                        </div>

                    </div>
                </div>
            </div>
     
@endsection
