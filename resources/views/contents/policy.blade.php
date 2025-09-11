@extends('master')

@section('contents')
    @include('contents.nav')

<section class="relative md:py-16 py-8" id="terms">
    <div class="container relative">
        <div class=" items-center mt-16 gap-[30px] relative">
            <h2 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-bold">
                {{ __('messages.privacy-policy') }}
            </h2>

            <p class="text-slate-500 dark:text-gray-400 text-lg mb-6 font-bold">
                {{ __('messages.policy-desc') }}
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">{{__('messages.policy-one')}}</strong><br>
                {{ __('messages.policy-one-desc') }}
            </p>

            <p class="text-slate-400 dark:text-gray-400">
                <strong class="text-lg text-slate-500">{{__('messages.policy-two')}}</strong><br>
                {{__('messages.policy-two-desc')}}</p>
                <ul class="list-disc list-inside text-slate-400 dark:text-gray-400 mb-6">
                    <li>{{__('messages.policy-two-info1')}}</li>
                    <li>{{__('messages.policy-two-info2')}}</li>
                    <li>{{__('messages.policy-two-info3')}}</li>
                </ul>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">{{ __('messages.policy-three') }}</strong><br>
                {{ __('messages.policy-three-desc') }}
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">{{ __('messages.policy-four') }}</strong><br>
                {{ __('messages.policy-four-desc') }}
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">{{ __('messages.policy-five') }}</strong><br>
                {{ __('messages.policy-five-desc') }}
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">{{__('messages.policy-six')}}</strong><br>
                {{ __('messages.policy-six-desc') }}
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">{{__('messages.policy-seven')}}</strong><br>
                {{ __('messages.policy-seven-desc') }}
            </p>
        </div>
    </div>
</section>


@endsection
