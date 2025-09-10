<section class="relative md:py-24 py-16 bg-slate-50/50 dark:bg-slate-800/20" id="contact">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-7 md:col-span-6">
                <img src="assets/images/contact.svg" alt="">
            </div>

            <div class="lg:col-span-5 md:col-span-6">
                <div class="lg:ms-5">
                    <div class="bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-800 p-6">
                        <h6 class="text-red-500 uppercase text-sm font-bold tracking-wider mb-3">Contact Us</h6>
                        <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-bold">Get in touch !</h4>

                        <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                            <p class="mb-0" id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="grid lg:grid-cols-12 gap-3">
                                <div class="lg:col-span-6">
                                    <div class="text-start">
                                        <label for="name" class="font-medium">Your Name:</label>
                                        <input name="name" id="name" type="text" class="form-input mt-1 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-red-500 dark:border-gray-800 dark:focus:border-red-500 focus:ring-0" placeholder="Name :">
                                    </div>
                                </div>

                                <div class="lg:col-span-6">
                                    <div class="text-start">
                                        <label for="email" class="font-medium">Your Email:</label>
                                        <input name="email" id="email" type="email" class="form-input mt-1 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-red-500 dark:border-gray-800 dark:focus:border-red-500 focus:ring-0" placeholder="Email :">
                                    </div>
                                </div>
                                <div class="lg:col-span-12">
                                    <div class="text-start">
                                        <label for="subject" class="font-medium">Your Question:</label>
                                        <input name="subject" id="subject" class="form-input mt-1 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-red-500 dark:border-gray-800 dark:focus:border-red-500 focus:ring-0" placeholder="Subject :">
                                    </div>
                                </div>

                                <div class="lg:col-span-12">
                                    <div class="text-start">
                                        <label for="comments" class="font-medium">Your Comment:</label>
                                        <textarea name="comments" id="comments" class="form-input mt-1 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-red-500 dark:border-gray-800 dark:focus:border-red-500 focus:ring-0" placeholder="Message :"></textarea>
                                    </div>
                                </div>

                                <div class="lg:col-span-12">
                                    <button type="submit" id="submit" name="send" class="py-2 px-5 tracking-wider inline-flex items-center justify-center font-medium rounded bg-red-500 text-white">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->