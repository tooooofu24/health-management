<form action="{{ route('form.show.3') }}" method="POST">
    @csrf
    <div class="col-12">
        <label for="form_night_temp">昨晩の体温</label>
        <div class="input-group">
            <label class="input-group-text" for="form_night_temp"><i class="fa-solid fa-moon"></i></label>
            <input type="number" class="form-control" name="night_temp" id="form_night_temp" step="0.1" max="40" min="34" required value="{{ session('form.night_temp') }}" />
        </div>
    </div>
    <div class="col-12">
        <label for="form_morning_temp">起床時の体温</label>
        <div class="input-group">
            <label class="input-group-text" for="form_morning_temp"><i class="fa-solid fa-sun"></i></label>
            <input type="number" class="form-control" name="morning_temp" id="form_morning_temp" step="0.1" max="40" min="34" required value="{{ session('form.morning_temp') }}" />
        </div>
    </div>
    <div class="col-12">
        <label for="form_bed_time">就寝時間</label>
        <div class="input-group">
            <label class="input-group-text" for="form_bed_time"><i class="fa-regular fa-moon"></i></label>
            <input type="time" class="form-control" name="bed_time" id="form_bed_time" required value="{{ session('form.bed_time') }}" />
        </div>
    </div>
    <div class="col-12">
        <label for="form_wakeup_time">起床時間</label>
        <div class="input-group">
            <label class="input-group-text" for="form_wakeup_time"><i class="fa-regular fa-sun"></i></label>
            <input type="time" class="form-control" name="wakeup_time" id="form_wakeup_time" required value="{{ session('form.wakeup_time') }}" />
        </div>
    </div>
    <div class="mt-3">
        @include('form.components.footer')
    </div>
</form>