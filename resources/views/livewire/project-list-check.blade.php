<div class="list-group">
    @foreach ($task->projects as $project)
        <label class="list-group-item">
            <input wire:click="change({{ $project }},{{ $project->pivot->is_checked }})" class="form-check-input"
                type="checkbox" @if ($project->pivot->is_checked) checked @endif>
            {{ $project->description }}
        </label>
    @endforeach
</div>
