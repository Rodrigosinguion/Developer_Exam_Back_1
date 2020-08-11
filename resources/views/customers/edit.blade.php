<form action="{{ url('/customers/' .$customer->id) }}" method="post" enctype="multipart/form-data">
{{csrf_field() }}
{{ method_field('PATCH') }}
<label for="Name">{{'Name'}}</label>
<input type="text" name="Name" id="Name" value="{{$customer->Name}}">
<br/>
<label for="Last_Name">{{'Last Name'}}</label>
<input type="text" name="Last_Name" id="Last_Name" value="{{$customer->Last_Name}}">
<br/>
<label for="Mail">{{'Mail'}}</label>
<input type="email" name="Mail" id="Mail" value="{{$customer->Mail}}">
<br/>
<label for="Code">{{'Code'}}</label>
<input type="text" name="Code" id="Code" value="{{$customer->Code}}">
<br/>
<input type="submit" value="Modify">
<a href="{{ url('customers' )}}">To return</a>


</form>