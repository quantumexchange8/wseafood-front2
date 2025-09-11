@extends('master')

@section('contents')
    @include('contents.nav')

<section class="relative md:py-16 py-8 " id="terms">
    <div class="container relative">
        <div class=" items-center mt-16 gap-[30px] relative">
            <h2 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-bold">
                {{ __('messages.terms-conditions') }}
            </h2>

            <p class="text-slate-500 dark:text-gray-400 text-lg mb-6 font-bold">
                {{ __('messages.terms-desc') }}
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">{{ __('messages.terms-one') }}</strong><br>
                {{ __('messages.terms-one-desc') }}
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">
                    {{ __('messages.terms-two') }}</strong><br>{{__('messages.terms-two-desc')}}
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">{{ __('messages.terms-three') }}</strong><br>
                {{ __('messages.terms-three-desc') }}
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">{{ __('messages.terms-four') }}</strong><br>
                {{ __('messages.terms-four-desc') }}
            </p>

            <p class="text-slate-400 dark:text-gray-400">
                <strong class="text-lg text-slate-500">{{ __('messages.terms-five') }}</strong><br>
                {{__('messages.terms-five-desc')}}
            </p>
        </div>
    </div>
</section>
@endsection
