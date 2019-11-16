@extends('layouts.front_p')

@section('content')
    <h1>　　　　 profile</h1>
     {{ dd($posts) }}
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
                                <th class="ms_th_g">ID</th>
                                <th class="ms_th">名前履歴</th>
                                <th class="ms_th">性別履歴</th>
                                <th class="ms_th">趣味履歴</th>
                                <th class="ms_th">自己紹介履歴</th>
                            </tr>
                            
                            
                            @if ($posts != NULL)
                                @foreach ($posts as $p)
                                    <tr class="list-group">
                                        <td class="ms_td_g">{{ $p->id }}</td>
                                        <td class="ms_td_g">{{ $p‐>name }}</td>
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