@extends('app')

@section('title', 'Main Page')

@section('content')
<h1>Imperial College London - TeaCup - Main Page</h1>

<p>Tiny Extra Application for Continuous Update Project</p>
<p>Analysing reseach on cancer preventation and survial</p>
<p>Providing data statisic and analysis results with Front End Display and API setup </p>

<table border = "1">
    <tr>
    <td>Id</td>
    <td>Countries</td>
    </tr>
    @foreach ($selects as $select)
    <tr>
    <td>{{ $select->id }}</td>
    <td>{{ $select->name }}</td>
    </tr>
    @endforeach
</table>

@endsection

