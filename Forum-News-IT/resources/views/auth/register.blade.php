@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="POST">
                <div class="mb-4">
                    <label for="name" class="sr-only">Name
                </div>
            </form>
        </div>
    </div>
@endsection