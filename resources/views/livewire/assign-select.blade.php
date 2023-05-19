<div class="row">
    <div class="col-md-12">
        <div class="">
            <label class="form-label">選擇稽核員</label>
            <select wire:model='user' class="form-control" name="users[]" multiple placeholder="選擇稽核員..." autocomplete="off"
                required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-12">
        <div class="">
            <label class="form-label">選擇分店代號</label>
            <select wire:model='restaurant' class="form-control" name="restaurant_id" placeholder="選擇分店代號..."
                autocomplete="off">
                <option value="">選擇分店代號...</option>
                @foreach ($restaurants as $restaurant)
                    <option value="{{ $restaurant->id }}">
                        {{ $restaurant->sid }} {{ $restaurant->brand }} {{ $restaurant->shop }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>



    <div class="col-md-12 d-none">
        <div class="">
            <label class="form-label">Enter Start Date</label>
            <input id="event-start-date" name="task_date" type="text" class="form-control">
        </div>
    </div>

    <div class="col-md-12 d-none">
        <div class="">
            <label class="form-label">Enter End Date</label>
            <input id="event-end-date" type="text" class="form-control">
        </div>
    </div>

    <div class="col-md-12">

        <div class="d-flex mt-4">
            <div class="n-chk">
                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="radio" name="category" checked value="食安及5S"
                        id="rwork">
                    <label class="form-check-label" for="rwork">食安及5S</label>
                </div>
            </div>
            <div class="n-chk">
                <div class="form-check form-check-warning form-check-inline">
                    <input class="form-check-input" type="radio" name="category" value="清潔檢查" id="rtravel">
                    <label class="form-check-label" for="rtravel">清潔檢查</label>
                </div>
            </div>

        </div>

    </div>

    <div class="col-md-12">
        <div class="form-check form-check-secondary form-check-inline">
            <input class="form-check-input" type="checkbox" name="meal" id="form-check-secondary">
            <label class="form-check-label" for="form-check-secondary">
                餐點採樣
            </label>
        </div>
        <div class="form-check form-check-success form-check-inline">
            <input class="form-check-input" type="checkbox" id="form-check-success" name="project">
            <label class="form-check-label" for="form-check-success">
                專案執行
            </label>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {

        Livewire.hook('element.updated', (el, component) => {


            new TomSelect("#select-users", {
                maxItems: 2
            });

            new TomSelect("#select-sid", {
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });

        })

    });
</script>
