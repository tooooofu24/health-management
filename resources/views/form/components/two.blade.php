<form action="{{ route('form.show.3') }}" method="POST">
    @csrf
    <div class="col-12">
        <label for="form_bed_time">昨晩の体温</label>
        <div class="input-group">
            <label class="input-group-text" for="form_bed_time"><i class="fa-solid fa-moon"></i></label>
            <input type="number" class="form-control" name="bed_time" id="form_bed_time" max="40" min="34" required />
        </div>
    </div>
    <div class="col-12">
        <label for="form_wakeup_time">起床時の体温</label>
        <div class="input-group">
            <label class="input-group-text" for="form_wakeup_time"><i class="fa-solid fa-sun"></i></label>
            <input type="number" class="form-control" name="wakeup_time" id="form_wakeup_time" max="40" min="34" required />
        </div>
    </div>
    <div class="col-12">
        <label for="form_night_temp">就寝時間</label>
        <div class="input-group">
            <label class="input-group-text" for="form_night_temp"><i class="fa-regular fa-moon"></i></label>
            <input type="time" class="form-control" name="night_temp" id="form_night_temp" required />
        </div>
    </div>
    <div class="col-12">
        <label for="form_night_temp">起床時間</label>
        <div class="input-group">
            <label class="input-group-text" for="form_night_temp"><i class="fa-regular fa-sun"></i></label>
            <input type="time" class="form-control" name="morning_temp" id="form_night_temp" required />
        </div>
    </div>
    <div class="mt-3">
        @include('form.components.footer')
    </div>
</form>