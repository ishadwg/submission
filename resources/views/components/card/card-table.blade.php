<!-- Recent Activities Card -->
<div class="xl:basis-3/4 xl:mx-auto bg-white rounded-lg shadow-lg px-4 py-6">
    <h2 class="text-base font-semibold text-gray-500 mb-2">Recent Approval</h2>

    @foreach ($recenthistories as $history)
        <div class="@if ($loop->first) border-t @endif border-b py-1">
            <p class="text-sm mb-2">{{ $history->submission->submitter->name }}'s submission with ID
                #{{ $history->submission_id }} was
                <x-table.status-cell :id="$history->status_id">
                    {{ $history->status->name }}
                </x-table.status-cell>
            </p>
            <p class="text-gray-600 text-xs">Action taken {{ $history->created_at->diffForHumans() }} by
                {{ $history->actor->name }} </p>
        </div>
    @endforeach

    {{-- <div class="border-t border-b py-1">
        <p class="text-sm mb-2">UserB's submission with ID #22 was <span class="text-red-500">Rejected</span></p>
        <p class="text-gray-600 text-xs">Action taken 3 weeks ago by Admin </p>
    </div>
    <div class="border-b py-1">
        <p class="text-sm mb-2">UserA's submission with ID #15 was <span class="text-green-500">Approved</span>
        </p>
        <p class="text-gray-600 text-xs">Action taken 2 weeks ago by Admin </p>
    </div> --}}
</div>
