@extends('layouts.app')

@section('content')
<report-form :report-data="{{ $reports }}" />
@endsection
