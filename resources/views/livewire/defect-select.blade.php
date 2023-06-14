<div class="form-group mb-4">

    <label for="group">缺失分類</label>
    <select class="form-select" wire:model="group">
        <option value="">請選擇...</option>
        @foreach ($distinctGroups as $distinctGroup)
            <option value={{ $distinctGroup }}>{{ $distinctGroup }}</option>
        @endforeach
    </select>


    <label for="title">子項目</label>
    <select class="form-select" wire:model="title">
        <option value="">請選擇...</option>
        @dump($distinctGroups)
        @foreach ($distinByGroupsTitles as $distinctTitle)
            <option value={{ $distinctTitle }}>{{ $distinctTitle }}</option>
        @endforeach
    </select>



    <label for="description">稽核標準</label>
    <select class="form-select" wire:model="description" name="defect_id" id="inputSelect">
        <option value="">請選擇...</option>
        @foreach ($defects as $key => $defect)
            <option value="{{ $key }}">{{ $defect }}</option>
        @endforeach
    </select>



</div>
