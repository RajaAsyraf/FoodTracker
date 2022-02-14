<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Item
        </h2>
    </x-slot>

    <form action="{{ route('item.store') }}" method="POST">
        @csrf
        <div class="bg-white rounded-lg shadow sm:max-w-md sm:w-full sm:mx-auto sm:overflow-hidden mt-4">
            <div class="px-4 py-8 sm:px-10">
                <!-- <div class="relative mt-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300">
                        </div>
                    </div>
                    <div class="relative flex justify-center text-sm leading-5">
                        <span class="px-2 text-gray-500 bg-white">
                            Search criteria
                        </span>
                    </div>
                </div> -->
                <div class="mt-6">
                    <div class="w-full space-y-6">
                        <div class="w-full">
                            <div class=" relative ">
                                <input type="text" id="item-name" name="name" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Item name"/>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class=" relative ">
                                <input type="text" id="item-quantity" name="quantity" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Quantity"/>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class=" relative ">
                                <input type="text" id="item-unit" name="unit" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Unit"/>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class=" relative ">
                                <input type="date" id="item-expired-at" name="expiredAt" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Expiry date"/>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class=" relative ">
                                <input type="input" id="item-location" name="location" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Location"/>
                            </div>
                        </div>
                        <div>
                            <span class="block w-full rounded-md shadow-sm">
                                <button type="submit" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                    Save
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="px-4 py-6 border-t-2 border-gray-200 bg-gray-50 sm:px-10">
                <p class="text-xs leading-5 text-gray-500">
                    This data are display for information and can change
                </p>
            </div> -->
        </div>
    </form>
</x-app-layout>