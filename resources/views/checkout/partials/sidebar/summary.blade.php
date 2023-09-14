<x-rapidez-ct::card class="relative">
    <a href="{{ url('/') }}" class="absolute inset-x-0 bottom-full -translate-y-6 max-md:hidden [&>*]:h-auto [&>*]:max-h-20 [&>*]:w-full [&>*]:object-contain">
        <x-rapidez-ct::logo />
    </a>
    <x-rapidez-ct::title.lg class="mb-4">
        @lang('Order overview')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::list tag="ul">
        <li v-for="item in cart.items">
            <span>@{{ item.qty }}x @{{ item.name }}</span>
        </li>
        <template v-for="segment in checkout.totals.total_segments" v-if="segment.title">
            @include('rapidez-ct::checkout.partials.sidebar.segment')
        </template>
    </x-rapidez-ct::list>
</x-rapidez-ct::card>
