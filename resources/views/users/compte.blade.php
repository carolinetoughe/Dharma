@extends('layouts.app')

@section('content')

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
    @endif
<div class="container">
    <div class="row justify-content-center" style="margin-top: 200px; margin-bottom: 80px;">
        <div class="col-md-6">
            <div class="card" font-family: "Open Sans", sans-serif;>
                <div class="card-header text-center" style="background-color:#FF1493;">{{ __('Création de Compte') }}</div>

                <div class="card-body">
                {!! Form::open(array('route' => 'users.store','method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nom:</strong>
            {!! Form::text('nom', null, array('placeholder' => 'Entrer Votre Nom','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Prénom:</strong>
            {!! Form::text('prenom', null, array('placeholder' => 'Entrer Votre Prénom','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Numéro De Telephone:</strong>
            {!! Form::text('numero', null, array('placeholder' => 'Entrer Votre Numéro','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Date de Naissance:</strong>
            {!! Form::date('datenaissance', null, array('placeholder' => 'Entrer Votre Date De Naissance','class' => 'form-control')) !!}
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
  <label for="image" class="col-md-4 col-form-label text-md-right" style="font-weight:bold;">{{ __('Choisir Votre Image:') }}</label>
   <input type="file" name="image" />
  </div>
 </div>
                        


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>E-mail:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Entrer Votre Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Mot De Passe:</strong>
            {!! Form::password('password', array('placeholder' => 'Entrer Votre Mot De Passe','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirmation MDP:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirmer Votre Mot De Passe','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <!-- <strong>Role:</strong> -->
            <!-- {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!} -->
            <input id="roles" name="roles" type="hidden" value="Patient">
        </div>
    </div>
    <br>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Créer</button>
    </div>
</div>
{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
