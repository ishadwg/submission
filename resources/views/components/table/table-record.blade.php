<tr>
    <x-table.cell-head>{{ $record->id }}</x-table.cell-head>
    <x-table.cell-row>{{ $record->created_at->toDayDateTimeString() }}</x-table.cell-row>
    <x-table.cell-row>{{ $record->type }}</x-table.cell-row>
    <x-table.cell-row>{{ $record->submitter->name }}</x-table.cell-row>
    <x-table.cell-row>
        <x-table.status-cell :id="$record->status_id">
            {{ $record->status->name }}
        </x-table.status-cell>
    </x-table.cell-row>
    <x-table.cell-row>
        <x-button-anchor class="bg-blue-500" :id="$record->id" href="/submissions/">
            View
        </x-button-anchor>
        <x-button-anchor class="bg-green-500" :id="$record->id" href="/submissions/approve/">
            Approve
        </x-button-anchor>
        <x-button-anchor class="bg-red-500" :id="$record->id" href="/submissions/reject/">
            Reject
        </x-button-anchor>
    </x-table.cell-row>


</tr>
