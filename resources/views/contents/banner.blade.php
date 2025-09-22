<section class="relative overflow-hidden md:py-36 py-24 bg-slate-50/50 dark:bg-slate-800/20 bg-[url('../../assets/images/bg1.png')] bg-no-repeat bg-center bg-cover" id="home">
    <div class="container relative">
        <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-6 gap-[30px] relative">
            <div class="md:me-6">
                
                <div class="flex items-center">
                    <img src="{{  asset('assets/images/wondering-logo.png') }}" class="h-12"><h6 class="text-red-500 uppercase text-lg font-bold tracking-wider ms-1">{{ __('messages.title') }} </h6>
                </div>

                <h4 class="font-bold lg:leading-normal leading-normal text-[42px] lg:text-[54px] mb-5">
                {{__('messages.welcome')}}<span class="text-red-500">{{ __('messages.earn') }}</span></h4>

                <p class="text-slate-400 text-lg max-w-xl">✨ {{__('messages.description')}}</p>
            
                <div class="mt-6">
                    <a href=""><img src="{{ asset('assets/images/app.png') }}" class="h-12 inline-block m-1" alt="Appstore"></a>
                    <a href=""><img src="{{ asset('assets/images/play.png') }}" class="h-12 inline-block m-1" alt="Google Playstore"></a>
                    <a href="https://wonderingmember.com/wondering.apk"><img src="{{ asset('assets/images/apk.png') }}" class="h-12 inline-block m-1" alt="Android APK"></a>
                </div>
            </div>

            <!-- image-->
            <div class="relative">
                <img src="{{ asset('assets/images/phone/phone1.png') }}" class="mx-auto w-80 rotate-12 relative z-2" alt="Wondering Seafood Main Page">
                <div class="overflow-hidden absolute md:size-[500px] size-[400px] bg-gradient-to-tl to-red-500/20 via-red-500/70 from-red-500 bottom-1/2 translate-y-1/2 md:start-0 start-1/2 ltr:md:translate-x-0 ltr:-translate-x-1/2 rtl:md:translate-x-0 rtl:translate-x-1/2 z-1 shadow-md shadow-red-500/10 rounded-full"></div>

                <div class="overflow-hidden after:content-[''] after:absolute after:size-16 after:bg-red-500/20 after:top-0 after:end-6 after:z-1 after:rounded-lg after:animate-[spin_10s_linear_infinite]"></div>
            </div>
        </div>
    </div>
</section>
