@extends('layouts.dashboard')

@section('content')
    @include('students._sidenav')
    <x-panel>
        <main>
            <div class="container-fluid px-4">
                <ol class="breadcrumb mt-4">
                    <li class="breadcrumb-item active">Grades</li>
                </ol>
                <h1>Grades</h1>
            </div>
        </main>
        <x-footer />
    </x-panel>
@endsection
