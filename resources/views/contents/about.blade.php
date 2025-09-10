<section class="relative md:py-24 py-16" id="about">
<div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-6">
            <div class="lg:col-span-5 md:col-span-6 md:order-1 order-2">
                <!-- Image -->
                <div class="pt-6 px-6 rounded-2xl bg-red-500/5 dark:bg-red-500/10 shadow-sm shadow-red-500/20">
                    <img src="{{ asset('assets/images/phone/half-member.png') }}" alt="Wondering Seafood Member Page">
                </div>
            </div><!--end grid-->

            <div class="lg:col-span-7 md:col-span-6 md:order-2 order-1">
                <div class="lg:me-10">
                    <h6 class="text-red-500 uppercase text-sm font-bold tracking-wider mb-3">{{ __('messages.about-us') }}</h6>
                    <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-bold">{{ __('messages.about-title-one') }} <br><span class="text-4xl">{{ __('messages.about-title-two') }}</span></h4>
                    <p class="text-slate-500 max-w-xl font-bold">{{ __('messages.about-sub-heading') }}</p><br>
                    <p class="text-slate-400 max-w-xl">{{__('messages.about-content')}}</p>

                    <ul class="list-none text-slate-400 mt-6">
                        <li class="mb-1 flex"><i class="mdi mdi-star text-red-500 text-2xl me-2"></i> {{ __('messages.about-one') }}</li>
                        <li class="mb-1 flex"><i class="mdi mdi-gift text-red-500 text-2xl me-2"></i> {{ __('messages.about-two') }}</li>
                        <li class="mb-1 flex"><i class="mdi mdi-cake text-red-500 text-2xl me-2"></i> {{ __('messages.about-three') }}</li>
                        <li class="mb-1 flex"><i class="mdi mdi-tag text-red-500 text-2xl me-2"></i> {{ __('messages.about-four') }}</li>
                    </ul>

                    <br>
                    <p class="text-slate-400 max-w-xl">{{ __('messages.about-end') }}</p>

                </div>
            </div>
        </div>
    </div>
</section>