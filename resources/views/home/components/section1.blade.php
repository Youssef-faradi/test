<h1>hello from home </h1>
<form action="{{ route("home.store") }}" method="post">
    @csrf
    <input name="name" type="text" >
    <input name="age" type="number" >
    <button>Insert</button>
</form>
@foreach ($homes as $home )
    <h1>{{ $home->name }}</h1>   
@endforeach