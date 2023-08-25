{{-- pdf --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
    
</head>
<body>
    {{-- header logo --}}
    <div class="header">
        <img src="https://foodsafety.feastogether.com.tw/build/assets/logoWithText.1dcdeb88.png" alt="" style="width: 50px">
        <span >清潔檢查內場稽核報告</span>
    </div>
    <div class="table">
        <table border="1" width="100%" height="100%" style="padding: 2px;margin-top: 10px;">
            <tr>
                <td colspan="1" align="center">品牌</td>
                <td colspan="3" align="center">{{ $task->restaurant->brand }}</td>
                <td colspan="1" align="center">分店</td>
                <td colspan="3" align="center">{{ $task->restaurant->shop }}</td>
                <td colspan="2" align="center">內場主管</td>
                <td colspan="2" align="center">{{ $task->inner_manager }}</td>
            </tr>
            <tr>
                <td colspan="1" align="center">日期</td>
                <td colspan="3" align="center">{{ $task->task_date->format('Y年n月j日') }}</td>
                <td colspan="1" align="center">時間</td>
                <td colspan="2" align="center">{{ $task->task_date->format('h:i') }}</td>
                <td colspan="2" align="center">稽核員</td>
                <td colspan="3" align="center">{{ $task->users->pluck('name')->implode('、') }}</td>
            </tr>
            <tr>
                <td colspan="2" align="center">食安分數</td>
                <td colspan="10" align="center">{{ 100 + $defectsGroup->sum('sum') }}</td>
            </tr>
            <tr>
                <td colspan="1" align="center">各站分數及缺失數</td>
                <td colspan="11" align="left">
                    <br/>
                    @foreach ($defectsGroup as $key => $items)
                        {{ $key }}：{{ $items->sum }}分
                        @if($key=='中廚'||$key=='西廚'||$key=='日廚')
                        （
                            @foreach($items->group as $area => $item)
                                {{ Str::substr($area, 2) }}：{{ $item->count() }}項
                                @if(!$loop->last)
                                    、
                                @endif
                            @endforeach
                        ）
                        @endif
                        ，缺失數 {{ $items->count() }} 項<br/>
                    @endforeach
                </td>
            </tr>

            @foreach($defectsGroup as $items)
                
                @foreach ($items as $item)
                    <tr>
                        <td colspan="12" align="center">{{ $item->restaurantWorkspace->area }}</td>
                    </tr>
                    <tr>
                        @foreach ($item->images as $image)
                        <td colspan="6">
                            @if (request()->isSecure())
                                <img src="{{ asset('storage/' . $image) }}" alt="" width="200px">
                            @else
                                {{ asset('storage/' . $image) }}                               
                            @endif
                        </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td colspan="3" align="">主項目</td>
                        <td colspan="9" align="">{{ $item->clearDefect->main_item }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" align="">次項目</td>
                        <td colspan="9" align="">{{ $item->clearDefect->sub_item }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" align="">數量</td>
                        <td colspan="9" align="">{{ $item->amount }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" align="">備註</td>
                        <td colspan="9" align="">
                            {{ $item->memo }}
                            @if($item->is_ignore)
                                <span style="color: red">（忽略扣分）</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </table>
    </div>

</body>
</html>