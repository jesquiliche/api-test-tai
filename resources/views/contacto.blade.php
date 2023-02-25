@extends('layout.layout')

@section('title', 'Página de inicio')

@section('content')     
     <br/>
     <br/>
     <br/>
     <br/>
     <br/>
     
     
     <form>
        @csrf
        <div class="card col-md-6 shadow-lg mx-auto p-5">
            <h4>Contacto</h4>
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
      
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
      
        <div class="form-group">
          <label for="mensaje">Mensaje:</label>
          <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
        </div>
      
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
      
@endsection

