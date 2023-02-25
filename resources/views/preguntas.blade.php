@extends('layout.layout')

@section('title', 'Página de inicio')

@section('content')     
     <br/>
     <br/>
     <br/>
     <br/>
        <form action="{{route('corregir')}}" method="POST">

            @csrf
            @php
                $x=0;
                
              //  shuffle($preguntas);

            @endphp
            
        @foreach($preguntas as $pregunta)
        
            <div class="card mt-2 col-md-6 mx-auto p-2 shadow-lg ">
                @php
                    $name="respuesta_".(string)$pregunta->id;
                    $pregunta_id="pregunta_id".(string)$pregunta->id;
                    $correcta_id="correcta_id".(string)$pregunta->id;
                    $pregunta_texto_id="pregunta_texto_id".(string)$pregunta->id;
                    
                    $x++;
                @endphp
                  
                
                <div class="card-title p-1">
                    <h6><strong>{{$x}}. {{$pregunta->pregunta}}</strong></h6>
                </div>
            <div class="card-body p-1">
            
                <input type="hidden" name={{$pregunta_texto_id}} value="{{$pregunta->pregunta}}">
                <input type="hidden" name={{$pregunta_id}} value={{(string)$pregunta->id}}>
                <input type="hidden" name={{$correcta_id}} value={{$pregunta->respuesta}}>
                <input type="hidden" name={{$name}} value="x">
                <input type="radio" name={{$name}} value="a"> a) <i>{{$pregunta->a}}</i>
                @if ($pregunta->respuesta=="a")
                    <b> <i class="fas fa-check"></i> Correcta</b>
                @endif
                <br/>
                <input type="radio" name={{$name}} value="b"> b)<i> {{$pregunta->b}}</i>
                @if ($pregunta->respuesta=="b")
                    <b><i class="fas fa-check"></i>  Correcta</b>
                @endif
                <br/>
                <input type="radio" name={{$name}} value="c"><i> c) {{$pregunta-> c}}</i>
                @if ($pregunta->respuesta=="c")
                    <b><i class="fas fa-check"></i>  Correcta</b>
                @endif
                <br/>
                <input type="radio" name={{$name}} value="d"><i> d) {{$pregunta-> d}}</i> 
                @if ($pregunta->respuesta=="d")
                    <b><i class="fas fa-check"></i>  Correcta</b>
                @endif
               
            
            </div>
        </div>

        @endforeach
        <div class="container">
            <div class="card mx-auto col-md-4 mt-2">
            <input type="submit" class="btn btn-primary text-center" value="Corregir">
            </div>
        </div>
        </form>
        
        


        @endsection

