@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        {{-- <div class="font-medium text-red-600">
            {{ __('Whoops! Something went wrong.') }}
        </div> --}}
        @foreach ($errors->all() as $error)
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong>Danger!</strong> {{ $error }}
          </div>
        @endforeach

        {{-- <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul> --}}
    </div>
@endif
