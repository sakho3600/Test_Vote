@extends('layouts.defaults')

@section('content')
    <div class="panel panel-default">

        <div class="panel-heading clearfix">
            
            <span class="pull-left">
                <h4 class="mt-5 mb-5">Create New Reponse Abonnes</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('reponse_abonnes.reponse_abonnes.index') }}" class="btn btn-primary" title="Show All Reponse Abonnes">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        <div class="panel-body">
        
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('reponse_abonnes.reponse_abonnes.store') }}" accept-charset="UTF-8" id="create_reponse_abonnes_form" name="create_reponse_abonnes_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('reponse_abonnes.form', [
                                        'reponseAbonnes' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Repondre">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection


