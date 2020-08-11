Section to create clients
<form action="{{url('/customers')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<label for="Name">{{'Name'}}</label>
<input type="text" name="Name" id="Name" value="">
<br/>
<label for="Last_Name">{{'Last Name'}}</label>
<input type="text" name="Last_Name" id="Last_Name" value="">
<br/>
<label for="Mail">{{'Mail'}}</label>
<input type="email" name="Mail" id="Mail" value="">
<br/>
<label for="Code">{{'Code'}}</label>
<input type="text" name="Code" id="Code" value="">
<br/>
<input type="submit" value="Add">
<a href="{{ url('customers' )}}">To return</a>

</form>