@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
        <h1>Админка</h1>
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach

                </tbody>
                </table>
</div>
@endsection
