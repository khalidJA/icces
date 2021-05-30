@extends('layouts.control')

@section('content')
    <div class="container">
     
                <div class="card">
                    <div class="card-header">Contents</div>
                    <div class="card-body">
                        <a href="{{ route('contents.create') }}" class="btn btn-success btn-sm" title="Add New content">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>


                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Title</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contents as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                       
                                       
                                            <a href="{{ route('contents.edit' ,$item->id ) }}" title="Edit content">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>
                                       
                                            <a href="{{ route('rcontents.index' ,$item->id ) }}" title="Edit content">
                                            <button class="btn btn-success btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Related Contents</button></a>

                                            <form method="POST" action="{{ route('contents.destroy' , $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete content" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
