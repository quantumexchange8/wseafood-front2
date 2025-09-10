@extends('master')

@section('contents')
    @include('contents.nav')

<section class="relative md:py-16 py-8" id="terms">
    <div class="container relative">
        <div class=" items-center mt-16 gap-[30px] relative">
            <h2 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-bold">
                Privacy Policy
            </h2>

            <p class="text-slate-500 dark:text-gray-400 text-lg mb-6 font-bold">
                This Privacy Policy explains how Wondering Plan A Sdn Bhd ("we", "us", "our") collects, uses, and protects your information when you use our App.
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">1. Information We Collect</strong><br>
                We may collect your name, phone number, email address, date of birth, and visit or transaction records.
            </p>

            <p class="text-slate-400 dark:text-gray-400">
                <strong class="text-lg text-slate-500">2. How We Use It</strong><br>
                We use your information to:</p>
                <ul class="list-disc list-inside text-slate-400 dark:text-gray-400 mb-6">
                    <li>Manage your membership and points</li>
                    <li>Send promotional messages(with your consent)</li>
                    <li>Improve customer experience</li>
                </ul>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">3. Data Protection</strong><br>
                We implement reasonable technical and organizational measures to protect your data against unauthorized access, alteration, disclosure, or destruction.
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">4. Third Parties</strong><br>
                We do not sell or rent your data. Your data may be shared with service providers strictly for operating our app.
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">5. Your Rights</strong><br>
                You may request to view, correct, or delete your personal information by contacting us at: support@wonderingmember.com
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">6. Cookies and Tracking</strong><br>
                Our service may use cookies and similar technologies to enhance functionality and analyze usage. 
            </p>

            <p class="text-slate-400 dark:text-gray-400 mb-6">
                <strong class="text-lg text-slate-500">7. Updates</strong><br>
                We may update this Privacy Policy. Continued use of the App indicates acceptance of any changes.
            </p>
        </div>
    </div>
</section>


@endsection
