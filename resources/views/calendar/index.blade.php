@extends('master')
@section('body')
   @if(session('success'))
   <div class="alert alert-success col-md-4">
     {{ session('success') }}
   </div>
 @endif



ovdje
@endsection

@section('script')
   {!! $calendar->calendar() !!}
   {!! $calendar->script() !!}
@endsection
