<section class="relative md:py-24 py-16" id="features">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-6 text-center">
            <h6 class="text-red-500 uppercase text-sm font-bold tracking-wider mb-3">{{__('messages.feature-benefit')}}</h6>
            <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-bold">{{ __('messages.feature-title') }}</h4>

            <p class="text-slate-400 max-w-xl mx-auto">{{ __('messages.feature-sub-heading') }}</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-12 md:grid-cols-12 grid-cols-1 mt-6 gap-6 items-center">
            <div class="lg:col-span-4 md:col-span-6 lg:order-1 order-2">
                <div class="grid grid-cols-1 gap-6">
                    <div class="group flex duration-500 xl:p-3">
                        <div class="flex md:order-2 order-1 align-middle justify-center items-center size-16 mt-1 bg-red-500/5 dark:bg-red-500/10 group-hover:bg-red-500 group-hover:text-white text-red-500 rounded-2xl text-2xl shadow-sm dark:shadow-gray-800 duration-500">
                            <i data-feather="dollar-sign" class="size-5"></i>
                        </div>
                        <div class="flex-1 md:order-1 order-2 md:text-end md:me-4 md:ms-0 ms-4">
                            <h4 class="mb-0 text-lg font-semibold">{{ __('messages.feature-one') }}</h4>
                            <p class="text-slate-400 mt-3">{{ __('messages.feature-one-desc1') }}<br> {{ __('messages.feature-one-desc2') }}</p>
                        </div>
                    </div>
                    <!--end feature-->
                    
                    <div class="group flex duration-500 xl:p-3 mt-2">
                        <div class="flex md:order-2 order-1 align-middle justify-center items-center size-16 mt-1 bg-red-500/5 dark:bg-red-500/10 group-hover:bg-red-500 group-hover:text-white text-red-500 rounded-2xl text-2xl shadow-sm dark:shadow-gray-800 duration-500">
                            <i data-feather="calendar" class="size-5"></i>
                        </div>
                        <div class="flex-1 md:order-1 order-2 md:text-end md:me-4 md:ms-0 ms-4">
                            <h4 class="mb-0 text-lg font-semibold">{{ __('messages.feature-two') }}</h4>
                            <p class="text-slate-400 mt-3">{{ __('messages.feature-two-desc') }}</p>
                        </div>
                    </div>
                    <!--end feature-->
                    
                    <div class="group flex duration-500 xl:p-3 mt-2">
                        <div class="flex md:order-2 order-1 align-middle justify-center items-center size-16 mt-1 bg-red-500/5 dark:bg-red-500/10 group-hover:bg-red-500 group-hover:text-white text-red-500 rounded-2xl text-2xl shadow-sm dark:shadow-gray-800 duration-500">
                            <i data-feather="star" class="size-5"></i>
                        </div>
                        <div class="flex-1 md:order-1 order-2 md:text-end md:me-4 md:ms-0 ms-4">
                            <h4 class="mb-0 text-lg font-semibold">{{ __('messages.feature-three') }}</h4>
                            <p class="text-slate-400 mt-3">{{ __('messages.feature-three-desc') }}
                            </p>
                        </div>
                    </div>
                    <!--end feature-->
                </div>
            </div>

            <!-- Image -->
            <div class="lg:col-span-4 md:col-span-12 lg:mx-4 lg:order-2 order-1">
                <img src="{{ asset('assets/images/phone/phone-reward.png') }}" class="mx-auto" alt="Wondering Seafood Reward Page">
            </div>

            <div class="lg:col-span-4 md:col-span-6 order-3">
                <div class="grid grid-cols-1 gap-6">
                    <div class="group flex duration-500 xl:p-3">
                        <div class="flex align-middle justify-center items-center size-16 mt-1 bg-red-500/5 dark:bg-red-500/10 group-hover:bg-red-500 group-hover:text-white text-red-500 rounded-2xl text-2xl shadow-sm dark:shadow-gray-800 duration-500">
                            <i data-feather="trending-up" class="size-5"></i>
                        </div>
                        <div class="flex-1 ms-4">
                            <h4 class="mb-0 text-lg font-semibold">{{ __('messages.feature-four') }}</h4>
                            <p class="text-slate-400 mt-3">{{ __('messages.feature-four-desc') }}</p>
                        </div>
                    </div>
                    <!--end feature-->
                    
                    <div class="group flex duration-500 xl:p-3 mt-2">
                        <div class="flex align-middle justify-center items-center size-16 mt-1 bg-red-500/5 dark:bg-red-500/10 group-hover:bg-red-500 group-hover:text-white text-red-500 rounded-2xl text-2xl shadow-sm dark:shadow-gray-800 duration-500">
                            <i data-feather="gift" class="size-5"></i>
                        </div>
                        <div class="flex-1 ms-4">
                            <h4 class="mb-0 text-lg font-semibold">{{ __('messages.feature-five') }}</h4>
                            <p class="text-slate-400 mt-3">{{ __('messages.feature-five-desc') }}</p>
                        </div>
                    </div>
                    <!--end feature-->
                    
                    <div class="group flex duration-500 xl:p-3 mt-2">
                        <div class="flex align-middle justify-center items-center size-16 mt-1 bg-red-500/5 dark:bg-red-500/10 group-hover:bg-red-500 group-hover:text-white text-red-500 rounded-2xl text-2xl shadow-sm dark:shadow-gray-800 duration-500">
                            <i data-feather="user-plus" class="size-5"></i>
                        </div>
                        <div class="flex-1 ms-4">
                            <h4 class="mb-0 text-lg font-semibold">{{ __('messages.feature-six') }}</h4>
                            <p class="text-slate-400 mt-3">{{ __('messages.feature-six-desc') }}</p>
                        </div>
                    </div>
                    <!--end feature-->
                </div>
            </div>
        </div>
    </div>
</section>