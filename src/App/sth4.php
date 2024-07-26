<h1>{{ $site_name }}</h1>

<ul>
@foreach($people as $person)
    <li>{{$person->name}}</li>
@endforeach
</ul>
