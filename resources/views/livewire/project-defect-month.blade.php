<div>
    {{-- momth select --}}
    <div class="input-group mb-3">
        <span class="input-group-text">缺失月份篩選</span>
        <input class="form-control yearMonth" wire:model='month' id="" type="text" required>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">(內外場)食安缺失子項目</span>
        <select class="form-control" name="description" id="" required>
            @foreach ($defectbackAndfront as $item)
                <option value="{{ $item }}" {{ optional($project)->description == $item ? 'selected' : '' }}>
                    {{ $item }}</option>
            @endforeach
        </select>
    </div>
</div>
