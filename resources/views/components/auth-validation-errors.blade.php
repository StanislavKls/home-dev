@props(['errors'])

@if ($errors->any())
    <div {!! $attributes->merge(['class' => 'alert alert-danger']) !!} role="alert">
        <div class="text-danger">{{ __('Уууупс, что-то пошло не так') }}</div>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
