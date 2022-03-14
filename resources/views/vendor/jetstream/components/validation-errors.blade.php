@if ($errors->any())
    <div {!! $attributes->merge(['class' => 'alert alert-danger text-sm p-2']) !!} role="alert">
        <div class="font-weight-bold">{{ __('Уууупс, что-то пошло не так') }}</div>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
