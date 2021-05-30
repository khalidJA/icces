@extends('layouts.control')

@section('content')
    <div class="container">
     
                <div class="card">
                    <div class="card-header">Menus</div>
                    <div class="card-body">
                        <a href="{{ route('menus.create',$content->id) }}" class="btn btn-success btn-sm" title="Add New menu">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>


                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Title</th><th>Order Menu</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($content->menus as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td><td>{{ $item->order_menu }}</td>
                                        <td>
                                       
                                       
                                            <a href="{{ route('links.index' ,['menus',$item->id] ) }}" title="Edit menu">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Links</button></a>
                                            <a href="{{ route('menus.edit' ,$item->id ) }}" title="Edit menu">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ route('menus.destroy' , $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete menu" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
