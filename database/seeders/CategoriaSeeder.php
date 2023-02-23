<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
            [
                "bloque_id"=>1,
                "nombre"=>"La Constitución Española de 1978",
                "descripcion"=>"Derechos y deberes fundamentales. Su garantía y suspensión. La Jefatura del Estado. La Corona. Funciones constitucionales del Rey."
            ],
            [
                "bloque_id"=>1,
                "nombre"=>"Las Cortes Generales",
                "descripcion"=>"Atribuciones del Congreso de los Diputados y del Senado. El Tribunal Constitucional. Composición y atribuciones. El Defensor del Pueblo."
            ],
            [
                "bloque_id"=>1,
                "nombre"=>"El Gobierno",
                "descripcion"=>"Su composición. Nombramiento y cese. Las funciones del Gobierno. Relaciones entre el Gobierno y las Cortes Generales."
            ],
            [
                "bloque_id"=>1,
                "nombre"=>"La Administración Pública",
                "descripcion"=>"Principios constitucionales informadores. La Administración General del Estado: organización y personal a su servicio. El texto refundido del Estatuto Básico del Empleo Público y demás normativa de aplicación. Las Comunidades Autónomas y la Administración local: regulación constitucional."
            ],
            [
                "bloque_id"=>1,
                "nombre"=>"Las fuentes del derecho administrativo",
                "descripcion"=>""
            ],
            [
                "bloque_id"=>1,
                "nombre"=>"Las fuentes del derecho administrativo",
                "descripcion"=>"La jerarquía de las fuentes. La ley. Las disposiciones del Ejecutivo con fuerza de ley: decreto-ley y decreto legislativo. El reglamento: concepto, clases y límites. Otras fuentes del derecho administrativo."
            ],
            [
                "bloque_id"=>1,
                "nombre"=>"Políticas de igualdad de género",
                "descripcion"=>"La Ley Orgánica 3/2007, de 22 de marzo, para la igualdad efectiva de mujeres y hombres. Políticas contra la violencia de género. La Ley Orgánica 1/2004, de 28 de diciembre, de medidas de protección integral contra la violencia de género. Discapacidad y dependencia."
            ],
            [
                "bloque_id"=>1,
                "nombre"=>"La sociedad de la información",
                "descripcion"=>"Identidad y firma electrónica: régimen jurídico. El DNI electrónico. La Agenda Digital para España."
            ],
            [
                "bloque_id"=>1,
                "nombre"=>"La protección de datos personales",
                "descripcion"=>"Régimen jurídico. El Reglamento (UE) 2016/679, de 27 de abril, relativo a la protección de las personas físicas en lo que respecta al tratamiento de datos personales y a la libre circulación de estos datos. Principios y derechos. Obligaciones."
            ],
            [
                "bloque_id"=>1,
                "nombre"=>"Acceso electrónico",
                "descripcion"=>"Acceso electrónico de los ciudadanos a los servicios públicos y normativa de desarrollo. La gestión electrónica de los procedimientos administrativos: registros, notificaciones y uso de medios electrónicos. Esquema Nacional de Seguridad y de Interoperabilidad. Normas técnicas de Interoperabilidad."
            ],
            [
                "bloque_id"=>1,
                "nombre"=>"Instrumentos para el acceso electrónico",
                "descripcion"=>"Instrumentos para el acceso electrónico a las Administraciones públicas: sedes electrónicas, canales y puntos de acceso, identificación y autenticación. Infraestructuras y servicios comunes en materia de administración electrónica."
            ],
            [
                "bloque_id"=>2,
                "nombre"=>"Informática básica",
                "descripcion"=>"Representación y comunicación de la información: elementos constitutivos de un sistema de información. Características y funciones. Arquitectura de ordenadores. Componentes internos de los equipos microinformáticos."
            ],
            [
                "bloque_id"=>2,
                "nombre"=>"Periféricos: conectividad y administración",
                "descripcion"=>"Elementos de impresión. Elementos de almacenamiento. Elementos de visualización y digitalización."
            ],
            [
                "bloque_id"=>2,
                "nombre"=>"Tipos abstractos y Estructuras de datos",
                "descripcion"=>"Organizaciones de ficheros. Algoritmos. Formatos de información y ficheros."
            ],
            [
                "bloque_id"=>2,
                "nombre"=>"Sistemas operativos",
                "descripcion"=>"Características y elementos constitutivos. Sistemas Windows. Sistemas Unix y Linux. Sistemas operativos para dispositivos móviles"
            ],
            [
                "bloque_id"=>2,
                "nombre"=>"Sistemas de gestión de bases de datos",
                "descripcion"=>"Sistemas de gestión de bases de datos relacionales, orientados a objetos y NoSQL: características y componentes."
            ],
            [
                "bloque_id"=>3,
                "nombre"=>"Modelo conceptual de datos",
                "descripcion"=>"Entidades, atributos y relaciones. Reglas de modelización. Diagramas de flujo de datos. Reglas de construcción. Descomposición en niveles. Flujogramas."
            ],
            [
                "bloque_id"=>3,
                "nombre"=>"Diseño de bases de datos",
                "descripcion"=>"Diseño lógico y físico. El modelo lógico relacional. Normalización."
            ],
            [
                "bloque_id"=>3,
                "nombre"=>"Lenguajes de programación",
                "descripcion"=>"Representación de tipos de datos. Operadores. Instrucciones condicionales. Bucles y recursividad. Procedimientos, funciones y parámetros. Vectores y registros. Estructura de un programa."
            ],
            [
                "bloque_id"=>3,
                "nombre"=>"Lenguajes de interrogación de bases de datos",
                "descripcion"=>"Estándar ANSI SQL. Procedimientos almacenados. Eventos y disparadores."
            ],
            [
                "bloque_id"=>3,
                "nombre"=>"Diseño y programación orientada a objetos",
                "descripcion"=>"Elementos y componentes software: objetos, clases, herencia, métodos, sobrecarga. Ventajas e inconvenientes. Patrones de diseño y lenguaje de modelado unificado (UML)."
            ],
            [
                "bloque_id"=>3,
                "nombre"=>"Arquitectura Java EE/Jakarta EE y plataforma.NET",
                "descripcion"=>"Arquitectura Java EE/Jakarta EE y plataforma.NET: componentes, persistencia y seguridad. Características, elementos, lenguajes y funciones en ambos entornos."
            ],
            
            
        ];
        DB::table('categorias')->insert($data);
    }
}
