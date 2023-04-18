<form action="{{route('category.store')}}" method="POST">
    @csrf
    <label>Name </label>
    <input type="text" name="name" id="">
    <br>
    <br>
    <label>Description </label>
    <input type="text" name="description" id="">
    <br>
    <br>
    <label>Email</label>
    <input type="text" name="email" id="">
    <br>
    <br>
    <input type="submit" value="Send">

</form>

