@extends('master')
@section('body')
   @if(session('success'))
      <div class="alert alert-success col-md-4">
         {{ session('success') }}
      </div>
   @endif
   @if (count($errors) > 0)
      <div class="alert alert-danger col-md-4">
         <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
   @endif
   <h3>Registrovanje odsustva</h3>
   {!! Form::open(['route' => 'snimi', 'class'=>'form-horizontal', 'id'=>'forma']) !!}
   {!! Form::token() !!}
   <div class="col-md-6">
      <div class="col-md-6">
         <i class="fa fa-calendar"> Datum:</i>
         <input type="text" id="datepicker1" autocomplete = "off">
      </div>
      <div class="col-md-12">
         <div class="form-group col-md-6" data-toggle="dropdown">
            {!! Form::label('vrsta_odsustva', 'Vrsta odsustva *', ['class'=>'col-md-6 control-label vrsta_odsustva'])!!}
            <div class="col-md-12">
               {!! Form::select('vrsta_odsustva', array(
                  'bolovanje' => 'Bolovanje',
                  'godisnji' => 'Godišnji'
               ),
               $selected = null, [ 'class' => 'form-control']) !!}
            </div>
         </div>
      </div>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="col-md-12">
         <div class="form-group">
            <button id="snimi" align="center" type="submit" class="btn
            btn-success" style="display:block; width:100%; margin-top:20px;">Sačuvaj</button>
         </div>
      </div>
   </div>
   {{ Form::close() }}
   <div class="col-md-12" id="ostali">
@endsection
@section('script')
   <script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
   <script type="text/javascript">
   $(function() {
      $('#datepicker1').datepicker({
         format: 'dd.mm.yyyy',
         autoclose: true
      });
      $('#snimi').on('click', function(event){
         event.preventDefault();
         var datum = $('#datepicker1').val();
         var vrsta = $('.vrsta_odsustva option:selected').text();
         // var brand = $('.brands option:selected').text();
         var token = $('input[name="_token"]').val();

         alert(vrsta);
         $.ajax({
            //	dataType: 'json',
            url:"/snimi",
            method:"POST",
            data:{datum:datum, vrsta:vrsta, token:token},
            success:function(data){
               $('#ostali').fadeIn();
               $('#ostali').html(data);
            }
         });
      });
   });
   </script>
@endsection
