@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">Langugages:</div>

                <div class="panel-body">
                    @foreach($languages as $language)
                        {{ $language->name }} <br>
                    @endforeach
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">Libraries:</div>

                <div class="panel-body">
                    @foreach($libraries as $library)
                        {{ $library->name }} <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

