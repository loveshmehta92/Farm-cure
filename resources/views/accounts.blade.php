<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Accounts') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   
                </div>
                <!-- component -->
<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-base font-semibold leading-6 text-gray-900">Consumers</h1>
        <p class="mt-2 text-md text-gray-700">A list of all the consumers in your website including their name, age, email , payment and role.</p>
      </div>
      <div class="mt-4 ms-4 sm:ml-16 sm:mt-0 sm:flex-none">
        <button type="button" class="block rounded-md bg-balck px-3 py-2 text-left text-sm font-semibold text-black shadow-sm hover:text-white hover:bg-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">Add user</button>
      </div>
    </div>
    <div class="mt-4  flow-root">
      <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
          <table class="min-w-full divide-y divide-gray-300">
            <thead>
              <tr>
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm front-semibold text-black sm:pl-0">Name</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-blue-500">Age</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-orange-500">Email</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">payment</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
                <th scope="col" colspan="2" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                  Action
              </th>
              </tr>
            </thead>
            <tbody class="bg-red-500">
              <tbody class="bg-red-500">
              <tr>
                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">vijay</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-black">39</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-black">vijay@example.com</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-black">$2000</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-black">Consumer</td>
                <td class="relative whitespace-nowrap px-3 py-4 text-sm text-black font-medium sm:pr-0">
                  <a href="#" class="text-black hover:text-white">Edit<span class="sr-only">, vijay</span></a>
                </td>
                <td class="relative whitespace-nowrap px-3 py-4 text-sm text-black font-medium sm:pr-0">
                    <a href="#" class="text-black hover:text-white">Delete<span class="sr-only">, vijay</span></a>
                  </td>
              </tr>
  <tr>
                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Rahul</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-black">20</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-black">rahul18@example.com</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-black">$2000</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-black">Consumer</td>
                <td class="relative whitespace-nowrap px-3 py-4 text-sm text-black font-medium sm:pr-0">
                    <a href="#" class="text-black hover:text-white">Edit<span class="sr-only">, Rahul</span></a>
                  </td>
                  <td class="relative whitespace-nowrap px-3 py-4 text-sm text-black font-medium sm:pr-0">
                    <a href="#" class="text-black hover:text-white">Delete<span class="sr-only">, Rahul</span></a>
                  </td>
              </tr>
              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
            </div>
        </div>
    </div>
</x-app-layout>
