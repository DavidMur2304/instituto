<x-layouts.layout>
    @guest
    @endguest

    @auth
        <div style="margin-left: 20px" class="card bg-base-100 w-96 shadow-sm mt-4">
            <figure>
                <img
                    src="{{asset('images/kids.jpg')}}"
                    alt="kids" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">{{ __('messages.student_management') }}</h2>
                <p>{{ __('messages.student_management_desc') }}</p>
                <div class="card-actions justify-end">
                    <a href="{{ route('alumnos.index') }}" class="btn btn-primary">
                        {{ __('messages.access_now') }}
                    </a>
                </div>
            </div>
        </div>
    @endauth
</x-layouts.layout>
