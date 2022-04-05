<form action="{{ route('form.show.2') }}" method="POST">
    @csrf
    <form-one-component :classes='@json($classes)' :session='@json(session()->all())'></form-one-component>
    <div class="mt-3">
        @include('form.components.footer')
    </div>
</form>