<form action="{{ route('form.show.4') }}" method="POST">
    @csrf
    <div class="col-12">
        <label for="form_q1">咳はありますか？</label>
        <div class="input-group">
            <label class="input-group-text" for="form_q1"><i class="fa-solid fa-head-side-cough"></i></label>
            <select name="q1" id="form_q1" class="form-select" required>
                <option value="1">はい</option>
                <option value="0" selected>いいえ</option>
            </select>
        </div>
    </div>
    <div class="col-12">
        <label for="form_q2">息苦しさはありますか？</label>
        <div class="input-group">
            <label class="input-group-text" for="form_q2"><i class="fa-solid fa-head-side-mask"></i></label>
            <select name="q2" id="form_q2" class="form-select" required>
                <option value="1">はい</option>
                <option value="0" selected>いいえ</option>
            </select>
        </div>
    </div>
    <div class="col-12">
        <label for="form_q3">だるさはありますか？</label>
        <div class="input-group">
            <label class="input-group-text" for="form_q3"><i class="fa-solid fa-face-tired"></i></label>
            <select name="q3" id="form_q3" class="form-select" required>
                <option value="1">はい</option>
                <option value="0" selected>いいえ</option>
            </select>
        </div>
    </div>
    <div class="col-12">
        <label for="form_q4">食欲の減退はありますか？</label>
        <div class="input-group">
            <label class="input-group-text" for="form_q4"><i class="fa-solid fa-face-frown"></i></label>
            <select name="q4" id="form_q4" class="form-select" required>
                <option value="1">はい</option>
                <option value="0" selected>いいえ</option>
            </select>
        </div>
    </div>
    <div class="col-12">
        <label for="form_q5">通院していますか？</label>
        <div class="input-group">
            <label class="input-group-text" for="form_q5"><i class="fa-solid fa-hospital"></i></label>
            <select name="q5" id="form_q5" class="form-select" required>
                <option value="1">はい</option>
                <option value="0" selected>いいえ</option>
            </select>
        </div>
    </div>
    <div class="mt-3">
        @include('form.components.footer')
    </div>
</form>