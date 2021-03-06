@extends('index', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Edit'])

@section('content')

    <div class="ui fluid container">
        <div class="row">
            <div class="ui four column grid">
                <div class="column">
                    <h1>Statuses: Edit</h1>
                </div>
                <div class="column right floated">
                    <div class="ui two column grid">
                        <div class="column">
                            {!! Form::open(['route' => 'statuses.search', 'class' => 'ui form']) !!}
                            <div class="field">
                                <input class="fluid" name="search" placeholder="Search">
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <div class="column">
                            <a class="ui button primary right floated" href="{!! route('statuses.create') !!}">Add New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <div class="raw-margin-top-24">
                    {!! Form::model($status, ['route' => ['statuses.update', $status->id], 'method' => 'patch', 'class' => 'ui form']) !!}
                    @form_maker_object($status, FormMaker::getTableColumns('statuses'), 'statuses.form')
                    <div class="field">
                        <div class="raw-margin-top-24">
                            {!! Form::submit('Update', ['class' => 'ui button primary right floated']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop
