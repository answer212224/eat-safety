<div class="form-group mb-4">

    <label for="group">缺失群組</label>
    <select class="form-select" wire:model="group">
        <option value="">請選擇...</option>
        @foreach ($distinctGroups as $distinctGroup)
            <option value={{ $distinctGroup->group }}>{{ $distinctGroup->group }}</option>
        @endforeach
    </select>

    <label for="title">缺失標題</label>
    <select class="form-select" wire:model="title">
        <option value="">請選擇...</option>
        @foreach ($distinByGroupsTitles as $distinctTitle)
            <option value={{ $distinctTitle->title }}>{{ $distinctTitle->title }}</option>
        @endforeach
    </select>

    <label for="description">缺失細項</label>
    <select class="form-select" wire:model="description" name="defect_id">

        @foreach ($defects as $defect)
            <option value={{ $defect->id }}>{{ $defect->description }}</option>
        @endforeach
    </select>
</div>
