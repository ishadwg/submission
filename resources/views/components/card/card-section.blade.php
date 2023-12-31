<!-- Card Section -->
<section class="py-6">
    <div class="container mx-auto xl:w-8/12 px-4 xl:px-0">
        <div class="flex flex-col xl:flex-row gap-4">

            <x-card.card-value :cardvalue="$cardvalue"></x-card.card-value>

            <x-card.card-table :recenthistories="$recenthistories"></x-card.card-table>

        </div>
    </div>
</section>
