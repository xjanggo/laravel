<h1>Actors</h1>

<table>
    <tr>
        <td>ID</td>
        <td>Image</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Note</td>
        <td>Actions</td>
    </tr>
    <tr>
        @foreach ($actors as $actor)
            <tr>
                <td>{{$actor['id']}}</td>
                <td>{{$actor['imgpath']}}</td>
                <td>{{$actor['fname']}}</td>
                <td>{{$actor['lname']}}</td>
                <td>{{$actor['note']}}</td>
                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
            </tr>
        @endforeach
    </tr>
</table>