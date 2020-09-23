<!-- variable-->
<!-- If else condition  -->
<!-- For loop -->
<!--foreach loop -->

<h1> This is web page </h1>
<h2> {{ $data['name'] }}</h2>
<h3> {{$data['age']}} </h3>

@if($data['name']=='subhankar')
{{'This is correctly matched' }}
@else
{{'This name is not matching'}}
@endif

<br/>

@if($Info['address']="pandaveswar")

{{'This is right address'}}

@else

{{'This is not a right address'}}

@endif

<br/>
@for($i=0;$i<=6;$i++)

{{$i.''}}
<br/>

@endfor

<!-- foreach loop-->

@foreach($data as $list)

{{$list}}

@endforeach

<br/>

@foreach($Info as $text)

{{$text}}

@endforeach


<br/>

@foreach($Info as $key=>$value)

    {{$value}}

@endforeach
