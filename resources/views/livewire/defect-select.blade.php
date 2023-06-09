<div class="">
    <div class="form-group">
        <label for="group">缺失分類</label>
        <select class="form-select" wire:model="group">
            <option value="">請選擇...</option>
            @foreach ($distinctGroups as $distinctGroup)
                <option value={{ $distinctGroup }}>{{ $distinctGroup }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group my-3">
        <label for="title">子項目</label>
        <select class="form-select" wire:model="title">
            <option value="">請選擇...</option>
            @foreach ($distinByGroupsTitles as $distinctTitle)
                <option value={{ $distinctTitle }}>{{ $distinctTitle }}</option>
            @endforeach
        </select>
    </div>


    <div class="form-group my-3">
        <label for="description">稽核標準</label>
        <select class="form-select" wire:model="description" name="defect_id" id="inputSelect" required>
            <option value="">請選擇...</option>
            @foreach ($defects as $key => $defect)
                <option value="{{ $key }}">{{ $defect }}</option>
            @endforeach
        </select>
    </div>



    <div class="form-group my-3">
        <label for="description">備註</label>
        <input type="text" class="form-control" name="memo" aria-label="Username"
            @if ($taskHasDefect) value="{{ $taskHasDefect->memo }}" @endif>
    </div>


    <div class="form-check form-check-danger form-check-inline">
        <input class="form-check-input" type="checkbox" id="form-check-danger" name="is_ignore"
            @if ($taskHasDefect && $taskHasDefect->is_ignore) checked @endif>
        <label class="form-check-label" for="form-check-danger">
            忽略扣分
        </label>
    </div>





</div>
