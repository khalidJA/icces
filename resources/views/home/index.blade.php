@extends('layouts.app')
@section('content')


<div class="contents">
  @foreach ($middle as $item)
    @if(strip_tags($item->content)=='count down' || strip_tags($item->content)=='countdown')
    <div class="card">
      <div class="content-title">
        <div class="text">{{ $item->title }}</div>
      </div>
      <div class="card-body">
        <div id="countdown" data-time="Dec 30, 2021 00:00:00">
          <ul>
            <li><span id="days"></span>days</li>
            <li><span id="hours"></span>Hours</li>
            <li><span id="minutes"></span>Minutes</li>
            <li><span id="seconds"></span>Seconds</li>
          </ul>
        </div>
      </div>
    </div>
      @elseif ($item->content=='' || $item->content==null || $item->content=='<p></p>')
      <div class="card">
        <div class="content-title">
          <div class="text"> 
            {{ $item->title }}  
        
          </div>
          <br>
          <table class="table">
            <tr>
              <td><b>Date Added : <i class="fas fa-clock"></i> {{ $item->created_at->diffForHumans() }} </b></td>
              <td><b>Date Update: <i class="far fa-clock"></i> {{ $item->updated_at->diffForHumans() }} </b></td>
            </tr>
          </table>
        </div>
      </div> 
      @elseif($item->title=='!title')
      <div class="card material">
        <br>
        <table class="table">
          <tr>
            <td><b>Date Added : <i class="fas fa-clock"></i> {{ $item->created_at->diffForHumans() }} </b></td>
            <td><b>Date Update: <i class="far fa-clock"></i> {{ $item->updated_at->diffForHumans() }} </b></td>
          </tr>
        </table>
       <hr>
        <div class="card-body"> {!! $item->content !!}   </div>
      </div>
      @else
      <div class="card material">
        <div class="content-title">
          <div class="text"> {{ $item->title }}</div>
          <br>
          <table class="table">
            <tr>
              <td><b>Date Added : <i class="fas fa-clock"></i> {{ $item->created_at->diffForHumans() }} </b></td>
              <td><b>Date Update: <i class="far fa-clock"></i> {{ $item->updated_at->diffForHumans() }} </b></td>
            </tr>
          </table>
        </div>
        <div class="card-body">  {!! $item->content !!}</div>
      </div> 
      @endif
  @endforeach
 

      </div>  

@endsection