
@extends('layouts.mainPage')

@section('titlePage')
    List Users
@endsection

@section('content')

<div class="bg-white rounded-lg shadow-md p-6">
    <h2 class="text-lg font-medium mb-4">Client List</h2>
    <table class="w-full text-left table-collapse">
        <thead>
            <tr>
                <th class="text-sm font-bold text-black p-2 bg-gray-100 ">fullName</th>
                <th class="text-sm font-bold text-black p-2 bg-gray-100 ">LastName</th>
                <th class="text-sm font-bold boldtext-black p-2 bg-gray-100 ">UserName</th>
                <th class="text-sm font-bold text-black p-2 bg-gray-100 ">Email</th>
                

              


            </tr>
        </thead>
        
        <tbody>
       @foreach ($users as $user)
           
       
       <tr class="odd:bg-gray-100 result_search">
           <td class="p-2">{{ $user->fname }}</td>
           <td class="p-2">{{ $user->lname }}</td>
           <td class="p-2">{{ $user->userName }}</td>
           
           <td class="p-2">{{ $user->email }}</td>
           
           
        </tr>
        
        @endforeach

        </tbody>
    </table>

</div>


@endsection