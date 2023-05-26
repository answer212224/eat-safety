<div class="list-group">
    @foreach ($task->projects as $project)
        <label class="list-group-item">
            <input wire:click="change({{ $project }},{{ $project->pivot->is_impoved }})" class="form-check-input"
                type="checkbox" @if ($project->pivot->is_impoved) checked @endif>
            {{ $project->description }}
        </label>
    @endforeach
</div>
