@extends('layouts.profile')
@section('title', 'プロフィールの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール編集</h2>
                <div class="col-md-10 form-group row">
                <a href="{{ action('Admin\ProfileController@index') }}" role="button" class="btn btn-primary">編集中止:登録一覧へ</a>
                </div>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="name">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profiles_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="gender">性別</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="gender" value="{{ $profiles_form->gender }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="hobby">趣味</label>
                        <div class="col-md-10">
                            <br><textarea style="display:block; box-sizing:content-box;" class="form-control" name="hobby" rows="5">{{ $profiles_form->hobby }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="introduction">自己紹介</label>
                        <div class="col-md-10">
                            <textarea style="display:block;"class="form-control" name="introduction" rows="5">{{ $profiles_form->introduction }}</textarea>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $profiles_form->id }}">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
                
                {{-- 17章追記 --}}
                <div class="row mt-5">
                    <div class="col-md-30 mx-auto">
                        <h2>編集履歴</h2>
                        <table>
                            <thead>  {{-- class="list-group" --}}
                                <tr>
                                    <th>ID</th>
                                    <th>更新時間</th>
                                    <th>更新前名</th>
                                    <th>更新前性別</th>
                                    <th>更新前趣味</th>
                                    <th>更新前自己紹介</th>
                                </tr>
                                @if ($profiles_form->profile_histories != NULL)
                                    @foreach ($profiles_form->profiles_histories as $profile_history)

                                        <tr> {{-- class="list-group" --}}
                                            <td>{{ $profile_history->id }}</td>
                                            <td>{{ $profile_history->edited_at }}</td>
                                            <td>{{ $profile_history->edited_name }}</td>
                                            <td>{{ $profile_history->edited_gender }}</td>
                                            <td>{{ $profile_history->edited_hobby }}</td>
                                            <td>{{ $profile_introduction->edited_introduction }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection