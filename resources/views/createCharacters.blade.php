@extends('layout')
@section('content')
  <h2>Enter Character form</h2>
  <form class="form-horizontal" action="{{ route('store')}} " method="post">
    {!! csrf_field() !!} {{-- let it be apsauga nuo spammeriu--}}
    <div class="form-group @if($errors->has('name')) has-error @endif"> {{-- BAIGEM CIA --}}
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ old('name')}}">
        @if ($errors->has('name'))
          <i class="has-error ">{{ $errors->first('name') }}</i></br>
        @endif
      </div>
    </div>
    <div class="form-group @if($errors->has('race')) has-error @endif">
      <label class="control-label col-sm-2" for="race">Race:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="race" placeholder="Enter Race" name="race" value="{{ old('race')}}">
        @if ($errors->has('race'))
          <i>{{ $errors->first('race') }}</i></br>
        @endif
      </div>
    </div>
    <div class="form-group @if($errors->has('power_level')) has-error @endif">
      <label class="control-label col-sm-2" for="pwrlevel">Power Lvl:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwrlevel" placeholder="Enter PowerLevel" name="power_level" value="{{ old('power_level') }}">
        @if ($errors->has('power_level'))
          <i>{{ $errors->first('power_level') }}</i></br>
        @endif
      </div>
    </div>
    <div class="form-group @if($errors->has('description')) has-error @endif">
      <label class="control-label col-sm-2" for="description">Description:</label>
      <div class="col-sm-10">
        <textarea type="text" class="form-control" id="description"  name="description" placeholder="Enter Description">{{ old('description') }}</textarea>
        @if ($errors->has('description'))
          <i>{{ $errors->first('description') }}</i></br>
        @endif
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  <a href="{{ route('index') }}" class="btn btn-primary">Back to main page</a>
@endsection
