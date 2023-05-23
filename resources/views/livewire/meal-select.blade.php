<div>

    <div class="col-md-12">
        <div class="">
            <label class="form-label">選擇分店代號</label>
            <select wire:model='restaurant' class="form-control" name="restaurant_id" placeholder="選擇分店代號..."
                autocomplete="off" id="select-sid" required>
                <option value="">選擇分店代號...</option>
                @foreach ($restaurants as $restaurant)
                    <option value="{{ $restaurant->id }}">
                        {{ $restaurant->sid }} {{ $restaurant->brand }} {{ $restaurant->shop }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-12">
        <label class="form-label">稽核日期</label>
        <input id="event-start-date" wire:model='start' name="task_date" type="date" class="form-control" required>
    </div>

    <div class="row my-3">
        <div class="col-md-12">
            <div class="form-check form-switch form-check-inline">
                <input wire:model='hasMeal' class="form-check-input" type="checkbox" role="switch"
                    id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">採樣</label>
            </div>
        </div>
        @if ($hasMeal)
            <div class="col-6">
                <label class="form-label">品牌必要採樣</label>
                <select multiple class="form-control" name='defaltMeals[]'>
                    @foreach ($defaltMeals as $defaltMeal)
                        <option value="{{ $defaltMeal->id }}" selected>{{ $defaltMeal->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        @endif
        @if ($hasMeal)
            <div class="col-6">
                <label class="form-label">分店特定採樣</label>
                <select multiple class="form-control" name='optionMeals[]'>
                    @foreach ($optionMeals as $optionMeal)
                        <option value="{{ $optionMeal->id }}">{{ $optionMeal->name }}</option>
                    @endforeach
                </select>
            </div>
        @endif
    </div>


    <div class="row my-3">
        <div class="col-md-12">
            <div class="form-check form-switch form-check-inline form-switch-warning">
                <input wire:model='hasProject' class="form-check-input" type="checkbox" role="switch"
                    id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">專案</label>
            </div>
        </div>
        @if ($hasProject)
            <div class="col-12">
                <label class="form-label">專案執行列表</label>
                <select multiple class="form-control" name='projects[]'>
                    @foreach ($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->description }}</option>
                    @endforeach
                </select>
            </div>
        @endif

    </div>
</div>
