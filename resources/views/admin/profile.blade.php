@extends('admin.layout') <!-- Uses the admin layout -->

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white shadow-md rounded-md">
    <h2 class="text-2xl font-bold mb-4">Admin Profile</h2>
    <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
</div>
@endsection
