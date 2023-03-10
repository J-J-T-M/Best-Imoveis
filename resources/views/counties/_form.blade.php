@csrf
<div class="row">
    <div class="input-field">
        <label for="name" class="card-title">Nome</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
            autofocus value="{{ old('name', $county->name ?? '') }}" />
        @error('name')
            <div class="red-text text-accent-3">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
