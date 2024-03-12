<h1>hello from home </h1>
<form action="{{ route("home.store") }}" method="post">
    @csrf
    <input name="name" type="text" >
    <input name="age" type="number" >
    <button>Insert</button>
</form>
@foreach ($homes as $home )
    <h1>Id :{{ $home->id }}</h1>  
    <h1>Name :{{ $home->name }}</h1>  
    <h1>Age :{{ $home->age }}</h1>   
    <a href="{{ route("home.show", $home) }}">about</a>
@endforeach