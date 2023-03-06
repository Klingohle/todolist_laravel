@extends('layouts.app')
@section('content')

<div>
    <div>
        <h1>Create Todo</h1>
    </div>
</div>
<div>
    <form action="/todos" method="post">
        @csrf
        <div>
            <div><input type="text" placeholder="enter todo here..." name="todo" value="{{ old('todo') }}"></div>                     
            <div><button type="submit">Send</button>
        </div>
    </form>
</div>
@endsection