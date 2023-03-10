<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Conat Invoice System') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if(Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
{{--                <x-jet-welcome />--}}

                {{--Invoice Form Start--}}
                <form class="bg-white p-6 rounded-lg shadow-md" action="add" method="POST" enctype="multipart/form-data">
                    @csrf
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
                        <span style="color:red">@error('sename'){{ $message }} @enderror</span>
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Email Address</label>
                        <input name="semail" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text">
                        <span style="color:red">@error('semail'){{ $message }} @enderror</span>
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Phone Number</label>
                        <input name="sephone" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text">
                        <span style="color:red">@error('sephone'){{ $message }} @enderror</span>
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Address</label>
                        <input name="seaddress" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text">
                        <span style="color:red">@error('seaddress'){{ $message }} @enderror</span>
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Logo</label>
                        <input name="selogo" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="file">
                        <span style="color:red">@error('selogo'){{ $message }} @enderror</span>
                    </div>
                    <br >
                    <hr>

                    {{--Receiver Information--}}
                    <center><h1 class="text-lg font-medium mb-2">Receiver Information</h1></center>
                    <hr>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Name</label>
                        <input name="rename" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text">
                        <span style="color:red">@error('rename'){{ $message }} @enderror</span>
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Email Address</label>
                        <input name="remail" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text">
                        <span style="color:red">@error('remail'){{ $message }} @enderror</span>
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Phone Number</label>
                        <input name="rephone" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text">
                        <span style="color:red">@error('rephone'){{ $message }} @enderror</span>
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="title">Address</label>
                        <input name="readdress" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text">
                        <span style="color:red">@error('readdress'){{ $message }} @enderror</span>
                    </div>
                    <br >

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
                    </div><br >

                    {{--Items Purchase--}}
{{--                    Receiver Information--}}
                    <hr>
                    <center><h1 class="text-lg font-medium mb-2">Item Details</h1></center>
                    <hr>
                    <div id="container">
                        <div class="form-group">
                            <label for="item">Item</label>
                            <input type="text" name="item[]" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" name="amount[]" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price[]" class="form-control">
                        </div>
                        <button class="remove-btn">Remove</button>
                    </div>
                    <button id="new-field">Add</button><br ><hr>

                    <div class="mb-4">
                        <center><button name="save" class="bg-purple-500 hover:bg-purple-600 text-black font-medium py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Save Invoice</button></center>
                    </div>
                </form>
                {{--Invoice Form End--}}

            </div>
        </div>
    </div>
</x-app-layout>

<script>
    const container = document.getElementById("container");
    const addBtn = document.getElementById("new-field");

    addBtn.addEventListener("click", function() {
        const newFields = `
      <div class="form-group">
        <label for="item">Item</label>
        <input type="text" name="item[]" class="form-control">
      </div>
      <div class="form-group">
        <label for="amount">Amount</label>
        <input type="text" name="amount[]" class="form-control"></div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price[]" class="form-control">
      </div>
      <button class="remove-btn">Remove</button>
    `;
        container.insertAdjacentHTML("beforeend", newFields);
    });
    container.addEventListener("click", function(event) {
        if (event.target.classList.contains("remove-btn")) {
            event.target.parentElement.remove();
        }
    });
</script>





