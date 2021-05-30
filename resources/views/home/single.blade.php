@extends('layouts.app')
@section('content')
<div class="scroll" id="scroll"></div>
    <div class="card material">
        <div class="card-header">
        <h3 style="border-left:1px solid #c2c2c2;padding-left:20px;">  {{ $link['title'] }}</h3>
          <table class="table">
              <tr>
                  <td>
                      <b>Date Added</b> 
                      <i class="fas fa-clock"></i>
                      {{ $link->created_at->diffForHumans() }}
                  </td>
            
                  <td>
                      <b>Date Updated</b> 
                      <i class="far fa-clock"></i>
                      {{ $link->updated_at->diffForHumans() }}
                  </td>
              </tr>
          </table>
        </div>
        <div class="card-body p-5">
{!! $link['content'] !!}

        </div>
    </div>
@endsection