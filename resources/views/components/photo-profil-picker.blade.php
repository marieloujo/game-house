<div {{ $attributes->merge(['class' => "profile-pic-wrapper"]) }}>
    <div class="pic-holder my-auto">
      <!-- uploaded pic shown here -->
      <img id="profilePic" class="pic" src="{{ asset('assets/images/avatar-simple.png') }}">

      <Input class="uploadProfileInput" type="file" name="photo" id="photo" accept="image/*" style="opacity: 0;" />
      <label for="photo" class="upload-file-block">
        <div class="text-center">
          <div class="mb-2">
            <i class="fa fa-camera fa-2x"></i>
          </div>
          <div class="text-uppercase">
            Choisir une photo
          </div>
        </div>
      </label>
    </div>
</div>
