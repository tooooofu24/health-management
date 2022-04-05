<form action="{{ route('form.show.2') }}" method="POST">
    @csrf
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
    <div class="mt-3">
        @include('form.components.footer')
    </div>
</form>