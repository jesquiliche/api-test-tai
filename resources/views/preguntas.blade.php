@extends('layout.layout')

@section('title', 'Página de inicio')

@section('content')     
     <br/>
     <br/>
     <br/>
     <br/>
     
        @foreach($preguntas as $pregunta)
        
            <div class="card mt-2 col-md-6 mx-auto p-2 shadow-lg ">
                <div class="card-title p-2">
                    <h6><strong>{{$pregunta->pregunta}}</strong></h6>
                </div>
            <div class="card-body p-2">
            <form>
                       
                <input type="radio" name="respuesta" value="a"><i> a) {{$pregunta->a}}</i> <br/>
                <input type="radio" name="respuesta" value="b"><i> b) {{$pregunta->b}}</i><br/>
                <input type="radio" name="respuesta" value="c"><i> c) {{$pregunta-> c}}</i> <br/>
                <input type="radio" name="respuesta" value="d"><i> d) {{$pregunta-> d}}</i> <br/>
                <br/>
                <input type="submit" class="btn btn-primary">
                <br/>
            </form>
            </div>
        </div>

        @endforeach
        {{$preguntas->links()}}


        @endsection

