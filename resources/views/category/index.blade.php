<h2><a href= "{{url('category/create')}}">Create</a></h2>

@foreach ($categories as $category)

<article>
    <tr>
        <td>
            <h4> ID:  {{$category->id}}</h4>
        </td>
        <td>
            <h4> Name:  {{$category->name}}</h4>
        </td>
        <td>
            <h4> Description:  {{$category->description}}</h4>
        </td>
        <td>
            <h4> Email:  {{$category->email}}</h4>
        </td>

        <form
            action="{{url('category/'.$category->id.'/edit')}}">
            <input type="submit" value="Edit">
        </form>

         <form action="{{route('category.destroy',$category->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
         </form>

    </tr>
</article>

@endforeach



