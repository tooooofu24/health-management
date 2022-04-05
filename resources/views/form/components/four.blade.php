<form action="{{ route('form.store') }}" method="POST">
    @csrf
    <div class="col-12">
        <label for="form_comment">その他症状など</label>
        <div class="input-group">
            <label class="input-group-text" for="form_comment"><i class="fa-solid fa-circle-info"></i></label>
            <textarea name="comment" id="form_comment" rows="4" class="form-control" value="{{ session('form.comment') }}" maxlength="1000"></textarea>
        </div>
    </div>
    <div class="mt-3">
        @include('form.components.footer')
    </div>
</form>