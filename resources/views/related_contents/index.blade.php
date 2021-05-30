@extends('layouts.control')

@section('content')
    <div class="container">
     
                <div class="card">
                    <div class="card-header">Related Contents in Main content {{ $content->title }}</div>
                    <div class="card-body">
                        <a href="{{ route('rcontents.create',$content->id) }}" class="btn btn-success btn-sm" title="Add New related_content">
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
                                @foreach($content->related_contents as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                       
                                       
                                            <a href="{{ route('rcontents.edit' ,$item->id ) }}" title="Edit related_content">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>
                                            <a href="{{ route('DashboardDataRelated' ,[$item->title,$content->id] ) }}" title="Edit related_content">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Data</button></a>

                                            <form method="POST" action="{{ route('rcontents.destroy' , $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete related_content" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
