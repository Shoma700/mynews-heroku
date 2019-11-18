@extends('layouts.front_p')

@section('content')
    <h1>　　　　 profile</h1>
    <div class="container">
        <hr color="#c0c0c0">
            <div class="row mt-5">
                <div class="col-md-20 col-auto flex-md-fill">
                    <h3 class="aaaa">プロフィール一覧</h3>
                    <h6 class="aaaa">現在登録されている全データを表示します</h6>
                    <hr color="#c0c0c0">
                    <table class="text-center ms_table_g">
                        <thead class="theaed-default">
                            <tr>
                                <th class="ms_th" width="5%">ID</th>
                                <th class="ms_th" width="15%">名前</th>
                                <th class="ms_th" width="5%">性別</th>
                                <th class="ms_th" width="30%">趣味</th>
                                <th class="ms_th" width="30%">自己紹介</th>
                            </tr>
                            @if ($posts != NULL)
                                @foreach ($posts as $p)
                                    <tr>
                                        <td class="ms_td_g">{{ $p->id }}</td>
                                        <td class="ms_td_g">{{ $p->name }}</td>
                                        <td class="ms_td">{{ $p->gender }}</td>
                                        <td class="ms_td">{{ $p->hobby }}</td>
                                        <td class="ms_td">{{ $p->introduction }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </thead>
                    </table>
                </div>
             </div>
    </div>
      
      
      
      
      
      
      

@endsection