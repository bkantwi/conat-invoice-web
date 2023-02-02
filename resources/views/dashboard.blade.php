<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Conat Invoice System') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
{{--                <x-jet-welcome />--}}

                {{--Invoice Form Start--}}
                <form class="bg-white p-6 rounded-lg shadow-md">
                    <center>
                    <h1 class="text-lg font-medium mb-4 ">Create an invoice</h1>
                    <h3 class="text-lg font-medium mb-2">Sender Information</h3>
                    </center>
{{--                    If you want a divided form. Two columns--}}
{{--                    <div class="flex mb-4">--}}
{{--                        <div class="w-1/2 pr-4">--}}
{{--                            <label class="block font-medium mb-2" for="first_name">First Name</label>--}}
{{--                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="first_name" type="text">--}}
{{--                        </div>--}}
{{--                        <div class="w-1/2 pl-4">--}}
{{--                            <label class="block font-medium mb-2" for="last_name">Last Name</label>--}}
{{--                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="last_name" type="text">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    End if--}}

                    {{--Sender Information--}}
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Business Name</label>
                        <input name="sename"class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text">
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Email Address</label>
                        <input name="seemail" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text">
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Phone Number</label>
                        <input name="sephone" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text">
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Address</label>
                        <input name="seaddress" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text">
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Logo</label>
                        <input name="selogo" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="file">
                    </div>
                    <hr>

                    {{--Receiver Information--}}
                    <center><h1 class="text-lg font-medium mb-2">Receiver Information</h1></center>
                    <hr>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Name</label>
                        <input name="rename" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text">
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Email Address</label>
                        <input name="reemail" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text">
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Phone Number</label>
                        <input name="rephone" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text">
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Address</label>
                        <input name="readdress" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text">
                    </div>

                    <hr>
                    <center><h3 class="text-lg font-medium mb-2">Payment Method</h3></center>
                    <hr>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="due_date">Payment Method</label>
                        <select name="payment_method" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                            <option name="payment_method" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" value="Cash">Cash</option>
                            <option name="payment_method" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" value="Mobile Money">Mobile Money</option>
                            <option name="payment_method" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" value="Bank">Bank</option>
                        </select>
                    </div>

                    {{--Items Purchase--}}

                    <div class="mb-4">
                        <center><button name="save" class="bg-purple-500 hover:bg-purple-600 text-black font-medium py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="text">Save Invoice</button></center>
                    </div>
                </form>
                {{--Invoice Form End--}}

            </div>
        </div>
    </div>
</x-app-layout>
