<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    {{-- {{dd($student) }} --}}
    <button class="btn btn-primary"> anh chung đẹp zai</button>
   {{-- BEGIN table data --}}
   <div class="container">
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
            @else{
                <tr>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['age']}}</td>
                    <td>{{$item['class']}}</td>
                    <td>{{$item['id']}}</td>
                    <td><img width="100px" src="{{$item['avatar']}}" alt=""></td>
                </tr> 
            }
            @endif
               @endforeach
               
              
           </tbody>
       </table>
   </div>
   {{-- END table data --}}
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>