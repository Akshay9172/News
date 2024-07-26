<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Add your other head elements here -->

    <style>
        .underline-red-600 {
            text-decoration-color: #dc2626;
            /* Tailwind's red-600 color */
        }
    </style>

</head>

<body>

    @extends('layouts.userLayout')

    @section('content')
        <div id="main" class="">
            <nav class="w-full h-14vh px-4vw flex items-center justify-between bg-gray-300 border border-gray-300">
                <div class="logo flex flex-col items-start justify-center w-1/2 h-full pl-10 lg:ml-12">
                    <h1 class="lg:text-4xl sm:text-lg md:text-5xl font-extrabold leading-none mt-6 ">MIT News</h1>
                    <p class="text-xs lg:text-sm md:text-0.8vw leading-none tracking-wider font-bold">ON CAMPUS AND AROUND
                        THE WORLD</p>
                </div>
                <div class="cta w-1/2 h-full flex items-end justify-center gap-2.5">
                    <p
                        class="hidden  md:hidden lg:block sm:block md:inline lg:text-sm md:text-1vw text-xs underline underline-red-600 hover:bg-red-600 hover:text-white">
                        SUBSCRIBE</p>
                    <span
                        class="hidden sm:block md:hidden lg:block first-span font-normal text-sm md:text-lg border border-gray-400 px-2 py-1 md:px-5 md:py-2.5 border-t-2 border-black hover:bg-gray-700 hover:text-white">
                        <i class="ri-arrow-down-s-line"></i> BROWSE
                    </span>
                    <span
                        class="sec-span font-normal text-sm md:text-lg border border-gray-400 px-5 py-2.5 border-t-2 border-black hover:bg-gray-700 hover:text-white">
                        SEARCH NEWS
                        <i class="ri-search-line ml-12"></i>
                    </span>
                </div>
            </nav>

            <div class="first-para h-5vh w-full text-sm md:text-lg font-normal pt-2.5 pl-5 md:pl-20">
                <p>Want a dose of MIT in your inbox? <span
                        class="underline decoration-red-600 hover:bg-red-600 hover:text-white">Subscribe to the MIT Daily
                        and/or MIT Weekly newsletters.</span></p>
            </div>

            <div class="first-blog flex flex-col md:flex-row h-85vh md:h-55vh w-full bg-gray-800 ">
                <div class="first-image w-full md:w-1/2 bg-red-300">
                    <img class="h-full w-full object-cover object-center"
                        src="https://news.mit.edu/sites/default/files/styles/news_article__image_gallery/public/images/202407/MIT_Berman_JHilton-01-PRESS_0.jpg?itok=Ow1BTCHv"
                        alt="">
                </div>
                <div class="image-para w-full md:w-1/2 text-white flex flex-col pl-5 pt-5 md:pt-16">
                    <h1 class=" mt-5 w-full md:w-3/4 text-xl md:text-5xl font-bold leading-tight md:leading-11">Balancing
                        economic development with natural resources protection</h1>
                    <p class="w-full md:w-3/5 pt-2 text-lg lg:text-2.5xl md:text-2xl font-medium leading-snug md:leading-9">
                        From scallop fishing in New Bedford to deforestation in the tropics, “our goal is to get some
                        empirical traction on the problem,” says PhD student Aaron Berman.</p>
                </div>
            </div>
            <div class="first-heading h-8vh w-full pt-4 mb-1 ml-6">
                <h3 class="">Today’s Featured News</h3>
            </div>

            <div class="blog-wrapper h-85vh md:h-60vh w-screen">
                <div class="top-wrapper flex flex-col md:flex-row gap-3 h-full w-full ml-10 mt-5">
                    <div class="top-left flex h-full md:h-90 w-full md:w-2/5 ">
                        <div class="top-left-img h-1/2 md:h-full w-1/2 md:w-2/5">
                            <img class="h-full w-full object-cover object-center"
                                src="https://news.mit.edu/sites/default/files/styles/frontpage__featured_news/public/images/202407/MIT-Seawater-Hydrogen-01-press.jpg?itok=F6Ws86Tr"
                                alt="">
                        </div>
                        <div class="top-left-para h-1/2 md:h-full w-1/2 md:w-3/5 ml-2.5">
                            <h1 class="text-sm md:text-lg lg:text-xl leading-tight md:leading-6 mt-2.5">A recipe for
                                zero-emissions fuel: Soda cans, seawater, and coffee</h1>
                            <p class="text-xs md:text-lg md:hidden lg:block font-medium leading-tight md:leading-6">MIT
                                engineers have developed a fast and sustainable method for producing hydrogen fuel using
                                aluminum, saltwater, and coffee grounds.</p>
                        </div>
                    </div>

                    <div class="top-left flex h-full md:h-90 w-full md:w-2/5 ml-0 md:ml-10 mt-2 md:mt-0">
                        <div class="top-left-img h-1/2 md:h-full w-1/2 md:w-2/5">
                            <img class="h-full w-full object-cover object-center"
                                src="https://news.mit.edu/sites/default/files/styles/frontpage__featured_news/public/images/202407/alzheimers-brain-regions.png?itok=_9HgwGvl"
                                alt="">
                        </div>
                        <div class="top-left-para h-1/2 md:h-full w-1/2 md:w-3/5 ml-2.5">
                            <h1 class="text-sm  md:text-lg lg:text-xl leading-tight md:leading-6 mt-2.5">Study across
                                multiple brain regions discerns Alzheimer's vulnerability and resilience factors</h1>
                            <p class="text-xs md:text-lg md:hidden lg:block  font-medium leading-tight md:leading-6">The
                                effort to accelerate climate work at the Institute adds to its leadership team.</p>
                        </div>
                    </div>
                </div>

                <div class="top-wrapper flex flex-col md:flex-row gap-3 h-full w-full ml-10 mt-5">
                    <div class="top-left flex h-full md:h-90 w-full md:w-2/5 ">
                        <div class="top-left-img h-1/2 md:h-full w-1/2 md:w-2/5">
                            <img class="h-full w-full object-cover object-center"
                                src="https://news.mit.edu/sites/default/files/styles/frontpage__featured_news/public/images/202407/MIT-MIssion-Leads-01-press.jpg?itok=idbZLgFD"
                                alt="">
                        </div>
                        <div class="top-left-para h-1/2 md:h-full w-1/2 md:w-3/5 ml-2.5">
                            <h1 class="text-sm md:text-lg lg:text-lg leading-tight md:leading-6 mt-2.5">A recipe for
                                zero-emissions fuel: Soda cans, seawater, and coffee</h1>
                            <p class="text-xs md:text-lg md:hidden lg:block font-medium leading-tight md:leading-6">MIT
                                engineers have developed a fast and sustainable method for producing hydrogen fuel using
                                aluminum, saltwater, and coffee grounds.</p>
                        </div>
                    </div>

                    <div class="top-left flex h-full md:h-90 w-full md:w-2/5 ml-0 md:ml-10 mt-2 md:mt-0">
                        <div class="top-left-img h-1/2 md:h-full w-1/2 md:w-2/5">
                            <img class="h-full w-full object-cover object-center"
                                src="https://news.mit.edu/sites/default/files/styles/frontpage__featured_news/public/images/202407/MIT-Or-Hen-01-press.jpg?itok=NvEYBsoR"
                                alt="">
                        </div>
                        <div class="top-left-para h-1/2 md:h-full w-1/2 md:w-3/5 ml-2.5">
                            <h1 class="text-sm md:text-lg lg:text-lg leading-tight md:leading-6 mt-2.5">Study across
                                multiple brain regions discerns Alzheimer's vulnerability and resilience factors</h1>
                            <p class="text-xs md:text-lg md:hidden lg:block font-medium leading-tight md:leading-6">To
                                understand how everything from atoms to neutron stars behave, he says, requires “abstracting
                                away the details to see main principles that drive everything.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
