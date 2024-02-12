{{-- user info and avatar --}}
<div class="avatar av-l chatify-d-flex">
  {{-- <img src="assets/images/logos/icons8-law-96.png" alt=""> --}}
</div>
<p class="info-name">{{ config('chatify.name') }}</p>
<div class="messenger-infoView-btns">
  <br>
  <small class="user-role"></small>
  <br>
  <a href="#" class="danger delete-conversation">Hapus Chat Ini</a>
</div>
{{-- shared photos --}}
<div class="messenger-infoView-shared">
  <p class="messenger-title"><span>Media Yang Dibagikan</span></p>
  <div class="shared-photos-list"></div>
</div>
