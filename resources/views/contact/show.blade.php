@extends('layouts.control')

@section('content')
    <div class="container">
        <div class="row">
           
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">contact {{ $contact->id }}</div>
                    <div class="card-body">

                        <a href="{{ route('contact.index') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                      
                        <form method="POST" action="{{ url('contact' . '/' . $contact->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $contact->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Name </th>
                                        <td> {{ $contact->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Email </th>
                                        <td> {{ $contact->email }} </td>
                                    </tr>
                                    <tr>
                                        <th> Subject </th>
                                        <td> {{ $contact->subject }} </td>
                                    </tr>
                                    <tr>
                                        <th> Msg </th>
                                        <td> {{ $contact->msg }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
