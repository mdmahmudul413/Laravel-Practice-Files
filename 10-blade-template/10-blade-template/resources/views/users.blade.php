@include('inner')
<h1>This is user Page</h1>


@foreach($names as $user)
<h1>{{$user}}</h1>
@endforeach


<script>
    var data = @json($names);
    console.log(data);
    var data2 = data[0];
    console.log(data2);
</script>