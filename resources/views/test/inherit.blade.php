@extends('myTestLayout.master')

@section('content')
    <section class="index">
        <section class="row m-0">
            <section class="col-6 offset-3 jumborton">
                <h1>hello bootstrap</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, officia iusto soluta pariatur perspiciatis iste repellat consequatur doloribus illum, explicabo provident expedita magnam facilis porro aspernatur incidunt consequuntur adipisci error.

                </p>
                <a href="" class="btn btn-primary" id="demo">read</a>
                <a href="{{route('slider_create')}}" class="btn btn-success">create</a>
                {{-- @if ($username === "akmali")
                    <h2>welcome {{$username}}</h2>

                    @else 
                    <h1><a href="#" class="btn btn-success">register</a></h1>
                @endif --}}

                {{-- @for ($i = 0; $i < sizeof($data); $i++)
                    <h2>{{$data[$i]}}</h2>
                @endfor --}}
{{-- 
                @forelse ($data as $item)
                    <h2>{{$item}}</h2>
                @empty
                    <h1>NO valid record</h1>
                @endforelse --}}

                @php
                    $data = ['akmal', 'car', 123]
                @endphp

                {{-- @component('components.sliderComponent')
                    @slot('title')
                        slider component
                    @endslot

                    @slot('description')
                        filled with slot attribute
                    @endslot

                    @slot('btnLink')
                        btn-danger
                    @endslot
                @endcomponent --}}

                @Headings(akmalnawabi)
                @include('myTestLayout.partials.slider', ['data'=>$data])
                @include('myTestLayout.partials.menu')

            </section>
        </section>
    </section>
@endsection
{{-- 
@section('js')
    <script>
        let demo = document.getElementById('demo');
        demo.addEventListener('click', () => {
            $('.jumborton').fadeOut(1000)
            alert('read clicked')
        })
    </script>
@endsection --}}

@section('css')
    <style>
        .jumborton {
            background-color: gray;
        }
        .btn {
            margin-bottom: 10px
        }
    </style>
@endsection

@section('title')
    this is inherit
@endsection