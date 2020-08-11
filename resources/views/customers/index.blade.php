
@if(Session::has('Message')){{
    Session::get('Message')
}}
@endif

<a href="{{ url('customers/create' )}}">Add Client</a>
<<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Last_Name</th>
            <th>Mail</th>
            <th>Code</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$customer->Name}}</td>
            <td>{{$customer->Last_Name}}</td>
            <td>{{$customer->Mail}}</td>
            <td>{{$customer->Code}}</td>
            <td>
            
            <a href="{{url('/customers/'.$customer->id.'/edit') }}"
            Edit
            </a>
            
            <form method="post" action="{{url('/customers/' .$customer->id) }}">
            {{csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit " onclick="return confirm('delete?');">Delete</button>
            </form>


            </td>
        </tr>
    @endforeach
    </tbody>
</table>
