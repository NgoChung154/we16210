@extends('layout.master')



@section('title', 'Home page')
    
@section('content-title','Home page')
@section('content')
<table class=" table table-hover">
    <thead>
        <th>Ten</th>
        <th>Tuoi</th>
        <th>Lop</th>
        <th>Msv</th>
        <th>Anh dai dien</th>
    </thead>
    <tbody>
        @foreach ($student as $item)
        @if ($item['id']==1)
        <tr>
         <td>{{$item['name']}}</td>
         <td>{{$item['age']}}</td>
         <td>{{$item['class']}}</td>
         <td>{{$item['id']}}</td>
         <td><img width="100px" src="{{$item['avatar']}}" alt=""></td>
     </tr> 
     @else
         <tr>
             <td>{{$item['name']}}</td>
             <td>{{$item['age']}}</td>
             <td>{{$item['class']}}</td>
             <td>{{$item['id']}}</td>
             <td><img width="100px" src="{{$item['avatar']}}" alt=""></td>
         </tr> 
     
     @endif
        @endforeach
        
       
    </tbody>
</table>
@endsection