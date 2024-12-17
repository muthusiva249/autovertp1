<x-filament::page>
    <h1 class="text-2xl font-bold">Welcome to User Dashboard</h1>
    
    <div class="space-y-4">
        <h2 class="text-lg">Workflows:</h2>
        <ul>
            @foreach ($workflows as $workflow)
                <li>{{ $workflow->name }}</li>
            @endforeach
        </ul>
    </div>

    <div class="space-y-4">
        <h2 class="text-lg">Fields:</h2>
        <ul>
            @foreach ($fields as $field)
                <li>{{ $field->name }}</li>
            @endforeach
        </ul>
    </div>
</x-filament::page>
