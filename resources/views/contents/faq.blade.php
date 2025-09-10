<section class="relative overflow-hidden md:py-24 py-16" id="faqs">
    <div class="container relative">
        <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
            <div class="relative order-1 md:order-2">
                <!-- Image -->
                <div class="relative">
                    <img src="{{  asset('assets/images/phone/phone1.png') }}" class="mx-auto md:max-w-xs lg:max-w-sm" alt="Wondering Seafood Notification Page">

                </div>
                <div class="overflow-hidden absolute md:size-[500px] size-[400px] bg-gradient-to-tr to-red-500/20 via-red-500/70 from-red-500 bottom-1/2 translate-y-1/2 md:end-0 end-1/2 md:translate-x-0 translate-x-1/2 -z-1 shadow-md shadow-red-500/10 rounded-full">
                </div>
            </div>

            <div class="lg:me-8 order-2 md:order-1">
                <h6 class="text-red-500 uppercase text-sm font-bold tracking-wider mb-3">{{ __('messages.faq') }}</h6>
                <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-bold">{{__('messages.faq-title')}}</h4>
                <p class="text-slate-400 max-w-xl mx-auto">{{__('messages.faq-sub-heading')}}</p>
            
                <div id="accordion-collapseone" data-accordion="collapse" class="mt-8">
                    <!-- First section -->
                    <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden">
                        <h2 class="text-lg font-semibold" id="accordion-collapse-heading-1">
                            <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                <span>{{__('messages.faq-first')}}</span>
                                <svg data-accordion-icon class="size-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400 text-sm">{{__('messages.faq-first-content')}}<br>
                                {{ __('messages.faq-first-desc1') }}<br>{{__('messages.faq-first-desc2')}}<br>{{__('messages.faq-first-desc3')}}<br></p><br><strong class="text-slate-400 dark:text-gray-400 text-sm">{{__('messages.faq-first-note')}} </strong>
                            </div>
                        </div>
                    </div>

                    <!-- Second section -->
                    <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                        <h2 class="text-lg font-semibold" id="accordion-collapse-heading-2">
                            <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                <span>How are membership points updated?</span>
                                <svg data-accordion-icon class="size-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400 text-sm">Membership point are manually added by our staff based on your purchases or promotions.<br>If you believe your points are missing or incorrect, feel free to contact our support team.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Third section -->
                    <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                        <h2 class="text-lg font-semibold" id="accordion-collapse-heading-3">
                            <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                                <span>Location & Hours</span>
                                <svg data-accordion-icon class="size-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5 overflow-x-auto">
                                <p class="text-slate-400 dark:text-gray-400 font-bold ">Wondering Plan A Seafood: </p>
                                <table class="min-w-full border text-left">
                                    <tbody>
                                        <tr class="border-b border">
                                            <td class="px-4 py-2 font-semibold  text-slate-400 dark:text-gray-400 ">Address</td>
                                            <td class="px-4 py-2 text-slate-400 dark:text-gray-400 text-sm">Jalan Airport, 98000 Miri, Sarawak</td>
                                        </tr>
                                        <tr class="border-b border">
                                            <td class="px-4 py-2 font-semibold  text-slate-400 dark:text-gray-400 ">Operating Hours</td>
                                            <td class="px-4 py-2 text-slate-400 dark:text-gray-400 text-sm">
                                                <strong>Monday - Wednesday:</strong> 11:00 - 22:00<br>
                                                <strong>Thursday:</strong> Rest<br>
                                                <strong>Friday - Sunday:</strong> 11:00 - 22:00
                                            </td>
                                        </tr>
                                        <tr class="border-b border">
                                            <td class="px-4 py-2 font-semibold  text-slate-400 dark:text-gray-400 ">Contact</td>
                                            <td class="px-4 py-2  text-slate-400 dark:text-gray-400 text-sm">+60-16 883 9709</td>
                                        </tr>
                                    </tbody>
                                </table><br>
                                <p class="text-slate-400 dark:text-gray-400 font-bold ">Wondering Plan B Seafood: </p>
                                <table class="min-w-full border text-left">
                                    <tbody>
                                        <tr class="border-b border">
                                            <td class="px-4 py-2 font-semibold  text-slate-400 dark:text-gray-400 ">Address</td>
                                            <td class="px-4 py-2 text-slate-400 dark:text-gray-400 text-sm">Lutong, 98000 Miri, Sarawak</td>
                                        </tr>
                                        <tr class="border-b border">
                                            <td class="px-4 py-2 font-semibold  text-slate-400 dark:text-gray-400 ">Operating Hours</td>
                                            <td class="px-4 py-2  text-slate-400 dark:text-gray-400 text-sm">
                                                <strong>Monday - Wednesday:</strong> 11:00 - 22:00<br>
                                                <strong>Thursday:</strong> Rest<br>
                                                <strong>Friday - Sunday:</strong> 11:00 - 22:00
                                            </td>
                                        </tr>
                                        <tr class="border-b border">
                                            <td class="px-4 py-2 font-semibold  text-slate-400 dark:text-gray-400 ">Contact</td>
                                            <td class="px-4 py-2  text-slate-400 dark:text-gray-400 text-sm">+60-11 6256 1223</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--forth section -->
                    <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                        <h2 class="text-lg font-semibold" id="accordion-collapse-heading-4">
                            <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                                <span>Terms & Conditions</span>
                                <svg data-accordion-icon class="size-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400 text-sm">Welcome to Wondering Seafood Membership App ("this App"). By using this App, you agree to be bound by the following Terms & Conditions. </p><br>
                                <p class="text-slate-400 dark:text-gray-400 text-sm"><strong>1. Membership Eligibility</strong><br>
                                You must be at least 18 years old to register. Membership is non-transferable.<br>
                                <strong>2. Points Collection & Redemption</strong><br>
                                Point are awarded based on in-store purchases only and have no cash value. Expired points will not be reinstated.<br>...</p>
                                <div class="mt-6">
                                    <a href="/terms" class="text-sm hover:text-red-500 dark:hover:text-red-500 after:bg-red-500 dark:text-white transition duration-500">Find Out More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--fifth section -->
                    <div class="relative shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                        <h2 class="text-lg font-semibold" id="accordion-collapse-heading-5">
                            <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-5" aria-expanded="false" aria-controls="accordion-collapse-body-5">
                                <span>Privacy Policy</span>
                                <svg data-accordion-icon class="size-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400 text-sm">This Privacy Policy explains how Wondering Seafood ("we", "us", "our") collections, uses, and protects your information when you use our App.</p><br>
                                <p class="text-slate-400 dark:text-gray-400 text-sm"><strong>1. Information We Collect</strong><br>
                                We may collect your name, phone number, email address, date of birth, and visit or transaction records.<br>
                                <strong>2. How We Use It</strong><br>
                                We use your information to: </p>
                                <ul class="list-disc list-inside text-slate-400 dark:text-gray-400 text-sm mt-2 space-y-1">
                                    <li>Manage your membership and points</li>
                                    <li>Send promotional messages(with your consent)</li>
                                    <li>Improve customer experience</li>
                                    ...
                                </ul>
                                <div class="mt-6">
                                    <a href="/policy" class="text-sm hover:text-red-500 dark:hover:text-red-500 after:bg-red-500 dark:text-white transition duration-500">Find Out More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->