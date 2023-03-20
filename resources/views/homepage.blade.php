<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{'/assets/logo2.png'}}" type="image/x-icon">
    <title>OWRS-Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{url('/css/login.css')}}">

    <style>
        .modal{
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
        }
        .modalcontent{
            background-color: #fefefe;
            margin: auto;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="w-full h-full">
        <div id="body">
        <div>
            <x-Header time="{{$transaction}}"/>
        <div>
            <div class="flex h-96 md:h-48 justify-center items-center">
                <div>
                    <div class="w-full flex flex-wrap justify-center">
                        <div class="mx-2">
                            <div class="w-24 h-24 rounded-md border-4 border-red-500 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                                <p class="text-6xl">{{$pending}}</p>
                            </div>
                            <p class="text-center font-bold">On Queue</p>
                        </div>
                        <div class="mx-2">
                            <div class="w-24 h-24 rounded-md border-4 border-amber-500 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                                <p class="text-6xl">{{$proccessing}}</p>
                            </div>
                            <p class="text-center font-bold">Processing</p>
                        </div>
                        <div class="mx-2">
                            <div class="w-24 h-24 rounded-md border-4 border-lime-400 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                                <p class="text-6xl">{{$todeliver}}</p>
                            </div>
                            <p class="text-center font-bold">To Deliver</p>
                        </div>
                        <div class="sm:mx-2 sm:w-auto w-full">
                            @if ($info != NULL)
                                @if ($info->status == 'Pending')
                                <div class="w-24 h-24 rounded-md border-4 border-red-400 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                                <p class="text-6xl">{{$rowcount}}</p>
                                @endif
                                @if ($info->status == 'Proccessing')
                                <div class="w-24 h-24 rounded-md border-4 border-amber-400 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                                <p class="text-6xl">{{$rowcount}}</p>
                                @endif
                                @if ($info->status == 'To Deliver')
                                <div class="w-24 h-24 rounded-md border-4 border-lime-400 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                                <p class="text-6xl">{{$rowcount}}</p>
                                @endif
                                @if ($info->status == 'Cancelled')
                                <div class="w-24 h-24 rounded-md border-4 border-sky-400 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                                <p class="text-center">No active Order</p>
                                @endif

                            @else
                            <div class="w-24 h-24 rounded-md border-4 border-sky-400 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                            <p class="text-center">No active Order</p>
                            @endif
                            </div>
                            <p class="text-center font-bold">Your Order <br> on Queue</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <p class="text-lg font-bold sm:ml-12 text-center sm:text-left">Know more about water</p>
                <div class="w-full flex justify-center items-center h-96">
                    <div class="w-11/12 sm:w-4/5 flex overflow-x-auto overflow-y-hidden scroll-smooth">

                        <button id="buttonone" type="button" class="w-72 h-72 bg-sky-300 rounded-xl shrink-0 shadow-lg hover:drop-shadow-xl hover:scale-105 m-6 transition">
                            <div class="flex w-full h-full items-center">
                                <p class="text-4xl font-bold text-left m-3">How does water affect our lives?</p>
                            </div>
                        </button>
                        <button id="buttontwo" class="w-72 h-72 bg-sky-300 rounded-xl shrink-0 shadow-lg hover:drop-shadow-xl hover:scale-105 m-6 transition">
                            <div class="flex w-full h-full items-center">
                                <p class="text-4xl font-bold text-left m-3">Benefits of drinking 8 glasses of water</p>
                            </div>
                        </button>
                        <button id="buttonthree" class="w-72 h-72 bg-sky-300 rounded-xl shrink-0 shadow-lg hover:drop-shadow-xl hover:scale-105 m-6 transition">
                            <div class="flex w-full h-full items-center">
                                <p class="text-4xl font-bold text-left m-3">Different kind of drinking water.</p>
                            </div>
                        </button>
                </div>
            </div>

        </div>
        </div>

    </div>
</div>

    <div id="informationmodal1" class="modal">
        <div class="modalcontent transition sm:w-96  w-11/12 lg:w-1/3 md:w-1/2 sm:w-96 shadow-xl rounded-xl hover:drop-shadow-xl">
            <p id="content1">Water is an essential component for human life, and it plays a crucial role in almost every aspect of our lives. We use water for drinking, cooking, and washing, and it is also necessary for the production of food and other goods. Additionally, water is essential for the functioning of ecosystems and the natural environment, providing habitats for various plants and animals. However, water can also have negative impacts, such as flooding and waterborne diseases, and access to clean water is a major concern in many parts of the world. Overall, water is a vital resource that affects our lives in many ways, and its sustainable management and conservation are essential for our well-being and the health of the planet.</p>
        </div>
    </div>

    <div id="informationmodal2" class="modal">
        <div class="modalcontent transition sm:w-96  w-11/12 lg:w-1/3 md:w-1/2 sm:w-96 shadow-xl rounded-xl hover:drop-shadow-xl">
            <p id="content2">Drinking 8 glasses of water per day has many benefits for the human body. First and foremost, it helps to keep the body hydrated, which is essential for many bodily functions. Water also helps to regulate body temperature, flush out toxins, and transport nutrients throughout the body. Additionally, drinking enough water can help to improve skin health, boost energy levels, and support healthy digestion. Adequate hydration is also important for maintaining a healthy weight, as drinking water can help to reduce feelings of hunger and prevent overeating. Overall, drinking 8 glasses of water per day is an easy and effective way to promote overall health and well-being.</p>
        </div>
    </div>

    <div id="informationmodal3" class="modal">
        <div class="modalcontent transition sm:w-96  w-11/12 lg:w-1/3 md:w-1/2 sm:w-96 shadow-xl rounded-xl hover:drop-shadow-xl">
            <p id="content3">There are several different types of drinking water, each with its unique characteristics and benefits. Tap water is the most common type of drinking water, and it is usually safe to drink, although the taste and quality can vary depending on the source. Mineral water is another type of drinking water that contains high levels of minerals, such as calcium and magnesium, which can provide health benefits. Spring water is another type of drinking water that comes from natural springs and is often promoted for its purity and mineral content. Distilled water is a type of purified water that has been processed to remove impurities, and it is often used in medical settings. Finally, alkaline water is a type of water that has a higher pH level than tap water and is claimed to provide health benefits, although these claims are not supported by scientific evidence. Ultimately, the type of drinking water you choose will depend on your individual preferences and needs.</p>
        </div>
    </div>


    <script src="{{url('/js/homepage.js')}}"></script>
</body>
</html>
