<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
    <style>
        .dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
    </style>
</head>
<body>
    <div class="w-full h-screen">
        <x-adminHeader/>
        <!-- Queue -->
        <div class="flex h-48 justify-center items-center">
                <div class="w-96 grid grid-cols-3">
                    <div>
                        <div class="w-24 h-24 rounded-md border-4 border-red-500 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                            <p class="text-6xl">{{$pending}}</p>
                        </div>
                        <p class="text-center font-bold">On Queue</p>
                    </div>
                    <div>
                        <div class="w-24 h-24 rounded-md border-4 border-amber-500 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                            <p class="text-6xl">{{$proccessing}}</p>
                        </div>
                        <p class="text-center font-bold">Processing</p>
                    </div>
                    <div>
                        <div class="w-24 h-24 rounded-md border-4 border-green-400 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                            <p class="text-6xl">{{$todeliver}}</p>
                        </div>
                        <p class="text-center font-bold">To Deliver</p>
                    </div>
                </div>
            </div>
        <!-- Current Orders -->
        <div class="mt-5">
            <p class="text-lg font-bold sm:ml-12 text-center sm:text-left"> List of recent active orders: </p>
                <!-- While Loop -->
                <br>
                <div class="flex flex-row justify-center">
                    <div class="md:w-5/6 w-11/12 mx-15  border-2 border-zinc-500 rounded-lg flex justify-center">
                        <div class="w-11/12">
                            <div class="my-2 w-full grid grid-cols-5 border-b-2 border-zinc-500 pb-4">
                                <p class="mx-2 text-sky-500 font-bold">Name</p>
                                <p class="mx-2 text-teal-500 font-bold">Address</p>
                                <p class="mx-2 text-purple-500 font-bold">Contact Number</p>
                                <p class="mx-2 text-rose-500 font-bold">Status</p>
                                <p class="mx-2 text-lime-500 font-bold">Date</p>
                            </div>
                            @foreach ($recents as $item)
                                <div class="my-2 flex border border-zinc-500 rounded-md flex-wrap">
                                    <p class="mx-2 text-sky-500">{{$item->name}}</p>
                                    <p class="mx-2 text-teal-500">{{$item->address}}</p>
                                    <p class="mx-2 text-purple-500">{{$item->contactNumber}}</p>
                                    <p class="mx-2 text-rose-500">{{$item->status}}</p>
                                    <p class="mx-2 text-lime-500">{{$item->created_at}}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
    </div>


    <script src="{{url('/js/admin.js')}}"></script>
    <script src="{{url('/js/profile.js')}}"></script>
</body>
</html>
