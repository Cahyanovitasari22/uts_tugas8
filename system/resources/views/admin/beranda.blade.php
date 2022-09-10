@extends ('template.base')

@section('content')

<h1>
    Menu Beranda,
    <br>
    {{ auth()->user()->nama }}
</h1>


@endsection