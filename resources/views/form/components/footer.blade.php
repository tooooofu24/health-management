<div class="d-flex justify-content-between align-items-center">
    @if(Route::is('form.show.1'))
    <div style="width: 3.5rem;"></div>
    @else
    <button type="button" onclick="history.back()" class="btn btn-sm btn-outline-secondary">
        <i class="fa-solid fa-angle-left me-2"></i>戻る
    </button>
    @endif
    <div class="text-muted">{{ substr(request()->url(), -1) }} / 4</div>
    <div>
        @if(Route::is('form.show.4'))
        <button type="submit" class="btn btn-sm btn-primary">
            <i class="fa-solid fa-paper-plane me-2"></i>送信
        </button>
        @else
        <button type="submit" class="btn btn-sm btn-outline-secondary">
            次へ<i class="fa-solid fa-angle-right ms-2"></i>
        </button>
        @endif
    </div>
</div>