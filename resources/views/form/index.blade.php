@extends('layouts.app')

@section('title', '健康チェック管理 - フォーム回答画面')
@section('nav_title', '健康フォーム回答')
@section('content')
<div class="container-lg py-2">
    <div class="card">
        <div class="card-header">
            健康チェックフォーム
        </div>
        <div class="card-body">
            <div class="mx-auto" style="max-width: 50rem;">
                @if(Route::is('form.index'))
                <form action="{{ route('form.submit.1') }}" method="POST">
                    <div class="col-12">
                        <label for="form_date">回答する日付</label>
                        <div class="input-group">
                            <label class="input-group-text" for="form_date"><i class="fa-solid fa-calendar"></i></label>
                            <input type="date" class="form-control" name="date" id="form_date" value="2022-04-05" required />
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="form_grade_id">クラス</label>
                        <div class="input-group">
                            <label class="input-group-text" for="form_grade_id"><i class="fa-solid fa-school"></i></label>
                            <select name="grade_id" id="form_grade_id" class="form-select" required>
                                <option value="1" selected class="d-none">
                                    選択してください
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="form_student_id">氏名</label>
                        <div class="input-group">
                            <label class="input-group-text" for="form_student_id"><i class="fa-solid fa-user"></i></label>
                            <select name="student_id" id="form_student_id" class="form-select" required>
                                <option value="1" selected class="d-none">
                                    選択してください
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-3 align-items-center">
                        <div style="width: 3.5rem;">
                        </div>
                        <div class="text-muted">1 / 4</div>
                        <div>
                            <button type="submit" class="btn btn-sm btn-outline-secondary">
                                次へ<i class="fa-solid fa-angle-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection