<tbody>
    @foreach ($records as $record)
        <x-table.table-record :record="$record"></x-table.table-record>
    @endforeach
</tbody>
