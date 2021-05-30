@extends('layouts.app')
@section('content')
    

<table class="table  bg-white">
    <thead>
        <tr class="alert alert-info">
            <th>{{ $links_founded->count()+$contents_founded->count() }} Results Search About: {{ $keyword }}</th>
        </tr>
    </thead>
  <tbody>
      <tr class="alert  alert-primary">
          <td>
              <h5>Internal Links</h5>
          </td>
      </tr>
    @foreach ($links_founded as $item)
    @if (process_link($item->id)!='javascript:void(0)')
    <tr>
        <td>
         
            <a href="{{ route('content',$item->id) }}">{{ $item->title }}</a>
            <i class="fab fa-clock"></i>
            {{ $item->created_at->diffForHumans() }} 
        </td>
    </tr>    
    @endif

    @endforeach
    <tr>
        <td class="alert  alert-primary">
            <h5>Internal Contents</h5>
        </td>
    </tr>
    @foreach ($contents_founded as $item)
    @if(strip_tags($item->content)!='count down' && strip_tags($item->content)!='countdown' && strip_tags($item->content)!='fb')
    @if($item->content==null || $item->content=='' || $item->content=='<p></p>')
    <tr class="bg-light">
        <td>
            {{ $item->title }}
            <br>
            <i class="fab fa-clock"></i>
            {{ $item->created_at->diffForHumans() }} 
        </td>
    </tr> 

    @elseif ($item->contents->title=='!title')

    <tr>
        <td>
            {!! $item->content !!}
        </td>
    </tr>
    @else
    <tr class="bg-light">
        <td>
            {{ $item->title }}
        </td>
    </tr> 
    <tr>
        <td>
            {!! $item->content !!}
        </td>
    </tr> 
    @endif
    @endif
    @endforeach
 
  </tbody>
</table>

@endsection