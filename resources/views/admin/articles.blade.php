@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
        <h1>Cтатьи</h1>
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->body }}</td>
                        </tr>
                    @endforeach

                </tbody>
                </table>
</div>
@endsection
