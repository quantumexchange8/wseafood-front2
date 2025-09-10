@extends('master')

@section('contents')
    @include('contents.nav')

<section class="relative md:py-16 py-8 " id="terms">
    <div class="container relative">
        <div class=" items-center mt-16 gap-[30px] relative">
            <h2 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-bold">
                Terms & Conditions
            </h2>

            <p class="text-slate-500 dark:text-gray-400 text-lg mb-6 font-bold">
                Welcome to Wondering Seafood Membership App ("the App"). By using this App, you agree to be bound by the following Terms & Conditions.
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">1. Membership Eligibility</strong><br>
                You must be at least 18 years old to register. Membership is non-transferable.
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">2. Points Collection & Redemption</strong><br>
                Points are awarded based on in-store purchases only and have no cash value. Expired points will not be reinstated.
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">3. Modification & Termination</strong><br>
                Wondering Plan A Sdn Bhd reserves the right to change or terminate the program at anytime without prior notice.
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">4. Misuse of Account</strong><br>
                Accounts found to be abusing the system (e.g. fraud) will be suspended without compensation.
            </p>

            <p class="text-slate-400 dark:text-gray-400">
                <strong class="text-lg text-slate-500">5. Governing Law</strong><br>
                These terms shall be governed by the laws of Malaysia.
            </p>
        </div>
    </div>
</section>
@endsection
