<section class="relative md:py-24 py-16" id="features">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-6 text-center">
            <h6 class="text-red-500 uppercase text-sm font-bold tracking-wider mb-3">{{ __('messages.user-guide') }}</h6>
            <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-bold">{{__('messages.guide-title')}}</h4>

            <p class="text-slate-400 max-w-xl mx-auto">{{ __('messages.guide-sub-heading') }}</p>
        </div><!--end grid-->

        <div class="flex flex-wrap justify-center gap-4 mt-6">
            <!-- Register -->
            <div class="p-6 shadow-xl shadow-slate-100 dark:shadow-slate-800 transition duration-500 rounded-3xl max-w-sm flex-1 text-center">
                <div class="flex justify-center">
                    <div class="size-16 bg-red-500/5 text-red-500 rounded-2xl flex justify-center items-center shadow-sm transform transition-transform duration-300 hover:scale-110">
                        <i data-feather="file-text" class="size-5"></i>
                    </div>
                </div>
                <div class="content mt-7">
                    <h4 class="text-lg hover:text-red-500 dark:text-white dark:hover:text-red-500 transition-all duration-500 ease-in-out font-semibold">{{ __('messages.step-one-title') }}</h4>
                    <p class="text-slate-400 mt-3">{{ __('messages.step-one-desc') }}</p>
                </div>
            </div>


            <!-- Earn Points -->
            <div class="p-6 hover:shadow-xl hover:shadow-slate-100 dark:hover:shadow-slate-800 transition duration-500 rounded-3xl max-w-sm flex-1 text-center">
                <div class="flex justify-center">
                    <div class="size-16 bg-red-500/5 text-red-500 rounded-2xl flex justify-center items-center shadow-sm transform transition-transform duration-300 hover:scale-110">
                        <i data-feather="gift" class="size-5"></i>
                    </div>
                </div>
                <div class="content mt-7 text-center">
                    <h4 class="text-lg hover:text-red-500 dark:text-white dark:hover:text-red-500 transition-all duration-500 ease-in-out font-semibold">{{__('messages.step-two-title')}}</h4>
                    <p class="text-slate-400 mt-3">{{ __('messages.step-two-desc') }}</p>
                </div>
            </div>

            <!-- Redeem Points -->
            <div class="p-6 shadow-xl shadow-slate-100 dark:shadow-slate-800 transition duration-500 rounded-3xl max-w-sm flex-1 text-center">
                <div class="flex justify-center">
                    <div class="size-16 bg-red-500/5 text-red-500 rounded-2xl flex justify-center items-center shadow-sm transform transition-transform duration-300 hover:scale-110">
                        <i data-feather="shopping-bag" class="size-5"></i>
                    </div>
                </div>
                <div class="content mt-7 text-center">
                    <h4 class="text-lg hover:text-red-500 dark:text-white dark:hover:text-red-500 transition-all duration-500 ease-in-out font-semibold">{{ __('messages.step-three-title') }}</h4>
                    <p class="text-slate-400 mt-3">{{ __('messages.step-three-desc') }}</p>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->