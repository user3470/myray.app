@extends('front.layouts.master')

@section('title', 'WordPress Debugging Evolved')

@section('description', 'Debug with Ray to fix and debug WordPress problems faster')

@section('content')

<main>

    <section class="overflow-hidden pb-12">
        <div class="background-01 absolute inset-0 pointer-events-none" >
            <img
                alt=""
                style="bottom: 3rem; height:700px"
                class="absolute w-full opacity-25 lg:opacity-75"
                src="/images/background-01.svg"/>
        </div>

        <div class="
            mx-auto px-6 sm:px-12 md:px-16
            max-w-4xl
            grid gap-8 lg:gap-16 lg:grid-cols-5 items-start">
            <div class="lg:col-span-3 lg:-ml-12">
                <img src="/images/ray-loves-wordpress.png" alt="Ray loves WordPress">
            </div>

            <div class="pt-8
            lg:col-span-2 lg:-mr-12">
                <p class="max-w-md font-semibold text-3xl leading-relaxed flex items-center">
                   <span class="w-16">@include('partials.logoRay')</span><span class="mx-4"> &hearts; </span><img class="w-32 ml-1" src="/images/wordpress.svg" alt="WordPress">
                </p>

                <p class="max-w-md font-semibold text-2xl leading-relaxed my-6">
                    Debug WordPress<br>faster with Ray
                </p>

                <div class="">
                    @include('partials.priceCard')
                </div>
            </div>



            <div class="lg:-mt-6 xl:mt-20
            lg:col-span-2 lg:-ml-12 lg:-mr-10
            lg:text-right lg:text-white font-medium leading-tight">
                <ul class="grid gap-3">
                     <li class="flex lg:flex-row-reverse items-center">
                        <i class="flex-shrink-0 mt-1 mx-3 w-2 h-2 rounded-full bg-indigo-400 bg-opacity-75"></i> Log queries
                     </li>
                     <li class="flex lg:flex-row-reverse items-center">
                        <i class="flex-shrink-0 mt-1 mx-3 w-2 h-2 rounded-full bg-indigo-400"></i> Display mails
                    </li>
                     <li class="flex lg:flex-row-reverse items-center">
                        <i class="flex-shrink-0 mt-1 mx-3 w-2 h-2 rounded-full bg-indigo-500"></i> Show WordPress specific errors
                     </li>
                    <li class="flex lg:flex-row-reverse items-center">
                        <i class="flex-shrink-0 mt-1 mx-3 w-2 h-2 rounded-full bg-indigo-600"></i> All other base PHP Ray functionality
                     </li>
                </ul>
            </div>
            <div
                class="mt-12 lg:col-span-3 lg:mt-0 lg:-mr-12 shadow-xl rounded overflow-hidden
                "
            >
                <img alt="Screenshot with WordPress specific info" class="rounded shadow-md border border-gray-200" src="/images/features/wordpress.png" />
            </div>
        </div>
</section>

<section class="my-12 px-6 sm:px-12 pb-6
bg-gradient-to-r from-indigo-100 to-indigo-200">
    <div class="max-w-md mx-auto lg:max-w-none grid lg:grid-cols-3 gap-6 lg:gap-3 xl:gap-6">
        @include('components.testimonial', [
            'index' => 1,
            'quote' => "If you are constantly writing <code>var_dump()</code> or <code>error_log()</code> to debug your code you'll know it gets painful when debugging larger and more complex code. Using Ray is the simple way to debug without the hassle of reading through Log files or half rendered / broken pages on the browser. A couple of hours of using Ray and you will have recouped the cost in lost time.",
            'avatar' => 'https://secure.gravatar.com/avatar/7039a37259e5338ea2107584e6644bd0?s=100&d=mm&r=g',
            'author' => 'Dave Bolger',
            'title' => '',
            'url' => 'https://profiles.wordpress.org/daveapb/',
        ])

        @include('components.testimonial', [
            'index' => 2,
            'quote' => "The WordPress equivalent of <code>dd()</code> & xDebug. Thanks for bringing some of the good PHP stuff to the WordPress ecosystem! I had to write my own debug function plugin before when working on WordPress, but Ray is much nicer to use!",
            'avatar' => 'https://secure.gravatar.com/avatar/8090e11b9ce8576bfd240529e56b1718?s=100&d=mm&r=g',
            'author' => 'Alex Martin',
            'title' => 'WordPress Developer',
            'url' => 'https://github.com/AlexMartinFR',
        ])

        @include('components.testimonial', [
            'index' => 3,
            'quote' => "It's much easier to use Ray than do all the <code>error_log()</code> and <code>var_dump()</code> calls on a page. You do not interrupt the flow (but you can pause it!) although receive all the needed information. It's less powerful than Xdebug (although they have different purposes and use cases), but more flexible than printing debug output on a page/debug-bar/error log. I highly recommend it.",
            'avatar' => 'https://secure.gravatar.com/avatar/61fb07ede3247b63f19015f200b3eb2c?s=100&d=retro&r=g',
            'author' => 'Slava Abakumov',
            'title' => 'Senior Developer at Awesome Motive',
            'url' => 'https://profiles.wordpress.org/slaffik/',
        ])
    </div>
</section>

@include('partials.syntax')
</main>

@include('partials.detectOS')





@endsection
