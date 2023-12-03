@extends('layouts.master')

@section('title', 'Shop Information')

@section('contents')
<section class="bg-white">
    <div class="py-14">
        <div class="max-w-screen-xl mx-auto px-4 md:px-8">
            <div class="max-w-lg">
                <h3 class="text-gray-800 text-xl font-bold sm:text-2xl">Shop Information</h3>
                <p class="text-gray-600 mt-2">Below you can find the detail information of this shop</p>
            </div>
            <div class="mt-12 shadow-sm border rounded-lg overflow-x-auto">
                <table class="w-full table-auto text-sm text-left">
                    <thead class="bg-gray-50 text-gray-600 font-medium border-b">
                        <tr class="divide-x">
                            <th class="py-3 px-6">Shop ID</th>
                            <th class="py-3 px-6">Shop Name</th>
                            <th class="py-3 px-6">Shopify Domain</th>
                            <th class="py-3 px-6">Shop Owner</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 divide-y">
                        <tr class="divide-x">
                            <td class="px-6 py-4 whitespace-nowrap flex items-center gap-x-6">
                                {{$shop['id']}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap" x-text="item.email">{{$shop['name']}}</td>
                            <td class="px-6 py-4 whitespace-nowrap" x-text="item.position">{{$shop['myshopify_domain']}}</td>
                            <td class="px-6 py-4 whitespace-nowrap" x-text="item.salary">{{$shop['shop_owner']}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <scrip></script>
@endpush
