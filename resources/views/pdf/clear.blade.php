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
        <span >清潔檢查稽核報告</span>
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
                <td colspan="3" align="center">{{ $task->task_date->format('y年n月j日') }}</td>
                <td colspan="1" align="center">時間</td>
                <td colspan="2" align="center">{{ $task->task_date->format('h:i') }}</td>
                <td colspan="2" align="center">稽核員</td>
                <td colspan="3" align="center">{{ $task->users->pluck('name')->implode('、') }}</td>
            </tr>
            <tr>
                <td colspan="2" align="center">食安分數</td>
                <td colspan="10" align="center">{{ 100 + $sum  }}</td>
            </tr>
            <tr>
                <td colspan="12" align="center">各區站缺失項目及數量和扣分</td>
            </tr>
        
            @foreach ($defectsGroup as $item)
                <tr>
                    <td colspan="3" align="center">{{ $item->first()->restaurantWorkspace->area }}</td>
                    <td colspan="3" align="center">{{ $item->count() }} 項</td>
                    <td colspan="3" align="center">{{ $item->amount }} 個</td>
                    <td colspan="3" align="center">{{ $item->sum }}</td>
                </tr>

            @endforeach

            @foreach($defectsGroup as $items)
                <tr>
                    <td colspan="12" align="center">{{ $item->first()->restaurantWorkspace->area }}</td>
                </tr>
                @foreach ($items as $item)   
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
                        <td colspan="3" align="">備註</td>
                        <td colspan="9" align="">{{ $item->memo }}</td>
                    </tr>
                @endforeach
            @endforeach
        </table>
    </div>

</body>
</html>
