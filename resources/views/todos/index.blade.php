@extends('layouts.app')
@section('content')

<div>
    <div>
        <h1>
            TODOS
        </h1>
    </div>
    <div>
        <a href="todos/create">&rarr;Add a new todo</a>
        <br>
        <br>
        @if(session('message'))
            <div style="color:rgb(37, 110, 41)">{{session('message')}}</div>
        @endif
    </div>
    <style>
        ul {
            list-style-type: none; 
            padding: 0; 
            margin: 0; 
        }
    </style>
    <div>
        @forelse ($todos as $todo)
            <ul>
                <form action="{{ route('todos.update', $todo->id) }}" method="POST">
                    @method('put')
                    @csrf
                    <li>
                        @if ( $todo->done )
                            <s>
                                {{ $todo->todo }}
                            </s>
                        @else
                            {{ $todo->todo }}
                        @endif

                        <button type="submit"> done
                        </button>
                    </li>
                </form>
            </ul>
        @empty
            <div>
                <h2>No todos yet</h2>
            </div>
        @endforelse
    </div>
</div>
@endsection