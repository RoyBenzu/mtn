<form action="{{route('category.update', $category->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" id="id" value='{{$category->id}}'>
    <label>Name </label>
    <input type="text" name="name" id="" value='{{$category->name}}'>
    <br>
    <br>
    <label>Description </label>
    <input type="text" name="description" id="" value='{{$category->description}}'>
    <br>
    <br>
    <label>Email</label>
    <input type="text" name="email" id="" value='{{$category->email}}' >
    <br>
    <br>
    <input type="submit" value="Send">

</form>
