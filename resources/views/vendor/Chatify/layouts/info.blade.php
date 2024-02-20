{{-- user info and avatar --}}
<div class="avatar av-l chatify-d-flex" style="background-image:url('/assets/images/logos/icons8-law-96.png');">
  {{-- <img src="assets/images/logos/icons8-law-96.png" alt=""> --}}
</div>
<p class="info-name">{{ config('chatify.name') }}</p>
<div class="messenger-infoView-btns">
  <br>
  <center>
    <small class="user-role"></small>
  </center>
  <br>
  <a href="#" class="danger delete-conversation">Hapus Chat Ini</a>
</div>
{{-- shared photos --}}
<div class="messenger-infoView-shared">
  <p class="messenger-title"><span>Foto Yang Dibagikan</span></p>
  <div class="shared-photos-list"></div>
</div>
