<div class="list-group">
    @foreach ($task->meals as $meal)
        <label class="list-group-item">
            <input wire:click="change({{ $meal }},{{ $meal->pivot->is_taken }})" class="form-check-input"
                type="checkbox" @if ($meal->pivot->is_taken) checked @endif>
            {{ $meal->name }}
        </label>
    @endforeach
</div>
