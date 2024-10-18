@extends('home.app')

@php
$contacts = [
['name' => 'Eddy PCX', 'email' => 'eddyahm@gmail.com', 'phone' => '123-456-7890'],
['name' => 'Eddy Semeru', 'email' => 'eddysemeru@gmail.com', 'phone' => '987-654-3210'],
['name' => 'Asmaraeddy', 'email' => 'villaineddy@gmail.com', 'phone' => '555-555-5555'],
['name' => 'Eddy Asmara Kacau', 'email' => 'eddysad@gmail.com', 'phone' => '444-444-4444'],
['name' => 'Eddy Cheng', 'email' => 'mengeddy@gmail.com', 'phone' => '666-666-6666'],
];
@endphp

@section('title', 'List Eddy se-UNEJ')
@section('content')
<div class="p-4">
    <h1 class="text-white text-2xl mb-4">Contact List</h1>
    <table class="min-w-full bg-white rounded-lg shadow-lg">
        <thead>
            <tr class="bg-gray-200 text-gray-700">
                <th class="py-2 px-9 border">Name</th>
                <th class="py-2 px-9 border">Email</th>
                <th class="py-2 px-9 border">Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr class="hover:bg-gray-100">
                <td class="py-2 px-9 border">{{ $contact['name'] }}</td>
                <td class="py-2 px-9 border">{{ $contact['email'] }}</td>
                <td class="py-2 px-9 border">{{ $contact['phone'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection